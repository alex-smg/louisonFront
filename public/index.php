<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Content-type: text/html; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
$data = $_POST;
var_dump($_POST);
$header="MIME-Version : 1.0\r\n";
$header.='From:"Louison-hipeau.fr"<alex.s95120@gmail.com>'."\n";
$header.='Content-type:text/html; charset="utf-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

mail('alex.s95120@gmail.com', 'test', 'ça fonctionne', $header);