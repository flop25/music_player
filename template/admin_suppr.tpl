<div class="titrePage">
	<h2>Music player</h2>
</div>
<!--
<div class="header_msgs">
 <p>mp_msgs.mp_msg.MP_MSG</p>
</div>
 -->

{foreach from=$suppr item=suppr}<!-- BEGIN suppr -->
<form action="" method="post" name="edit_txt">
  <p>{'mp_adm_suppr_1'|@translate}</p>
  <p>
    <input type="radio" name="type_suppr" id="type_suppr" value="suppr_bdd" /> 
  {'mp_adm_suppr_2'|@translate}</p>
  <p>
    <input type="radio" name="type_suppr" id="type_suppr" value="suppr_folder" />
{'mp_adm_suppr_3'|@translate}</p>
  <p align="center">
    <input name="id" type="hidden" value="{$suppr.ID}" />
    <input name="envoi" type="hidden" value="suppr" />
    <input name="submit" value="OK" type="submit" />
  </p>
</form>
{/foreach}<!-- END suppr -->

<p><a href="admin.php?page=plugin&amp;section=music_player/admin/admin.php">{'mp_adm_return'|@translate}</a></p>
