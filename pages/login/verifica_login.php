<?php
  include "connection.php";
  session_start();

  // Página de validação de login

  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM usuários WHERE email='$email' AND senha='$senha'";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if ($row['email'] === $email && $row['senha'] === $senha) {
      $_SESSION['email'] = $row['email'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['id'] = $row['id'];
      $_SESSION["msg"] =  "<p style='color:green'>Login realizado com sucesso!!<p>";
      header("Location: login.php");
    }
    else{
      $_SESSION["msg"] =  "<p style='color:red'>Login ou senha não coincidem!!<p>";
      header("Location: login.php");
    }
  }
  else {
    $_SESSION["msg"] =  "<p style='color:red'>Não Conseguiu Logar!! Login Ou Senha não encontrados<p>";
    header("Location: login.php");
  }
?>