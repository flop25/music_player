<?php

$lang['lien_titre'] = 'Ascolta musica';
$lang['lien_expl'] = 'Avvia un pop-up contentente il lettore audio';

$lang['mp_evidence_title'] = 'ATTENZIONE';
$lang['mp_evidence_txt'] = 'Vuoi ascoltare musica mentre navighi nel sito?';
$lang['mp_evidence_2'] = 'Ricorda';

$lang['mp_montre'] = 'Mostra Playlist';
$lang['mp_cache'] = 'Nascondi Playlist';

$lang['mp_send'] = 'Invia';
$lang['mp_need_help'] = "Aiuto";

$lang['mp_help_q1'] = "Dove mettere gli mp3?";
$lang['mp_help_q2'] = "Ho aggiunto mp3 ma non so dove trovarli nella playlist!";
$lang['mp_help_q3'] = "A cosa serve 'Mostra immagine nella playlist'?";
$lang['mp_help_q4'] = "Come funziona questo plug-in?";
$lang['mp_help_q5'] = "Come posso aggiungere link a mp3 localizzati in altre cartelle?";
$lang['mp_help_q6'] = "E' possibile aggiungere podcast?";
$lang['mp_help_q7'] = "Non ho trovato la risposta qui / Ho altri problemi";

$lang['mp_help_div1'] = "Gli mp3 devono essere messi nella cartella Music del plugin come questa \"[directory di pwg]/plugins/music_player/music/[nuova playlist]/\". E' consigliato ordinare le playlists per artista (music/moby/go.pm3), o mettere il nome dell'artista direttamente nel file mp3 (music/electro/moby-go.pm3)";
$lang['mp_help_div2'] = "Non hai aggiornato la playlist: per farlo clikka sulla 2° icona ('Gestione musica') vicino la playlist, dopo, nell'ultimo passaggio fai 'Salva modifiche'";
$lang['mp_help_div3'] = "E' un'immagine che puoi aggiungere clikkando sulla 3° icona ('Gestione immagini') vicino la playlist";
$lang['mp_help_div4'] = "Questo plugin ti permette di creare e modificare playlists, di personalizzare l'aspetto del lettore e del suo popup.<br />
Per creare una playlist:
<br />- Prima di tutto assicurati di avere una cartella chiamata /music nella cartella del plugin. IMPORTANTE !! La cartella /music deve avere tutte le autorizzazioni in scrittura/lettura, in altre parole, un CHMOD di 777 o rwxrwxrwx.
<br />- Dopo, devi creare una sottocartella nella cartella /music contenente gli mp3 e la playlist in formato .xml. ATTENZIONE: il nome della cartella è importante: EVITA DI USARE CARATTERI SPECIALI
<br />- Clikka su 'Sincronizza con la directory /music': vengono elencate le cartelle dentro la directory /music che contengono mp3. Vengono create playlists in formato xml con lo stesso nome delle cartelle.
<br />- Riempi il formulario: serve per avere un piccolo testo descrittivo che verrà usato come link per avviare la playlist, nella finestra del lettore. Se lasci il campo vuoto la playlist non verrà salvata nel database.
<br />- Invia il formulario (verrà registrato nel database): Poi puoi aggiungere un'immagine inserendo il link o facendo l'upload: puoi anche mandarla direttamente tramite FTP con nome '[nome della cartella].jpg'
<br /><br />
Per modificare una playlist :
<br />- Clikka sulla seconda icona vicino la playlist
<br />- Segui questi passaggi: non dimenticare l'ultimo!";
$lang['mp_help_div5'] = "Devi andare nella playlist che vuoi e, alla seconda tappa, aggiungere l'indirizzo del file. Attenzione: anche se l'mp3 è sullo stesso server di questo plugin, devi scrivere l'indirizzo completo che inizia con http://";
$lang['mp_help_div6'] = "Sì: dalla versione 1.3 è stato aggiunto un blocco per i podcast e gli mp3 distanti. Attenzione: la playlist deve essere in formato Atom, Xspf (che usa il plugin), o RSS. (I podcasts sono tutti in formato RSS)";
$lang['mp_help_div7'] = 'Puoi trovare il supporto ufficiale del plugin qui (in lingua francese) : <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781</a>';

$lang['mp_admin_leg'] = 'Gestione Playlists';
$lang['mp_admin_tt_synchro'] = 'Sincronizza con la directory /music';
$lang['mp_admin_folder'] = 'Directory';
$lang['mp_admin_nm_pl'] = 'Nome della playlist';
$lang['mp_admin_nm_edit'] = 'Modifica nome';
$lang['mp_admin_pl'] = 'Gestione musica';
$lang['mp_admin_min'] = 'Gestione immagini';
$lang['mp_admin_leg1'] = 'Podcast (RSS) o link a playlist esterna';

$lang['mp_admin_leg2'] = 'Opzioni del plugin';
$lang['mp_admin_2_opt1'] = 'Metti in evidenza il lettore con un blocco aggiuntivo nella barra del menu';
$lang['mp_admin_2_opt2'] = 'Mostra "header", il banner';
$lang['mp_admin_2_opt3'] = 'Mostra "footer", il copyright';
$lang['mp_admin_2_opt4'] = 'Popup';
$lang['mp_admin_2_opt4_1'] = 'Altezza';
$lang['mp_admin_2_opt4_2'] = 'Larghezza';

