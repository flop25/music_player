<?php
$lang['lien_titre'] = 'Klausies Mūziku';
$lang['lien_expl'] = 'Rādīt iegultā atskaņotāja uzlecošo logu';

$lang['mp_evidence_title'] = 'Informācija';
$lang['mp_evidence_txt'] = 'Galerijai ir mūzikas atskaņotājs. Vēlaties to rādīt ?';
$lang['mp_evidence_2'] = 'Atcerēties to';

$lang['mp_montre'] = 'Rādīt atskaņošanas sarakstus';
$lang['mp_cache'] = 'Slēpt atskaņošanas sarakstus';

$lang['mp_send'] = 'Sūtīt';
$lang['mp_need_help'] = "Nepieciešama palīdzība ?";

$lang['mp_help_q1'] = "Kur izvietot  mp3 ?";
$lang['mp_help_q2'] = "Esmu pievienojis mp3 bet atskaņošanas sarakstā to nav !";
$lang['mp_help_q3'] = "Kas ir ar apsvērumu ‘Rādīt sīkbildi atskaņošanas sarakstā’ ?";
$lang['mp_help_q4'] = "Kā darbojas šis spraudnis ?";
$lang['mp_help_q5'] = "Kā pievienot attālus vai vietējos mp3 citām mapēm ?";
$lang['mp_help_q6'] = "Vai iespējams pievienot arī  ‘podkatus’ ?";
$lang['mp_help_q7'] = "Es šeit nevaru atrast atbildes/ man ir radušās problēmas";
$lang['mp_help_q8'] = "Jaunums: New : jūs varat ierobežot piekļuvi atskaņotājam ";

$lang['mp_help_div1'] = "Mp3 jāievieto spraudņa Mūzikas (Music) mapē, piemēram tā:  \"[PWG folder]/plugins/music_player/music/[new playlist]/\". Jums jāveido savi mūzikas saraksti kārtoti pēc izpildītāja (music/moby/go.pm3), vai ielikt izpildītāja vārdu taisni faila nosaukumā (music/electro/moby-go.pm3)";
$lang['mp_help_div2'] = "Jūs neesat atjauninājuši savu mūzikas sarakstu: Klikšķiniet uz otrās ikonas ('Manage music') netālu no saraksta, un visbeidzot,  pabeidziet modifikāciju ar 'Submit modifications'";
$lang['mp_help_div3'] = "Runa ir par sīkbildi, ko varat pievienot  (trešā ikona ('Manage thumbnail') netālu no saraksta";
$lang['mp_help_div4'] = "Šis spraudnis dod iespēju veidot un pārvaldīt mūzikas sarakstus, pielāgot mūzikas atskaņotāju un tā uzlecošo logu.<br />
Lai izveidotu mūzikas atskaņošanas sarakstu :
<br />- Vispirms spraudņa folderī nepieciešams izveidot mapi /music. SVARĪGI !! (tālākais neattiecas uz lietotājiem, kas lieto bezmaksas versiju) /music mapei jābūt lasīt/rakstīt tiesībām (chmod 777 vai rwxrwxrwx).
<br />- Tālāk, mapē /music jāizveido vēl viena mape, kurā būs mp3 faili un mūzikas saraksts (playlist) ar  .xml paplašinājumu. Esiet uzmanīgi: mapes nosaukums ir svarīgs : mapes nosaukumā NELIETOJIE SPECIĀLĀS RAKSTU ZĪMES
<br />- Tad klikšķiniet uz 'Synchronise with /music' (sinhronizēt ar /music): lai sinhronizētu mapes saturu /music ar mp3 failiem. Mūzikas saraksti ar  xml paplašinājumu izveidoti ar tādu pašu nosaukumu kā mapei.
<br />- formas reģistrēšana: to lieto, lai izveidotu mazu aprakstošu tekstu, ko atskaņotāja logā varētu lietot kā saiti uz attiecīgo mūzikas sarakstu. Atstājiet tukšu teksta lauku un domātais mūzikas saraksts netiks ierakstīts datu bāzē
<br />- sūtot formu un ierakstot datu bāzē: tad jūs varat pievienot miniatūru augšuplādējot vai veidojot saiti: jūs varat pat to sūtīt tieši, izmantojot ftp,  ar nosaukumu '[name of the file] .jpg'?
<br /><br />
Lai pārvaldītu atskaņojamās mūzikas sarakstu :
<br />- Klikšķina uz otrās ikonas netālu no saraksta (playlist)
<br />- Tad veic šādas darbības : Neaizmirstiet pēdējo !";
$lang['mp_help_div5'] = "Jā : Lai veiktu šo, ieejiet jūsu izvēlētajā sarakstā un, pievienojiet savu failu. Uzmanieties: Pat, ja  mp3 atrodas uz tā paša servera, kur šis spraudnis, nepieciešans uzrādīt pilnu tā adresi, sākot ar http://";
$lang['mp_help_div6'] = "Jā : Kopš v.1.3  pievienots bloks priekš podcast un arī attālinātais mūzikas saraksts. Esiet uzmanīgi:  mūzikas sarakstam jābūt Atom, Xspf (lietots kopā ar spraudni), vai RSS formātā. (podcast vienmēr ir RSS formātā)";
$lang['mp_help_div7'] = 'Atbalstu spraudņiem jūs varat iegūt šeit : <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781/a>';
$lang['mp_help_div8'] = "Jaunums : jūs varat ierobežot piekļuvi atskaņotājam. Patiešām, ja jūs izveidojat grupu 'music_group', tikai šīs grupas biedriem būs iespēja klausīties mūziku. Ja viss tas neeksistē (pēc noklusējuma), ikviens var piekļūt un izmantot atskaņotāju";


