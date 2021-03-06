; Script generated by the Inno Setup Script Wizard.
; SEE THE DOCUMENTATION FOR DETAILS ON CREATING INNO SETUP SCRIPT FILES!

#define MyAppName "My Program"
#define MyAppVersion "1.02"
#define MyAppPublisher "Dev-Group-5"
#define MyAppURL "http://jaibreyonlourens.nl/Project-Fifa-PHP/index.php"
#define MyAppExeName "FifaGokApp.exe"

[Setup]
; NOTE: The value of AppId uniquely identifies this application. Do not use the same AppId value in installers for other applications.
; (To generate a new GUID, click Tools | Generate GUID inside the IDE.)
AppId={{1F9DA0E4-018F-4B90-8766-3C953ED34AAD}
AppName={#MyAppName}
AppVersion={#MyAppVersion}
;AppVerName={#MyAppName} {#MyAppVersion}
AppPublisher={#MyAppPublisher}
AppPublisherURL={#MyAppURL}
AppSupportURL={#MyAppURL}
AppUpdatesURL={#MyAppURL}
DefaultDirName={autopf}\{#MyAppName}
DisableProgramGroupPage=yes
; Remove the following line to run in administrative install mode (install for all users.)
PrivilegesRequired=lowest
OutputDir=C:\Users\jaibr\Desktop\Application\App
OutputBaseFilename=Fifa
SetupIconFile=C:\xampp\htdocs\Project-Fifa-PHP\phpwebsite\img\soccer-ball.ico
Compression=lzma
SolidCompression=yes
WizardStyle=modern

[Languages]
Name: "english"; MessagesFile: "compiler:Default.isl"
Name: "dutch"; MessagesFile: "compiler:Languages\Dutch.isl"

[Tasks]
Name: "desktopicon"; Description: "{cm:CreateDesktopIcon}"; GroupDescription: "{cm:AdditionalIcons}"; Flags: unchecked

[Files]
Source: "C:\Users\jaibr\Desktop\Application\Released\FifaGokApp.exe"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\jaibr\Desktop\Application\Released\FifaGokApp.exe.config"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\jaibr\Desktop\Application\Released\FifaGokApp.pdb"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\jaibr\Desktop\Application\Released\InfoGokker.dat"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\jaibr\Desktop\Application\Released\Newtonsoft.Json.dll"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\Users\jaibr\Desktop\Application\Released\Newtonsoft.Json.xml"; DestDir: "{app}"; Flags: ignoreversion
; NOTE: Don't use "Flags: ignoreversion" on any shared system files

[Icons]
Name: "{autoprograms}\{#MyAppName}"; Filename: "{app}\{#MyAppExeName}"
Name: "{autodesktop}\{#MyAppName}"; Filename: "{app}\{#MyAppExeName}"; Tasks: desktopicon

[Run]
Filename: "{app}\{#MyAppExeName}"; Description: "{cm:LaunchProgram,{#StringChange(MyAppName, '&', '&&')}}"; Flags: nowait postinstall skipifsilent

