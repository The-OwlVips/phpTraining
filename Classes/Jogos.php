<?php
    class Jogo {
        private string $codGame;
        private string $genero;
        private string $preco;
        private string $nome;

        public function __construct(string $codGame, string $nome, string $genero, string $preco)
        {
            $this->setCodigo($codGame);
            $this->setGenero($genero);
            $this->setPreco($preco);
            $this->setNome($nome);
        }

        public function getCodigo(){
            return $this->codGame;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function getGenero(){
            return $this->genero;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setCodigo($codGame){
            $this->codGame = $codGame;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setGenero($genero){
            $this->genero = $genero;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

    }

    $minecraft = new Jogo("001", "Minecraft", "Mundo aberto/Aventura", "20,00");

    var_dump($minecraft);

?>