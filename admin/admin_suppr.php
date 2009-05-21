<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
$m_p = get_plugin_data('music_player');

global $conf, $template, $lang, $page;
global $prefixeTable;
	load_language('plugin.lang', $m_p->plugin_path);
$mp_msgs = array();

// +----------------------------------------+
// |              Contenu                   |
// +----------------------------------------+

if (!isset($_POST['envoi']))
{

    $template->append('suppr', array('ID'=>$_GET['id']) );
}

elseif ($_POST['envoi']=="suppr")
{

 if ($_POST['type_suppr']=="suppr_folder")
 {
  $query = 'SELECT type FROM '.MP_PLAYLIST.' WHERE id IN (\''.$_POST['id'].'\') ;';
  $result = pwg_query($query);
  $typ = mysql_fetch_assoc($result);
  if ($typ['type']=="local")
  {
    $query = 'SELECT url FROM '.MP_PLAYLIST.' WHERE id IN (\''.$_POST['id'].'\') ;';
    $result = pwg_query($query);
    $dt = mysql_fetch_assoc($result);
    $filename="./plugins/music_player/music/".$dt['url']."/";
    if (file_exists($filename))
    {
      if (is_dir($filename))
     {
      $id_dossier = opendir($filename);
        while($element = readdir($id_dossier))
        {
          if ($element != "." && $element != "..")
          unlink($filename."/".$element);
        }
       closedir($id_dossier);
       rmdir($filename);
       }
     else unlink($filename);
     } 
  }//if local
  elseif ($typ['type']=="externe")
  {
    $filename="./plugins/music_player/music/externe/".$_POST['id'].".php";
    if (file_exists($filename))
    {
      unlink($filename);
	}
  }//if externe
  
  if (!file_exists($filename))
  {
  //$mp_msgs[] = $lang['mp_msg_suppr1'];
  $page['infos'][]=l10n('mp_msg_suppr1');
  }
  else
  {
  //$mp_msgs[] = $lang['mp_msg_suppr2'];
  $page['infos'][]=l10n('mp_msg_suppr2');
  }
 }
 
   $query = '
DELETE FROM '.MP_PLAYLIST.'
  WHERE id IN (\''.$_POST['id'].'\')
;';
  pwg_query($query);
   $query = '
DELETE FROM '.MP_MUSIC.'
  WHERE pl_id IN (\''.$_POST['id'].'\')
;';
  pwg_query($query);
  
  //$mp_msgs[] = $lang['mp_msg_suppr3'];
  $page['infos'][]=l10n('mp_msg_suppr3');
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
$template->set_filename('plugin_admin_content', $m_p->plugin_path.'template/admin_suppr.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');


?>