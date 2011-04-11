<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
$m_p = get_plugin_data('music_player');

global $conf, $template, $lang, $page;
global $prefixeTable;
load_language('plugin.lang', $m_p->plugin_path);

$page['infos'] = array();

$template->assign(array(
	'PLUGIN_PATH' 			=> $m_p->plugin_path, 
	));

// +-----------------------------------------------------------------------+
// |                envoi d'une synchro                                     |
// +-----------------------------------------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi'] == "synchro")
{
 $template->set_filename('envoi', $m_p->plugin_path.'template/admin_envoi.tpl');

 $repertoire='./plugins/music_player/music';
 $dossier = array();
	
 if (is_dir($repertoire)){
    
   $dir = opendir($repertoire); //ouvre le repertoire courant désigné par la variable
   while(false!==($folder = readdir($dir))){ //on lit tout et on récupere tout les dossiers dans $folder
     if(is_file($folder)) { continue; }
    
     if(!in_array($folder, array('.','..'))){ //on eleve le parent et le courant '. et ..'
       if($folder != 'externe') { //On ne prend que les mp3 -- A tester : mid, wav...
         array_push($dossier, $folder);
	    }
      }//fin if in array
   }//while
 }
    
 natcasesort($dossier);
 
 //////////////[ recherche des nouveaux dossier ]
 $n=0;
 foreach($dossier as $value) {
 $n++;

	   ///on vérife si ils n'existe pas déjà
	   $rep = pwg_query('SELECT COUNT(*) AS result FROM '.MP_PLAYLIST.' WHERE url IN (\''.$value.'\') ;');
       $res = mysql_fetch_array($rep);
	   if ($res['result']!=0)
	   {
		   $n--;
	      continue;
	   }
	   
	   ///[ récup de la music juste pour info
     $fichier = array();
     $dir_2 = opendir('./plugins/music_player/music/'.$value); //ouvre le repertoire courant désigné par la variable
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
     array_push($fichier, $file);
     } 
	        }//fin if in array
     }//while
   $fichier = implode(",", $fichier);

   $template->append('syn',
    array('RESULT' => $value,
          'RESULT_M' => $fichier,//Ne sert que pour avoir un aperçu
          'NBR' => $n,
		  ));


 }//foreach  

if ($n ==0)
{
  array_push($page['infos'], l10n('mp_msg_admin1'));
}
else
{
$template->assign(
  array(
    'NBR_TT' => $n,
    ));
$template->assign_var_from_handle('ENVOI', 'envoi');
}

/////////////////////[ Xml 'pour tous' ? : v1.2 => plus pour tous seulement pour si nouveau

 foreach($dossier as $value) {

  $filename="./plugins/music_player/music/".$value."/".$value.".xml";
  if (file_exists($filename)) {
    continue; // si il existe on passe, la synchro des pistes se fait individuellement par soucis d'optimisation
  }
  /// v 1.2 on ne cree que pour les nouveaux
  $rep = pwg_query('SELECT COUNT(*) AS result FROM '.MP_PLAYLIST.' WHERE url IN (\''.$value.'\') ;');
  $res = mysql_fetch_array($rep);
  if ($res['result']!=0)
  {
    continue;
  }

    ///[ recup music 
	 $fichier = array();
     $dir_2 = opendir('./plugins/music_player/music/'.$value); //ouvre le repertoire courant désigné par la variable
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
     array_push($fichier, $file);
     } 
	        }//fin if in array
     }//while
     natcasesort($fichier); //la fonction natcasesort( ) est la fonction de tri standard sauf qu'elle ignore la casse
  /*$fichier_sql = implode("/", $fichier);
  $fichier_sql = addslashes($fichier_sql);
  ////[ maj de la bdd 
  $result = pwg_query('SELECT id FROM '.MP_PLAYLIST.' WHERE url IN (\''.$value.'\') ;');
  $data = mysql_fetch_array($result);
  $query = '
UPDATE '.MP_PLAYLIST.'
  SET music=\''.$fichier_sql.'\'
  WHERE id IN (\''.$data['id'].'\')
   ;';
	pwg_query($query);*/

