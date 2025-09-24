<?php
require_once "cabecalho.php";

?>

<div class="content">
    <div class="container">
        <h1>Usuário</h1>

        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputNome" name="nome">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email">
            </div>
            <div class="col-md-6">
                <?php echo $msg[0];?>
            </div>
            <div class="col-md-6">
                <?php echo $msg[1];?>
            </div>
            <div class="col-12">
                <label for="inputSenha" class="form-label">Senha</label>
                <input type="text" class="form-control" id="inputSenha" name="senha">
            </div>
            <div class="col-12">
                <label for="inputCelular" class="form-label">Celular</label>
                <input type="text" class="form-control" id="inputCelular" name="celular">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>

</body>

</html>