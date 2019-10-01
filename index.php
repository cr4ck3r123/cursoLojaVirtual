<?php

require './lib/autoload.php';

$smarty = new Template();

$smarty->assign('H2','Fernando X. de Oliveira');

echo Config::SITE_URL .'/'.Config::SITE_PASTA;

Rotas::get_pagina();
$smarty->display('index.tpl');