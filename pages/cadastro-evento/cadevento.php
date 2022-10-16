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
    <link rel="stylesheet" href="./cadevento.css" />
  </head>
  <body>
    <div class="container">
      <span id="backToTop"></span>
      <header class="header">
        <div>
          <p class="logo"><a href="../../index.html">StepUP</a></p>
        </div>
        <div class="btn-group">
          <a href="../../index.html" class="btn-link">Voltar</a>
      </header>

      <section class="section">
        <div class="container">
          <form class="form-register" id="form-event" method="post" action="./cad_evento_valid.php" >
            <p class="form-title">Inscrição no evento</p>

            
            <label for="email" class="input-label"></label>
            <input type="email" class="input" name="email" id="email" placeholder="E-mail" required>

            <div class="radio-container">
              <label class="input-label">Selecione o evento que deseja se inscrever:</label><br>
              <input type="radio" id="evento" name="evento" value="01" class="input-radio">
              <label for="evento">Acessibilidade da web</label><br>
            </div>

            <div class="btn-form-group">
              <input type="submit" id="btn-submit" value="Enviar Inscrição" onclick="eventoCadFormOnSubmit()" onkeypress="eventoCadFormOnSubmit()">
              <!-- <input type="reset" id="btn-clear" value="limpar"> -->
            </div>

            <?php
              if (isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset ($_SESSION["msg"]);
              }
            ?>
          </form> 
        </div>
      </section>

      <footer class="footer">
        <a href="" class="footer-partners">Parceiros</a>
        <a href="#backToTop" class="txt-footer">Voltar ao ínicio</a>
      </footer>
    </div>
    <script src="./script.js"></script>
  </body>
</html>
