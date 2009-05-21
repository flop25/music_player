<div class="titrePage">
    <ul class="categoryActions">
      <li><a href="admin.php?page=plugin&section=music_player/admin/help.php" title="{'Help'|@translate}">{'mp_need_help'|@translate}</a></li>
    </ul>
  <h2>Music player / {$PLAYLIST} / miniature</h2>
</div>
<!-- 
<div class="header_msgs">
 <p>mp_msgs.mp_msg.MP_MSG</p>
</div>
 -->

{foreach from=$envoi item=envoi}<!-- BEGIN envoi -->
<fieldset>
<legend>Upload</legend>
<form action="" method="post" enctype="multipart/form-data">
  <input name="fichier" type="file" />
  <input type="hidden" name="ajout_image" value="upload" />
  <input type="hidden" name="id" value="{$envoi.ID}" />
  <input type="submit" name="button" id="button" value="{'mp_send'|@translate}" />
</form>
</fieldset>
{'mp_ou'|@translate}
<fieldset>
<legend>{'Links'|@translate}</legend>
<form action="" method="post">
  <input name="lien" type="text" id="textfield" size="50" value="http://" />
  <input type="hidden" name="ajout_image" value="lien" />
  <input type="hidden" name="id" value="{$envoi.ID}" />
  <input type="submit" name="button2" id="button2" value="{'mp_send'|@translate}" />
</form>
</fieldset>
  {/foreach}<!-- END envoi -->
  
  {foreach from=$miniature item=miniature}<!-- BEGIN miniature -->
<div align="center">
  <img src="{$miniature.URL}" alt="La miniature de la playlist" />
<form action="" method="post">
  <input type="submit" name="suppr" id="suppr" value="{'delete'|@translate}" />
{'mp_adm_info_img'|@translate}
</form>
</div>
  {/foreach}<!-- END miniature -->
  {foreach from=$rien item=rien}<!-- BEGIN rien -->
<div align="center">
  {$rien.TXT}
</div>
  {/foreach}<!-- END rien -->
<p><a href="admin.php?page=plugin&amp;section=music_player/admin/admin.php">{'mp_adm_return'|@translate}</a></p>