$lang['mp_admin_leg'] = 'Mūzikas saraksta pārvaldnieks';
$lang['mp_admin_tt_synchro'] = 'Sinhronizēt ar /mūzikas mapi';
$lang['mp_admin_folder'] = 'Mape';
$lang['mp_admin_nm_pl'] = 'Mūzikas saraksta nosaukums';
$lang['mp_admin_nm_edit'] = 'Rediģēt nosaukumu';
$lang['mp_admin_pl'] = 'Pārvaldīt mūziku';
$lang['mp_admin_min'] = 'Pārvaldīt sīkbildi';
$lang['mp_admin_leg1'] = 'Podcast (RSS) vai attālināts mūzikas saraksts';

$lang['mp_admin_leg2'] = 'Spraudņa opcija';
$lang['mp_admin_2_opt1'] = 'Atklāts spraudnis ar savu bloku Izvēlnē ';
$lang['mp_admin_2_opt2'] = 'Rādīt „galveni”';
$lang['mp_admin_2_opt3'] = 'Rādīt „kājeni”, autortiesības';
$lang['mp_admin_2_opt4'] = 'Uzlecošais logs';
$lang['mp_admin_2_opt4_1'] = 'augstums';
$lang['mp_admin_2_opt4_2'] = 'platums';

$lang['mp_admin_leg3'] = 'Atskaņotāja opcija';
$lang['mp_admin_3_opt1_1'] = 'kopējais augstums';
$lang['mp_admin_3_opt1_2'] = 'kopējais platums';
$lang['mp_admin_3_opt2_1'] = 'mūzikas saraksta augstums';
$lang['mp_admin_3_opt2_2'] = "[Info : Ja sīkbilde ir ieslēgta, tad mūzikas saraksta augstums + 20 px (joslas platums) ir vienāds ar kopējo augstumu.]";
$lang['mp_admin_3_opt3_1'] = 'Rādīt mūzikas saraksta sīkbildi';
$lang['mp_admin_3_opt3_2'] = 'sīkbildes platums';
$lang['mp_admin_3_opt3_3'] = "[Info : Ja sīkbilde ir ieslēgta un tās platums ir mazāks par kopējo platumu, tad sīkbilde tiks parādīta kreisajā pusē (pēc noklusēšanas).] ";
$lang['mp_admin_3_opt4'] = 'Lasīt mūziku pēc nejaušibas principa';
$lang['mp_admin_3_opt5'] = 'Atkārtot mūzikas sarakstu, kad sasniegtas beigas';
$lang['mp_admin_3_opt6'] = 'Lasīt šo mūzikas sarakstu sākumā';
$lang['mp_admin_3_opt7'] = "Startēt automātiski no mūzikas saraksta (nav sānu joslas)";
$lang['mp_admin_3_opt9'] = "Stils piemērots pēc noklusēšanas : ";
$lang['mp_admin_3_opt9b'] = "neizmainiet";
$lang['mp_admin_3_opt10'] = "Aktivēt stilu automātisko pārvaldību: atskaņotājam piemērotais stils būs tāds, kā vienam no lietotājiem. Ja šī opcija ir atslēgta vai lietotājam nav atskaņotājam piemērojamā stila, tad tiek pielietots stils pēc noklusēšanas, precedents";



$lang['mp_adm_envoi_1'] = 'Apraksts';
$lang['mp_adm_envoi_2'] = 'satur';

