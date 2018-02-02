<?php

$data = file_get_contents('php://input');

$json = json_decode($data);

$userasks = $json->result->resolvedQuery;

if ($userasks == "Am I elegible for helb loan?") {
	$response = "Sure, why not?";
}


$response = new \stdClass();

$response->speech = "";

header("Content-Type: application/json");

echo json_encode($response);

?>