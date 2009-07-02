<?php
$lang['lien_titre'] = 'Ecouter de la musique';
$lang['lien_expl'] = 'affiche une pop-up contenant un lecteur audio';

$lang['mp_evidence_title'] = 'Information';
$lang['mp_evidence_txt'] = 'La galerie comporte un lecteur audio. Voulez-vous l\'afficher ?';
$lang['mp_evidence_2'] = 's\'en souvenir';

$lang['mp_montre'] = 'Afficher les playlist';
$lang['mp_cache'] = 'Cacher les playlist';

$lang['mp_send'] = 'Envoyer';
$lang['mp_need_help'] = "Besoin d'aide ?";

$lang['mp_help_q1'] = "Ou mettre mes mp3 ?";
$lang['mp_help_q2'] = "J'ai rajouté des mp3 mais ils n'apparaissent pas dans la playlist !";
$lang['mp_help_q3'] = "A quoi correspond l'option 'Afficher la miniature de la playlist' ?";
$lang['mp_help_q4'] = "Comment fonctionne le plugin ?";
$lang['mp_help_q5'] = "Comment puis-je ajouter des mp3 distants ou présent dans d'autres dossiers ?";
$lang['mp_help_q6'] = "Peut-on ajouter des podcats ou une playlist distante ?";
$lang['mp_help_q7'] = "Je ne trouve pas de réponses ici / J'ai un très gros problème";
$lang['mp_help_q8'] = "Nouveau : vous pouvez restreindre les droits d'écoute";

$lang['mp_help_div1'] = "Les mp3 doivent être mis dans le dossier music du plugin de cette façon \"[le dossier de pwg]/plugins/music_player/music/[nouvelle playlist]/\". Il est conseillé de faire des playlist par artiste (music/moby/go.pm3), ou sinon mettre le nom de l'artiste dans le nom du fichier mp3 (music/electro/moby-go.pm3)";
$lang['mp_help_div2'] = "Vous n'avez pas remis à jour la playlist : pour ce faire cliquez sur la 2° icône ('Gérer la musique') à coté de la playlist concernée, puis à la dernière étape faites 'Valider les modifications'";
$lang['mp_help_div3'] = "Il s'agit d'une miniature que vous pouvez ajouter en cliquant sur la 3° icône ('Gérer la miniature') à coté de la playlist concernée";
$lang['mp_help_div4'] = "Le plugin permet de créer et gérer des playlist, de personnaliser l'affichage du lecteur et de sa pop-up.<br />
pour créer une playlist :
<br />- Tout d'abord assurez-vous que vous avez bien un dossier /music dans le répertoire du plugin. IMPORTANT !! (utilisateur de Free vous n'êtes pas concernés par la mention qui suit) Le dossier /music doit avoir touts les autorisations en écriture/lecture, en d'autre termes, un chmod de 777 ou rwxrwxrwx.
<br />- Ensuite, vous créez un dossier dans ce dossier /music qui contiendra les mp3 et surtout la playlist en .xml. Attention : le nom du dossier est primordial : DONC EVITER LES CARATERES SPECIAUX ET GUILLEMETS dans le nom des dossiers
<br />- on clique sur 'Synchroniser avec le dossier /music' : les dossiers dans music sont listés ainsi que les fichiers mp3 contenus dans chacuns d'eux. Les playlists au foramt xml sont créés en ayant pour nom celui du dossier.
<br />- réception du formulaire : il sert à avoir un petit texte descriptif qui servira de lien pour jouer la playlist, dans la fenêtre du lecteur. Laissez vide un champ texte et la playlsit concernée ne sera pas enregistrée en base de données
<br />- envoi du formulaire et enregistrement en base de données : ensuite vous pouvez rajouter une miniature par upload ou lien : vous piuvez même directement l'envoyer par ftp avec pour nom '[nom du dossier].jpg'
<br /><br />
pour gérer une playlist :
<br />- cliquez sur la 2° icône à coté de la playlist
<br />- Ensuite suivez les étapes : n'oubliez pas la dernière !";
$lang['mp_help_div5'] = "Oui : pour celà rendez-vous dans la playlist de votre choix et, à l'étape 2, ajoutez votre fichier. Attention : même si le mp3 est sur le même serveur que ce plugin, il faut une url complète avec http://";
$lang['mp_help_div6'] = "Oui : depuis la 1.3 un block pour podcast et playlist distante a été ajouté. Attention : la playlist doit être au format Atom, Xspf (utilisé par le plugin), ou RSS. (Les podcast sont tous des RSS)";
$lang['mp_help_div7'] = 'Le support du plugin s\'effectue ici : <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781</a>';
$lang['mp_help_div8'] = "Nouveau : vous pouvez restreindre les droits d'écoute. En effet, si vous créer le groupe 'music_group', seul les utilisateurs appartenant à ce groupe pourront lire la musique. S'il n'est pas créé (cas par défaut), tout le monde peut accéder au lecteur";