$lang['mp_adm_return'] = 'Atpakaļ pie mūzikas sarakstiem';
$lang['mp_adm_return_2'] = 'Atpakaļ pie saraksta';

$lang['mp_adm_edit_1'] = 'Aprakstošais teksts';
$lang['mp_adm_edit_2'] = 'Mūzikas saraksts (Playlist)';
$lang['mp_adm_edit_3'] = 'Sinhronizēt mūzikas sarakstu';

$lang['mp_ou'] = 'VAI';
$lang['mp_adm_info_img'] = "(pievieno jaunu, attēlu izdzēš veco)";

$lang['mp_adm_suppr_1'] = 'Ko vēlaties iesākt ?';
$lang['mp_adm_suppr_2'] = 'Tikai izdzēst mūzikas sarakstu no datu bāzes (Sinhronizējot, to var radīt no jauna) ';
$lang['mp_adm_suppr_3'] = ' izdzēst mūzikas sarakstu no datu bāzes UN arī mapi (mp3 ,xml faili tiks izdzēsti)';


$lang['mp_msg_suppr1'] = 'Mape izdzēsta veiksmīgi';
$lang['mp_msg_suppr2'] = 'Kļūda: mape nav izdzēsta';
$lang['mp_msg_suppr3'] = 'Datu bāze izdzēsta sekmīgi';
$lang['mp_msg_edit1'] = 'Rediģēšana OK';
$lang['mp_msg_edit2'] = "Mūzikas saraksts atjaunināts !";
$lang['mp_msg_edit3'] = "rinda modificēta !";
$lang['mp_msg_edit4'] = "Izņemt no datu bāzes :";
$lang['mp_msg_edit5'] = "Izņemt no :";

$lang['mp_adm_etape_1'] = "Pirmais solis (neobligāts)";
$lang['mp_adm_et1_txt'] = "Jūs esat pievienojis vai izdzēsis no mapes dažus mp3 failus ? Ja jā, tad jāveic sinhronizācija ar datu bāzi:";
$lang['mp_adm_etape_2'] = "Otrais solis (neobligāts)";
$lang['mp_adm_et2_txt'] = "Pievieno attālinātu mp3. ";
$lang['mp_adm_et2_nbr'] = "Pievienoto failu skaits : ";
$lang['mp_adm_et2_rg'] = "Iestarpināt rindu : ";
$lang['mp_adm_et2_rg2'] = "(ja tukšs, mūzikas saraksta beigas)";
$lang['mp_adm_etape_3'] = "Trešais solis !";
$lang['mp_adm_thead1'] = "NOSAUKUMS";
$lang['mp_adm_thead2'] = "URL";
$lang['mp_adm_thead3'] = "AUGŠUP";
$lang['mp_adm_thead4'] = "LEJUP";
$lang['mp_adm_thead5'] = "Mainīt url/nosaukumu";
$lang['mp_adm_thead6'] = "Dzēst";
$lang['mp_adm_etape_4'] = "Ceturtais solis !";
$lang['mp_adm_et4_txt'] = "Izveido mūzikas saraksta playlist .xml";
$lang['mp_adm_et4_ok'] = "Apstiprina izmaiņas";

$lang['mp_adm_ed_sup_ok'] = "Vai esat pārliecināts ?";
$lang['mp_adm_ed_sup_info'] = "Ja tas ir mūzikas mapes ‘/music' fails, tas tiks izdzēsta : savādāk, tiks izdzēsta tikai atsauce no datu bāzes satura.";


$lang['mp_msg_err_aj1'] = "Kļūda : url lauks tukšs";
$lang['mp_msg_err_aj2'] = "Kļūda : teksta lauks tukšs";


$lang['mp_msg_admin1'] = 'Nav pievienots';
$lang['mp_msg_admin_3_1'] = 'Fails';
$lang['mp_msg_admin_3_2'] = 'Izveidots';
$lang['mp_msg_admin_4'] = 'Pievienots no';
$lang['mp_msg_admin_5'] = 'Atskaņotāja konfigurācija saglabāta';
$lang['mp_msg_admin_6'] = 'Spraudņa konfigurācija saglabāta';

$lang['mp_uploadimg_ok'] = 'Attēls saglabāts';
$lang['mp_linkimg_ok'] = 'Attēls saglabāts';
$lang['mp_info_min']="[ Sīkbilde ir izvēles(neobligāta). ]";

$lang['mp_text_no_autorisation']="Jums nav atļauts klausīties mūziku ! Lūdzu sazinieties ar webmasteru, lai uzzinātu kāpēc un mēģinātu iegūt atļauju";

?>