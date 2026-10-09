<?php

//Iniciar a sessão php
session_start();

//Verificar se o usuário já está logado
if (isset($_SESSION["usuario_id"])) {
    header("Localtion: painel.php");
    exit;
}

//Verifica se houver erro na tentativa de login
$erro = isset($_GET["erro"]);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

</head>

<body>
    <section class="container">
        <div class="row">
            <div class="col-6" justify-content: center>
                <form action="autenticar.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguem.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" required>
                    </div>
                    <button type="submit" class="btn-solid theme-primary">Entrar</button>
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>

</html>