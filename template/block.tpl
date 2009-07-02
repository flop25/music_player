{html_head}
<style>
#block_mp li a {literal}{{/literal}
	display: block ;
	background: transparent url({$PLG_path}/template/icon/fond_fus.png) left bottom no-repeat ;
	padding: 4px ;
	text-align: center ;
	with: 150px;
	height: 50px;
	{literal}}{/literal}
#block_mp li a:hover, #block_mp li a:focus, #block_mp li a:active {literal}{{/literal}
	background: transparent url({$PLG_path}/template/icon/fond_fus.png) left top no-repeat ;
	{literal}}{/literal}
#block_mp li{literal}{{/literal}
	list-style-image: none;
	list-style-type: none;
	{literal}}{/literal}
	</style>
{/html_head}
<dt>{'lien_titre'|@translate}</dt>
<dd>
  <ul id="block_mp">
	<li>
	  <a {$ATRIB} >{'lien_expl'|@translate}</a>
	</li> 
  </ul>
</dd>
