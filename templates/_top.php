<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDTI</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/bootstrap-wysihtml5.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/css/prettify.css"></link>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gaia PDTI</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Painel de controle</a></li>
            <li><a href="#">Opções</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="#">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Missão</a></li>
            <li><a href="#">Visão</a></li>
          </ul>
          <hr>
          <button type="button" class="btn btn-danger btn-lg" style="position: absolute; bottom: 50px;">
            <span class="glyphicon glyphicon glyphicon-save"></span> Gerar PDF
          </button>
        </div>