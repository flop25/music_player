<?php
$lang['lien_titre'] = 'Musik hören';
$lang['lien_expl'] = 'Pop-up mit AudioAbspieler um Musik zu hören';

$lang['mp_evidence_title'] = 'Information';
$lang['mp_evidence_txt'] = 'Die Galerie beinhaltet einen AudioAbspieler. Möchten Sie ihn anzeigen ?';
$lang['mp_evidence_2'] = 'Memorisieren';

$lang['mp_montre'] = 'Abspielliste anzeigen';
$lang['mp_cache'] = 'Abspielliste verstecken';

$lang['mp_send'] = 'Bestätigen';
$lang['mp_need_help'] = "Hilfe nötig ?";

$lang['mp_help_q1'] = "Wo gehören meine mp3-Dateien hin ?";
$lang['mp_help_q2'] = "Ich habe mp3-Dateien hinzugefügt, diese erscheinen nirgendswo in der Abspielliste !";
$lang['mp_help_q3'] = "Was beinhaltet die Funktion 'Miniatur der Abspielliste anzeigen' ?";
$lang['mp_help_q4'] = "Wie funktionniert dieses Plugin ?";
$lang['mp_help_q5'] = "Wie kann ich mp3-Dateien einer anderen Webseite oder solche in anderen Verzeichnissen hinzufügen ?";
$lang['mp_help_q6'] = "Kann man Podcast oder eine ausgelagerte Abspielliste hinzufügen ?";
$lang['mp_help_q7'] = "Ich finde keine Antwort hier / Ich hab ein Riesenproblem";
$lang['mp_help_q8'] = "Neu : Sie können Abspielrechte vergeben";

