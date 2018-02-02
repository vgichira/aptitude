<?php

$data = file_get_contents('php://input');

$json = json_decode($data);

$userasks = $json->result->resolvedQuery;

if ($userasks == "Am I elegible for helb loan?") {

	$response = "What is your ID number, please?";

	$encode = json_encode($response);

	echo $encode;
}

?>