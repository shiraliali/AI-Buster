<?php
require_once("header.php");


header('Access-Control-Allow-Origin: ' . ALLOWBASE);

header('Access-Control-Allow-Methods: GET, POST');

header('Access-Control-Allow-Headers: Content-Type, Authorization');

header('Content-Type: application/json');

echo json_encode(MessureFoolness($_POST['data']));