$lang['mp_admin_leg'] = 'Gestion des playlist';
$lang['mp_admin_tt_synchro'] = 'Synchroniser avec le dossier /music';
$lang['mp_admin_folder'] = 'Dossier';
$lang['mp_admin_nm_pl'] = 'Nom de la playlist';
$lang['mp_admin_nm_edit'] = 'Editer le nom';
$lang['mp_admin_pl'] = 'Gérer la musique';
$lang['mp_admin_min'] = 'Gérer la miniature';

$lang['mp_admin_leg1'] = 'Podcast (RSS) ou playlist distante';

$lang['mp_admin_leg2'] = 'Option du plugin';
$lang['mp_admin_2_opt1'] = 'Mettre en évidence le plugin avec un bloc supplémentaire en haut du menu ';
$lang['mp_admin_2_opt2'] = 'Afficher le "header", la bannière';
$lang['mp_admin_2_opt3'] = 'Afficher le "footer", le copyright';
$lang['mp_admin_2_opt4'] = 'La pop_up';
$lang['mp_admin_2_opt4_1'] = 'Hauteur';
$lang['mp_admin_2_opt4_2'] = 'Largeur';

$lang['mp_admin_leg3'] = 'Option du lecteur';
$lang['mp_admin_3_opt1_1'] = 'Hauteur totale';
$lang['mp_admin_3_opt1_2'] = 'Largeur totale';
$lang['mp_admin_3_opt2_1'] = 'Hauteur de la playlist';
$lang['mp_admin_3_opt2_2'] = "[Info : Si la miniature est activée, l'idéal est que, la hauteur de la playlist plus les 20 px de la barre, forme la hauteur totale.]";
$lang['mp_admin_3_opt3_1'] = 'Afficher la miniature de la playlist';
$lang['mp_admin_3_opt3_2'] = 'Largeur de la miniature';
$lang['mp_admin_3_opt3_3'] = "[Info : Si la miniature est activée et si sa largeur est inférieur à la largeur totale, la miniature s'affichera à gauche(par defaut).] ";
$lang['mp_admin_3_opt4'] = 'Lire aléatoirement la musique';
$lang['mp_admin_3_opt5'] = 'Répéter la playlist une fois celle-ci terminée';
$lang['mp_admin_3_opt6'] = 'Lire cette playlist au lancement';
$lang['mp_admin_3_opt7'] = "Défilement automatiquement de la playlist (pas d'ascenseur)";


$lang['mp_adm_envoi_1'] = 'Description de';
$lang['mp_adm_envoi_2'] = 'contient';

$lang['mp_adm_return'] = 'Retourner aux playlist';
$lang['mp_adm_return_2'] = 'Retourner à la playlist';

$lang['mp_adm_edit_1'] = 'Texte descriptif';
$lang['mp_adm_edit_2'] = 'La playlist';
$lang['mp_adm_edit_3'] = 'Synchroniser la playlist';

