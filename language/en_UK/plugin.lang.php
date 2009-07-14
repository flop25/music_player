<?php
$lang['lien_titre'] = 'Listen Music';
$lang['lien_expl'] = 'Show a pop-up emdebed player';

$lang['mp_evidence_title'] = 'Information';
$lang['mp_evidence_txt'] = 'Gallery have a music player. Do you want to show it ?';
$lang['mp_evidence_2'] = 'Remember it';

$lang['mp_montre'] = 'Show playlists';
$lang['mp_cache'] = 'Hide playlists';

$lang['mp_send'] = 'Send';
$lang['mp_need_help'] = "Need Help ?";

$lang['mp_help_q1'] = "Where put mp3 ?";
$lang['mp_help_q2'] = "I have added mp3 but i didn't find them in the playlist !";
$lang['mp_help_q3'] = "What is about 'Show thumnbail in playlist' ?";
$lang['mp_help_q4'] = "How does this plugin work ?";
$lang['mp_help_q5'] = "How can i added distant mp3 or localised in others folders ?";
$lang['mp_help_q6'] = "It's possible to add podcats ?";
$lang['mp_help_q7'] = "I can't find answers here / I have some problemes";
$lang['mp_help_q8'] = "New : you can restric the acces of the player";

$lang['mp_help_div1'] = "Mp3 must be put into Music folder of the plugin like this \"[PWG folder]/plugins/music_player/music/[new playlist]/\". You should make your playlists order by artist (music/moby/go.pm3), or put artist's mane directly into file name (music/electro/moby-go.pm3)";
$lang['mp_help_div2'] = "You do not update your playlist : So click on 2nd icon ('Manage music') near the playlist, then in final step, do 'Submit modifications'";
$lang['mp_help_div3'] = "It is about thumbnail that you can insert (3rd icon ('Manage thumbnail') near the playlist";
$lang['mp_help_div4'] = "This plugin allow to create and manage some playlists, personnalise music player and his pop-up.<br />
To create a playlist :
<br />- First of all, You need a folder /music in plugin folder. IMPORTANT !! (Free users you are not concerne by this following notice) /music folder must have all autorisations en write/read (chmod 777 or rwxrwxrwx).
<br />- Then, you create another folder in /music which will contain mp3 and playlist with .xml extension. Be careful : folder's name is important : SO DO NOT USE SPECIALS CHARACTERES for the name of the folder
<br />- Then click on 'Synchronise with /music' : folders in /music have been listed with mp3 files. Playlists with xml extension have been created with the same name of the folder.
<br/>- reception of the form: it is used to have a small descriptive text which will be used as link to play the playlist, in the window of the player. Leave empty a field text and the playlsit concerned will not be recorded in data base
<br/>- sending of the form and recording in data base: then you can add a miniature by upload or link: you can even directly send it by ftp with for name '[name of the file] .jpg'?
<br /><br />
To manage playlist :
<br />- Click on 2nd icon near the playlist
<br />- Then follow these steps : Dont forget the last one !";
$lang['mp_help_div5'] = "Yes : For this go into the playlist of your choice and, on step two, add your file. Be careful : Even if mp3 is on the same server that this plugin, you need to write complete ardress with http://";
$lang['mp_help_div6'] = "Yes : Since 1.3 a block for podcast and distant playlist have been added. Be careful  : playlist must be in Atom, Xspf (use by the plugin), or RSS format. (podcast are always RSS)";
$lang['mp_help_div7'] = 'You can find support for the plugins here : <a href="http://forum.phpwebgallery.net/viewtopic.php?pid=68781"> http://forum.phpwebgallery.net/viewtopic.php?pid=68781/a>';
$lang['mp_help_div8'] = "New : you can restric the acces of the player. Indeed, if you create the group 'music_group', only the members of this group will be able to listen to the music. If it doesn't exist (the case on default),  everyone can acces to the player";


$lang['mp_admin_leg'] = 'Playlist manager';
$lang['mp_admin_tt_synchro'] = 'Synchronise with /music folder';
$lang['mp_admin_folder'] = 'Folder';
$lang['mp_admin_nm_pl'] = 'Name of the playlist';
$lang['mp_admin_nm_edit'] = 'Edit name';
$lang['mp_admin_pl'] = 'Manage music';
$lang['mp_admin_min'] = 'Manage thumbnail';
$lang['mp_admin_leg1'] = 'Podcast (RSS) or distant playlist';

$lang['mp_admin_leg2'] = 'Option of the plugin';
$lang['mp_admin_2_opt1'] = 'Revealed plugin with a bloc in the Menubar ';
$lang['mp_admin_2_opt2'] = 'Show the "header"';
$lang['mp_admin_2_opt3'] = 'Show the "footer", copyright';
$lang['mp_admin_2_opt4'] = 'Pop_up';
$lang['mp_admin_2_opt4_1'] = 'height';
$lang['mp_admin_2_opt4_2'] = 'width';

