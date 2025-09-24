<?php

require_once "Models/Usuario.class.php";

class UsuarioController {
    public function login() {
        echo "Estou no login do UsuarioController";
        // require views formulário
        if ($_POST) {
            // verificar os dados
            // verificar no banco de dados se existe esse usuário
        }
    }

    public function inserir(){
        $msg = [];
        $msg = ["", "", "", ""];
        $erro = false;
        if ($_POST) {
            if(empty($_POST["nome"])){
                $msg[0] = "O campo 'Nome' é obrigatório";
                $erro = true;
            }if(empty($_POST["email"])){
                $msg[1] = "O campo 'Email' é obrigatório";
                $erro = true;
            } else{
                $usuario = new Usuario(email: $_POST["email"]);
            }
            if(empty($_POST["senha"])){
                $msg[2] = "O campo 'Senha' é obrigatório";
                $erro = true;
            }
            if(empty($_POST["celular"])){
                $msg[3] = "O campo 'Celular' é obrigatório";
                $erro = true;
            }
            if(!$erro){
                // Se não houve erro, iremos inserir no banco de dados
                $usuario = new Usuario(0, $_POST["nome"], $_POST["email"], $_POST["senha"], $_POST["celular"]);
            }
        }
        require_once "/Views/forms-usuario.php";
    }
}
?>