$lang['mp_ou'] = 'OU';
$lang['mp_adm_info_img'] = "(ajouter une nouvelle image écrase l'ancienne)";

$lang['mp_adm_suppr_1'] = 'Que voulez vous faire ?';
$lang['mp_adm_suppr_2'] = 'Supprimer la playlist de la base de données seulement (à la prochaine synchro, elle reviendra) ';
$lang['mp_adm_suppr_3'] = 'Supprimer la playlist de la base de données, et le dossier en entier (fichiers mp3 et xml/ou php supprimés )';


$lang['mp_msg_suppr1'] = 'Suppression dossier réussie';
$lang['mp_msg_suppr2'] = 'Erreur : dossier non-supprimé';
$lang['mp_msg_suppr3'] = 'Suppression base de données reussie';
$lang['mp_msg_edit1'] = 'Edition reussi';
$lang['mp_msg_edit2'] = "Playlist mise à jour !";
$lang['mp_msg_edit3'] = "Rang modifié !";
$lang['mp_msg_edit4'] = "Suppression en base de données de :";
$lang['mp_msg_edit5'] = "Suppression  de :";

$lang['mp_adm_etape_1'] = "1° étape (optionnelle)";
$lang['mp_adm_et1_txt'] = "Vous avez ajouté ou supprimé des fichier mp3 dans le dossier ? Si oui, il faut synchroniser base de donnée/fichiers :";
$lang['mp_adm_etape_2'] = "2° étape (optionnelle)";
$lang['mp_adm_et2_txt'] = "Ajouter un ou des mp3 distants. ";
$lang['mp_adm_et2_nbr'] = "Nombre d'ajout : ";
$lang['mp_adm_et2_rg'] = "inséré au rang : ";
$lang['mp_adm_et2_rg2'] = "(si vide, en bas de playlist)";
$lang['mp_adm_etape_3'] = "3° étape !";
$lang['mp_adm_thead1'] = "NOM";
$lang['mp_adm_thead2'] = "URL";
$lang['mp_adm_thead3'] = "Monter";
$lang['mp_adm_thead4'] = "Descendre";
$lang['mp_adm_thead5'] = "Modifier url/nom";
$lang['mp_adm_thead6'] = "Supprimer";
$lang['mp_adm_etape_4'] = "4° étape !";
$lang['mp_adm_et4_txt'] = "Générer la playlist xml";
$lang['mp_adm_et4_ok'] = "Valider les modifications";

$lang['mp_adm_ed_sup_ok'] = "Etes-vous certain de supprimer ?";
$lang['mp_adm_ed_sup_info'] = "Si il s'agit d'un fichier du dossier '/music', il sera SUPPRIME physiquement : autrement seulement l'entrée correspondante dans la base données sera supprimée.";


$lang['mp_msg_err_aj1'] = "Erreur : champ url vide";
$lang['mp_msg_err_aj2'] = "Erreur : champ texte vide";


$lang['mp_msg_admin1'] = 'Aucun ajout';
$lang['mp_msg_admin_3_1'] = 'Fichier';
$lang['mp_msg_admin_3_2'] = 'créé';
$lang['mp_msg_admin_4'] = 'Ajout de';
$lang['mp_msg_admin_5'] = 'Configuration du lecteur sauvegardée';
$lang['mp_msg_admin_6'] = 'Configuration du plugin sauvegardée';

$lang['mp_uploadimg_ok'] = 'Upload réussi';
$lang['mp_linkimg_ok'] = 'Image enregistrée';
$lang['mp_info_min']="[ La miniature est optionnelle. ]";

$lang['mp_text_no_autorisation']="Vous n'êtes PAS autorisé à écouter de la musique ! Veuillez contacter l'administrateur afin de savoir pourquoi et éventuellement vous autoriser";


?>