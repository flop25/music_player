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
$lang['mp_msg_suppr3'] = 'Vellykket sletting av data basen';
$lang['mp_need_help'] = 'Trenger hjelp?';
$lang['mp_ou'] = 'ELLER';
$lang['mp_send'] = 'Send';
$lang['mp_text_no_autorisation'] = 'Du har ikke lov til å høre på musikk! Vennligst ta kontakt med webmaster for å vite hvorfor, og kanskje for å få tillatelse';
$lang['mp_uploadimg_ok'] = 'Bilde lagret';
$lang['mp_admin_folder'] = 'Mappe';
$lang['mp_help_div1'] = 'Mp3 må legges i Musikk mappen til programtillegget på denne måten  "[PWG folder]/plugins/music_player/music/[new playlist]/". Du bør lage din spilleliste sortert etter artist  (music/moby/go.pm3),eller lagre artist navn som fil navn (music/electro/moby-go.pm3)';
$lang['mp_admin_tt_synchro'] = 'Synkroniser med/musikk mappe';
$lang['mp_help_q7'] = 'Jeg kan ikke finne svar her / Jeg har problemer';
$lang['mp_help_q8'] = 'Ny: du kan begrense tilgangen til spilleren';
$lang['mp_info_min'] = '
[Miniatyrbilde er valgfritt.]';
$lang['mp_linkimg_ok'] = 'Bilde lagret';
$lang['mp_montre'] = 'Vis spilleliste';
$lang['mp_msg_admin1'] = 'Ikke lagt til';
$lang['mp_msg_admin_3_1'] = 'Fil';
$lang['mp_msg_admin_3_2'] = 'Laget';
$lang['mp_msg_admin_4'] = 'Lagt til fra';
$lang['mp_msg_admin_5'] = 'Konfigurasjonen av musikk spilleren lagret';
$lang['mp_msg_admin_6'] = 'Konfigurasjonen av programtillegget er lagret';
$lang['mp_msg_edit1'] = 'Endring OK';
$lang['mp_msg_edit2'] = 'Spilleliste er oppdatert!';
$lang['mp_msg_edit3'] = 'linje er modifisert!';
$lang['mp_msg_edit4'] = 'Fjern fra data basen:';
$lang['mp_msg_edit5'] = 'Fjern fra:';
$lang['mp_msg_err_aj1'] = 'Feil: url felt er tomt';
$lang['mp_msg_err_aj2'] = 'Feil: tekst feldt er tomt';
$lang['mp_msg_suppr1'] = 'Velykket sletting av mappe';
$lang['mp_msg_suppr2'] = 'Feil:mappe ikke slettet';
$lang['mp_help_q3'] = 'Hva menes med \'Vis miniatyrbilde i spillelisten\'?';
$lang['mp_help_q4'] = 'Hvordan fungerer dette programtillegget';
$lang['mp_help_q5'] = 'Hvordan kan jeg legge til en fjern mp3 eller lokalisert i andres mapper?';
$lang['mp_help_q6'] = 'Er det mulig å legge til et podcast?';
$lang['mp_help_q2'] = 'Jeg har lagt til mp3 men finner de ikke i spillelisten';
$lang['mp_help_q1'] = 'Hvor legger man mp3?';
$lang['mp_help_div8'] = 'Nyhet: Du kan begrense adgang til spilleren. Faktisk, hvis du oppretter gruppen \'music_group\', vil bare medlemmer av denne gruppen være i stand til å lytte til musikken. Hvis den ikke finnes (som på standard), kan alle få tilgang til spilleren';
$lang['mp_help_div7'] = 'Du kan finne støtte for programtillegget her: <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781 / a>';
$lang['mp_help_div6'] = 'Ja: Siden 1.3 en blokk for podcast og fjern spilleliste er lagt til. Vær forsiktig: spilleliste må være i Atom, Xspf (brukt av programtillegget), eller RSS-format. (podcast er alltid RSS)';
$lang['mp_help_div5'] = 'Ja: For dette gå inn på spillelisten du ønsker og på trinn to, legge til filen. Vær forsiktig: Selv om mp3 er på samme server som dette programtillegget, må du skrive en komplett ardresse med http://';
$lang['mp_help_div3'] = 'Det handler om miniatyrbilde som du kan sette inn (tredje ikonet (\'Administrer miniatyrbilder\') nær spillelisten';
$lang['mp_help_div4'] = 'Dette programtillegget tillater å opprette og administrere spillelister, personnalisé musikkspiller og dens pop-opp. <br/>
Slik oppretter du en spilleliste: <br/> -
Først av alt, trenger du en mappe /musikk i programtilleggs mappen. VIKTIG !! (Gratis brukere omfattes ikke av følgende merknad) /musikkmappen må ha alle rettigheter som skrive/lese (chmod 777 eller rwxrwxrwx).
<br/> - Deretter oppretter du en annen mappe i /musikk som vil inneholde mp3 og spilleliste med .xml. Vær forsiktig: mappenavnet er viktig: SÅ IKKE BRUK SPESIALTEGN i navnet på mappen 
<br/>- Klikk deretter på \'Synkroniser med /musikk\': mapper i /musikk har blitt oppført med mp3-filer. Spillelister med xml forlengelse har blitt opprettet med det samme navnet som på mappen.
<br/> - mottak av skjema: dette brukes til å ha en liten beskrivende tekst som vil bli brukt som link for å spille  spillelisten, i vinduet på spilleren. La tekstfeltet stå tomt og vedkommende spilleliste vil ikke bli registrert i data basen
<br/> - sending av skjemaet og opptak i data base: deretter kan du legge til et miniatyrbilde ved opplasting eller link: du kan til og med direkte sende den via ftp med for navnet \'[navnet på filen] jpg\'?
<br/><br/>
Administrere spilleliste:
<br/> - Klikk på andre ikonet ved spilleliste
<br/> - Deretter følger du disse trinnene: Ikke glem den siste!';
$lang['mp_cache'] = 'Sjul spilleliste';
$lang['mp_evidence_2'] = 'Husk';
$lang['mp_evidence_title'] = 'Informasjon';
$lang['mp_evidence_txt'] = 'Galleriet har en musikk spiller. Ønsker du å se den?';
$lang['mp_help_div2'] = 'Du oppdaterte ikke spillelisten. Så klikk på 2.ikon (\'Administrere musikk\')ved siden av spillelisten og til slutt klikk \'Legg til modifikasjonene\'';
$lang['mp_admin_min'] = 'Administrere miniatyrbilde';
$lang['mp_admin_pl'] = 'Administrere misikk';
$lang['mp_admin_3_opt1_2'] = 'total bredde';
$lang['mp_admin_3_opt2_1'] = 'høyde på spillelisten';
$lang['mp_admin_3_opt2_2'] = '[Info : Hvis miniatyrbilde er slått på, vil høyden på spillelisten og 20 px av baren, bli lik den totale høyden.]';
$lang['mp_admin_3_opt3_1'] = 'Vis miniatyrbilde av spillelisten';
$lang['mp_admin_3_opt3_2'] = 'bredde på miniatyrbilde';
$lang['mp_admin_3_opt3_3'] = '[Info : Hvis miniatyrbilde er slått på og bredden er < av total bredde, da vil miniatyrbilde vises til venstre som standard.]';
$lang['mp_admin_3_opt4'] = 'Les musikk tilfeldig';
$lang['mp_admin_3_opt5'] = 'Gjenta spillelisten når den er ferdig';
$lang['mp_admin_3_opt6'] = 'Les spillelisten fra begynnelsen';
$lang['mp_admin_3_opt7'] = 'Kjør spillelisten automatisk (ingen sidebar)';
$lang['mp_admin_3_opt9'] = 'Stilen som brukes som standard:';
$lang['mp_admin_3_opt9b'] = 'ikke endre';
$lang['mp_admin_leg'] = 'Spilleliste behandler';
$lang['mp_admin_leg1'] = 'Podvast (RSS) eller spilleliste fra det fjerne';
$lang['mp_admin_leg2'] = 'Muligheten til programtillegget';
$lang['mp_admin_leg3'] = 'Muligheten til spilleren';
$lang['mp_admin_nm_edit'] = 'Redigere navn';
$lang['mp_admin_nm_pl'] = 'Navn på spillelisten';
$lang['mp_adm_info_img'] = '(legge til et nytt bilde slette den gamle)';
$lang['mp_adm_return'] = 'Tilbake til spillelistene';
$lang['mp_adm_return_2'] = 'Tilbake til spillelisten';
$lang['mp_adm_suppr_1'] = 'Hva vil du gjøre ?';
$lang['mp_adm_suppr_2'] = 'Slett kun spillelisten til data basen (ved neste synkroniseringen, vil den bli lagt til igjen)';
$lang['mp_adm_suppr_3'] = 'Slett spillelisten til databasen, OG folderen (mp3,xml filer vil bli slettet)';
$lang['mp_adm_thead1'] = 'NAVN';
$lang['mp_adm_thead2'] = 'URL';
$lang['mp_adm_thead3'] = 'OPP';
$lang['mp_adm_thead4'] = 'NED';
$lang['mp_adm_thead5'] = 'Skift url/navn';
$lang['mp_adm_thead6'] = 'Slett';
$lang['mp_admin_2_opt1'] = 'Avdekk programtillegget med en blokk i menylinja';
$lang['mp_admin_2_opt2'] = 'Vis "toppteksten"';
$lang['mp_admin_2_opt3'] = 'Vis "bunnteksten", copyright';
$lang['mp_admin_2_opt4'] = 'Sprett_opp';
$lang['mp_admin_2_opt4_1'] = 'høyde';
$lang['mp_admin_2_opt4_2'] = 'bredde';
$lang['mp_admin_3_opt10'] = 'Aktiver automatisk styring av stilene: stilen som er valgt til spilleren blir brukers valg. Hvis dette alternativet er deaktivert eller stilen til brukeren ikke eksisterer for spilleren, da vil standard stilen bli brukt, presedens';
$lang['mp_admin_3_opt1_1'] = 'total høyde';
$lang['lien_expl'] = 'Vis en spettopp emdebed spiller';
$lang['lien_titre'] = 'Lytt til Musikk';
$lang['mp_adm_ed_sup_info'] = 'Hvis det er en fil tilhørende \'/musikk\' mappen, vil den bli slettet: i andre tilfeller, vil kun data base oppføringen bli slettet.';
$lang['mp_adm_ed_sup_ok'] = 'Er du sikker?';
$lang['mp_adm_edit_1'] = 'Beskrivelse tekst';
$lang['mp_adm_edit_2'] = 'Spilleliste';
$lang['mp_adm_edit_3'] = 'Synkroniser spillelisten';
$lang['mp_adm_envoi_1'] = 'Beskrivelse av';
$lang['mp_adm_envoi_2'] = 'inneholder';
$lang['mp_adm_et1_txt'] = 'Du har lagt til eller fjernet noen mp3-filer i mappen? Hvis ja, må du synkronisere til databasen:';
$lang['mp_adm_et2_nbr'] = 'Antall lagt til:';
$lang['mp_adm_et2_rg'] = 'Sett inn en rad:';
$lang['mp_adm_et2_rg2'] = '(hvis den er tom, bunnen av en spilleliste)';
$lang['mp_adm_et2_txt'] = 'Legg til mp3.';
$lang['mp_adm_et4_ok'] = 'Send inn modifikasjoner';
$lang['mp_adm_et4_txt'] = 'Lag en spilleliste .xml';
$lang['mp_adm_etape_1'] = 'Første trinn (valgfritt)';
$lang['mp_adm_etape_2'] = 'Andre trinn (valgfritt)';
$lang['mp_adm_etape_3'] = '3. trinn!';
$lang['mp_adm_etape_4'] = '4. trinn!';