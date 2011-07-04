<?php


class Musicplayer
{
  var $plugin_name, $plugin_path;
  
  function Musicplayer($plugin_name, $plugin_path)
  {
    // Args
    $this->plugin_name = $plugin_name;
    $this->plugin_path = $plugin_path;
  }
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
   function register_mp_menubar_blocks($menu_ref_arr) {
    $menu = & $menu_ref_arr[0];
    if ($menu->get_id() != 'menubar')
      return;
    $menu->register_block(new RegisteredBlock('mbMusicPlayer', 'Music player', 'MP'));
  }
  function placer_icon()
  {
	global $conf, $template;
	$conf_plugin = explode("," , $conf['mp_plugin']);
 	 if (isset($conf_plugin)) {
		$template->concat( 'PLUGIN_INDEX_ACTIONS',
		  '<li><a href="javascript:void(0)" onClick="window.open(\''.get_root_url().'plugins/'.$this->plugin_name.'/lecteur.php\',\'musique\',\'width='.$conf_plugin[4].',height='.$conf_plugin[3].',top=400,left=400,toolbar=no,location=no,menubar=no,resizable=yes,status=no,alwaysRaised=yes\')" ><img src="'.get_root_url().'plugins/'.$this->plugin_name.'/template/icon/icon32.png"  width="26" height="26" alt="Music Player" title="Play Music" class="button" /></a></li>');
	  }
  }

  function placer_lien($menu_ref_arr)
  {

///////////////////////[début de l'affichage lien]////////////////////
	
    global $lang, $conf, $template;
	
	
	  $menu = & $menu_ref_arr[0];
  
	  if ( ($block = $menu->get_block('mbSpecials')) != null )
	  {
	    load_language('plugin.lang', $this->plugin_path);
	
	    $position = count($block->data)+1;
	
	    array_splice($block->data, $position-1, 0, array('mp' =>
	      array(
	        'URL' => 'javascript:void(0)'.'onClick="window.open(\''.get_root_url().'plugins/'.$this->plugin_name.'/lecteur.php\',\'musique\',\'width='.$conf_plugin[4].',height='.$conf_plugin[3].',top=400,left=400,toolbar=no,location=no,menubar=no,resizable=yes,status=no,alwaysRaised=yes\')" ',
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
  if (isset($page['body_id']) and isset($_GET['section']) and $page['body_id']=='theAdminPage' and ($_GET['section']=='music_player/admin/admin.php' or $_GET['section']=='music_player/admin/help.php' or $_GET['section']=='music_player/admin/admin_edit.php') )
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