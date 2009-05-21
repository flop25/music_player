<div class="titrePage">
  <ul class="categoryActions">
    <li><a href="admin.php?page=plugin&section=music_player/admin/help.php" title="{'Help'|@translate}">{'mp_need_help'|@translate}</a></li>
  </ul>
  <h2>Music player / {$PLAYLIST}</h2>
</div>
<!--
<div class="header_msgs">
  <p>mp_msgs.mp_msg.MP_MSG</p>
</div>
 -->
{foreach from=$edit_txt item=edit_txt}
<form action="" method="post" name="edit_txt">
  {'mp_adm_edit_1'|@translate} :
  <input name="texte" type="text" value="{$edit_txt.TXT}" maxlength="255" />
  <input name="id" type="hidden" value="{$edit_txt.ID}" />
  <input name="envoi" value="edit_txt" type="hidden" />
  <input name="submit" value="OK" type="submit" />
</form>
<p><a href="admin.php?page=plugin&amp;section=music_player/admin/admin.php">{'mp_adm_return'|@translate}</a></p>
{/foreach}

{foreach from=$edit_ex item=edit_ex}
<form action="" method="post" name="edit_ex">
  {'mp_adm_edit_1'|@translate} :
  <input name="texte" type="text" value="{$edit_ex.TXT}" maxlength="255" />
  <br />
  URL :
  <input name="url" type="text" value="{$edit_ex.URL}" size="60" maxlength="255" />
  <input name="id" type="hidden" value="{$edit_ex.ID}" />
  <input name="envoi" value="edit_ex" type="hidden" />
  <input name="submit" value="OK" type="submit" />
</form>
<p><a href="admin.php?page=plugin&amp;section=music_player/admin/admin.php">{'mp_adm_return'|@translate}</a></p>
{/foreach}

{foreach from=$suppr item=suppr}
<form action="admin.php?page=plugin&amp;section=music_player/admin/admin_edit.php&music={$suppr.PL}" method="post" name="suppr">
  <input name="envoi" type="hidden" value="suppr" />
  <input name="id" type="hidden" value="{$suppr.ID}" />
  <input name="submit" value="{'mp_adm_ed_sup_ok'|@translate}" type="submit" />
  {'mp_adm_ed_sup_info'|@translate}
</form>
<p><a href="admin.php?page=plugin&amp;section=music_player/admin/admin_edit.php&music={$suppr.PL}">{'mp_adm_return_2'|@translate}</a></p>
{/foreach}
{foreach from=$edit_music item=edit_music}
<form action="" method="post" name="edit_music">
  Texte :
  <input name="nom" type="text" value="{$edit_music.NOM}" size="40" maxlength="255" />
  <br />
  URL :
  <input name="url" type="text" value="{$edit_music.URL}" size="80" maxlength="255" />
  <input name="id" type="hidden" value="{$edit_music.ID}" />
  <input name="envoi" type="hidden" value="edit_music" />
  <input name="submit" value="OK" type="submit" />
</form>
<p><a href="admin.php?page=plugin&amp;section=music_player/admin/admin_edit.php&music={$edit_music.PL}">{'mp_adm_return_2'|@translate}</a></p>
{/foreach}

{if isset($etape_ID)}
<fieldset>
<legend>{'mp_adm_etape_1'|@translate}</legend>
<form id="form1" name="form1" method="post" action="">
  <div align="center">{'mp_adm_et1_txt'|@translate}
    <input type="hidden" name="id_playlist" id="hiddenField" value="{$etape_ID}" />
    <input type="hidden" name="envoi" id="hiddenField" value="synchro_bdd" />
    <input type="submit" name="button" id="button" value="{'mp_adm_edit_3'|@translate}" />
  </div>
</form>
</fieldset>
<fieldset>
<legend>{'mp_adm_etape_2'|@translate}</legend>
{'mp_adm_et2_txt'|@translate}
<form id="form1" name="form1" method="post" action="">
  {'mp_adm_et2_nbr'|@translate}
  <input name="nbr_ajout" type="text" id="nbr_ajout" size="3" maxlength="2" />
  <input type="submit" name="button" id="button" value="OK" />
