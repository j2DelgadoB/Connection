<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Lima');

$response= array();
$response["data"]= array();
$data = array();
$data["variable1"]= $_GET["variablexUrlGet"];
$data["variable2"]= $_GET["variablexUrlGet2"];
$data["variableDeseableQueAparezca"] = $_POST["variablexPost"];
array_push($response["data"], $data);
echo  json_encode($response);