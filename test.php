<?php
header("Content-Type: text/html; charset=utf-8");
require_once ('./includes/initialize.php');

$smarty->assign('cities', ['City1','City2','City3']);
$smarty->assign('location_id',0);
$smarty->display('test.tpl');