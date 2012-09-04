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
$lang['mp_admin_2_opt1'] = 'Odhaliť plugin v lište Menu';
$lang['mp_help_div4'] = 'Tento plugin umožňuje vytvárať a spravovať nejaké playlisty, prispôsobiť prehrávač a jeho pop-up okno.<br />
Pre vytvorenie playlistu:<br />
 - Najprv potrebuješ priečinok /music v priečinku pluginu. DÔLEŽITÉ !!! (Nasledujúce oznámenie sa netýka FREE užívateľov) priečinok /music musí mať všetky write/read povolenia (chmod 777 or rwxrwxrwx).<br />
 - Potom vytvor nový priečinok v /music, ktorý bude obsahovať mp3 a playlist s príponou .xml. Pozor: Názov priečinka je dôležitý: NEPOUŽÍVAJ ŠPECIÁLNE ZNAKY v názve priečinka<br />
 - Ďalej, klikni na \'Synchronizuj s /music\': priečinky v /music budú vylistované s mp3 súbormi. Playlisty s príponou xml boli vytvorene s názvom priečinku.<br />
 - príjem formy: bude mať krátky popis, ktorý bude použitý ako linka na prehratie playlistu v okne prehrávača. Ak necháš prázdne pole, tak playlist nebude zaradený do databázy.<br />
 - zaslanie formy a zapísanie do databázy: môžeš pridať miniatúru nahraním alebo linkou; dokonca sa dá poslať priamo cez FTP s názvom [\'názov súboru.jpg\']<br /><br />
Spravovať playlist:<br />
 - Klikni na druhú ikonu pri playliste<br />
 - Potom postupuj podľa týchto krokov: Nezabudni na posledný !

';
$lang['mp_help_div1'] = 'Mp3 musí byť vložená do priečinka pluginu Music takto "[PWG folder]/plugins/music_player/music/[nový playlist]/". Mal by si zoradiť playlisty podľa skladateľa (music/moby/go.mp3), alebo vložiť meno skladateľa priamo do názvu súboru (music/electro/moby-go.mp3)';
$lang['mp_help_div8'] = 'Nové: je možné obmedziť prístup prehrávača. Samozrejme, ak vytvoríš skupinu \'music_group\', iba členovia tejto skupiny budú môcť počúvať hudbu. Ak táto skupina neexistuje (toto je predvolené), všetci môžu používať prehrávač';
$lang['mp_help_div7'] = 'Podporu pre pluginy nájdeš tu: <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781/a>';
$lang['mp_help_div6'] = 'Áno: Od verzie 1.3 bol pridaný blok pre podcast a vzdialený playlist. Pozor: playlist musí byť vo formáte Atom, Xspf(používaný pluginom), alebo RSS.(podcast je vždy RSS)';
$lang['mp_help_div5'] = 'Áno: Prejdi do vybraného playlistu a v druhom kroku pridaj svoj súbor. Pozor: Aj keď mp3 je na tom istom serveri ako tento plugin, musíš zadať kompletnú adresu s http://';
$lang['mp_help_div2'] = 'Neaktualizoval/a si playlist: Môžeš tak urobiť kliknutim na druhú ikonu (\'Správa hudby\') popri playliste a v konečnom kroku klikni na \'Odoslať zmeny\'';
$lang['mp_admin_3_opt7'] = 'Spustiť autonmaticky z playlistu (bez bočnej lišty)';
$lang['mp_evidence_txt'] = 'Galéria obsahuje prehrávač hudby. Hchceš ho ukázať ?';
$lang['mp_help_div3'] = 'Je to ohľadom thumbnailu, ktorý môžeš vložiť (tretia ikona(\'Správa thumbnailu\')popri playliste)';
$lang['mp_admin_3_opt2_2'] = '[Info: Ak thumbnail je zapnutý, výška playlistu a 20px lišty sa bude rovnať úplnej výške.]';
$lang['mp_admin_3_opt3_3'] = '[Info: Ak thumbnail nie je zapnutý a ak jeho šírka je < ako úplná šírka, tak sa thumbnail bude ukazovať vľavo (toto nastavenie sa stane predvoleným).]';
$lang['mp_admin_3_opt10'] = 'Aktivovať automatickú správu štýlov: štýly použité v prehrávači budú jedného z užívateľov. Ak táto možnosť je deaktivovaná alebo ak štýl prehrávača toho užívateľa neexistuje, potom už použitá téma bude predvolená';
$lang['mp_adm_et1_txt'] = 'Pridal si alebo si vymazal niektoré mp3 súbory v priečinku ? Ak áno, musíš synchronizovať databázu:';
$lang['lien_expl'] = 'Ukázať pop-up vložený prehrávač';
$lang['mp_adm_ed_sup_info'] = 'Ak je to súbor priečinka \'/music\', tak bude vymazaný : inak, iba záznam z databázy bude vymazaný';
$lang['mp_adm_et2_rg2'] = '(ak prázdny, spodok playlistu)';
$lang['mp_adm_suppr_2'] = 'Vymazať iba databázový záznam playlistu (pri nasledujúcej synchronizácii bude znova vytvorený)';
$lang['mp_adm_suppr_3'] = 'Vymazať databázový záznam A priečinok (mp3,xml súbory budú zmazané)';
$lang['mp_text_no_autorisation'] = 'Nemáš dovolené počúvať hudbu ! Prosím kontaktuj webmastra !';
$lang['mp_help_q3'] = 'Čo znamená \'Ukázať thumbnail v playliste\' ?';
$lang['mp_help_q5'] = 'Ako môžem pridať vzdialené mp3 alebo umiestnené v ostatných priečinkoch ?';
$lang['mp_help_q8'] = 'Nové : môžeš obmedziť prístup prehrávača';
$lang['mp_info_min'] = '[Thumbnail je volitelný.]';
$lang['mp_msg_edit4'] = 'Odstrániť z databázy :';
$lang['mp_msg_edit5'] = 'Odstrániť z :';
$lang['mp_msg_err_aj1'] = 'Chyba: pole url je prázdne';
$lang['mp_msg_err_aj2'] = 'Chyba: pole textu je prázdne';
$lang['mp_msg_suppr1'] = 'Priečinok bol úspešne vymazaný';
$lang['mp_msg_suppr2'] = 'Chyba : priečinok nebol vymazaný';
$lang['mp_msg_suppr3'] = 'Databáza bola úspešne vymazaná';
$lang['mp_need_help'] = 'Potrebuješ Pomoc ?';
$lang['mp_ou'] = 'ALEBO';
$lang['mp_send'] = 'Odoslať';
$lang['mp_uploadimg_ok'] = 'Obrázok uložený';
$lang['mp_help_q1'] = 'Kam dať mp3 ?';
$lang['mp_help_q2'] = 'Pridal som mp3 ale nenašiel som ich v playliste !';
$lang['mp_help_q4'] = 'Ako tento plugin funguje ?';
$lang['mp_help_q6'] = 'Je možné pridať podcast ?';
$lang['mp_help_q7'] = 'Nemôžem tu nájisť odpovede / mám nejaké problémy';
$lang['mp_linkimg_ok'] = 'Obrázok uložený';
$lang['mp_montre'] = 'Ukázať playlist';
$lang['mp_msg_admin1'] = 'Nepridané';
$lang['mp_msg_admin_3_1'] = 'Súbor';
$lang['mp_msg_admin_3_2'] = 'Vytvorený';
$lang['mp_msg_admin_4'] = 'Pridať z';
$lang['mp_msg_admin_5'] = 'Konfigurácia prehrávača hudby uložená';
$lang['mp_msg_admin_6'] = 'Konfigurácia pluginu uložená';
$lang['mp_msg_edit1'] = 'Editácia OK';
$lang['mp_msg_edit2'] = 'Playlist aktualizovaný !';
$lang['mp_msg_edit3'] = 'riadok modifikovaný !';
$lang['mp_adm_info_img'] = '(pridať nový obrázok vymazať ten starý)';
$lang['mp_admin_min'] = 'Správa thumbnailov';
$lang['mp_admin_nm_edit'] = 'Editovť názov';
$lang['mp_admin_nm_pl'] = 'Názov playlistu';
$lang['mp_admin_pl'] = 'Správa hudby';
$lang['mp_admin_tt_synchro'] = 'Synchronizovať s priečinkom /music';
$lang['mp_cache'] = 'Schovať playlisty';
$lang['mp_evidence_2'] = 'Pamätať si to';
$lang['mp_evidence_title'] = 'Informácie';
$lang['mp_admin_3_opt6'] = 'Načítať tento playlist na začiatku';
$lang['mp_admin_3_opt9'] = 'Štýl použitý ako východzí:';
$lang['mp_admin_3_opt9b'] = 'nezmeniť';
$lang['mp_admin_folder'] = 'Priečinok';
$lang['mp_admin_leg'] = 'Playlist manažér';
$lang['mp_admin_leg1'] = 'Podcast (RSS) alebo vzdialený playlist';
$lang['mp_admin_leg2'] = 'Možnosti pluginu';
$lang['mp_admin_leg3'] = 'Možnosti prehrávača';
$lang['mp_admin_2_opt4_1'] = 'výška';
$lang['mp_admin_2_opt4_2'] = 'šírka';
$lang['mp_admin_3_opt1_1'] = 'úplná výška';
$lang['mp_admin_3_opt1_2'] = 'úplná šírka';
$lang['mp_admin_3_opt2_1'] = 'výška playlistu';
$lang['mp_admin_3_opt3_1'] = 'Ukázať thumbnail playlistu';
$lang['mp_admin_3_opt3_2'] = 'šírka thumbnailu';
$lang['mp_admin_3_opt4'] = 'Načítať hudbu náhodne';
$lang['mp_admin_3_opt5'] = 'Opakovať playlist pri skončení';
$lang['mp_adm_return'] = 'Späť na playlisty';
$lang['mp_adm_return_2'] = 'Späť k playlistu';
$lang['mp_adm_suppr_1'] = 'Čo chceš urobiť ?';
$lang['mp_adm_thead1'] = 'NÁZOV';
$lang['mp_adm_thead2'] = 'URL';
$lang['mp_adm_thead3'] = 'HORE';
$lang['mp_adm_thead4'] = 'DOLE';
$lang['mp_adm_thead5'] = 'Zmeniť url/názov';
$lang['mp_adm_thead6'] = 'Vymazať';
$lang['mp_admin_2_opt2'] = 'Ukázať "hlavičku"';
$lang['mp_admin_2_opt3'] = 'Ukázať "zakončenie", copyright';
$lang['mp_admin_2_opt4'] = 'Pop_up';
$lang['lien_titre'] = 'Počúvať hudbu';
$lang['mp_adm_ed_sup_ok'] = 'Si si istý ?';
$lang['mp_adm_edit_1'] = 'Text popisu';
$lang['mp_adm_edit_2'] = 'Playlist';
$lang['mp_adm_edit_3'] = 'Synchronizovať playlist';
$lang['mp_adm_envoi_1'] = 'Popis';
$lang['mp_adm_envoi_2'] = 'obsahuje';
$lang['mp_adm_et2_nbr'] = 'Počet pridaných :';
$lang['mp_adm_et2_rg'] = 'Vložiť riadok :';
$lang['mp_adm_et2_txt'] = 'Pridať vzdialené mp3.';
$lang['mp_adm_et4_ok'] = 'Odoslať zmeny';
$lang['mp_adm_et4_txt'] = 'Vytvoriť playlist .xml';
$lang['mp_adm_etape_1'] = 'Prvý krok (voliteľný)';
$lang['mp_adm_etape_2'] = 'Druhý krok (voliteľný)';
$lang['mp_adm_etape_3'] = 'Tretí krok !';
$lang['mp_adm_etape_4'] = 'Štvrtý krok !';
?>