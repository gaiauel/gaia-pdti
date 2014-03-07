<?php

require 'vendor/autoload.php';

define('INSTITUICAO_ID', 1);

require 'lib/MPDF57/mpdf.php';
require 'database.php';

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

$app->get('/pdf', function () use ($app) {
	$app->response->headers->set('Content-Type', 'application/pdf');
	$mpdf = new mPDF();
	$mpdf->WriteHTML('Hello World');
	$mpdf->Output();
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();
