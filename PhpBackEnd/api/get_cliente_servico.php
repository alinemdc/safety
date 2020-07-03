<?php
include __DIR__.'/../control/Cliente_servicoControl.php';
$cliente_servicoControl = new Cliente_servicoControl();

header('Content-type: application/json');

if (!isset($args[1])) {
	$result = $cliente_servicoControl->findAll();
	if ($result) {
		http_response_code(200);
		echo json_encode($result);
	}
	else {
		http_response_code(400);
		echo json_encode(array("mensagem" => "Não encontrado"));
	}
}
else {
	$result = $cliente_servicoControl->find($args[1]);
	if ($result) {
		http_response_code(200);
		echo json_encode($result);
	}
	else {
		http_response_code(400);
		echo json_encode(array("mensagem" => "Não encontrado"));
	}	
}
?>