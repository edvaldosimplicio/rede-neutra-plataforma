# Script de Compilação Nativa do APK Meganet TV Player
$ErrorActionPreference = "Stop"

$JAVA_HOME = "C:\Program Files\Android\Android Studio\jbr"
$ANDROID_SDK = "C:\Users\edim_\AppData\Local\Android\Sdk"
$BUILD_TOOLS = "$ANDROID_SDK\build-tools\34.0.0"
$PLATFORM_JAR = "$ANDROID_SDK\platforms\android-34\android.jar"

$JAVAC = "$JAVA_HOME\bin\javac.exe"
$KEYTOOL = "$JAVA_HOME\bin\keytool.exe"
$AAPT = "$BUILD_TOOLS\aapt.exe"
$D8 = "$BUILD_TOOLS\d8.bat"
$ZIPALIGN = "$BUILD_TOOLS\zipalign.exe"
$APKSIGNER = "$BUILD_TOOLS\apksigner.bat"

$PROJECT_DIR = Join-Path $PSScriptRoot "MeganetTVBoxApp"
$SRC_DIR = Join-Path $PROJECT_DIR "app\src\main\java"
$MANIFEST = Join-Path $PROJECT_DIR "app\src\main\AndroidManifest.xml"

# Usa pasta TEMP em ASCII para evitar incompatibilidade com acentuação em D8
$BUILD_DIR = "$env:TEMP\meganet_build_temp"
if (Test-Path $BUILD_DIR) { Remove-Item -Recurse -Force $BUILD_DIR }
New-Item -ItemType Directory -Path "$BUILD_DIR\classes" | Out-Null

Write-Host "1. Compilando codigo Java (MainActivity, BootReceiver, CustomWebViewClient)..."
$javaFiles = Get-ChildItem -Path $SRC_DIR -Filter "*.java" -Recurse | Select-Object -ExpandProperty FullName
& $JAVAC -encoding UTF-8 -g:none -source 8 -target 8 -bootclasspath $PLATFORM_JAR -d "$BUILD_DIR\classes" $javaFiles

Write-Host "2. Convertendo bytecode Java para DEX com D8 (min-api 21)..."
$classFiles = Get-ChildItem "$BUILD_DIR\classes" -Filter "*.class" -Recurse | Select-Object -ExpandProperty FullName
& $D8 --min-api 21 --lib $PLATFORM_JAR --output $BUILD_DIR $classFiles

Write-Host "3. Empacotando recursos e AndroidManifest.xml com AAPT..."
& $AAPT package -f -m -J "$BUILD_DIR" -M $MANIFEST -I $PLATFORM_JAR -F "$BUILD_DIR\unsigned.apk"

Write-Host "4. Adicionando classes.dex no pacote APK..."
Push-Location $BUILD_DIR
try {
    & $AAPT add unsigned.apk classes.dex
} finally {
    Pop-Location
}

Write-Host "5. Alinhando arquivo APK (zipalign)..."
& $ZIPALIGN -f -v 4 "$BUILD_DIR\unsigned.apk" "$BUILD_DIR\aligned.apk"

Write-Host "6. Gerando chave de assinatura Debug..."
$KEYSTORE = "$BUILD_DIR\debug.keystore"
if (Test-Path $KEYSTORE) { Remove-Item $KEYSTORE }
& $KEYTOOL -genkey -v -keystore $KEYSTORE -storepass android -alias androiddebugkey -keypass android -keyalg RSA -keysize 2048 -validity 10000 -dname "CN=Android Debug,O=Android,C=US"

Write-Host "7. Assinando o APK (apksigner)..."
& $APKSIGNER sign --ks $KEYSTORE --ks-pass pass:android --key-pass pass:android --ks-key-alias androiddebugkey --out "$BUILD_DIR\meganet-tv-box-final.apk" "$BUILD_DIR\aligned.apk"

# Copia o APK final nativo para a Área de Trabalho e pasta do projeto!
$DESKTOP_DIR = [Environment]::GetFolderPath("Desktop")
$DESKTOP_APK = Join-Path $DESKTOP_DIR "meganet-tv-box.apk"
$PROJECT_APK = Join-Path $PROJECT_DIR "meganet-tv-box.apk"

Copy-Item "$BUILD_DIR\meganet-tv-box-final.apk" $DESKTOP_APK -Force
Copy-Item "$BUILD_DIR\meganet-tv-box-final.apk" $PROJECT_APK -Force

Write-Host "=========================================="
Write-Host "SUCCESS! APK Meganet TV Box NATIVO GERADO DO ZERO!"
Write-Host "=========================================="
Get-Item $DESKTOP_APK
