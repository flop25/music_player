<?php
define('PHPWG_ROOT_PATH','../../');
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');

$m_p = get_plugin_data('music_player');


$page['body_id'] = 'lecteur';

//css et js
/*
$title= 'Lecteur';
      $template -> assign_block_vars(
        'head_element', array (
          'CONTENT' => '<link rel="stylesheet" type="text/css" href="./template/lecteur.css">'
        )
      );
      $template -> assign_block_vars(
        'head_element', array (
          'CONTENT' => '<script type="text/javascript" src="./player/swfobject.js"></script>'
        )
      );
      $template -> assign_block_vars(
        'head_element', array (
          'CONTENT' => '<script type="text/javascript">

	function loadFile(obj) { thisMovie("playlist").loadFile(obj); };
	// This is a javascript handler for the player and is always needed.
	function thisMovie(movieName) {
	    if(navigator.appName.indexOf("Microsoft") != -1) {
			return window[movieName];
		} else {
			return document[movieName];
		}
	};

</script>'
        )
      );*/
  global $conf;
  $conf_plugin = explode("," , $conf['mp_plugin']);
  $template->assign(
    array(
      'conf_plugin_1' => $conf_plugin[1],
      'conf_plugin_2' => $conf_plugin[2],
    )
  );

    /*if ($conf_plugin[1]!='true')
    {
        $template -> assign_block_vars(
        'head_element', array (
          'CONTENT' => '<style type="text/css">
#theHeader
{
display:none;
}
</style>'
        )
      );
    }
    if ($conf_plugin[2]!='true')
    {
	      $template -> assign_block_vars(
        'head_element', array (
          'CONTENT' => '<style type="text/css">
#copyright
{
display:none;
}		  </style>'
        )
      );
   }*/
	  
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
// |                         Configuration du lecteur                      |
// +-----------------------------------------------------------------------+

$conf_lecteur = explode("," , $conf['mp_lecteur']);

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
    )
  );

$template->set_filename('lecteur', $m_p->plugin_path.'template/lecteur.tpl');

// +-----------------------------------------------------------------------+
// | html code display                                                     |
// +-----------------------------------------------------------------------+
$template->parse('lecteur');
include(PHPWG_ROOT_PATH.'include/page_tail.php');
//$template->p();
?>