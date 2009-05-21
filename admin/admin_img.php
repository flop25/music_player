<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
$m_p = get_plugin_data('music_player');

global $conf, $template, $lang, $page;
global $prefixeTable;
	load_language('plugin.lang', $m_p->plugin_path);


  $query = 'SELECT url, texte FROM '.MP_PLAYLIST.' WHERE id IN (\''.$_GET['id'].'\') ;';
  $result = pwg_query($query);
  $data = mysql_fetch_assoc($result);


// +--------------------------------------------------------+
// |              envoi du formulaire                       |
// +--------------------------------------------------------+
if (isset($_POST['ajout_image']) or isset($_POST['suppr']) ) {
if ( $_POST['ajout_image'] == "lien") 
{

  $source = ImageCreateFromJpeg($_POST['lien']);
	
  $dir="./plugins/music_player/music/".$data['url']."/".$data['url'].".jpg";
  ImageJpeg ($source, $dir);
	
  //$mp_msgs[] = "Ajout réussi !";
  $page['infos']=l10n('mp_linkimg_ok');
	 
} 
// +--------------------------------------------------------+
 elseif ( $_POST['ajout_image'] == "upload" ) 
// +--------------------------------------------------------+
{

function msgErreur($msg) {    //    le message d'erreur

        echo "<script language=\"javascript\">alert(\"".$msg."\");</script>\n";    //    le message d'erreur dans une boite d'alert javascript

    };    //    fin de fonction message d'erreur
function uploadImg ($fichier, $rep) {    //    fonction de transfert d'image vers le serveur
        // $fichier->nom du champ de fichier html, $rep->nom du répertoire dans lequel transférer l'image
        //    la fonction retourne le nom de fichier si réussite ou false
        if ( !is_dir($rep) ) {    //    le répertoire existe t-il ?
            msgErreur("Le répertoire n'existe pas !!!");    
            return false;
        };

        $nom_temp = $_FILES[$fichier]['tmp_name'];    //    le nom du fichier temporaire
        if ( !is_uploaded_file($nom_temp) ) {    //    vérifier si le fichier est présent
            msgErreur("Le fichier est introuvable");
            return false;
        };

        $type_fichier = $_FILES[$fichier]['type'];    // on vérifie maintenant l'extension

        if ( !strstr($type_fichier, 'jpg') && !strstr($type_fichier, 'jpeg') && !strstr($type_fichier, 'JPG') ) {
            msgErreur("Type de fichier non autorisé");
            return false;
        };

        //$nom_fichier = $data['url'].$type_fichier;     on copie le fichier dans le dossier de destination        
        $nom_fichier = $_FILES[$fichier]['name'];    // on copie le fichier dans le dossier de destination        
        if ( !move_uploaded_file($nom_temp, $rep.$nom_fichier) && !chmod($rep.$nom_fichier, 0644) ) {    //    transfèrer le fichier en codant les caractères spx
            msgErreur("Impossible de copier le fichier dans ".$rep);
            return false;
        };
        return $nom_fichier;
    };    //    fin de fonction uploadImg
	
	
    $rep="./plugins/music_player/music/".$data['url']."/";
    $test = uploadImg ("fichier", $rep);

 if ( $test )
 {
  $filename="./plugins/music_player/music/".$data['url']."/".$data['url'].".jpg";
  if ( file_exists($filename))
  {
   unlink($filename);
  }
  
  	 $page = $test; //sort l'extension du fichier
     $page = explode('.', $page);
     $nb = count($page);
     $nom_fichier = $page[0];
     for ($i = 1; $i < $nb-1; $i++){
     $nom_fichier .= '.'.$page[$i];
     }
     if(isset($page[1])){
     $ext_fichier = $page[$nb-1];
     }
     else {
     $ext_fichier = '';
     }

  rename($rep.$test, $rep.$data['url'].".jpg");
  //$mp_msgs[] = "upload réussi !";
  $page['infos']=l10n('mp_uploadimg_ok');
 }
}
// +--------------------------------------------------------+
 elseif ( isset($_POST['suppr']) ) 
// +--------------------------------------------------------+
{
   $filename="./plugins/music_player/music/".$data['url']."/".$data['url'].".jpg";
   unlink($filename);

}

}
// +--------------------------------------------------------+
// |               affichage des msg                        |
// +--------------------------------------------------------+
/*
if (count($mp_msgs) > 0)
{
  $template->append('mp_msgs',array());
  foreach ($mp_msgs as $mp_msg)
  {
    $template->append('mp_msgs.mp_msg',
                                 array('MP_MSG'=>$mp_msg));
  }
}*/
// +----------------------------------------+
// |          affichage défaut              |
// +----------------------------------------+

  $filename="./plugins/music_player/music/".$data['url']."/".$data['url'].".jpg";
  $filename2="./plugins/music_player/music/".$data['url']."/".$data['url'].".jpeg";
  $filename3="./plugins/music_player/music/".$data['url']."/".$data['url'].".JPG";
if ( file_exists($filename) )
{
    $template->append('miniature',
                                 array('URL'=>$filename ) );
}
elseif ( file_exists($filename2) )
{
    $template->append('miniature',
                                 array('URL'=>$filename ) );
}
elseif ( file_exists($filename3) )
{
    $template->append('miniature',
                                 array('URL'=>$filename ) );
}
else
{
    $template->append('rien',
                                 array('TXT'=>l10n('mp_info_min') ) );
}



$template->assign(  array(
                        'PLAYLIST' => $data['texte']
                      ));
$template->append('envoi',
                              array('ID'=>$_GET['id']) );

$template->set_filename('plugin_admin_content', $m_p->plugin_path.'template/admin_img.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');


?>