//////////////////////Création XML  
      $_xml ="<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n";
      $_xml .="<playlist version=\"1\" xmlns=\"http://xspf.org/ns/0/\">\r\n";
      $_xml .="\t<trackList>\r\n";
	  
	  /*$p_url = explode('/', $_SERVER['PHP_SELF']);
      $count = count($p_url);
	  $url = str_replace($p_url[$count-1], '', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);*/
	 
      foreach($fichier as $file) {
	   ///on va trouver le nom du fichier
      $page = $file;
      $page = explode('.', $page);
      $nb = count($page);
      $nom_fichier = $page[0];
       for ($i = 1; $i < $nb-1; $i++){
         $nom_fichier .= '.'.$page[$i];
       }
      $_xml .="\t\t<track>\r\n";
      $_xml .="\t\t\t<title>".$nom_fichier."</title>\r\n";
      $_xml .="\t\t\t<location>music/".$value."/".$file."</location>\r\n";
      $_xml .="\t\t\t<image>music/".$value."/".$value.".jpg</image>\r\n";
      $_xml .="\t\t</track>\r\n";
	  }//fin foreach
	  
      $_xml .="\t</trackList>\r\n";
      $_xml .="</playlist>";
	  $file= fopen($filename, "w");
	if (!is_writable($filename) ) {
	 die("Le fichier est inaccessible en écriture");
	 }
      fwrite($file, $_xml);

  //$mp_msgs[] = $lang['mp_msg_admin_3_1'].$value.'/'.$value.'.xml'.$lang['mp_msg_admin_3_2'];
  array_push($page['infos'], l10n('mp_msg_admin_3_1').$value.'/'.$value.'.xml'.l10n('mp_msg_admin_3_2'));
 }
}//fin post

