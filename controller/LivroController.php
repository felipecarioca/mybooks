<?php

include_once('../model/Livro.php');
include_once('../db/LivroDAO.php');


class LivroController {
    public function listar($request, $response, $args) {
        $dao= new LivroDAO;    
        $livros =  $dao->listar();
        
        return $response->withJson($livros);    
    }

    public function listarLidos($request, $response, $args) {
        $dao= new LivroDAO;    
        $livros =  $dao->listarLidos();
        
        return $response->withJson($livros);    
    }
    
    public function buscarPorId($request, $response, $args) {
        $id = $args['id'];
        
        $dao= new LivroDAO;    
        $livro = $dao->buscarPorId($id);
        
        return $response->withJson($livro);
    }

    public function inserir( $request, $response, $args) {
        $p = $request->getParsedBody();
        $livro = new Livro(0, $p['titulo'], $p['paginas'], $p['capa'], 0);
        
        $dao = new LivroDAO;
        $livro = $dao->inserir($livro);

        return $response->withJson($livro,201);
    }
    
    public function atualizar($request, $response, $args) {
        $id = $args['id'];
        $p = $request->getParsedBody();
        $livro = new Livro($id, $p['titulo'], $p['paginas'], $p['capa'], $p['lido']);

        $dao = new LivroDAO;
        $livro = $dao->atualizar($livro);
    
        return $response->withJson($livro);    
    }

    public function deletar($request, $response, $args) {
        $id = $args['id'];

        $dao = new LivroDAO;
        $livro = $dao->deletar($id);
    
        return $response->withJson($livro);  
    }
}