</form>
<form action="" method="post" name="edit_music">
  {foreach from=$ajout item=ajout}<!-- BEGIN ajout -->
  <fieldset>
  Texte :
  <input name="nom_{$ajout.I}" type="text" size="40" maxlength="255" />
  {'mp_adm_et2_rg'|@translate}
  <input name="rang_{$ajout.I}" type="text" size="3" maxlength="20" />
  {'mp_adm_et2_rg2'|@translate}<br />
  URL :
  <input name="url_{$ajout.I}" type="text" size="80" maxlength="255" />
  </fieldset>
  {/foreach}
  <input name="nbr" type="hidden" value="{$etape_I}" />
  <input name="envoi" type="hidden" value="ajout" />
  <input name="submit" value="{'mp_send'|@translate}" type="submit" />
</form>
</fieldset>
{/if}<!-- etape -->

{if isset($playlist_TEXTE)}
<fieldset>
<legend>{'mp_adm_etape_3'|@translate}</legend>
{'mp_adm_edit_2'|@translate} &quot;<em>{$playlist_TEXTE}&quot;</em> {'mp_adm_envoi_2'|@translate} :
<table id="list_music" class="table2">
  <thead>
    <tr class="throw">
      <td>{'mp_adm_thead1'|@translate}</td>
      <td>{'mp_adm_thead2'|@translate}</td>
      <td>{'mp_adm_thead3'|@translate}</td>
      <td>{'mp_adm_thead4'|@translate}</td>
      <td>{'mp_adm_thead5'|@translate}</td>
      <td>{'mp_adm_thead6'|@translate}</td>
    </tr>
  </thead>
  {foreach from=$music item=music}<!-- BEGIN music -->
  <tr class="{$music.CLASS}">
    <td>{$music.NOM}</td>
    <td>{$music.FILE}</td>
	<td>
    {if isset ($music.UP_RANG)}
      <form action="" method="post">
        <input name="rang" type="hidden" value="{$music.UP_RANG}" />
        <input name="nouv_rang" type="hidden" value="{$music.UP_RANG_NEW}" />
        <input type="hidden" name="envoi" id="hiddenField" value="rang" />
        <input type="image" name="up" src="plugins/music_player/template/icon/page_top.png" />
      </form>
	{/if}
    </td>
    <td>
    {if isset ($music.D_RANG)}
      <form action="" method="post">
        <input name="rang" type="hidden" value="{$music.D_RANG}" />
        <input name="nouv_rang" type="hidden" value="{$music.D_RANG_NEW}" />
        <input type="hidden" name="envoi" id="hiddenField" value="rang" />
        <input type="image" name="down" src="plugins/music_player/template/icon/page_end.png" />
      </form>
    {/if}
    </td>
    <td><a href="admin.php?page=plugin&section=music_player/admin/admin_edit.php&music_id={$music.ID}" title="{'mp_admin_nm_edit'|@translate}"><img src="{$pwg_root}{$themeconf.icon_dir}/category_edit.png" class="button" alt="{'mp_admin_nm_edit'|@translate}"></a></td>
    <td><a href="admin.php?page=plugin&section=music_player/admin/admin_edit.php&suppr={$music.ID}" title="{'delete'|@translate}"><img src="{$pwg_root}{$themeconf.icon_dir}/delete.png" class="button" alt="{'delete'|@translate}"></a> </td>
  </tr>
  {/foreach}<!-- END music -->
</table>
</fieldset>
<fieldset>
<legend>{'mp_adm_etape_4'|@translate}</legend>
<form id="form1" name="form1" method="post" action="">
  <div align="center"> ===>{'mp_adm_et4_txt'|@translate}
    <input type="hidden" name="id_playlist" id="hiddenField" value="{$playlist_ID}" />
    <input type="hidden" name="envoi" id="hiddenField2" value="synchro_xml" />
    <input type="submit" name="button" id="button" value="{'mp_adm_et4_ok'|@translate}" />
    <=== </div>
</form>
</fieldset>

<p><a href="admin.php?page=plugin&amp;section=music_player/admin/admin.php">{'mp_adm_return'|@translate}</a></p>
{/if}