// +-----------------------------------------------------------------------+
// |                envoi des noms après synchro                           |
// +-----------------------------------------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi'] == "texte")
{
  for ($n = 1; $n <= $_POST['nbr']; $n++)
  {
     if($_POST['texte_'.$n.'']=="")
	 { continue; }
	 ///[ creation pl
     $texte = addslashes($_POST['texte_'.$n.'']);
     $query = '
INSERT INTO '.MP_PLAYLIST.'
  (type, url, texte)
  VALUES
  (\'local\', \''.$_POST['url_'.$n.''].'\', \''.$texte.'\')
;';
     pwg_query($query);

	 ///[ listage fichier
	 $fichier = array();
     $dir_2 = opendir('./plugins/music_player/music/'.$_POST['url_'.$n.'']); //ouvre le repertoire courant désigné par la variable
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
       array_push($fichier, $file);
      }
	 }//fin if in array
     }//while
    natcasesort($fichier); //la fonction natcasesort( ) est la fonction de tri standard sauf qu'elle ignore la casse

    $result = pwg_query('SELECT id FROM '.MP_PLAYLIST.' WHERE url IN (\''.$_POST['url_'.$n.''].'\') ;');
    $data_pl = mysql_fetch_assoc($result);
	$rang=1;

	foreach($fichier as $file) {
	
	$page = $file; //sort nom_fichier
    $page = explode('.', $page);
    $nb = count($page);
    $nom_fichier = $page[0];

     $file = addslashes($file);
     $nom_fichier = addslashes($nom_fichier);
	 $query = '
  INSERT INTO '.MP_MUSIC.'
  (pl_id, rang, url, nom)
  VALUES
  (\''.$data_pl['id'].'\', \''.$rang.'\', \'music/'.$_POST['url_'.$n.''].'/'.$file.'\', \''.$nom_fichier.'\' )
;';
     pwg_query($query);
	$rang++;
	}

  //$mp_msgs[] = $lang['mp_msg_admin_4'].$_POST['url_'.$n.''];
  $page['infos'][]= l10n('mp_msg_admin_4').' '.$_POST['url_'.$n];
 }//fin for
}
// +------------------------------------------------------------+
// |                Nouveau externe                             |
// +------------------------------------------------------------+
if (isset($_POST['envoi']) and $_POST['envoi'] == "externe" )
{
 if ($_POST['texte'] != "" )
 {
     $texte = addslashes($_POST['texte']);
     $url = addslashes($_POST['url']);
     $query = '
INSERT INTO '.MP_PLAYLIST.'
  (type, url, texte)
  VALUES
  (\'externe\', \''.$url.'\', \''.$texte.'\')
;';
     pwg_query($query);
	 
     $result = pwg_query('SELECT id FROM '.MP_PLAYLIST.' WHERE url=\''.$url.'\' ;');
     $data_pl = mysql_fetch_assoc($result);
	 
     $filename="./plugins/music_player/music/externe/".$data_pl['id'].".php";
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
 }
 else
 { //$mp_msgs[] = $lang['mp_msg_err_aj2'] ;
 array_push($page['errors'], l10n('mp_msg_err_aj2')); } 
}
// +-----------------------------------------------------------------------+
// |              défaut : affichage des playlist existante                |
// +-----------------------------------------------------------------------+
$playlist = array();
$query = 'SELECT id, url, texte FROM '.MP_PLAYLIST.' WHERE type IN (\'local\') ORDER BY id ;';
$result = pwg_query($query);
while ($row = mysql_fetch_assoc($result)) {
    array_push($playlist, $row);
}

foreach ($playlist as $list) {

    $txt = stripslashes($list['texte']);
    $template->append('list',
        array('URL' => $list['url'],
              'TEXTE' => $txt,
              'ID' => $list['id'],
	    	  ));
    $template->append('list2',
        array('URL' => $list['url'],
              'TEXTE' => $txt,
              'ID' => $list['id'],
	    	  ));
}
$playlist = array();
$query = 'SELECT id, url, texte FROM '.MP_PLAYLIST.' WHERE type IN (\'externe\') ORDER BY id ;';
$result = pwg_query($query);
while ($row = mysql_fetch_assoc($result)) {
    array_push($playlist, $row);
}

foreach ($playlist as $list) {

    $txt = stripslashes($list['texte']);
    $template->append('list_ex',
        array('URL' => $list['url'],
              'TEXTE' => $txt,
              'ID' => $list['id'],
	    	  ));
}


$conf_lecteur = explode("," , $conf['mp_lecteur']);
$conf_plugin = explode("," , $conf['mp_plugin']);

// +-----------------------------------------------------------------------+
// |                         changement de config                          |
// +-----------------------------------------------------------------------+
if (isset($_POST['envoi_config']) ){
if ($_POST['envoi_config']=='lecteur')
{
  if (isset($_POST['style']) and $_POST['style']=='NULL')
  {
	  $style=$conf_lecteur['9'];
  }
  else
  {
	  $style=$_POST['style'];
  }
  
  if (isset($_POST['mp_miniature']) and $_POST['mp_miniature']=="true")
  {  
      $h = $_POST['h_tt'];
  } 
  else
  {
      $h = $_POST['h_tt'] - 20;//pour un affichage correct la playlist doit faire la hauteur totale moins les 20px de la barre 
  }    

	$newconf_lecteur = (isset($_POST['h_tt']) and !empty($_POST['h_tt'])) ? $_POST['h_tt'] : '148';
	$newconf_lecteur .= (isset($_POST['l_tt']) and !empty($_POST['l_tt'])) ? ','.$_POST['l_tt'] : ',300';
	$newconf_lecteur .= (isset($_POST['h_tt']) and !empty($_POST['h_tt'])) ? ','.$h : ',128';
	$newconf_lecteur .= (isset($_POST['mp_miniature'])) ? ',true' : ',false';
	if (!isset($_POST['l']) or empty($_POST['l']))
	{
		$newconf_lecteur .= ',128';
	}
	elseif (isset($_POST['mp_miniature']) and $_POST['mp_miniature']=="true")
	{
		$newconf_lecteur .= ','.$_POST['l'];
	}
	else
	{
		$newconf_lecteur .= ',0';
	}
	$newconf_lecteur .= (isset($_POST['mp_shuffle'])) ? ',true' : ',false';
	$newconf_lecteur .= (isset($_POST['mp_repeat'])) ? ',true' : ',false';
	$newconf_lecteur .= ','.$_POST['mp_autostart'];
	$newconf_lecteur .= (isset($_POST['mp_autoscroll'])) ? ',true' : ',false';
	$newconf_lecteur .= ','.$style;
	$newconf_lecteur .= (isset($_POST['various_style'])) ? ',true' : ',false';
  $query = '
    UPDATE '.CONFIG_TABLE.'
    SET value="'.$newconf_lecteur.'"
    WHERE param="mp_lecteur"
    LIMIT 1';
  pwg_query($query);
        
//  $mp_msgs[] = $lang['mp_msg_admin_5'];
array_push($page['infos'], l10n('mp_msg_admin_5'));
}}
if (isset($_POST['envoi_config']) ){
if ($_POST['envoi_config']=='plugin' or isset($_POST['foot']))
{
	$newconf_plugin = (isset($_POST['evidence'])) ? 'true' : 'false';
	$newconf_plugin .= (isset($_POST['head'])) ? ',true' : ',false';
	$newconf_plugin .= (isset($_POST['foot'])) ? ',true' : ',false';
	$newconf_plugin .= (isset($_POST['h_pop']) and !empty($_POST['h_pop'])) ? ','.$_POST['h_pop'] : ',260';
	$newconf_plugin .= (isset($_POST['l_pop']) and !empty($_POST['l_pop'])) ? ','.$_POST['l_pop'] : ',400';
  $query = '
    UPDATE '.CONFIG_TABLE.'
    SET value="'.$newconf_plugin.'"
    WHERE param="mp_plugin"
    LIMIT 1';
  pwg_query($query);
        
  //$mp_msgs[] = $lang['mp_msg_admin_6'];
  array_push($page['infos'], l10n('mp_msg_admin_6'));
}
}
load_conf_from_db();
$conf_lecteur = explode("," , $conf['mp_lecteur']);
$conf_plugin = explode("," , $conf['mp_plugin']);
$check='checked="checked"';
if ($conf_lecteur[3]=='true') { $miniature=$check; } else { $miniature=NULL; } 
if ($conf_lecteur[5]=='true') { $shuffle=$check; } else { $shuffle=NULL; }
if ($conf_lecteur[6]=='true') { $repeat=$check; } else { $repeat=NULL; }
if ($conf_lecteur[8]=='true') { $autoscroll=$check; } else { $autoscroll=NULL; }
if ($conf_lecteur[10]=='true') { $various_style=$check; } else { $various_style=NULL; }

if ($conf_lecteur[7]!='0')
{
	$rep = pwg_query('SELECT texte FROM '.MP_PLAYLIST.' WHERE id IN (\''.$conf_lecteur[7].'\') ;');
	$pl = mysql_fetch_array($rep);
	$txt=$pl['texte'];
}
else {$txt="Defaut"; }

if ($conf_plugin[0]=='true') { $evidence=$check; } else { $evidence=NULL; }
if ($conf_plugin[1]=='true') { $head=$check; } else { $head=NULL; }
if ($conf_plugin[2]=='true') { $foot=$check; } else { $foot=NULL; }

////////////////////////////////////////////////
////////[ liste des styles globaux //////////
////////////////////////////////////////////////

function recursive_readdir ($dir) {
	global $conf, $template;

	$conf_lecteur = explode("," , $conf['mp_lecteur']);
	$dh = opendir ($dir); // on l'ouvre
	while (($file = readdir ($dh)) !== false ) { //boucle pour parcourir le repertoire 
		if ($file !== '.' && $file !== '..') {
			$path =$dir.'/'.$file; // construction d'un joli chemin...
			if (is_dir ($path)) { //si on tombe sur un sous-repertoire 
				recursive_readdir ($path);
			}
			else
			{
			  $page = explode('.', $file);
			  $nb = count($page);
			  $nom_fichier = $page[0];
			  for ($i = 1; $i < $nb-1; $i++){
			   $nom_fichier .= '.'.$page[$i];
			  }
			  if(isset($page[1])){
			   $ext_fichier = $page[$nb-2].'.'.$page[$nb-1];
			  }
			  else {
			   $ext_fichier = '';
			  }
			
			  if($ext_fichier == 'conf.php') { //On ne prend que les .conf.php
				  $path = str_replace("/plugins/music_player", "", $path);
				  if ($conf_lecteur[9]==$path)
				  {
					  $template->append('list_style',
						  array('FILE' => $path,
								'TEXTE' => ' --> '.$path,
								));
				  }
				  else
				  {
					  $template->append('list_style',
					  array('FILE' => $path,
							'TEXTE' => $path,
							));
				  }
			  }
			}
		}
	}
	closedir ($dh); // on ferme le repertoire courant
}	
recursive_readdir ('./plugins/music_player/template/style');
	


////assignement des valeurs
	$template->assign(
		array(
		  'MP_EVIDENCE' => $evidence,
		  'MP_HEAD' => $head,
		  'MP_FOOT' => $foot,
		  'MP_H_POP' => 'value="'.$conf_plugin[3].'"',
		  'MP_L_POP' => 'value="'.$conf_plugin[4].'"',
		  
		  'MP_H_TT' => 'value="'.$conf_lecteur[0].'"',
		  'MP_L_TT' => 'value="'.$conf_lecteur[1].'"',
		  'MP_H' => 'value="'.$conf_lecteur[2].'"',
		  'MP_MINIATURE_ACTIVATED' =>   $miniature,
		  'MP_L' => 'value="'.$conf_lecteur[4].'"',
		  'MP_SHUFFLE_ACTIVATED' => $shuffle,
		  'MP_REPEAT_ACTIVATED' => $repeat,
		  'AUTOSTART' => $conf_lecteur[7],
		  'AUTOSTART_T' => $txt,
		  'MP_AUTOSCROLL_ACTIVATED' => $autoscroll,
		  'MP_VARIOUS_STYLE' => $various_style,
		)
	  );

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
$template->set_filename('plugin_admin_content', $m_p->plugin_path.'template/admin.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');


?>