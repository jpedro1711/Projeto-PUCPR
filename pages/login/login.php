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
    <link rel="stylesheet" href="./login.css" />
  </head>
  <body>
    <div class="container">
      <span id="backToTop"></span>
      <header class="header">
        <div> 
          <p class="logo"><a href="../../index.html" title="Voltar">StepUP</a></p>
        </div>
        <div class="btn-group">
          <a href="../../index.html" class="btn-link" title="Voltar">Voltar</a>
      </header>

      <section class="section">
        <div class="container">
          <form class="form-register" method="post" action="./verifica_login.php">
            <p class="form-title">LOGIN</p>
            <label for="email" class="input-label"></label>
            <input type="email" class="input" name="email" id="email" placeholder="E-mail" required>
            <label for="senha" class="input-label"></label>
            <input type="password" class="input" name="senha" id="senha" placeholder="Senha" required>
            <div class="password-show">
              Mostrar a senha <input type="checkbox" onclick="passwordVisibility()" class="mostrar-senha" title="mostrar a senha">
            </div>


            <div class="btn-form-group">
              <input type="submit" id="btn-submit" value="Realizar Login" title="Realizar Login" onclick="loginFormOnSubmit()" onkeypress="loginFormOnSubmit()">
              <!-- <input type="reset" id="btn-clear" value="limpar"> -->
            </div>
            <?php
              if (isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset ($_SESSION["msg"]);
              }
            ?>
            <a href="/pages/cadastro/cadastro.html" id="link-login" title="Realizar Cadastro">Clique aqui para realizar cadastro</a>
          </form> 
        </div>
      </section>

      <footer class="footer">
        <a href="" class="footer-partners" title="Parceiros">Parceiros</a>
        <a href="#backToTop" class="txt-footer" title="Voltar ao ínicio">Voltar ao ínicio</a>
      </footer>
    </div>

    <script src="./script.js"></script>
  </body>
</html>
