<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./cadastro.css" />
  </head>
  <body>
    <div class="container">
      <span id="backToTop"></span>
      <header class="header">
        <p class="logo"><a href="../../index.html" title="Voltar">StepUP</a></p>
        <div class="btn-group">
          <a href="../../index.html" class="btn-link" title="Voltar">Voltar</a>
      </header>

      <section class="section">
        <div class="container">
          <form class="form-register" id="form-register1" action="./verifica_cadastro.php" method="post">
            <p class="form-title">CADASTRO</p>
            <label for="nome" class="input-label"></label>
            <input type="text" class="input" name="nome" id="nome" placeholder="Nome" required>
            
            <label for="senha" class="input-label"></label>

        
              <input type="password" class="input" name="senha" id="senha" placeholder="Senha" required>
              <div class="password-show">
                Mostrar a senha <input type="checkbox" onclick="passwordVisibility()" class="mostrar-senha">
              </div>

            <label for="email" class="input-label"></label>
            <input type="email" class="input" name="email" id="email" placeholder="E-mail" required>
            
            <div class="radio-container">
              <label class="input-label">Selecione sua profissão:</label><br>
              <input type="radio" id="student" name="profession" value="01" class="input-radio">
              <label for="student">Estudante</label><br>
              <input type="radio" id="unemployed" name="profession" value="02" class="input-radio">
              <label for="unemployed">Desempregado</label><br>
              <input type="radio" id="teacher" name="profession" value="03" class="input-radio">
              <label for="teacher">Professor</label><br>
              <input type="radio" id="another" name="profession" value="04" class="input-radio">
              <label for="another">Outra</label>
            </div>
            <br>
            <div class="radio-container">
              <label class="input-label">Selecione sua escolaridade:</label><br>
              <input type="radio" id="student" name="schooling" value="01" class="input-radio">
              <label for="student">Ensino médio incompleto</label><br>
              <input type="radio" id="unemployed" name="schooling" value="02" class="input-radio">
              <label for="unemployed">Ensino médio completo</label><br>
              <input type="radio" id="teacher" name="schooling" value="03" class="input-radio">
              <label for="teacher">Ensino superior incompleto</label><br>
              <input type="radio" id="another" name="schooling" value="04" class="input-radio">
              <label for="another">Ensino superior completo</label>
            </div>

            <div class="btn-form-group">
              <input type="submit" id="btn-submit" value="Finalizar cadastro" title="Finalizar Cadastro" onclick="registerFormOnSubmit()" onkeypress="registerFormOnSubmit()">
              <!-- <input type="reset" id="btn-clear" value="limpar"> -->
            </div>
            
            <?php
              if (isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset ($_SESSION["msg"]);
              }
            ?>
            <a href="../login/login.php" id="link-login" title="Realizar Login">Clique aqui para realizar login</a>

          </form> 
        </div>
      </section>
    </div>

      <footer class="footer">
        <a href="" class="footer-partners" title="Parceiros">Parceiros</a>
        <a href="#backToTop" class="txt-footer" title="Voltar ao ínicio">Voltar ao ínicio</a>
      </footer>

    <script src="./script.js"></script>
  </body>
</html>
