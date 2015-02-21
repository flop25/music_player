<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
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
$lang['mp_help_div4'] = 'Insticksprogrammet ger dig möjlighet att skapa och hantera spellistor, anpassa visningen av spelaren och dess pop-up. <br />
Skapa en spellista:
<br /> - Se först till att du har en mapp /music i plugin katalogen. VIKTIGT !! (Gratis användare, du berörs inte av det uttalande som följer) Katalogen /musik  måste ha full behörighet med andra ord, en chmod 777 eller rwxrwxrwx.
<br /> - Sedan skapar du en mapp i mappen /music som innehåller mp3 filer och spellista i .xml format. OBS! Mappnamnet är viktigt: Använd ej special tecken i katalognamnen.
<br /> - Klicka sedan på "Synkronisera mapp /music": utifrån filerna i mappen skapas spellistor i XML-format med namnet på mappen.
<br /> - Inmatnings fältet: används för en liten beskrivande text som används för att starta spellistan i spelarfönstret. Om det lämnas tomt skapas registreras inte spellistan i databasen.
<br /> - Skicka och registrera i databasen: Där efter kan du lägga till en miniatyr för uppladdning eller via länk, du kan även skicka den direkt via ftp med namnet [mappnamn.jpg]"
<br /> <br />
Hantera spellista:
<br /> - klicka på 2:a ikonen bredvid spellistan
<br /> - Följ sedan dessa steg: Glöm inte det sista!';
$lang['mp_help_div3'] = 'Detta är en miniatyr som kan läggas till genom att klicka på ikon 3. ("Hantera miniatyr") bredvid berörd spellista';
$lang['mp_admin_leg'] = 'Spelliste hanterare';
$lang['mp_admin_pl'] = 'Hantera musik';
$lang['mp_help_div2'] = 'Du har inte uppdaterat spellistan: För att göra detta klicka på 2:a ikonen ("Hantera musik") intill berörd spellista och sist "Skicka ändringar".';
$lang['mp_help_div1'] = 'Mp3 måste placeras i Musik katalogen för plugin, enligt följande. "[PWG katalog/plugins/music_player/music/[ny spellista]/" Du bör skapa din ordning av spellistor efter artist (music/moby/go.mp3), eller lägga till artistens namn i filnamnet direkt /music/electro/moby-go.mp3)';
$lang['mp_evidence_txt'] = 'Galleriet har en musikspelare. Vill du visa den?';
$lang['mp_evidence_title'] = 'Information';
$lang['mp_evidence_2'] = 'Kom ihåg';
$lang['mp_cache'] = 'Dölj spellista';
$lang['mp_admin_tt_synchro'] = 'Synkronisera musik katalog';
$lang['mp_admin_nm_pl'] = 'Namn på spellista';
$lang['mp_admin_nm_edit'] = 'Redigera namn';
$lang['mp_admin_min'] = 'Administrera miniatyrer';
$lang['mp_admin_leg3'] = 'Optioner för musikspelaren';
$lang['mp_admin_leg2'] = 'Optioner för plugin';
$lang['mp_admin_leg1'] = 'Podcast (RSS) eller fjärrspellista';
$lang['mp_admin_folder'] = 'Katalog';
$lang['mp_admin_3_opt9b'] = 'ändra inte';
$lang['mp_admin_3_opt9'] = 'Standard tema:';
$lang['mp_admin_3_opt7'] = 'Spela spellistan automatiskt (ingen sidolist)';
$lang['mp_admin_3_opt6'] = 'Starta denna spellistan vid start';
$lang['mp_admin_3_opt5'] = 'Repetera spellista när slut';
$lang['mp_admin_3_opt4'] = 'Spela musik slumpmässigt';
$lang['mp_admin_3_opt3_3'] = '[Info: Om miniatyrer är aktiverade och om bredden är mindre än total bredd, visas miniatyrer på vänster sida (standard).]';
$lang['mp_admin_3_opt3_2'] = 'bredd på miniatyrer';
$lang['mp_admin_3_opt3_1'] = 'Visa miniatyrer för spellistan';
$lang['mp_admin_3_opt2_2'] = '[Info: Om miniatyrer är aktiverade, blir höjden av spellistan 20 px av listen, lika med den totala höjden.]';
$lang['mp_admin_3_opt2_1'] = 'spellistans höjd';
$lang['mp_admin_3_opt1_2'] = 'total bredd';
$lang['mp_admin_3_opt1_1'] = 'total höjd';
$lang['mp_admin_3_opt10'] = 'Aktivera automatisk anpassning av teman: teman för spelaren följer användaren. Om detta inaktiveras eller om användarens tema saknas, kommer standard tema visas. ';
$lang['mp_admin_2_opt4_2'] = 'bredd';
$lang['mp_admin_2_opt4_1'] = 'höjd';
$lang['mp_admin_2_opt4'] = 'Visa Pop-up';
$lang['mp_admin_2_opt3'] = 'Visa "sidfot", copyright';
$lang['mp_admin_2_opt2'] = 'Visa "sidhuvud"';
$lang['mp_admin_2_opt1'] = 'Visa plugin som ett block i menyraden';
$lang['mp_adm_thead6'] = 'Radera';
$lang['mp_adm_thead5'] = 'Ändra url/namn';
$lang['mp_adm_thead4'] = 'NER';
$lang['mp_adm_thead3'] = 'UPP';
$lang['mp_adm_thead2'] = 'URL';
$lang['mp_adm_thead1'] = 'Namn';
$lang['mp_adm_suppr_3'] = 'Radera spellistan både databasen och katalogen (mp3 och xml filer raderas)';
$lang['mp_adm_suppr_2'] = 'Radera spellistan från databasen enbart (vid nästa synkronisering skapas den på nytt)';
$lang['mp_adm_suppr_1'] = 'Vad vill du göra?';
$lang['mp_adm_return_2'] = 'Tillbaka till spellistan';
$lang['mp_adm_return'] = 'Tillbaka till spellistor';
$lang['mp_adm_info_img'] = '(lägg till ny bild och radera den gamla)';
$lang['mp_adm_etape_4'] = 'Steg fyra!';
$lang['mp_adm_etape_3'] = 'Steg tre!';
$lang['mp_adm_etape_2'] = 'Steg två (frivilligt)';
$lang['mp_adm_etape_1'] = 'Steg ett (frivilligt)';
$lang['mp_adm_et4_txt'] = 'Skapa en spellista i .xml';
$lang['mp_adm_et4_ok'] = 'Spara förändringar';
$lang['mp_adm_et2_txt'] = 'Lägg till fjärr mp3.';
$lang['mp_adm_et2_rg2'] = '(om tom, botten på spellistan)';
$lang['mp_adm_et2_rg'] = 'Infoga en rad:';
$lang['mp_adm_et2_nbr'] = 'Antal tillagda:';
$lang['mp_adm_et1_txt'] = 'Har du har lagt till eller tagit bort några mp3 filer i katalogen? Om Ja, så måste du synkronisera databasen.';
$lang['mp_adm_envoi_2'] = 'innehåller';
$lang['mp_adm_envoi_1'] = 'Beskrivning av';
$lang['mp_adm_edit_3'] = 'Synkronisera spellistan';
$lang['mp_adm_edit_2'] = 'Spellista';
$lang['mp_adm_edit_1'] = 'Beskrivande text';
$lang['mp_adm_ed_sup_ok'] = 'Är du säker?';
$lang['mp_adm_ed_sup_info'] = 'Om det är en fil i \'/music\' katalogen, så kommer den raderas. Annars  kommer endast databas post raderas.';
$lang['lien_expl'] = 'Visa en "Pop-up spelare" inbäddad';
$lang['lien_titre'] = 'Lyssna på musik';
$lang['mp_uploadimg_ok'] = 'Bild sparad';
$lang['mp_text_no_autorisation'] = 'Du har inte behörighet till att lyssna på musik! Vänligen kontakta administratören för att få veta varför, och möjligen få tillåtelse. ';
$lang['mp_send'] = 'Skicka';
$lang['mp_ou'] = 'ELLER';
$lang['mp_need_help'] = 'Behöver du hjälp?';
$lang['mp_msg_suppr3'] = 'Databas raderad';
$lang['mp_msg_suppr2'] = 'Fel: katalog ej raderad';
$lang['mp_msg_suppr1'] = 'Katalog raderad';
$lang['mp_msg_err_aj2'] = 'Fel: Textfält tomt ';
$lang['mp_msg_err_aj1'] = 'Fel: URL saknas';
$lang['mp_msg_edit5'] = 'Ta bort från:';
$lang['mp_msg_edit4'] = 'Ta bort från databas:';
$lang['mp_msg_edit3'] = 'rad modifierad !';
$lang['mp_msg_edit2'] = 'Spellista uppdaterad!';
$lang['mp_msg_edit1'] = 'Redigering OK';
$lang['mp_msg_admin_6'] = 'Konfiguration för plugin sparad';
$lang['mp_msg_admin_5'] = 'Konfiguration för musikspelare sparad';
$lang['mp_msg_admin_4'] = 'Lägg till ifrån';
$lang['mp_msg_admin_3_2'] = 'Skapad';
$lang['mp_msg_admin_3_1'] = 'Fil';
$lang['mp_msg_admin1'] = 'Ingenting tillagt';
$lang['mp_montre'] = 'Visa spellista';
$lang['mp_linkimg_ok'] = 'Bild sparad';
$lang['mp_info_min'] = '[ Miniatyren är valfri. ]';
$lang['mp_help_q8'] = 'Nyhet: Du kan begränsa åtkomst till spelaren';
$lang['mp_help_q7'] = 'Jag hittar inte svar här / jag har vissa problem';
$lang['mp_help_div8'] = 'Nyhet: Du kan begränsa åtkomst till spelare. Om du skapar gruppen "music_group", kommer bara medlemmar i denna grupp kunna lyssna på musik. Om gruppen inte finns (standard) har alla åtkomst till spelaren.';
$lang['mp_help_q6'] = 'Är det möjligt att lägga till podcast?';
$lang['mp_help_q5'] = 'Hur lägger jag till mp3 på distans eller lokalt i andra kataloger?';
$lang['mp_help_q4'] = 'Hur fungerar denna plugin?';
$lang['mp_help_q3'] = 'Vad innebär "Visa miniatyrer i spellista"?';
$lang['mp_help_q2'] = 'Jag har lagt till mp3 men de visas inte i spellistan!';
$lang['mp_help_q1'] = 'Var placeras mp3 ?';
$lang['mp_help_div7'] = 'Du hittar hjälp för plugins här: <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781/a>';
$lang['mp_help_div6'] = 'Ja: Sedan version 1.3 har en sektion för podcast och fjärr-spellista lagts till. Varning: Spellista måste vara i Atom, Xspf (används av plugin) eller RSS format (podcast är alltid RSS).';
$lang['mp_help_div5'] = 'Ja: Gå in på önskad spellista, i steg två lägg till din fil. Försiktig: Även om mp3 filen är på samma server som denna plugin så måste man skriva kompletta adressen med http://';