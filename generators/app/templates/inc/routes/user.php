<?php

return function ($request, $response, $args) {
	global $api;
	$token = $request->getAttribute('token');
	$data = $api->query("SELECT * FROM registros WHERE token='" . $token . "'");

	return $api->response($response, json_encode($data), 200, 'application/json');
};