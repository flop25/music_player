{combine_css path="$STYLE_FILE"}
{combine_script id="music_player_js" load="header" path="plugins/music_player/player/swfobject.js"}
{footer_script require='music_player_js'}{literal}<script type="text/javascript">
	function loadFile(obj) { thisMovie("playlist").loadFile(obj); };
	// This is a javascript handler for the player and is always needed.
	function thisMovie(movieName) {
	    if(navigator.appName.indexOf("Microsoft") != -1) {
			return window[movieName];
		} else {
			return document[movieName];
		}
	};
</script>{/literal}
{/footer_script}

{if $conf_plugin_1!='true' }
{html_head}<style type="text/css">{literal}
#theHeader
{
display:none;
}
{/literal}</style>{/html_head}
{/if}
{if $conf_plugin_2!='true' }
{html_head}<style type="text/css">{literal}

#copyright
{
display:none;
}	
	  </style>{/literal}{/html_head}
{/if}

<div id="content" class="content">
	<div class="titrePage">
        <div id="montre" style="display:block" align="center">
          <a href="javascript:void(0)" onclick="document.getElementById('montre').style.display ='none';document.getElementById('cache').style.display ='block'">{'mp_montre'|@translate}</a>
        </div>
        <div id="cache" style="display:none" align="center">
          <a href="javascript:void(0)" onclick="document.getElementById('montre').style.display ='block';document.getElementById('cache').style.display ='none'">{'mp_cache'|@translate}</a><br />
          <ul>
          {foreach from=$playlist item=playlist}<!-- BEGIN playlist -->
            <li><a href="javascript:void(0)" onclick="javascript:loadFile({literal}{{/literal}file:'{$playlist.URL}'{literal}}{/literal})" >{$playlist.TEXTE}</a></li>
          {/foreach}<!-- END playlist -->
          </ul>
        </div>
  </div>
  <div id="close_button"><a href="#" onclick="window.close();" title="{'Close this window'|@translate}"><img src="template/icon/exit.png" class="button" alt="close"></a></div>
  <div align="center" id="player">
<script type="text/javascript">
	var so = new SWFObject("player/mp3player.swf", "playlist", "{$L_TT}", "{$H_TT}", "7");
	so.addVariable("file","{$URL}");
	so.addVariable("autostart","{$AUTOSTART}"); 

	so.addVariable("enablejs","true");
	so.addVariable("javascriptid","playlist");
	so.addVariable('backcolor','{$BACK_COLOR}');
	so.addVariable('frontcolor','{$FRONT_COLOR}');
	so.addVariable('lightcolor','{$LIGHT_COLOR}');
	so.addVariable('linktarget','_blank');
    so.addParam("allowfullscreen","true");
	so.addParam("allowscriptaccess","always"); 

	so.addVariable("repeat","{$REPEAT}");
	so.addVariable("shuffle","{$SHUFFLE}"); 
	so.addVariable("autoscroll","{$AUTOSCROLL}"); 
 
	so.addVariable('displayheight','{$H}'); <!--Attention hauteur de la playlist !  -->
	so.addVariable('displaywidth','{$L}');<!--Attention largeur de la miniature !  -->

		

	so.write("player");
</script></div>
</div> <!-- the_page -->

</body>
</html>