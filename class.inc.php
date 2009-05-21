<?php


class Musicplayer
{
  var $plugin_name, $plugin_path;
  
  function Musicplayer($plugin_name, $plugin_path)
  {
    // Args
    $this->plugin_name = $plugin_name;
    $this->plugin_path = $plugin_path;
    // handler
   // $this->initialize_event_handler();
  }
  /*
  function loading_lang()
  {
    global $lang;
    //include(get_language_filepath('plugin.lang.php', $this->plugin_path));
	load_language('plugin.lang', $this->plugin_path);
  }  */
  function var_template()
  {
    global $user;
    if ($user['template'] == 'flop_pure_design')
    {
      $r = 'include/var_fpd.inc.php';	
    }
    else
    {
     $r = 'include/var.inc.php';	
    }
   return $r;
  }
  /*function remove_code($tlp_handle, $str_begin, $str_end)
  {
      global $template;
 
      $template->loadfile($tlp_handle);
 
      $p_beg = strpos($template->uncompiled_code[$tlp_handle], $str_begin);
      $p_end = strpos($template->uncompiled_code[$tlp_handle], $str_end) + strlen($str_end);
      $s = substr($template->uncompiled_code[$tlp_handle], $p_beg, $p_end - $p_beg);
 
      $template->uncompiled_code[$tlp_handle] = 
      substr_replace($template->uncompiled_code[$tlp_handle], '', $p_beg, $p_end - $p_beg);
 
      return $s;
  }
  
  function add_before_code($tlp_handle, $insert_before, $code)
  {
      global $template;
 
      $template->loadfile($tlp_handle);
      $template->uncompiled_code[$tlp_handle] = str_replace($insert_before, $code.$insert_before, $template->uncompiled_code[$tlp_handle]);
  } 
  function add_after_code($tlp_handle, $insert_after, $code)
  {
    global $template;
 
    $template->loadfile($tlp_handle);
    $template->uncompiled_code[$tlp_handle] = str_replace($insert_after, $insert_after.$code, $template->uncompiled_code[$tlp_handle]);
  }*/
   function register_mp_menubar_blocks($menu_ref_arr) {
    $menu = & $menu_ref_arr[0];
    if ($menu->get_id() != 'menubar')
      return;
    $menu->register_block(new RegisteredBlock('mbMusicPlayer', 'Music player', 'MP'));
  }


