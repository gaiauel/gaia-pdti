<?php

require 'vendor/autoload.php';

define('INSTITUICAO_ID', 1);

#require 'lib/MPDF57/mpdf.php';
require 'database.php';
require 'helpers.php';

/*$db = new DB();
$db->create();*/

$app = new \Slim\Slim(array(
    'templates.path' => './templates',
    'debug' => true
));

$app->get('/', function () use ($app) {
	$db = new DB();
	$app->render('home.php', array('rows' => $db->loadInfos(INSTITUICAO_ID)));
});



$app->get('/update', function () use ($app) {
	$db = new DB();
	$db->update_attributes(INSTITUICAO_ID, $app->request->get());
});

$app->get('/options', function() use ($app) {
	$app->render('options.php');
});

$app->get('/:page', function ($page) use ($app) {
	$db = new DB();
	if (in_array($page, array('missao', 'visao', 'objetivos', 'matriz'))) {
		$app->render("$page.php", array('rows' => $db->loadInfos(INSTITUICAO_ID)));
	}
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();
