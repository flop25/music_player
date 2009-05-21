
{html_head}<link rel="stylesheet" type="text/css" href="./template/admin.css">{/html_head}
<div class="titrePage">
  <ul class="categoryActions">
    <li><a href="admin.php?page=plugin&section=music_player/admin/help.php" title="{'Help'|@translate}">{'mp_need_help'|@translate}</a></li>
  </ul>
  <h2>Music player</h2>
</div>
<!-- 
<div class="header_msgs">
  
  <p>mp_msgs.mp_msg.MP_MSG</p>
  
</div>
 -->
{$ENVOI}
<fieldset>
<legend>{'mp_admin_leg'|@translate}</legend>
<div align="left">
  <form action="" method="post">
    <input name="envoi" type="hidden" value="synchro" />
    <input value="{'mp_admin_tt_synchro'|@translate}" name="synchro" type="submit" />
  </form>
</div>
<ul id="list">
  {foreach from=$list item=list}
  <li><a href="{$pwg_root}plugins/music_player/music/{$list.URL}/{$list.URL}.xml">{'mp_admin_folder'|@translate} : {$list.URL} -- {'mp_admin_nm_pl'|@translate} : {$list.TEXTE}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="admin.php?page=plugin&section=music_player/admin/admin_edit.php&id={$list.ID}" title="{'mp_admin_nm_edit'|@translate}"><img src="{$pwg_root}{$themeconf.icon_dir}/category_edit.png" class="button" alt="{'mp_admin_nm_edit'|@translate}"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="admin.php?page=plugin&amp;section=music_player/admin/admin_edit.php&music={$list.ID}" title="{'mp_admin_pl'|@translate}"><img src="plugins/music_player/template/audio.png" class="button" alt="{'mp_admin_pl'|@translate}"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="admin.php?page=plugin&amp;section=music_player/admin/admin_img.php&id={$list.ID}" title="{'mp_admin_min'|@translate}"><img src="plugins/music_player/template/miniature.png" class="button" alt="{'mp_admin_min'|@translate}"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="admin.php?page=plugin&amp;section=music_player/admin/admin_suppr.php&id={$list.ID}" title="{'delete'|@translate}"><img src="{$pwg_root}{$themeconf.icon_dir}/delete.png" class="button" alt="{'delete'|@translate}"></a> </li>
  {/foreach}
</ul>
</fieldset>
<fieldset>
<legend>{'mp_admin_leg1'|@translate}</legend>
<form action="" method="post" name="externe">
  Texte :
  <input name="texte" type="text" size="40" maxlength="255" />
  <br />
  URL
  <input name="url" value="http://" type="text" size="60" maxlength="255" />
  <br />
  <input name="envoi" type="hidden" value="externe" />
  <input name="submit" value="{'mp_send'|@translate}" type="submit" />
</form>
<ul id="list">
  {foreach from=$list_ex item=foo}
  <li>URL : {$foo.URL} -- Texte : {$foo.TEXTE}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="admin.php?page=plugin&section=music_player/admin/admin_edit.php&ex_id={$foo.ID}" title="{'mp_admin_nm_edit'|@translate}"><img src="{$pwg_root}{$themeconf.icon_dir}/category_edit.png" class="button" alt="{'mp_admin_nm_edit'|@translate}"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="admin.php?page=plugin&amp;section=music_player/admin/admin_suppr.php&id={$foo.ID}" title="{'delete'|@translate}"><img src="{$pwg_root}{$themeconf.icon_dir}/delete.png" class="button" alt="{'delete'|@translate}"></a> </li>
  {/foreach}
</ul>
</fieldset>
<fieldset>
<legend>{'mp_admin_leg2'|@translate}</legend>
<form action="" method="post" name="option_plugin">
  <input type="checkbox" name="evidence" value="true" {$MP_EVIDENCE} />
  {'mp_admin_2_opt1'|@translate}// !!Inactive option !! <br />
  <input type="checkbox" name="head" value="true" {$MP_HEAD} />
  {'mp_admin_2_opt2'|@translate}<br />
  <input type="checkbox" name="foot" value="true" {$MP_FOOT} />
  {'mp_admin_2_opt3'|@translate}<br />
  {'mp_admin_2_opt4'|@translate} : {'mp_admin_2_opt4_1'|@translate}
  <input name="h_pop" type="text" size="5" {$MP_H_POP} />
  px
  {'mp_admin_2_opt4_2'|@translate}
  <input name="l_pop" type="text" size="5" {$MP_L_POP} />
  px<br />
  <input name="envoi_config" type="hidden" value="plugin" />
  <input type="submit" name="button" id="button" value="{'mp_send'|@translate}" />
</form>
</fieldset>
<fieldset>
<legend>{'mp_admin_leg3'|@translate}</legend>
<form action="" method="post" name="option_lecteur">
  <ul>
    <li>{'mp_admin_3_opt1_1'|@translate}
      <input name="h_tt" type="text" size="5" {$MP_H_TT} />
      px
      {'mp_admin_3_opt1_2'|@translate}
      <input name="l_tt" type="text" size="5" {$MP_L_TT} />
      px</li>
    <li> {'mp_admin_3_opt2_1'|@translate}
      <input name="h" type="text" size="5" {$MP_H} />
      px <br />
      {'mp_admin_3_opt2_2'|@translate}</li>
    <li>
      <input type="checkbox" name="mp_miniature" value="true" {$MP_MINIATURE_ACTIVATED} />
      {'mp_admin_3_opt3_1'|@translate}</li>
    {'mp_admin_3_opt3_2'|@translate}
    <input name="l" type="text" size="5" {$MP_L}/>
    px
    </li>
    <br />
    {'mp_admin_3_opt3_3'|@translate}
    <li>
      <input type="checkbox" name="mp_shuffle" value="true" {$MP_SHUFFLE_ACTIVATED} />
      {'mp_admin_3_opt4'|@translate}</li>
    <li>
      <input name="mp_repeat" type="checkbox" value="true" {$MP_REPEAT_ACTIVATED} />
      {'mp_admin_3_opt5'|@translate}</li>
    <li>{'mp_admin_3_opt6'|@translate} :
      <select name="mp_autostart">
        <option value="{$AUTOSTART}">{$AUTOSTART_T}</option>
        {foreach from=$list2 item=fioo}
        <option value="{$fioo.ID}">{$fioo.TEXTE}</option>
        {/foreach}
      </select>
    </li>
    <li>
      <input name="mp_autoscroll" type="checkbox" value="true" {$MP_AUTOSCROLL_ACTIVATED} />
      {'mp_admin_3_opt7'|@translate}</li>
  </ul>
  <input name="envoi_config" type="hidden" value="lecteur" />
  <input type="submit" name="button2" id="button2" value="{'mp_send'|@translate}" />
</form>
</fieldset>
