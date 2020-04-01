<?php

require_once __DIR__ .'/Autoload.php';
spl_autoload_register('Autoload::loader');

use application\Config;
use application\models\cv\arrays\DataModel;
use application\models\cv\CvPartsFactory;
use application\Template;
use application\Test2;

// try {
// 	$dataModel = new DataModel();
// 	$config = require_once __DIR__ . 'application/configs/data-sources.php';
// 	Config::getInstance()->load($config);

// 	echo (new Template())->setLayout('web/layout')->render('web/cv', ['parts' => new CvPartsFactory($dataModel)]);
// } catch (Exception $ex) {
// 	die($ex->getMessage());
// }

require_once __DIR__ .'/Test2.php';

echo ( new Test2('8') )->get();

// echo $obj->get();

echo "<br>";

$obj1 = new Test2('9');

// echo $obj1->get();
