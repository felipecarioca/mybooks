<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;

	include_once('../controller/LivroController.php');
	
	require './vendor/autoload.php';

	$app = new \Slim\App;

	// Livros
	$app->group('/livros', function() use ($app) {

		$app->get('/lidos','LivroController:listarLidos');
		
	    $app->get('','LivroController:listar');
	    $app->post('','LivroController:inserir');

	    $app->get('/{id}','LivroController:buscarPorId');
	    $app->put('/{id}','LivroController:atualizar');
		$app->delete('/{id}', 'LivroController:deletar');
	});

	$app->run();

?>