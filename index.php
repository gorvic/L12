<?php

header("Content-Type: text/html; charset=utf-8");
require_once ('./includes/initialize.php');

function __autoload($class_name) {

  if ($class_name != 'DbSimple_Mysqli' && $class_name != 'Smarty') {
	require_once CLASS_PATH . '/class.' . $class_name . '.php';
  }
}

$storage = AdsStorage::getInstance();

if (request_is_post()) {

  $ad = Ad::build($storage::sanitizeFormData($_POST)); //create new object 
  if ( $ad->save() ) //save object in database
  {
	$storage->addAd($ad); //add object to storage
  }
  
  redirect_to('index.php');
  
} 

$storage->fillStorage();
 
$edit_id = '';
if (isset($_GET['id']) && isset($_GET['mode'])) {

  $id = (int) $_GET['id'];
  $mode = strip_tags($_GET['mode']);

  $ad = $storage->getAd($id);

  //there ought to be smarter error handling
  if (empty($ad)) {
	die('Неверный id объявления');
  }

  if ($mode == "show") {
	
	$edit_id = $id;
	
  } elseif ($mode == "delete") {

	$ad->delete();
	$storage->removeAd($id);
  }
}

$storage->prepareFieldsOfAd($edit_id);
$storage->prepareTableOfAds();
$storage->display();