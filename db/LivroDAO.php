<?php
    include_once '../model/Livro.php';
    include_once '../db/PDOFactory.php';

    class LivroDAO
    {
        public function inserir(Livro $livro)
        {
            $qInserir = "INSERT INTO livro(titulo, paginas, capa, lido) VALUES (:titulo,:paginas,:capa,:lido)";            
            
            $pdo = PDOFactory::getConexao();
            $comando = $pdo->prepare($qInserir);
            $comando->bindParam(":titulo",$livro->titulo);
            $comando->bindParam(":paginas",$livro->paginas);
            $comando->bindParam(":capa",$livro->capa);
            $comando->bindParam(":lido",$livro->lido);
            $comando->execute();
            $livro->id = $pdo->lastInsertId();

            return $livro;
        }

        public function deletar($id)
        {
            $qDeletar = "DELETE from livro WHERE id=:id";            
            $livro = $this->buscarPorId($id);
            $pdo = PDOFactory::getConexao();
            $comando = $pdo->prepare($qDeletar);
            $comando->bindParam(":id",$id);
            $comando->execute();

            return $livro;
        }

        public function atualizar(Livro $livro)
        {   
            $qAtualizar = "UPDATE livro SET titulo=:titulo, paginas=:paginas, capa=:capa, lido=:lido WHERE id=:id";            
            $pdo = PDOFactory::getConexao();
            
            $comando = $pdo->prepare($qAtualizar);
            
            $comando->bindParam(":titulo",$livro->titulo);
            $comando->bindParam(":paginas",$livro->paginas);
            $comando->bindParam(":capa",$livro->capa);
            $comando->bindParam(":lido",$livro->lido);
            $comando->bindParam(":id",$livro->id);       

            $comando->execute();
            

            return $livro;        
        }

        public function listar()
        {
		    $query = 'SELECT * FROM livro WHERE lido = 0';
    		$pdo = PDOFactory::getConexao();
	    	$comando = $pdo->prepare($query);
    		$comando->execute();
            $livros=array();

		    while($row = $comando->fetch(PDO::FETCH_OBJ)){
			    $livros[] = new Livro($row->id,$row->titulo,$row->paginas,$row->capa,$row->lido);
            }

            return $livros;
        }

        public function listarLidos()
        {
		    $query = 'SELECT * FROM livro WHERE lido = 1';
    		$pdo = PDOFactory::getConexao();
	    	$comando = $pdo->prepare($query);
    		$comando->execute();
            $livros=array();

		    while($row = $comando->fetch(PDO::FETCH_OBJ)){
			    $livros[] = new Livro($row->id,$row->titulo,$row->paginas,$row->capa,$row->lido);
            }

            return $livros;
        }

        public function buscarPorId($id)
        {
 		    $query = 'SELECT * FROM livro WHERE id=:id';		
            $pdo = PDOFactory::getConexao(); 
		    $comando = $pdo->prepare($query);
		    $comando->bindParam ('id', $id);
		    $comando->execute();
            $result = $comando->fetch(PDO::FETCH_OBJ);

            $livros=array();
            $livros[] = new Livro($result->id,$result->titulo,$result->paginas,$result->capa,$result->lido);
            
		    return $livros;         
        }
    }
?>