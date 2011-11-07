<?php

function plugin_install()
{
  global $prefixeTable;
  $q = 'CREATE TABLE ' . $prefixeTable . 'mp_playlist (
        id BIGINT NOT NULL AUTO_INCREMENT ,
        type VARCHAR( 50 ) NOT NULL ,
        url VARCHAR( 255 ) NOT NULL ,
        texte TINYTEXT NOT NULL ,
        PRIMARY KEY ( id )
        );
  ';
  pwg_query($q);
  $q = 'CREATE TABLE ' . $prefixeTable . 'mp_music (
        id BIGINT NOT NULL AUTO_INCREMENT ,
        pl_id BIGINT NOT NULL ,
        rang BIGINT NOT NULL ,
        url VARCHAR( 255 ) NOT NULL ,
        nom VARCHAR( 255 ) NOT NULL ,
        PRIMARY KEY ( id )
        );
  ';
  pwg_query($q);
  $q = '
        INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
        VALUES
        ("mp_lecteur" , "148,300,128,true,128,false,list,0,true,./template/style/default.conf.php,true" , "Lecteur config : haut tt, larg tt, haut pl, miniature, larg min, shuffle, repeat, autostart, autoscroll, style, style pour chaque thème");';
  pwg_query($q);

  $q = '
      INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
      VALUES
      ("mp_plugin" , "true,false,false,260,400" , "Plugin music_player : evidence, header, footer, hauteur, largeur");';
  pwg_query($q);
}



function plugin_activate()
{
  global $prefixeTable;

///[ update from 1.2 ]
  $q = pwg_query('SHOW COLUMNS FROM '.$prefixeTable.'mp_playlist');
  $champ = array();
  while ($rep = mysql_fetch_row($q))
  {
    array_push($champ, $rep[0]);
  }

  if (!in_array('type', $champ)) {
    pwg_query('ALTER TABLE '.$prefixeTable.'mp_playlist ADD type VARCHAR( 50 ) NOT NULL AFTER id ');
  }
//ALTER TABLE `phpwebgallery_mp_playlist` ADD `type` VARCHAR( 50 ) NOT NULL AFTER `id` ;
  $query = '
          SELECT COUNT(*) AS result FROM '.$prefixeTable.'mp_playlist
          WHERE type=""
  ;';
  $data_table = mysql_fetch_array(pwg_query($query));
  $exist = $data_table['result'];
  if ( $exist != 0 )
  {
    $query = '
            SELECT id FROM '.$prefixeTable.'mp_playlist
            WHERE type=""
    ;';
    $result = pwg_query($query);
    while ($data = mysql_fetch_assoc($result))
    {
     $query = '
     UPDATE '.$prefixeTable.'mp_playlist
     SET type="local"
     WHERE id="'.$data['id'].'"
     LIMIT 1';
     pwg_query($query);
    }
  }
///[\]

 $query = '
SELECT COUNT(*) AS result FROM '.CONFIG_TABLE.'
WHERE param IN (\'mp_lecteur\')
;';
 $data_table = mysql_fetch_array(pwg_query($query));
 $exist = $data_table['result'];
 if ( $exist == 0 )
 {
  $q = '
INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
VALUES
("mp_lecteur" , "148,300,128,true,128,false,list,0,true,./template/style/default.conf.php,true" , "Lecteur config : haut tt, larg tt, haut pl, miniature, larg min, shuffle, repeat, autostart, autoscroll, style, style pour chaque thème");';
  pwg_query($q);
 } 
 else {
    $query = '
SELECT value FROM '.CONFIG_TABLE.'
WHERE param IN (\'mp_lecteur\')
;';
 $data_conf = mysql_fetch_array(pwg_query($query));
 $conf=explode(',', $data_conf['value']);
 $nbr=count($conf);
 
    if ($nbr!=11 or $conf[9]=='lecteur.css')// pour update depuis 2.1.0
    {
      pwg_query('DELETE FROM '.CONFIG_TABLE.' WHERE param IN (\'mp_lecteur\')');
      pwg_query($q);
      $q = '
        INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
        VALUES
        ("mp_lecteur" , "148,300,128,true,128,false,list,0,true,./template/style/default.conf.php,true" , "Lecteur config : haut tt, larg tt, haut pl, miniature, larg min, shuffle, repeat, autostart, autoscroll, style, style pour chaque thème");';
      pwg_query($q);
   }
 }
 
 
$query = '
          SELECT COUNT(*) AS result FROM '.CONFIG_TABLE.'
          WHERE param IN (\'mp_plugin\')
          ;';
$data_table = mysql_fetch_array(pwg_query($query));
$exist = $data_table['result'];
  if ( $exist == 0 )
  {
    $q = '
    INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
    VALUES
    ("mp_plugin" , "true,false,false,260,400" , "Plugin music_player : evidence, header, footer, hauteur, largeur");';
    pwg_query($q);
  } 
  else {
    $query = '
    SELECT value FROM '.CONFIG_TABLE.'
    WHERE param IN (\'mp_plugin\')
    ;';
    $data_conf = mysql_fetch_array(pwg_query($query));
    $conf=explode(',', $data_conf['value']);
    $nbr=count($conf);
    
    if ($nbr!=5)
    {
      pwg_query('DELETE FROM '.CONFIG_TABLE.' WHERE param IN (\'mp_plugin\')');
      pwg_query($q);
      $q = '
      INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
      VALUES
      ("mp_plugin" , "true,false,false,260,400" , "Plugin music_player : evidence, header, footer, hauteur, largeur");';
      pwg_query($q);
    }
  }
  $q = 'ALTER TABLE '.$prefixeTable.'mp_playlist CHANGE id id BIGINT( 4 ) NOT NULL AUTO_INCREMENT';pwg_query($q);
  $q = 'ALTER TABLE '.$prefixeTable.'mp_music CHANGE id id BIGINT( 4 ) NOT NULL AUTO_INCREMENT';pwg_query($q);
  $q = 'ALTER TABLE '.$prefixeTable.'mp_music CHANGE pl_id pl_id BIGINT( 4 ) NOT NULL';pwg_query($q);
  $q = 'ALTER TABLE '.$prefixeTable.'mp_music CHANGE rang rang BIGINT( 4 ) NOT NULL';pwg_query($q);
  
}//fin active




function plugin_uninstall()
{
  global $prefixeTable;
  
  $q = 'DROP TABLE ' . $prefixeTable . 'mp_playlist;';
  pwg_query($q);
  $q = 'DROP TABLE ' . $prefixeTable . 'mp_music;';
  pwg_query($q);
  
  pwg_query('DELETE FROM '.CONFIG_TABLE.' WHERE param IN (\'mp_plugin\')');
  pwg_query('DELETE FROM '.CONFIG_TABLE.' WHERE param IN (\'mp_lecteur\')');
}//fin uninstall


?>