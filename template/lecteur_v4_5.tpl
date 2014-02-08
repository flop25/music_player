{html_head}<link rel="stylesheet" type="text/css" href="./template/lecteur.css">{/html_head}
{html_head}
{literal}
<style>#wrapper { position:absolute; left:50px; top:75px; width:300; height:196; }</style>
<script type='text/javascript' src='./player/v45/swfobject.js'></script>
<script type="text/javascript" defer="defer">


function deletePlayer(theWrapper, thePlaceholder, thePlayerId) { 
    swfobject.removeSWF(thePlayerId);
    var tmp=document.getElementById(theWrapper);
    if (tmp) { tmp.innerHTML = "<div id=" + thePlaceholder + "></div>"; }
}


function createPlayer(theWrapper, thePlaceholder, thePlayerId, theFile) { 
	deletePlayer(theWrapper, thePlaceholder, thePlayerId);

	var flashvars = {
		file:theFile, 
		autostart:"{/literal}{$AUTOSTART}{literal}",
		playlist:"right",
		playlistsize:"{/literal}{$H}{literal}"
	}

	var params = {
		allowfullscreen:"true", 
		allowscriptaccess:"always"
	}

	var attributes = {
		id:thePlayerId,  
		name:thePlayerId
	}

	swfobject.embedSWF("player/v45/player.swf", thePlaceholder, "{/literal}{$L_TT}{literal}", "{/literal}{$H_TT}{literal}", "9.0.115", false, flashvars, params, attributes);
}
{/literal}

</script>{/html_head}

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

<div id="content">

<script language="javascript">
createPlayer('wrapper1', 'placeholder1', 'player1', '{$URL}')
</script>

<div id="autre_content">
<div id="montre" style="display:block" align="center">
  <a href="javascript:void(0)" onclick="document.getElementById('montre').style.display ='none';document.getElementById('cache').style.display ='block'">{'mp_montre'|@translate}</a>
</div>
<div id="cache" style="display:none" align="center">
  <a href="javascript:void(0)" onclick="document.getElementById('montre').style.display ='block';document.getElementById('cache').style.display ='none'">{'mp_cache'|@translate}</a><br />
  <ul>
  {foreach from=$playlist item=playlist_item}<!-- BEGIN playlist -->
    <li><a href="javascript:void(0)" onclick="javascript:createPlayer('wrapper1', 'placeholder1', 'player1', '{$playlist_item.URL}')" >{$playlist_item.TEXTE}</a></li>
  {/foreach}<!-- END playlist -->
  </ul>
</div>
<div id="wrapper1"><div id="placeholder1"></div></div>
<p id="pageBottomActions"><a href="#" onclick="window.close();" title="{'Close this window'|@translate}"><img src="template/icon/exit.png" class="button" alt="close"></a></p>
</div>
</div> <!-- the_page -->
