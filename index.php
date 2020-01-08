<?php
$projectDir = dirname(dirname(__FILE__));
require_once('common.php');
$tplPath = $argv[1];
$tplDataPath = $argv[2];

$tplData = array();
if ($tplDataPath) {
    $tplData = json_decode(
        file_get_contents($tplDataPath),
        true
    );
}

$smarty->assign($tplData);

if($tplPath) {
    $smarty->display($tplPath);
}