<?php
class autenticacao extends controller {
	
	public function init(){
	}

	public function inicial(){
		
		$dados = array();
		$dados['_base'] = $this->base();
		$dados['csrf_field'] = security::csrf_field();
		
		$this->view('entrar', $dados);
	}
	
	protected function login(){
		
		if (!security::verify_csrf($this->post('_csrf_token'))) {
			$this->msg('Sessão expirada. Tente novamente!');
			$this->irpara(DOMINIO.'autenticacao');
			exit;
		}

		// SEGURANÇA: Rate limiting — bloqueia após 5 tentativas falhas por 15 minutos
		$ip = $_SERVER['REMOTE_ADDR'];
		$chave_bloqueio = 'login_tentativas_'.$ip;
		$chave_tempo    = 'login_bloqueio_ate_'.$ip;

		if (!isset($_SESSION[$chave_tempo])) $_SESSION[$chave_tempo] = 0;
		if (!isset($_SESSION[$chave_bloqueio])) $_SESSION[$chave_bloqueio] = 0;

		if (time() < $_SESSION[$chave_tempo]) {
			$restante = ceil(($_SESSION[$chave_tempo] - time()) / 60);
			$this->msg('Muitas tentativas de login. Aguarde '.$restante.' minuto(s).');
			$this->volta(1);
			exit;
		}

		$usuario = $this->post('usuario');
		$senha   = $this->post('senha');
		
		$this->valida($usuario, 'Digite o usuário!');
		$this->valida($senha, 'Digite a senha!');
		
		$username = md5($usuario);
		
		// SEGURANÇA: Prepared statement — previne SQL Injection no login
		$db   = new mysql();
		$exec = $db->executar_seguro(
			"SELECT codigo, usuario, senha FROM adm_usuario WHERE usuario=?",
			"s",
			[$username]
		);
		
		if($exec->num_rows != 1){
			$_SESSION[$chave_bloqueio]++;
			if ($_SESSION[$chave_bloqueio] >= 5) {
				$_SESSION[$chave_tempo] = time() + (15 * 60);
				$_SESSION[$chave_bloqueio] = 0;
			}
			$this->msg('Usuário ou senha incorretos!');
			$this->volta(1);
			exit;
		}
		
		$data = $exec->fetch_object();
		
		if (!security::verify_password($senha, $data->senha)) {
			$_SESSION[$chave_bloqueio]++;
			if ($_SESSION[$chave_bloqueio] >= 5) {
				$_SESSION[$chave_tempo] = time() + (15 * 60);
				$_SESSION[$chave_bloqueio] = 0;
			}
			$this->msg('Usuário ou senha incorretos!');
			$this->volta(1);
			exit;
		}

		if (security::needs_rehash($data->senha)) {
			$nova_senha = security::hash_password($senha);
			$db = new mysql();
			$db->alterar("adm_usuario", array("senha" => $nova_senha), "codigo='" . $data->codigo . "'");
		}

		// SEGURANÇA: Regenera ID de sessão após login bem-sucedido (previne session fixation)
		session_regenerate_id(true);

		// Zera tentativas após login bem-sucedido
		$_SESSION[$chave_bloqueio] = 0;
		$_SESSION[$chave_tempo]    = 0;

		// SEGURANÇA: adm_acesso agora armazena hash baseado em TOKEN1 + IP + User-Agent
		$_SESSION['adm_acesso']       = md5(TOKEN1.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
		$_SESSION['adm_sessao']       = $this->gera_codigo();
		$_SESSION['adm_cod_usuario']  = $data->codigo;
		$_SESSION['adm_usuario']      = $data->usuario;
		$_SESSION['csrf_token']       = bin2hex(random_bytes(32));
		
		$this->irpara( DOMINIO );
	}
	
	protected function logout(){
		// SEGURANÇA: Regenera ID antes de destruir (previne reutilização de sessão)
		session_regenerate_id(true);
		session_destroy();
		$this->irpara( DOMINIO );
	}
		
}