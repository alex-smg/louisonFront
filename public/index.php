<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Content-type: application/json');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);

$header="MIME-Version : 1.0\r\n";
$header = "From: <".$data->email.">\n";
$header .= "Reply-To: ".$data->email."\n";
$header .= "Content-Type: text/html; charset=\"utf-8\"";

$message =
    ' <html>
         <body>
            <img style="width: 50%; display: block; margin: 0 auto 50px auto" src="http://louison-hipeau.fr/img/logo.png">
            <h2>Nom : ' . $data->name . '</h2>
            <h2>Email : ' . $data->email . '</h2>
            <h2>Nom de la société : ' . $data->nom_soc . '</h2>
            <h2 margin="50px 0 50px 0">Message : ' . $data->message . '</h2>
            <img style="width: 50%; display: block; margin: 50px auto 50px auto" src="https://media.giphy.com/media/Rlxfht52POeHMUrner/200w_d.gif">
       </body>    
    </html>
    ';

mail('louison.hp@gmail.com', $data->obj, $message, $header);
