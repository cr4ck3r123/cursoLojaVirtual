<?php

require './lib/autoload.php';

$smarty = new Template();

$smarty->assign('H2','Fernando X. de Oliveira');

echo Rotas::get_SiteTEMA();
echo '<br>';
echo Rotas::get_SiteRAIZ();
Rotas::get_pagina();
$smarty->display('index.tpl');