$lang['mp_admin_leg3'] = 'Option of the player';
$lang['mp_admin_3_opt1_1'] = 'total height';
$lang['mp_admin_3_opt1_2'] = 'total width';
$lang['mp_admin_3_opt2_1'] = 'height of the playlist';
$lang['mp_admin_3_opt2_2'] = "[Info : If thumbnail is turn on, the height of the playslist and 20 px of the bar, is equal to the total height.]";
$lang['mp_admin_3_opt3_1'] = 'Show thumbnail of the playlist';
$lang['mp_admin_3_opt3_2'] = 'width of the thumbnail';
$lang['mp_admin_3_opt3_3'] = "[Info :If thumbnail is turn on and if her width is < of total width, so thumbnail will show on the left (by default).] ";
$lang['mp_admin_3_opt4'] = 'Read music randomly';
$lang['mp_admin_3_opt5'] = 'Repeat playlist when is finished';
$lang['mp_admin_3_opt6'] = 'Read this playslit at the beginning';
$lang['mp_admin_3_opt7'] = "Run automatically of the playlist (no sidebar)";
$lang['mp_admin_3_opt9'] = "Style applied by default :  ";
$lang['mp_admin_3_opt9b'] = "do not change";
$lang['mp_admin_3_opt10'] = "Activate the automatic management of the styles: the styles applied to the player will be the one of the user. If this option is deactivated or if the style of the user does not exist for the player, then the subject applied is the one by default, the precedent";



$lang['mp_adm_envoi_1'] = 'Description of';
$lang['mp_adm_envoi_2'] = 'contains';

$lang['mp_adm_return'] = 'Back to playlists';
$lang['mp_adm_return_2'] = 'Back to the playlist';

$lang['mp_adm_edit_1'] = 'Descriptio text';
$lang['mp_adm_edit_2'] = 'Playlist';
$lang['mp_adm_edit_3'] = 'Synchronise the playlist';

$lang['mp_ou'] = 'OR';
$lang['mp_adm_info_img'] = "(add a new image erase the old one)";

$lang['mp_adm_suppr_1'] = 'What do you want to do  ?';
$lang['mp_adm_suppr_2'] = 'Delete playlist of the data base only (With le next syncronisation, she will be create again) ';
$lang['mp_adm_suppr_3'] = 'Delete playlist of the data base, AND the folder (mp3 ,xml files will be erased)';


$lang['mp_msg_suppr1'] = 'Folder deleted successfully';
$lang['mp_msg_suppr2'] = 'Error : folder not deleted';
$lang['mp_msg_suppr3'] = 'Data base deleted succesfully';
$lang['mp_msg_edit1'] = 'Edit OK';
$lang['mp_msg_edit2'] = "Playlist updated !";
$lang['mp_msg_edit3'] = "row  modified !";
$lang['mp_msg_edit4'] = "Remove from the data base  :";
$lang['mp_msg_edit5'] = "Remove from :";

$lang['mp_adm_etape_1'] = "First step (optional)";
$lang['mp_adm_et1_txt'] = "You have added ou removed some mp3 files ib the folder ? If Yes, you have to syncronise to the data base:";
$lang['mp_adm_etape_2'] = "2nd step (optionnal)";
$lang['mp_adm_et2_txt'] = "Add distant mp3. ";
$lang['mp_adm_et2_nbr'] = "Number of added : ";
$lang['mp_adm_et2_rg'] = "Insert a row : ";
$lang['mp_adm_et2_rg2'] = "(if empty, bottom of the playlist)";
$lang['mp_adm_etape_3'] = "3rd step !";
$lang['mp_adm_thead1'] = "NAME";
$lang['mp_adm_thead2'] = "URL";
$lang['mp_adm_thead3'] = "UP";
$lang['mp_adm_thead4'] = "DOWN";
$lang['mp_adm_thead5'] = "Change the url/name";
$lang['mp_adm_thead6'] = "Delete";
$lang['mp_adm_etape_4'] = "4th step !";
$lang['mp_adm_et4_txt'] = "Make a playlist .xml";
$lang['mp_adm_et4_ok'] = "Submit modifications";

$lang['mp_adm_ed_sup_ok'] = "Are you sure ?";
$lang['mp_adm_ed_sup_info'] = "If it is a file of '/music' folder, it will be deleted  : in other case, only data base entry will be deleted.";


$lang['mp_msg_err_aj1'] = "Error : field url empty";
$lang['mp_msg_err_aj2'] = "Error : field text empty";


$lang['mp_msg_admin1'] = 'No added';
$lang['mp_msg_admin_3_1'] = 'File';
$lang['mp_msg_admin_3_2'] = 'Created';
$lang['mp_msg_admin_4'] = 'Add from';
$lang['mp_msg_admin_5'] = 'Configuration of music player saved';
$lang['mp_msg_admin_6'] = 'Configuration of the plugin saved';

$lang['mp_uploadimg_ok'] = 'Picture saved';
$lang['mp_linkimg_ok'] = 'Picture saved';
$lang['mp_info_min']="[ The thumbnail is optional. ]";

$lang['mp_text_no_autorisation']="You are not allowed to listen music ! Please contact the webmaster to know why, and maybe to be allow";


?>