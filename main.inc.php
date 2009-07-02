<?php
/*
Plugin Name: music_player
Version: 2.0.2
Description: play music / avoir de la musique
Plugin URI: http://phpwebgallery.net/ext/extension_view.php?eid=162
Author: Flop25
Author URI: http://flop25.free.fr

*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

$plugin_name = basename(dirname(__FILE__));
$plugin_path = dirname(__FILE__).'/';

global $prefixeTable;

define('MP_PLAYLIST' , $prefixeTable . 'mp_playlist');
define('MP_MUSIC' , $prefixeTable . 'mp_music');
define('MP_PATH', dirname(__FILE__).'/' );
define('MP_NAME', basename(dirname(__FILE__)) );
define('LOCALEDIT_PATH' , PHPWG_PLUGINS_PATH . basename(dirname(__FILE__)) . '/');

include_once(dirname(__FILE__).'/class.inc.php');

add_event_handler('get_admin_plugin_menu_links', array(&$m_p, 'mp_lien_menu') );


add_event_handler('loc_end_index', array(&$m_p, 'placer_icon') );

global $conf;
$conf_plugin = explode("," , $conf['mp_plugin']);
if (isset($conf_plugin[0]) and $conf_plugin[0]=="true")
{
	add_event_handler('blockmanager_apply', array(&$m_p, 'placer_block'));
	add_event_handler('blockmanager_register_blocks', array(&$m_p, 'register_mp_menubar_blocks'));
}

add_event_handler('loc_begin_page_header', array(&$m_p, 'add_css') );


$m_p = new Musicplayer(MP_NAME, MP_PATH);
set_plugin_data($m_p->plugin_name, $m_p);

?>