<?php
    class Usuarios{
        // Método Construtor: inicializa os atributos da classe.
        public function __construct(
            private int $id_usuario = 0,
            private string $nome_usuario = "",
            private string $email_usuario = "",
            private string $senha_usuario = "",
            private string $celular_usuario = ""
        ){}

        // Métodos Getters e Setters: permite acesso aos atributos privados da classe.
        // Id do Usuário:
        public function getIdUsuario(){
            return $this->id_usuario;
        }
        public function setIdUsuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }

        // Nome do Usuário:
        public function getNomeUsuario(){
            return $this->nome_usuario;
        }
        public function setNomeUsuario($nome_usuario){
            $this->nome_usuario = $nome_usuario;
        }
        
        // Email do Usuário:
        public function getEmailUsuario(){
            return $this->email_usuario;
        }
        public function setEmailUsuario($email_usuario){
            $this->email_usuario = $email_usuario;
        }

        // Senha do Usuário:
        public function getSenhaUsuario(){
            return $this->senha_usuario;
        }
        public function setSenhaUsuario($senha_usuario){
            $this->senha_usuario = $senha_usuario;
        }

        // Celular do Usuário:
        public function getCelularUsuario(){
            return $this->celular_usuario;
        }
        public function setCelularUsuario($celular_usuario){
            $this->celular_usuario = $celular_usuario;
        }
    }
?>