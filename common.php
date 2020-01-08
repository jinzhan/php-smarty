<?php
date_default_timezone_set("PRC");
ini_set('error_reporting', E_ALL & ~E_NOTICE);
ini_set('display_errors', 'On');
require('smarty-3.1.34/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->left_delimiter = "{%";
$smarty->right_delimiter = "%}";
