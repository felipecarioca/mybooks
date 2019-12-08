<?php
    class Livro {
        public $id;
        public $titulo;
        public $paginas;
        public $capa;
        public $lido;

        function __construct($id, $titulo, $paginas, $capa, $lido) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->paginas = $paginas;
            $this->capa = $capa;
            $this->lido = $lido;
        }
    }
?>