$lang['mp_admin_leg3'] = 'Opzioni del lettore';
$lang['mp_admin_3_opt1_1'] = 'Altezza totale';
$lang['mp_admin_3_opt1_2'] = 'Larghezza totale';
$lang['mp_admin_3_opt2_1'] = 'Altezza della playlist';
$lang['mp_admin_3_opt2_2'] = "[Info: Se è attiva un'immagine, sarebbe opportuno che l'altezza della playlist più i 20 px della barre formino l'altezza totale.]";
$lang['mp_admin_3_opt3_1'] = 'Mostra immagine della playlist';
$lang['mp_admin_3_opt3_2'] = 'Larghezza dell\'immagine';
$lang['mp_admin_3_opt3_3'] = "[Info: Se è attiva un'immagine e se la larghezza è inferiore alla larghezza totale, l'immagine verrà mostrata a sinistra (come predefinito).]";
$lang['mp_admin_3_opt4'] = 'Leggi musica in modalità random';
$lang['mp_admin_3_opt5'] = 'Ripeti playlist una volta terminata';
$lang['mp_admin_3_opt6'] = 'Avvia questa playlist per prima';
$lang['mp_admin_3_opt7'] = "Avvia automaticamente la playlist (No Barra laterale)";


$lang['mp_adm_envoi_1'] = 'Descrizione di';
$lang['mp_adm_envoi_2'] = 'contiene';

$lang['mp_adm_return'] = 'Torna alle playlists';
$lang['mp_adm_return_2'] = 'Torna alla playlist';

$lang['mp_adm_edit_1'] = 'Testo descrittivo';
$lang['mp_adm_edit_2'] = 'Playlist';
$lang['mp_adm_edit_3'] = 'Sincronizza la playlist';

$lang['mp_ou'] = 'O';
$lang['mp_adm_info_img'] = "(aggiungere una nuova immagine cancellerà la vecchia)";

$lang['mp_adm_suppr_1'] = 'Cosa vuoi fare?';
$lang['mp_adm_suppr_2'] = 'Cancella la playlist solo dal database (alla prossima sincronizzazione sarà creata nuovamente) ';
$lang['mp_adm_suppr_3'] = 'Cancella la playlist dal database e anche la cartella fisica (i files mp3 e xml verranno cancellati)';


$lang['mp_msg_suppr1'] = 'Cartella cancellata con successo';
$lang['mp_msg_suppr2'] = 'Errore: cartella non cancellata';
$lang['mp_msg_suppr3'] = 'Cancellata dal database con successo';
$lang['mp_msg_edit1'] = 'Modifica riuscita';
$lang['mp_msg_edit2'] = "La playlist è aggiornata!";
$lang['mp_msg_edit3'] = "Posizione modificata!";
$lang['mp_msg_edit4'] = "Rimuovi dal database:";
$lang['mp_msg_edit5'] = "Rimuovi da:";

$lang['mp_adm_etape_1'] = "1° tappa (opzionale)";
$lang['mp_adm_et1_txt'] = "Hai aggiunto o rimosso files mp3 dalla cartella? Se sì, devi sincronizzare il database:";
$lang['mp_adm_etape_2'] = "2° tappa (opzionale)";
$lang['mp_adm_et2_txt'] = "Aggiungi link ad mp3.";
$lang['mp_adm_et2_nbr'] = "Numero di mp3 da aggiungere: ";
$lang['mp_adm_et2_rg'] = "Inserisci al posto: ";
$lang['mp_adm_et2_rg2'] = "(se vuoto, in fondo alla playlist)";
$lang['mp_adm_etape_3'] = "3° tappa !";
$lang['mp_adm_thead1'] = "NOME";
$lang['mp_adm_thead2'] = "URL";
$lang['mp_adm_thead3'] = "Su";
$lang['mp_adm_thead4'] = "Giù";
$lang['mp_adm_thead5'] = "Cambia url/nome";
$lang['mp_adm_thead6'] = "Cancella";
$lang['mp_adm_etape_4'] = "4° tappa !";
$lang['mp_adm_et4_txt'] = "Genera il file xml con la playlist";
$lang['mp_adm_et4_ok'] = "Salva modifiche";

$lang['mp_adm_ed_sup_ok'] = "Sei sicuro?";
$lang['mp_adm_ed_sup_info'] = "Se ci sono files nella cartella '/music', saranno cancellati: altrimenti saranno cancellate solo le voci corrispondenti nel database.";


$lang['mp_msg_err_aj1'] = "Errore : campo URL vuoto";
$lang['mp_msg_err_aj2'] = "Errore : campo Testo vuoto";


$lang['mp_msg_admin1'] = 'Nessun aggiunta';
$lang['mp_msg_admin_3_1'] = 'File';
$lang['mp_msg_admin_3_2'] = ' creato';
$lang['mp_msg_admin_4'] = 'Aggiunta da ';
$lang['mp_msg_admin_5'] = 'Configurazioni del lettore salvate';
$lang['mp_msg_admin_6'] = 'Configurazioni del plugin salvate';

?>