<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2012 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['mp_msg_suppr3'] = 'Database slettet';
$lang['mp_need_help'] = 'Har du brug for hjælp?';
$lang['mp_ou'] = 'ELLER';
$lang['mp_send'] = 'Send';
$lang['mp_text_no_autorisation'] = 'Du har ikke adgang til at lytte til musik! Kontakt webmaster for at få oplyst hvorfor, og måske få tilladelse';
$lang['mp_uploadimg_ok'] = 'Billede gemt';
$lang['mp_help_q7'] = 'Jeg kan ikke finde svaret her / Jeg har nogle problemer';
$lang['mp_help_q8'] = 'Nyt: du kan begrænse adgangen til afspilleren';
$lang['mp_info_min'] = '[Miniaturebilledet er valgfrit.]';
$lang['mp_linkimg_ok'] = 'Billede gemt';
$lang['mp_montre'] = 'Vis spillelister';
$lang['mp_msg_admin1'] = 'Ingen tilføjet';
$lang['mp_msg_admin_3_1'] = 'Fil';
$lang['mp_msg_admin_3_2'] = 'Oprettet';
$lang['mp_msg_admin_4'] = 'Tilføj fra';
$lang['mp_msg_admin_5'] = 'Opsætning af musikafspilleren er gemt';
$lang['mp_msg_admin_6'] = 'Opsætning af plugin\'en er gemt';
$lang['mp_msg_edit1'] = 'Redigering OK';
$lang['mp_msg_edit2'] = 'Spilleliste opdateret!';
$lang['mp_msg_edit3'] = 'række ændret!';
$lang['mp_msg_edit4'] = 'Fjern fra databasen:';
$lang['mp_msg_edit5'] = 'Fjern fra:';
$lang['mp_msg_err_aj1'] = 'Fejl: feltet URL er tomt';
$lang['mp_msg_err_aj2'] = 'Fejl: fletet tekst er tomt';
$lang['mp_msg_suppr1'] = 'Mappe slettet';
$lang['mp_msg_suppr2'] = 'Fejl: mappe ikke slettet';
$lang['mp_admin_pl'] = 'Håndtering af musik';
$lang['mp_admin_tt_synchro'] = 'Synkroniser med mappen /music';
$lang['mp_cache'] = 'Skjul spillelister';
$lang['mp_evidence_2'] = 'Husk det';
$lang['mp_evidence_title'] = 'Oplysning';
$lang['mp_evidence_txt'] = 'Galleriet har en musikafspiller. Vil du se den?';
$lang['mp_help_div1'] = 'MP3-filer skal placeres i plugin\'ens music-mappe: "[PWG-mappe]/plugins/music_player/music/[ny spilleliste]/". Du bør organisere dine spillelister efter kunster (music/moby/go.mp3), eller benytte kunsterens navn direkte i filnavnet (music/electro/moby-go.mp3)';
$lang['mp_help_div2'] = 'Du opdaterede ikke spillelisten: Klik på den anden ikon (\'Håndter musik\') tæt på spillelisten, og i det sidste trin vælges \'Indsend ændringer\'';
$lang['mp_help_div3'] = 'Tæt på spillelisten kan der indsættes et miniaturebillede (\'Håndter miniaturebillede\')';
$lang['mp_help_div4'] = 'Plugin\'en gør det muligt at oprette og håndtere spillelister, foretage en personlig tilpasning af musikafspilleren og dens popop.<br />
For at oprette en spilleliste:
<br />- Først og fremmest skal du i plugin-mappen have mappen /music.
VIGTIGT! (Gratis brugere skal ikke bekymre sig om følgende bemærkning) /music-mappen skal have rettigheder til at skrive/læse (chmod 777 eller rwxrwxrwx).
<br />- Dernæst oprettes en anden mappe i /music, som indeholder MP3-filer og spillelister med filudvidelsen .xml. Vær forsigtig, mappens navn er vigtigt: ANVEND DERFOR IKKE SÆRLIGE TEGN i mappens navn
<br />- Klik dernæst på \'Synkroniser med /music\': mapperne i /music vises med deres MP3-fil-indhold. Spillelister med filudvidelsen .xml er oprettet med samme navn som folderens.
<br/>- Formular: Der er en lille beskrivende tekst, der kan anvendes som link til afspille spillelisten i afspillerens vindue. Efterlades tom hvis spillelisten ikke skal registreres i databasen
<br/>- Indsendelse af formular og registrering i databasen: Der kan tilføjes et miniaturebillede ved at uploade eller linke, og man kan endda sende det via ftp som \'[filnavn].jpg\'
<br /><br />
For at håndtere spilleliste:
<br />- Klik på den anden ikon tæt på spillelisten
<br />- Følg dernæst disse trin, og glem ikke det sidste!';
$lang['mp_help_div5'] = 'Ja: Gå til en spilleliste og i trin to tilføjes din fil. Vær forsigtig: Selv hvis MP3-filen er på den samme server som denne plugin, skal du angive den komplette adresse, inklusive http://';
$lang['mp_help_div6'] = 'Ja: I version 1.3 blev der tilføjet en blok til podcast og ikke-lokale spillelister. Vær forsigtig: spillelisten skal være i Atom-, Xspf- (anvendes af plugin\'en) eller RSS-format. (podcast er altid i RSS-format)';
$lang['mp_help_div7'] = 'Her kan du få hjælp til plugin\'erne: <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781</a>';
$lang['mp_help_div8'] = 'Nyt: du kan begrænse adgangen til afspilleren. Faktisk kan du oprette gruppen \'music_group\', og kun medlemmer af denne gruppe vil kunne lytte til musikken. Hvis den ikke findes (hvilket er standard), kan alle benytte afspilleren';
$lang['mp_help_q1'] = 'Hvor skal MP3-filer placeres?';
$lang['mp_help_q2'] = 'Jeg har tilføjet MP3-filer, men kan ikke finde dem i spillelisten!';
$lang['mp_help_q3'] = 'Hvad menes der med at vise miniaturebillede i spillelisten?';
$lang['mp_help_q4'] = 'Hvordan fungerer plugin\'en?';
$lang['mp_help_q5'] = 'Hvordan kan jeg tilføje ikke-lokale MP3-filer eller filer placeret i andre mapper?';
$lang['mp_help_q6'] = 'Er det muligt at tilføje podcasts?';
$lang['mp_admin_3_opt1_2'] = 'total bredde';
$lang['mp_admin_3_opt2_1'] = 'spillelistens højde';
$lang['mp_admin_3_opt2_2'] = '[Info: hvis miniaturebilledet er aktiveret vil spillelistens højde plus 20 pixel fra bjælken svare til den totale højde.]';
$lang['mp_admin_3_opt3_1'] = 'Vis spillelistens miniaturebillede';
$lang['mp_admin_3_opt3_2'] = 'miniaturebilledets bredde';
$lang['mp_admin_3_opt3_3'] = '[Info: hvis miniaturebilledet er aktiveret og dets bredde er mindre end den totale bredde, vil miniaturebilledet blive vist til venstre (som standard).]';
$lang['mp_admin_3_opt4'] = 'Indlæs tilfældig musik';
$lang['mp_admin_3_opt5'] = 'Gentag spilleliste når den er slut';
$lang['mp_admin_3_opt6'] = 'Indlæs denne spilleliste ved begyndelsen';
$lang['mp_admin_3_opt7'] = 'Spillelisten kører automatisk (ingen sidebjælke)';
$lang['mp_admin_3_opt9'] = 'Standardudseende:';
$lang['mp_admin_3_opt9b'] = 'ændr ikke';
$lang['mp_admin_folder'] = 'Mappe';
$lang['mp_admin_leg'] = 'Håndtering af spilleliste';
$lang['mp_admin_leg1'] = 'Podcast (RSS) eller fjernafspiller';
$lang['mp_admin_leg2'] = 'Plugin-valgmuligheder';
$lang['mp_admin_leg3'] = 'Afspiller-valgmuligheder';
$lang['mp_admin_min'] = 'Håndtering af miniaturebillede';
$lang['mp_admin_nm_edit'] = 'Rediger navn';
$lang['mp_admin_nm_pl'] = 'Navn på spilleliste';
$lang['mp_adm_info_img'] = '(tilføj et nyt billede og slet det gamle)';
$lang['mp_adm_return'] = 'Tilbage til spillelister';
$lang['mp_adm_return_2'] = 'Tilbage til spillelisten';
$lang['mp_adm_suppr_1'] = 'Hvad ønsker du at gøre?';
$lang['mp_adm_suppr_2'] = 'Slet kun spillelisten i databasen (ved næste synkronisering vil den blive dannet igen)';
$lang['mp_adm_suppr_3'] = 'Slet spillelisten i databasen OG i mappen (MP3- og XML-filer vil blive slettet)';
$lang['mp_adm_thead1'] = 'NAVN';
$lang['mp_adm_thead2'] = 'URL';
$lang['mp_adm_thead3'] = 'OP';
$lang['mp_adm_thead4'] = 'NED';
$lang['mp_adm_thead5'] = 'Ændring af URL/navn';
$lang['mp_adm_thead6'] = 'Slet';
$lang['mp_admin_2_opt1'] = 'Vis plugin med en blok i menubjælken';
$lang['mp_admin_2_opt2'] = 'Vis "sidetop"';
$lang['mp_admin_2_opt3'] = 'Vis "sidefod", ophavsret';
$lang['mp_admin_2_opt4'] = 'Popop';
$lang['mp_admin_2_opt4_1'] = 'højde';
$lang['mp_admin_2_opt4_2'] = 'bredde';
$lang['mp_admin_3_opt10'] = 'Aktivér automatisk håndtering af udseende: det udseende, som vælges i afspilleren, vil være det brugerne ser. Hvis valgmuligheden er deaktiveret eller hvis brugerens udseende ikke findes i afspilleren, anvendes standardudseendet, dvs. det tidligere.';
$lang['mp_admin_3_opt1_1'] = 'total højde';
$lang['lien_expl'] = 'Vis indlejret afspiller i en popop';
$lang['lien_titre'] = 'Lyt til musik';
$lang['mp_adm_ed_sup_info'] = 'Hvis det er en fil fra mappen \'/music\', vil den blive slettet; ellers vil kun databaseregistreringen blive slettet.';
$lang['mp_adm_ed_sup_ok'] = 'Er du sikker?';
$lang['mp_adm_edit_1'] = 'Beskrivelsestekst';
$lang['mp_adm_edit_2'] = 'Spilleliste';
$lang['mp_adm_edit_3'] = 'Synkroniser spillelisten';
$lang['mp_adm_envoi_1'] = 'Beskrivelse af';
$lang['mp_adm_envoi_2'] = 'indeholder';
$lang['mp_adm_et1_txt'] = 'Har du tilføjet eller fjernet nogle MP3-filer fra mappen? Hvis ja, skal du synkronisere med databasen:';
$lang['mp_adm_et2_nbr'] = 'Antal tilføjet:';
$lang['mp_adm_et2_rg'] = 'Indsæt en række:';
$lang['mp_adm_et2_rg2'] = '(hvis tom, bunden af spillelisten)';
$lang['mp_adm_et2_txt'] = 'Tilføj ikke-lokal MP3.';
$lang['mp_adm_et4_ok'] = 'Indsend ændringer';
$lang['mp_adm_et4_txt'] = 'Dan en .xml-fil med spillelisten';
$lang['mp_adm_etape_1'] = 'Første trin (valgfrit)';
$lang['mp_adm_etape_2'] = 'Andet trin (valgfrit)';
$lang['mp_adm_etape_3'] = 'Tredje trin!';
$lang['mp_adm_etape_4'] = 'Fjerde trin!';
?>