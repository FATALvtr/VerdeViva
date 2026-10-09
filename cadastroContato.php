<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

    // Executa
    if (mysqli_stmt_execute($stmt)) {
        echo "
        <script>
            alert('Mensagem enviada com sucesso!');
            window.location.href = 'index.html';
        </script>
    ";
        exit; // Importante para parar a execução após o script JS
    } else {
        echo "Erro ao enviar mensagem: " . mysqli_stmt_error($stmt);
    }

    // Fechar o comando
    mysqli_stmt_close($stmt);

    // Fechar conexão
    mysqli_close($conexao);
}
