<form action="" method="post">
    {foreach from=$syn item=syn}<!-- BEGIN syn -->
    <strong>{'mp_adm_envoi_1'|@translate} "{$syn.RESULT}" :</strong>
<input name="texte_{$syn.NBR}" type="text" /><em>{'mp_adm_envoi_2'|@translate} : {$syn.RESULT_M}</em>
<input name="url_{$syn.NBR}" type="hidden" value="{$syn.RESULT}" />
    <!-- <input name="music/syn.RESULT" type="hidden" value="syn.RESULT_M" />--><br />
    {/foreach}<!-- END syn -->    

    <input name="nbr" type="hidden" value="{$NBR_TT}" />
    <input name="envoi" type="hidden" value="texte" />
    <input name="submit" value="{'mp_send'|@translate}" type="submit" />
</form>