$lang['mp_help_div1'] = "Die mp3-Dateien müssen folgendermassen im Verzeichnis 'music' des Plugins abgespeichert werden : \"[Verzeichnis pwg]/plugins/music_Abspieler/music/[Neue Abspielliste]/\". Es wird geraten Abspiellisten nach Sänger (music/Scorpions/windofchange.pm3) zu gestalten, oder aber den Namen des Sängers im Dateinamen der mp3 einzubinden (music/rock-slow/scorpions-windofchange.mp3)";
$lang['mp_help_div2'] = "Sie haben die Abspielliste nicht neu eingelesen : Klicken Sie dazu auf das 2. Ikon ('Musik verwalten') neben der betroffenen Abspielliste, schlussendlich beenden Sie die Arbeit mit 'Änderungen bestätigen'";
$lang['mp_help_div3'] = "Es handelt sich um ein Miniaturbild welches Sie mittels dem 3. Ikon ('Miniaturbild verwalten'), der betroffenen Abspielliste, hochladen können";
$lang['mp_help_div4'] = "Das Plugin erlaubt es Abspiellisten zu gestalten und verwalten, persönliche Einstellungen der Anzeige der Popup und des AudioAbspielers vorzunehmen.<br />
Um eine neue Abspielliste anzulegen :
<br />- Versichern Sie sich erst, dass Sie wirklich ein Verzeichnis /music im Verzeichnis 'music_player' haben. WICHTIG !! (Benutzer von Free sind von folgender Aussage nicht betroffen) Das Verzeichnis /music MUSS schreib- und Leserechte haben, also chmod 777 oder rwxrwxrwx.
<br />- Anschliessend erstellen Sie ein neues Unterverzeichnis im Verzeichnis /music in welchem sich die mp3-Dateien aber vorallem die xml-Abspielliste befindet. Achtung : Der Name des Verzeichnis ist ganz wichtig ALSO KEINE SONDERZEICHEN benützen
<br />- Klicken Sie nun auf \'Mit dem Verzeichnis /music synchronisieren' : Die Verzeichnisse unter /music werden aufgelistet, sowie die darin enthaltenen mp3-Dateien. Die xml-Abspielliste wird als Namen denjenigen des Verzeichnisses erhalten.
<br />- Feldinhalt : Enthält eine kleine Beschreibung der als Link zum abspielen der Abspielliste benötigt wird. Falls Sie dieses Feld leer lassen so wird die betroffene Abspielliste nicht in der Datenbank abgespeichert
<br />- Bestätigen der Eingabe : anschliessend ist es möglich ein Miniaturbild hochzuladen oder mittels URL zu definieren, Sie können es aber auch via FTP einspielen ( [Verzeichnis pwg]/plugins/music_Abspieler/music/Abspielliste_xyz/[Abspielliste_xyz].jpg'
<br /><br />
Um eine Abspielliste zu verwalten :
<br />- Klicken Sie auf das 2. Ikon der betroffenen Abspielliste
<br />- Handeln Sie alle verschiedenen Schritte ab, vergessen Sie nicht die letzte !";
$lang['mp_help_div5'] = "Gehen Sie zu einer Abspielliste Ihrer Wahl und beim 2. Schritt fügen Sie Ihre mp3-Datei ein. Achtung : Auch wenn sich die mp3 auf demselben Server wie das Plugin befindet, so muss die URL komplett angegeben werden (http://...)";
$lang['mp_help_div6'] = "Ja : Seit der Version 1.3 wurde das Podcast und die Abspielliste für ausgelagerte Dateien einprogrammiert. Achtung : Die Abspielliste muss im Format Atom, Xspf (durch das Plugin benützt), oder RSS sein. (Die Podcast sind alle RSS)";
$lang['mp_help_div7'] = 'Der Support (französisch oder englisch) des Plugin erfolgt hier : <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781" target="_blank"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781</a>';
$lang['mp_help_div8'] = "Neu : Sie haben die Möglichkeit das Abspielen mit AudioAbspieler über die Rechtevergabe zu steuern. Dazu genügt es die Gruppe 'music_group' zu gründen. Nur die Benutzer die dieser Gruppe angehören dürfen somit den AudioAbspieler benützen. Gibt es die Gruppe nicht (standardmässig), so steht der AudioAbspieler allen zur Verfügung";

$lang['mp_admin_leg'] = 'Verwaltung der Abspiellisten';
$lang['mp_admin_tt_synchro'] = 'Mit dem Verzeichnis /music synchronisieren';
$lang['mp_admin_folder'] = 'Verzeichnis';
$lang['mp_admin_nm_pl'] = 'Titel der Abspielliste';
$lang['mp_admin_nm_edit'] = 'Titel bearbeiten';
$lang['mp_admin_pl'] = 'Musik verwalten';
$lang['mp_admin_min'] = 'Miniaturbild verwalten';

$lang['mp_admin_leg1'] = 'Podcast (RSS) oder ausgelagerte Abspielliste';

$lang['mp_admin_leg2'] = 'Optionen des Plugin';
$lang['mp_admin_2_opt1'] = 'Das Plugin hervorheben mit einem zusätzlichen Block im Menü ';
$lang['mp_admin_2_opt2'] = '"header" anzeigen';
$lang['mp_admin_2_opt3'] = '"footer" anzeigen, das copyright';
$lang['mp_admin_2_opt4'] = 'Das Popup';
$lang['mp_admin_2_opt4_1'] = 'Höhe';
$lang['mp_admin_2_opt4_2'] = 'Breite';

$lang['mp_admin_leg3'] = 'Optionen des AudioAbspielers';
$lang['mp_admin_3_opt1_1'] = 'Höhe - Total';
$lang['mp_admin_3_opt1_2'] = 'Breite - Total';
$lang['mp_admin_3_opt2_1'] = 'Höhe der Abspielliste';
$lang['mp_admin_3_opt2_2'] = "[Info : Falls das Miniaturbild aktiv ist, wäre es ideal, wenn die Höhe der Abspielliste plus die 20 px der 'barre' die 'Höhe - Total' bilden.]";
$lang['mp_admin_3_opt3_1'] = 'Miniaturbild der Abspielliste anzeigen';
$lang['mp_admin_3_opt3_2'] = 'Breite des Miniaturbildes';
$lang['mp_admin_3_opt3_3'] = "[Info : Falls das Miniaturbild aktiv ist und die Breite kleiner ist als die 'Breite - Total' so wird das Bild links angezeigt (standardmässig).] ";
$lang['mp_admin_3_opt4'] = 'Zufallsmässig abspielen';
$lang['mp_admin_3_opt5'] = 'Abspielliste nach dem letzten Stück wiederholen';
$lang['mp_admin_3_opt6'] = 'Diese Abspielliste beim Start abspielen';
$lang['mp_admin_3_opt7'] = "Automatisches 'scrollen' der Abspielliste (kein Rollbalken)";
$lang['mp_admin_3_opt9'] = "Standardmässiges Layout : ";
$lang['mp_admin_3_opt9b'] = "Nicht ändern";
$lang['mp_admin_3_opt10'] = "Automatische Verwaltung der Layouts : Das benutzte Layout ist dasjenige des jeweiligen Benutzers. Wenn deaktiviert oder das Layout des Benutzers noch nicht für den Audioplayer programmiert ist, so wird automatisch das vorherige ausgewählt";

$lang['mp_adm_envoi_1'] = 'Beschreibung';
$lang['mp_adm_envoi_2'] = 'beinhaltet';

$lang['mp_adm_return'] = 'Zurück zur Abspielliste';
$lang['mp_adm_return_2'] = 'Zurück zur Abspielliste';

$lang['mp_adm_edit_1'] = 'Beschreibung';
$lang['mp_adm_edit_2'] = 'Abspielliste';
$lang['mp_adm_edit_3'] = 'Abspielliste synchronisieren';

$lang['mp_ou'] = 'OU';
$lang['mp_adm_info_img'] = "(das neue Bild überschreibt das alte Bild)";

$lang['mp_adm_suppr_1'] = 'Was möchten Sie unternehmen ?';
$lang['mp_adm_suppr_2'] = 'Nur löschen der Abspielliste als Eintrag in der Datenbank (erscheint also erneut nach der nächsten Synchronisation) ';
$lang['mp_adm_suppr_3'] = 'Löschen der Abspielliste als Eintrag in der Datenbank UND das dazugehörige gesamte Verzeichnis (mp3-dateien und xml/oder php gelöscht)';


$lang['mp_msg_suppr1'] = 'Verzechnis erfolgreich gelöscht';
$lang['mp_msg_suppr2'] = 'Fehler : Verzeichnis nicht gelöscht';
$lang['mp_msg_suppr3'] = 'Datenbank erfolgreich gelöscht';
$lang['mp_msg_edit1'] = 'Bearbeitung war erfolgreich';
$lang['mp_msg_edit2'] = "Abspielliste auf neustem Stand !";
$lang['mp_msg_edit3'] = "Rangordnug abgeändert !";
$lang['mp_msg_edit4'] = "Löschen in der Datenbank von :";
$lang['mp_msg_edit5'] = "Löschen von :";

$lang['mp_adm_etape_1'] = "1. Schritt (optional)";
$lang['mp_adm_et1_txt'] = "Haben Sie mp3-Dateien im Verzeichnis hinzugefügt oder gelöscht ? Falls ja, so müssen Sie die Datenbank synchronisieren :";
$lang['mp_adm_etape_2'] = "2. Schritt (optional)";
$lang['mp_adm_et2_txt'] = "Eine oder mehrere mp3-Dateien hinzufügen. ";
$lang['mp_adm_et2_nbr'] = "Anzahl hinzugefügte mp3-Dateien : ";
$lang['mp_adm_et2_rg'] = "Rangordnung : ";
$lang['mp_adm_et2_rg2'] = "(falls leer, an unterster Stelle der Abspielliste)";
$lang['mp_adm_etape_3'] = "3. Schritt !";
$lang['mp_adm_thead1'] = "NAME";
$lang['mp_adm_thead2'] = "URL";
$lang['mp_adm_thead3'] = "Nach oben";
$lang['mp_adm_thead4'] = "Nach unten";
$lang['mp_adm_thead5'] = "URL/Name ändern";
$lang['mp_adm_thead6'] = "Löschen";
$lang['mp_adm_etape_4'] = "4. Schritt !";
$lang['mp_adm_et4_txt'] = "xml-Abspielliste erzeugen";
$lang['mp_adm_et4_ok'] = "Änderungen bestätigen";

$lang['mp_adm_ed_sup_ok'] = "Möchten Sie wirklich löschen ?";
$lang['mp_adm_ed_sup_info'] = "Falls es sich um eine Datei im Verzeichnis '/music' handelt, so wird diese Datei physikalisch gelöscht : Ansonsten wird nur der Eintrag in der Datenbank gelöscht.";


$lang['mp_msg_err_aj1'] = "Fehler : URL-Feld leer";
$lang['mp_msg_err_aj2'] = "Fehler : Textfeld leer";


$lang['mp_msg_admin1'] = 'Nichts hinzugefügt';
$lang['mp_msg_admin_3_1'] = 'Datei';
$lang['mp_msg_admin_3_2'] = 'eingefügt';
$lang['mp_msg_admin_4'] = 'Hinzufügen von';
$lang['mp_msg_admin_5'] = 'Einstellungen des Abspielers gespeichert';
$lang['mp_msg_admin_6'] = 'Einstellungen des Plugin gespeichert';

$lang['mp_uploadimg_ok'] = 'Upload erfolgreich';
$lang['mp_linkimg_ok'] = 'Bild gespeichert';
$lang['mp_info_min']="[ Das Miniaturbild ist otional ]";

$lang['mp_text_no_autorisation']="Sie haben nicht genügend Rechte um Musik zu hören ! Nehmen Sie bitte mit dem Administrator Kontakt auf um zu erfahren weshalb und dies gegebenenfalls anzupassen";


?>