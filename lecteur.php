<?php
define('PHPWG_ROOT_PATH','../../');
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');

$m_p = get_plugin_data('music_player');

///////////[ interdiction groupe
global $prefixeTable;
$query = '
SELECT COUNT(*) AS result FROM '.GROUPS_TABLE.'
  WHERE name IN (\'music_group\') ;';
$data_grp = mysql_fetch_array(pwg_query($query));
$exist_group = $data_grp['result'];   
if ( $exist_group == 1 )
{
	$display=0;
	$query = 'SELECT group_id FROM '.USER_GROUP_TABLE.' WHERE user_id IN (\''.$user['id'].'\');';
	$result = pwg_query($query);
	$grp_id = array();
	while ($row = mysql_fetch_assoc($result)) {
		array_push($grp_id, $row);
	}
	
	foreach ($grp_id as $grp)
	{
		$query = 'SELECT id FROM '.GROUPS_TABLE.' WHERE name IN (\'music_group\') ;';
		$rep = mysql_fetch_array(pwg_query($query));
		if ($rep['id']==$grp['group_id'] )
		{
			$display=1;
		}
	}

}
if (isset($display) and $display==0)
{
	include(PHPWG_ROOT_PATH.'include/page_header.php');
	load_language('plugin.lang', $m_p->plugin_path);
	$template->set_filename('lecteur', $m_p->plugin_path.'template/no.tpl');
	$template->parse('lecteur');
	include(PHPWG_ROOT_PATH.'include/page_tail.php');
	
	
}
//////////
else {

$page['body_id'] = 'lecteur';

  global $conf;
  $conf_plugin = explode("," , $conf['mp_plugin']);
  $template->assign(
    array(
      'conf_plugin_1' => $conf_plugin[1],
      'conf_plugin_2' => $conf_plugin[2],
    )
  );


/*
/////[ si metre en evidence
	if ($conf_plugin[0]=="true")
	{
	  $mp_ses = pwg_get_session_var( 'pwg_music_player', '' );
	  //si on a cliqué oui pour afficher, en fait on change les var pour n'afficher qu'une fois le lecteur
      if ( $_COOKIE['pwg_music_player'] == 'open')
      {
	  setcookie( 'pwg_music_player', 'open_once', time()+60*60*24*10, cookie_path() );
	  }
	  elseif ($mp_ses == 'open')
	  {
	  pwg_set_session_var( 'pwg_music_player', 'open_once' );
	  }
	}
///
*/
include(PHPWG_ROOT_PATH.'include/page_header.php');
load_language('plugin.lang', $m_p->plugin_path);

$template->assign(
  array(
    'PLUGIN_NAME' => $m_p->plugin_name
    ));

// +-----------------------------------------------------------------------+
// |                  affichage des playlist existante                     |
// +-----------------------------------------------------------------------+
$playlist = array();
$query = 'SELECT url, texte FROM '.MP_PLAYLIST.' WHERE type IN (\'local\') ORDER BY id ;';
$result = pwg_query($query);
while ($row = mysql_fetch_assoc($result)) {
    array_push($playlist, $row);
}

foreach ($playlist as $list) {

    $txt = stripslashes($list['texte']);
        $template->append('playlist',
            array('URL' => 'music/'.$list['url'].'/'.$list['url'].'.xml',
                'TEXTE' => $txt,
				));
}

$pl_ex = array();
$query = 'SELECT id, texte FROM '.MP_PLAYLIST.' WHERE type IN (\'externe\') ORDER BY id ;';
$result = pwg_query($query);
while ($row = mysql_fetch_assoc($result)) {
    array_push($pl_ex, $row);
}

foreach ($pl_ex as $list) {

    $txt = stripslashes($list['texte']);
        $template->append('playlist',
            array('URL' => 'music/externe/'.$list['id'].'.php',
                'TEXTE' => $txt,
				));
}
// +-----------------------------------------------------------------------+
// |                         Configuration du style                        |
// +-----------------------------------------------------------------------+
$conf_lecteur = explode("," , $conf['mp_lecteur']);

if ($conf_lecteur[10]=='true')
{
	$file = 'lecteur.css';
	$dir = LOCALEDIT_PATH.'template/style/';
	$theme_file = $dir.$user['template'].'/'.$user['theme'].'/'.$file;
	$template_file = $dir.$user['template'].'/'.$file;
	
	if (file_exists($theme_file))
	{
		$template->assign(array( 'STYLE_FILE' => $theme_file ) );
	}
	elseif (file_exists($template_file))
	{
		$template->assign(array( 'STYLE_FILE' => $template_file ) );
	}
	else
	{
		$template->assign(array( 'STYLE_FILE' => $dir.$conf_lecteur[9] ) );
	}
}
else
{
	$template->assign(array( 'STYLE_FILE' => $dir.$conf_lecteur[9] ) );
}
if ($conf_lecteur[10]=='true')
{

	$file = 'lecteur.conf.php';
	$dir = LOCALEDIT_PATH.'template/style/';
	$theme_file = $dir.$user['template'].'/'.$user['theme'].'/'.$file;
	$template_file = $dir.$user['template'].'/'.$file;
	
	if (file_exists($theme_file))
	{
		include($theme_file);
	}
	elseif (file_exists($template_file))
	{
		include($template_file) ;
	}
	else
	{
		$name = explode('.', $conf_lecteur[9]);
		include_once($dir.$name[0].'.conf.php');
	}
}
else
{
	$name = explode('.', $conf_lecteur[9]);
	include_once($dir.$name[0].'.conf.php');
}



// +-----------------------------------------------------------------------+
// |                         Configuration du lecteur                      |
// +-----------------------------------------------------------------------+


if ($conf_lecteur[5]=='true') $shuffle=$conf_lecteur[5]; else $shuffle="false";
if ($conf_lecteur[6]=='true') $repeat=$conf_lecteur[6]; else $repeat="list";
if ($conf_lecteur[8]=='true') $autoscroll=$conf_lecteur[8]; else $autoscroll="false";

if ($conf_lecteur[7]!='0')
{
$rep = pwg_query('SELECT url FROM '.MP_PLAYLIST.' WHERE id IN (\''.$conf_lecteur[7].'\') ;');
$pl = mysql_fetch_array($rep);
$url=$pl['url'];
$url='music/'.$url.'/'.$url.'.xml';
$autostart='true';
}
else {
$url='player/playlist.xml';
$autostart='false';
}

////assignement des valeurs
$template->assign(
    array(
      'H_TT' => $conf_lecteur[0],
      'L_TT' => $conf_lecteur[1],
      'H' => $conf_lecteur[2],
      'L' => $conf_lecteur[4],
      'SHUFFLE' => $shuffle,
      'REPEAT' => $repeat,
      'AUTOSTART' => $autostart,
      'URL' => $url,
      'AUTOSCROLL' => $autoscroll,
      'BACK_COLOR' => $BACK_COLOR,
      'FRONT_COLOR' => $FRONT_COLOR,
      'LIGHT_COLOR' => $LIGHT_COLOR,
    )
  );

$template->set_filename('lecteur', $m_p->plugin_path.'template/lecteur.tpl');

// +-----------------------------------------------------------------------+
// | html code display                                                     |
// +-----------------------------------------------------------------------+
$template->parse('lecteur');
include(PHPWG_ROOT_PATH.'include/page_tail.php');
}//else groupe
//$template->p();
?>