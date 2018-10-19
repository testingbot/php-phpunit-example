<?php 

$config_file = getenv('CONFIG_FILE');
if(!$config_file) $config_file = 'config/single.conf.json';
$GLOBALS['CONFIG'] = json_decode(file_get_contents($config_file), true);

$GLOBALS['TB_KEY'] = getenv('TB_KEY');
if(!$GLOBALS['TB_KEY']) $GLOBALS['TB_KEY'] = $GLOBALS['CONFIG']['key'];

$GLOBALS['TB_SECRET'] = getenv('TB_SECRET');
if(!$GLOBALS['TB_SECRET']) $GLOBALS['TB_SECRET'] = $GLOBALS['CONFIG']['secret'];

?>
