<?php

header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Methods: GET, POST,");

//define('PASTAPROJETO', 'AulaBanco');
define('PASTAPROJETO', 'PhpBackEnd');

/* Função criada para retornar o tipo de requisição */
function checkRequest() {
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
	  case 'PUT':
	  	$answer = "update";
	    break;
	  case 'POST':	  
	  	$answer = "post";
	    break;
	  case 'GET':
	  	$answer = "get";
	    break;
	  case 'DELETE':
	  	$answer = "delete";
	    break;	
	  default:
	    handle_error($method);  
	    break;
	}
	return $answer;
}

$answer = checkRequest();

// localhost/PhpBackEnd/pessoas
// localhost/PhpBackEnd/conteudo 
// localhost/PhpBackEnd/universidades 

$request = $_SERVER['REQUEST_URI']; 

// IDENTIFICA A URI DA REQUISIÇÃO

$args = explode('/', rtrim($request, '/'));
// localhost/PhpBackEnd/pessoas

// $args[0] localhost
// $args[1] PhpBackEnd
// $args[2] pessoas

$endpoint = array_shift($args);
if (array_key_exists(0, $args) && !is_numeric($args[0])) {
    $verb = array_shift($args);
}

if ($args) {
	$request = '/'.PASTAPROJETO.'/'.$args[0];
	// /PhpBackEnd/pessoas
	// /PhpBackEnd/pessoas/1
	// /PhpBackEnd/conteudo
}

switch ($request) {
	case '/'.PASTAPROJETO:	
      require __DIR__ . '/api/api.php';
        break;
	case '/'.PASTAPROJETO.'/' :		
        require __DIR__ . '/api/api.php';
        break;
    case '' :
        require __DIR__ . '/api/api.php';
        break;
	case '/'.PASTAPROJETO.'/cidade' :
		require __DIR__ . '/api/'.$answer.'_cidade.php';								
		break;	
	case '/'.PASTAPROJETO.'/categoria' :
		require __DIR__ . '/api/'.$answer.'_categoria.php';								
		break;
	case '/'.PASTAPROJETO.'/servico' :
		require __DIR__ . '/api/'.$answer.'_servico.php';								
		break;
	case '/'.PASTAPROJETO.'/cliente' :
		require __DIR__ . '/api/'.$answer.'_cliente.php';								
		break;
	case '/'.PASTAPROJETO.'/cliente_servico' :
		require __DIR__ . '/api/'.$answer.'_cliente_servico.php';								
		break;
	case '/'.PASTAPROJETO.'/capacitacao' :
		require __DIR__ . '/api/'.$answer.'_capacitacao.php';								
		break;
	case '/'.PASTAPROJETO.'/visita' :
		require __DIR__ . '/api/'.$answer.'_visita.php';								
		break;
    default:
        //require __DIR__ . '/api/404.php';
		break;		
}