  function placer_lien($menu_ref_arr)
  {

///////////////////////[début de l'affichage lien]////////////////////
    //$this->loading_lang();
	
    global $lang, $conf, $template;
	
    /*$conf_plugin = explode("," , $conf['mp_plugin']);

    $this->add_before_code('menubar','<!-- END quick_search -->','<ul>
	<li><img src="plugins/'.$this->plugin_name.'/template/audio.png" /> <a name="{lang:lien_expl}" href="javascript:void(0)" onClick="window.open(\''.get_root_url().'plugins/'.$this->plugin_name.'/lecteur.php\',\'musique\',\'width='.$conf_plugin[4].',height='.$conf_plugin[3].',top=400,left=400,menubar=no,resizable=yes,toolbar=no,status=no,alwaysRaised=yes\')" >{lang:lien_titre}</a></li>
</ul>
	');*/
	
	  $menu = & $menu_ref_arr[0];
  
	  if ( ($block = $menu->get_block('mbSpecials')) != null )
	  {
	    load_language('plugin.lang', $this->plugin_path);
	
	    $position = count($block->data)+1;
	
	    array_splice($block->data, $position-1, 0, array('mp' =>
	      array(
	        'URL' => 'javascript:void(0)'.'onClick="window.open(\''.get_root_url().'plugins/'.$this->plugin_name.'/lecteur.php\',\'musique\',\'width='.$conf_plugin[4].',height='.$conf_plugin[3].',top=400,left=400,menubar=no,resizable=yes,toolbar=no,status=no,alwaysRaised=yes\')" ',
	        'TITLE' => l10n('lien_expl'),
	        'NAME' => l10n('lien_titre')
	        )
	      )
	    );
	  }

	/*
/////[ si metre en evidence
	if ($conf_plugin[0]=="true")
	{
	  //si envoi formulaire avec "se rappeler" coché
	  if (isset($_POST['mp_remember']) and $_POST['mp_remember']=="on")
	  {
       switch($_POST['mp_rep'])
       {
         /*case 'oui':setcookie( 'pwg_music_player', 'open', time()+60*60*24*10, cookie_path() );break;
         case 'non':setcookie( 'pwg_music_player', 'closed', time()+60*60*24*10, cookie_path() );break;
         case 'oui':setcookie( 'pwg_music_player', 'open', time()+60, cookie_path() );break;
         case 'non':setcookie( 'pwg_music_player', 'closed', time()+60, cookie_path() );break;
       }
	  }
	  elseif (isset($_POST['mp_rep']))
	  {
       switch($_POST['mp_rep'])
       {
         case 'oui':pwg_set_session_var( 'pwg_music_player', 'open' );break;
         case 'non':pwg_set_session_var( 'pwg_music_player', 'closed' );break;
       }
	  }
	  
	  $mp_ses = pwg_get_session_var( 'pwg_music_player', '' );
	  //si on a cliqué oui, affiche le lecteur 
      if ( $_COOKIE['pwg_music_player'] == 'open' or $mp_ses == 'open' or $_POST['mp_rep'] == 'oui' )
      {	
      $my_root_url = get_root_url().'plugins/'. basename(dirname(__FILE__)).'/';
      $js =
'<script type="text/javascript">
var theLecteur = window.open("", "musique", "width='.$conf_plugin[4].',height='.$conf_plugin[3].',top=400,left=400,menubar=no,resizable=yes,toolbar=no,status=no,alwaysRaised=yes");
if ( theLecteur.location.toString()=="about:blank" || !theLecteur.location.toString().match(/^(https?.*\/)lecteur\.php(\?.+)?$/))
{
  theLecteur.location = "'.$my_root_url.'lecteur.php";
}
</script>';

      $template->assign_block_vars( 'head_element', array(
          'CONTENT' => $js
            )
          );

      }
	  //si on a cliqué non, on n'affiche pas le msg 
	  //si on a pas cliqué, on affiche le msg 
      elseif ( !isset($_COOKIE['pwg_music_player']) and !isset($_POST['mp_rep']) and !isset($_SESSION['pwg_pwg_music_player']) )
      {
	      include($this->var_template());
          $this->add_before_code('menubar','<!-- BEGIN links -->', $msg);*/
          /*$template->assign_block_vars( 'head_element', array(
             'CONTENT' => '<style type="text/css">
#mbMusic_player
{
	font-size: 1em;
	padding: 0px;
}
</style>'
                )
               );*/
      //}
	//} /fin metre en evidence
	
  }//fin placer_lien

  function placer_block($menu_ref_arr)
  {
  	global $template, $user, $conf;
	load_language('plugin.lang', $this->plugin_path);
	
    $conf_plugin = explode("," , $conf['mp_plugin']);

    $menu = & $menu_ref_arr[0];
	$template->assign(array(  'ATRIB' => 'name="'.l10n('lien_expl').'" href="javascript:void(0)" onClick="window.open(\''.get_root_url().'plugins/'.$this->plugin_name.'/lecteur.php\',\'musique\',\'width='.$conf_plugin[4].',height='.$conf_plugin[3].',top=400,left=400,menubar=no,resizable=yes,toolbar=no,status=no,alwaysRaised=yes\')"'  ,
							  'PLG_path' => get_root_url().'plugins/'.$this->plugin_name    ));

			if (($block = $menu->get_block( 'mbMusicPlayer' )) != null) {
               $block->set_title(l10n('lien_titre'));
               $block->template = $this->plugin_path.'template/block.tpl';
            }

  }
  function mp_lien_menu($menu)
  {
    array_push($menu, array('NAME' => 'Music Player',
            'URL' => get_admin_plugin_menu_link(get_root_url().'plugins/'.$this->plugin_name.'/admin/admin.php')));
    return $menu;
  }
  
  function add_css()
{
  global $page, $template;
  if (isset($page['body_id']) and $page['body_id']=='theAdminPage' and ($_GET['section']=='music_player/admin/admin.php' or $_GET['section']=='music_player/admin/help.php' or $_GET['section']=='music_player/admin/admin_edit.php') )
  {
      $template -> assign(
        'head_element', array (
          'CONTENT' => '<link rel="stylesheet" type="text/css" href="plugins/'.$this->plugin_name.'/template/admin.css">'
        )
      );
	  }


}

}//fin class
?>