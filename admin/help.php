<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
$m_p = get_plugin_data('music_player');

global $conf, $template, $lang, $page;
global $prefixeTable;
//define('MP_PLAYLIST' , $prefixeTable . 'mp_playlist');
load_language('plugin.lang', $m_p->plugin_path);
$mp_msgs = array();

// +----------------------------------------+
// |              Contenu                   |
// +----------------------------------------+


$template->set_filename('plugin_admin_content', $m_p->plugin_path.'template/help.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');


?>