<?php
//Verificar se o formulario foi enviado usando POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Receber os dados enviados pelo formulario
    $nome       =   $_POST["nome"];
    $email      =   $_POST["email"];
    $telefone   =   $_POST["telefone"];
    $assunto    =   $_POST["assunto"];
    $mensagem   =   $_POST["mensagem"];

    //Importar a conexao com o banco
    require("conexao.php");

    //Preparar o comando SQL
    $sql = "INSERT INTO contato (nome, email, telefone, assunto, mensagem) VALUES (?,?,?,?,?)";

    //Prepara o comando
    $stmt = mysqli_prepare($conexao, $sql);

    //Vincula os valores aos ?
    mysqli_stmt_bind_param(
        $stmt,
        "sssss",
        $nome,
        $email,
        $telefone,
        $assunto,
        $mensagem
    );

    //Executa
    if(mysqli_stmt_execute($stmt)){
    
    }


}

?>