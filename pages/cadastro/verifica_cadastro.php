<?php
// Validação após envio do formulário de cadastro
  include "connection.php";
  session_start();
  $nome = $_POST["nome"];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $profissao = $_POST["profession"];
  $escolaridade = $_POST["schooling"];

  //echo "Email: " . $email;
  //echo "senha: " . $senha;

  $sql = "SELECT * FROM usuários WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $_SESSION["msg"] = "<p style='color:red'>E-mail já cadastrado no sistema!<p>";
    header("Location: cadastro.php");
  }
  else {
    $result_usuario = "INSERT INTO usuários (nome, email, senha, profissao, escolaridade) VALUES ('$nome','$email', '$senha','$profissao', '$escolaridade')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_insert_id($conn)) {
      $_SESSION["msg"] = "<p style='color:green'>Usuário cadastrado com sucesso!<p>";
      header("Location: cadastro.php");
    } else {
      $_SESSION["msg"] = "<p style='color:red'>Usuário não foi cadastrado com sucesso!<p>";
      header("Location: cadastro.php");
  }
  }
?>