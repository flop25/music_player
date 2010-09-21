<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
$m_p = get_plugin_data('music_player');

global $conf, $template, $lang, $page;
global $prefixeTable;
	load_language('plugin.lang', $m_p->plugin_path);
//$mp_msgs = array();
  $template->assign(  array(
                          'MP_PATH' => MP_PATH
                         ));

// +----------------------------------------+
// |              Edit texte                |
// +----------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi']=='edit_txt' )
{

  $txt = addslashes($_POST['texte']);
  $query = '
UPDATE '.MP_PLAYLIST.'
  SET texte=\''.$txt.'\'
  WHERE id IN (\''.$_POST['id'].'\')
   ;';
   pwg_query($query);
   $page['infos'][]=l10n('mp_msg_edit1');
   //$mp_msgs[] = $lang['mp_msg_edit1'];

}
if (isset($_GET['id']))
{
  $query = 'SELECT texte FROM '.MP_PLAYLIST.' WHERE id IN (\''.$_GET['id'].'\') ;';
  $result = pwg_query($query);
  $data = mysql_fetch_assoc($result);
  $txt = stripslashes($data['texte']);
  $template->append('edit_txt',
                               array('TXT'=>$txt, 'ID'=>$_GET['id']) );
  $template->assign(  array(
                          'PLAYLIST' => $txt
                         ));

}
// +----------------------------------------+
// |              Edit externe              |
// +----------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi']=='edit_ex' )
{

  $txt = addslashes($_POST['texte']);
  $url = addslashes($_POST['url']);
  $query = '
UPDATE '.MP_PLAYLIST.'
  SET texte=\''.$txt.'\', url=\''.$url.'\'
  WHERE id IN (\''.$_POST['id'].'\')
   ;';
   pwg_query($query);
	 
     $filename="./plugins/music_player/music/externe/".$_POST['id'].".php";
     $rep="./plugins/music_player/music/externe";
	 if ( !is_dir($rep) ) {    //    le répertoire existe t-il ?
       mkdir ($rep);
     }
	 $_php ='<?php ';
	 $_php .='header("content-type:text/xml;charset=utf-8"); ';
	 $_php .='readfile(\''.$url.'\'); ';
	 $_php .='exit(); ';
	 $_php .='?>';
     $file= fopen($filename, "w");
     if (!is_writable($filename) ) {
	   die("Le fichier est inaccessible en écriture");
	 }
     fwrite($file, $_php);

//   $mp_msgs[] = $lang['mp_msg_edit1'];
   $page['infos'][]=l10n('mp_msg_edit1');

}
if (isset($_GET['ex_id']))
{
  $query = 'SELECT url, texte FROM '.MP_PLAYLIST.' WHERE id IN (\''.$_GET['ex_id'].'\') ;';
  $result = pwg_query($query);
  $data = mysql_fetch_assoc($result);
  $txt = stripslashes($data['texte']);
  $url = stripslashes($data['url']);
  $template->append('edit_ex',
                               array('TXT'=>$txt, 'URL'=>$url, 'ID'=>$_GET['ex_id']) );
  $template->assign(  array(
                          'PLAYLIST' => $txt
                         ));

}
// +-----------------------------------------+
// |             Edit Musique                |
// +-----------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi']=="edit_music")
{
  $nom = addslashes($_POST['nom']);
  $url = addslashes($_POST['url']);
  $query = '
UPDATE '.MP_MUSIC.'
  SET nom=\''.$nom.'\', url=\''.$url.'\'
  WHERE id IN (\''.$_POST['id'].'\')
   ;';
   pwg_query($query);
   //$mp_msgs[] = $lang['mp_msg_edit1'];
   $page['infos'][]=l10n('mp_msg_edit1');

}
if (isset($_GET['music_id']))
{
  $query = 'SELECT pl_id, nom, url FROM '.MP_MUSIC.' WHERE id IN (\''.$_GET['music_id'].'\') ;';
  $result = pwg_query($query);
  $data = mysql_fetch_assoc($result);
  $nom = stripslashes($data['nom']);
  $url = stripslashes($data['url']);
  $template->append('edit_music',
                               array('NOM'=>$nom,
							         'URL'=>$url,
							         'ID'=>$_GET['music_id'],
							         'PL'=>$data['pl_id']
									 ) );
  $template->assign(  array(
                          'PLAYLIST' => $nom
                         ));
}
// +-----------------------------------------+
// |        Suppression Musique              |
// +-----------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi']=="suppr")
{
  $query = 'SELECT pl_id, url, rang FROM '.MP_MUSIC.' WHERE id IN (\''.$_POST['id'].'\') ;';
  $result = pwg_query($query);
  $suppr = mysql_fetch_assoc($result);
  $url = stripslashes($suppr['url']);
  
  if(preg_match('`^music`',$url))
  {
   $filename="./plugins/music_player/".$url;
   unlink($filename);
   //$mp_msgs[] = $lang['mp_msg_edit5'].$url;
   $page['infos'][]=l10n('mp_msg_edit5').$url;
  }

  $rep = pwg_query('SELECT MAX(rang) AS max FROM '.MP_MUSIC.' WHERE pl_id='.$suppr['pl_id'].';');
  $rang = mysql_fetch_assoc($rep);

  $i = $suppr['rang'] + 1;
  while ($i<=$rang['max']) {
    $rep = pwg_query('SELECT COUNT(*) AS result FROM '.MP_MUSIC.' WHERE rang IN (\''.$i.'\') AND pl_id IN (\''.$suppr['pl_id'].'\') ;');
    $res = mysql_fetch_array($rep);
    if ($res['result'] != 0)
    {
      $query = 'SELECT id FROM '.MP_MUSIC.' WHERE rang IN (\''.$i.'\') AND pl_id IN (\''.$suppr['pl_id'].'\') ;';
      $result = pwg_query($query);
	  $meme = mysql_fetch_assoc($result);
	  $i_inf = $i - 1 ;
	  $query = 'UPDATE '.MP_MUSIC.' SET rang=\''.$i_inf.'\' WHERE id IN (\''.$meme['id'].'\') ;';
      pwg_query($query);
    }
    $i++;
  }//while
 pwg_query('DELETE FROM '.MP_MUSIC.' WHERE id IN (\''.$_POST['id'].'\')');
// $mp_msgs[] = $lang['mp_msg_edit4'].$url;
 $page['infos'][]=l10n('mp_msg_edit4').$url;
}
if (isset($_GET['suppr']))
{
  $query = 'SELECT pl_id, nom FROM '.MP_MUSIC.' WHERE id IN (\''.$_GET['suppr'].'\') ;';
  $result = pwg_query($query);
  $data = mysql_fetch_assoc($result);
  $template->append('suppr',
                               array('ID'=>$_GET['suppr'],
							         'PL'=>$data['pl_id']
									 ) );
  $nom = stripslashes($data['nom']);
  $template->assign(  array(
                          'PLAYLIST' => $nom
                         ));

}


// +-----------------------------------------------------------------------+
// |                        envoi monter/descendre                         |
// +-----------------------------------------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi']=="rang" )
{
  $query = '
UPDATE '.MP_MUSIC.'
  SET rang=\'-1\'
  WHERE rang IN (\''.$_POST['rang'].'\') AND pl_id IN (\''.$_GET['music'].'\') 
   ;';
   pwg_query($query);
   
  $query = '
UPDATE '.MP_MUSIC.'
  SET rang=\'-2\'
  WHERE rang IN (\''.$_POST['nouv_rang'].'\') AND pl_id IN (\''.$_GET['music'].'\') 
   ;';
   pwg_query($query);

  $query = '
UPDATE '.MP_MUSIC.'
  SET rang=\''.$_POST['nouv_rang'].'\'
  WHERE rang IN (\'-1\') AND pl_id IN (\''.$_GET['music'].'\') 
   ;';
   pwg_query($query);
   
  $query = '
UPDATE '.MP_MUSIC.'
  SET rang=\''.$_POST['rang'].'\'
  WHERE rang IN (\'-2\') AND pl_id IN (\''.$_GET['music'].'\') 
   ;';
   pwg_query($query);
   
  //$mp_msgs[] = $lang['mp_msg_edit3'];
  $page['infos'][]=l10n('mp_msg_edit3');
}
// +-----------------------------------------------------------------------+
// |                                AJOUT                                  |
// +-----------------------------------------------------------------------+
if ( !isset($_POST['nbr_ajout']) and !isset($_GET['suppr']))
{
$n=1;
}
elseif ( isset($_POST['nbr_ajout']) )
{
$n=$_POST['nbr_ajout'];
}
// |              EXtra                |
if (isset($_GET['music']))//affichage du contenu de la playlist
{  $template->assign(array('etape_ID' => $_GET['music'], 'etape_I' => $n  ) );

  for($i=1; $i <= $n ; $i++)
  {
    $template->append('ajout', array('I' => $i ) );
  }
}// +-----------------------------------------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi']=='ajout')
{
 $rep = pwg_query('SELECT MAX(rang) AS max FROM '.MP_MUSIC.' WHERE pl_id='.$_GET['music'].';');
 $rg = mysql_fetch_assoc($rep);
 for($i=1; $i <= $_POST['nbr'] ; $i++)
 {
	 if ( $_POST['url_'.$i.'']=="" ) {	 $mp_msgs[] = $lang['mp_msg_err_aj1'];	 continue;}
	 if ( $_POST['nom_'.$i.'']=="" ) {	 $mp_msgs[] = $lang['mp_msg_err_aj2'];	 continue;}
	 
	 $url = addslashes($_POST['url_'.$i.'']);
     $nom = addslashes($_POST['nom_'.$i.'']);
	 
	 if ( $_POST['rang_'.$i.'']>$rg['max'] or $_POST['rang_'.$i.'']==NULL) {	 $rang=$rg['max']+1;	 }
	 else {
	  $rang=$_POST['rang_'.$i.''];
	  //[ on doit décaler les autres pour insérer le nouveau
      $query = 'SELECT id, rang FROM '.MP_MUSIC.' WHERE pl_id='.$_GET['music'].' AND rang>='.$rang.' ORDER BY rang ;';
      $result = pwg_query($query);
      while ($sup = mysql_fetch_assoc($result)){
	  
	    $n_rang = $sup['rang'] + 1 ;
        $query = '
        UPDATE '.MP_MUSIC.'
        SET rang=\''.$n_rang.'\'
        WHERE id IN (\''.$sup['id'].'\') 
        ;';
        pwg_query($query);
	  
	  }//while
	 }
	 $query = '
  INSERT INTO '.MP_MUSIC.'
  (pl_id, rang, url, nom)
  VALUES
  (\''.$_GET['music'].'\', \''.$rang.'\', \''.$url.'\', \''.$nom.'\' )
;';
     pwg_query($query);
	 //$mp_msgs[] = $lang['mp_msg_admin_4'].$url;
	 $page['infos'][]=l10n('mp_msg_admin_4').$url;
 }
}


// +-----------------------------------------------------------------------+
// |                          Synchro bdd/fichier                          |
// +-----------------------------------------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi']=='synchro_bdd')
{

  $query = 'SELECT url FROM '.MP_PLAYLIST.' WHERE id IN (\''.$_POST['id_playlist'].'\') ;';
  $result = pwg_query($query);
  $dt = mysql_fetch_assoc($result);

/////[ recup music 
	 $fichier = array();
     $dir_2 = opendir('./plugins/music_player/music/'.$dt['url']);
     while(false!==($file = readdir($dir_2))){ //on lit tout et on récupere tout les dossiers dans $folder
    
       if(!in_array($file, array('.','..'))){ //on eleve le parent et le courant '. et ..'
	 if(is_file($file)) { continue; }
	 $page = $file; //sort l'extension du fichier
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
    
     if($ext_fichier == 'mp3') { //On ne prend que les mp3 -- A tester : mid, wav...

///////[ Ajout ?
       $nom_fichier = addslashes($nom_fichier);
	   //$rep = pwg_query('SELECT COUNT(*) AS result FROM '.MP_MUSIC.' WHERE pl_id='.$_POST['id_playlist'].' AND url REGEXP \''.$nom_fichier.'\' ;');like '%".$recherche."%'"
	   $rep = pwg_query('SELECT COUNT(*) AS result FROM '.MP_MUSIC.' WHERE pl_id='.$_POST['id_playlist'].' AND url LIKE \'%'.$nom_fichier.'%\' ;');
       $res = mysql_fetch_array($rep);
	   if ($res['result']==0)
	   {
	   array_push($fichier, $file);
	   }
     
     } 
	 }//fin if in array
     }//while
  
  $rep = pwg_query('SELECT MAX(rang) AS max FROM '.MP_MUSIC.' WHERE pl_id='.$_POST['id_playlist'].';');
  $rang = mysql_fetch_assoc($rep);
  $n=$rang['max']+1;

///////[ Ajout ds bdd
	foreach($fichier as $file) {
	 $page = $file; //sort le nom fichier
     $page = explode('.', $page);
     $nb = count($page);
     $nom_fichier = $page[0];
     $file = utf8_encode(addslashes($file));
     $nom_fichier = utf8_encode(addslashes($nom_fichier));
	 $query = '
  INSERT INTO '.MP_MUSIC.'
  (pl_id, rang, url, nom)
  VALUES
  (\''.$_POST['id_playlist'].'\', \''.$n.'\', \'music/'.$dt['url'].'/'.$file.'\', \''.$nom_fichier.'\' )
;';
     pwg_query($query);
	 //$mp_msgs[] = $lang['mp_msg_admin_4'].$file;
	 $page['infos'][]=l10n('mp_msg_admin_4').$file;
	 $n++;
	 }
 
//////[ Fichiers supprimés ?
  $query = 'SELECT * FROM '.MP_MUSIC.' WHERE pl_id='.$_GET['music'].' ORDER BY rang ;';
  $result = pwg_query($query);
  while ($music = mysql_fetch_assoc($result)){
  $url = stripslashes($music['url']);
  
   if(preg_match('`^music`', $music['url'])) {
    $filename="./plugins/music_player/".$url;
    $filename=utf8_decode($filename);
    if (!file_exists($filename)) {
		$music['url']=addslashes($music['url']);
      pwg_query('DELETE FROM '.MP_MUSIC.' WHERE url IN (\''.$music['url'].'\')');
	  //$mp_msgs[] = $lang['mp_msg_edit4'].$url;
	  $page['infos'][]=l10n('mp_msg_edit4').$url;
    }
   }
  }
}
// +-----------------------------------------------------------------------+
// |                          Génération   XML                             |
// +-----------------------------------------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi']=='synchro_xml')
{
  $query = 'SELECT url FROM '.MP_PLAYLIST.' WHERE id IN (\''.$_POST['id_playlist'].'\') ;';
  $result = pwg_query($query);
  $dt = mysql_fetch_assoc($result);

  $query = 'SELECT * FROM '.MP_MUSIC.' WHERE pl_id='.$_GET['music'].' ORDER BY rang ;';
  $result = pwg_query($query);

  $filename="./plugins/music_player/music/".$dt['url']."/".$dt['url'].".xml";

//////////////////////Création XML  
      $_xml ="<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n";
      $_xml .="<playlist version=\"1\" xmlns=\"http://xspf.org/ns/0/\">\r\n";
      $_xml .="\t<trackList>\r\n";

      while ($music = mysql_fetch_assoc($result)){
	    $nom_fichier=stripslashes($music['nom']);
	    $url=stripslashes($music['url']);
        $_xml .="\t\t<track>\r\n";
        $_xml .="\t\t\t<title>".$nom_fichier."</title>\r\n";
        $_xml .="\t\t\t<location>".$url."</location>\r\n";
        $_xml .="\t\t\t<image>music/".$dt['url']."/".$dt['url'].".jpg</image>\r\n";
        $_xml .="\t\t</track>\r\n";
	  }
	  
      $_xml .="\t</trackList>\r\n";
      $_xml .="</playlist>";
	  $file= fopen($filename, "w");
	if (!is_writable($filename) ) {
	 die("Le fichier est inaccessible en écriture");
	 }
      fwrite($file, $_xml);

//  $mp_msgs[] = $lang['mp_msg_edit2'];
  $page['infos'][]=l10n('mp_msg_edit2');
}
// +-----------------------------------------------------------------------+
if (isset($_GET['music']))//affichage du contenu de la playlist
// +-----------------------------------------------------------------------+
{
  $query = 'SELECT texte FROM '.MP_PLAYLIST.' WHERE id='.$_GET['music'].' ;';
  $result = pwg_query($query);
  $playlist = mysql_fetch_assoc($result);
  
  $txt = stripslashes($playlist['texte']);
  $template->assign(  array(
                        'PLAYLIST' => $txt
                      ));

  $template->assign(array('playlist_TEXTE'=>$txt, 'playlist_ID'=>$_GET['music']));

  $rep = pwg_query('SELECT MAX(rang) AS max FROM '.MP_MUSIC.' WHERE pl_id='.$_GET['music'].';');
  $rang = mysql_fetch_assoc($rep);
    
  $query = 'SELECT * FROM '.MP_MUSIC.' WHERE pl_id='.$_GET['music'].' ORDER BY rang ;';
  $result = pwg_query($query);
  $num=0;
   while ($music = mysql_fetch_assoc($result)){
    $music_url = stripslashes($music['url']);
    $music_nom = stripslashes($music['nom']);
	
	if ($music['rang']==$rang['max'] and $music['rang']=='1')
	{
	$template->append('music',
                                 array('NOM' => $music_nom,
								       'FILE' => $music_url,
								       'ID' => $music['id'],
								       'CLASS' => ($num++ % 2 == 1) ? 'row2' : 'row1'));
	}
	elseif ($music['rang']==$rang['max'])
	{
    $template->append('music',
                                 array('NOM' => $music_nom,
								       'FILE' => $music_url,
								       'ID' => $music['id'],
								       'CLASS' => ($num++ % 2 == 1) ? 'row2' : 'row1',
								       'UP_RANG' => $music['rang'],
								       'UP_RANG_NEW' => ($music['rang']-1) ));
	}
	elseif ($music['rang']=='1')
	{
    $template->append('music',
                                 array('NOM' => $music_nom,
								       'FILE' => $music_url,
								       'ID' => $music['id'],
								       'CLASS' => ($num++ % 2 == 1) ? 'row2' : 'row1',
								       'D_RANG' => $music['rang'],
								       'D_RANG_NEW' => ($music['rang']+1) ));
	}
	else
	{
    $template->append('music',
                                 array('NOM' => $music_nom,
								       'FILE' => $music_url,
								       'ID' => $music['id'],
								       'CLASS' => ($num++ % 2 == 1) ? 'row2' : 'row1',
								       'D_RANG' => $music['rang'],
								       'D_RANG_NEW' => ($music['rang']+1),
								       'UP_RANG' => $music['rang'],
								       'UP_RANG_NEW' => ($music['rang']-1) ));
	}
  }
}

// +-----------------------------------------------------------------------+
// |               affichage des msg                                       |
// +-----------------------------------------------------------------------+
/*
if (count($mp_msgs) > 0)
{
  $template->append('mp_msgs',array());
  foreach ($mp_msgs as $mp_msg)
  {
    $template->append('mp_msgs.mp_msg',
                                 array('MP_MSG'=>$mp_msg));
  }
}
*/
$template->set_filename('plugin_admin_content', $m_p->plugin_path.'template/admin_edit.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');


?>