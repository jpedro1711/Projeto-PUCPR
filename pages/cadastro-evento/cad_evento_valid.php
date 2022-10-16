<?php
  include "connection.php";
  session_start();

  if (isset($_POST["evento"])) {

    $email = $_POST["email"];
    $evento = $_POST["evento"];

    $sql = "SELECT * FROM usuários WHERE email='$email'";

    $result = mysqli_query($conn, $sql); // número de emails que ele acha ao se conectar ao banco


    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      
      if ($row['email'] === $email) {
        $_SESSION['email'] = $row['email'];
        $id = $row['id'];
        $verification = "SELECT * FROM inscricoes_evento WHERE id_usuario='$id'";
        $result1 = mysqli_query($conn, $verification);

        if (mysqli_num_rows($result1) === 1) {
          $_SESSION["msg"] =  "<p style='color:red'>Você já se cadastrou nesse evento!!<p>";
          header("Location: cadevento.php");
        }
        else {
          $_SESSION["msg"] =  "<p style='color:green'>Inscrição enviada com sucesso!!<p>";
          $result_usuario = "INSERT INTO inscricoes_evento (evento, id_usuario) VALUES ('$evento','$id')";
          $resultado_usuario = mysqli_query($conn, $result_usuario);
          header("Location: cadevento.php");
        }

      }
      else{
        $_SESSION["msg"] =  "<p style='color:red'>E-mail inválido!!<p>";
        header("Location: cadevento.php");
      }
    }
    else {
      $_SESSION["msg"] =  "<p style='color:red'>Você deve se cadastrar para se inscrever em eventos!!<p>";
      header("Location: cadevento.php");
    }
  }
  else {
    $_SESSION["msg"] =  "<p style='color:red'>Selecione um evento!!<p>";
    header("Location: cadevento.php");
  }

?>