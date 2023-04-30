<?php
  include_once 'config/url.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="<?php echo $BASE_URL; ?>/assets/css/style.css"
    />

    <style>
      body {
        font-family: "Ubuntu Mono", monospace;
      }

      input {
        font-family: "Ubuntu Mono", monospace;
        font-size: 14px;
      }
    </style>
    <title>Phocket</title>
  </head>
  <body>
    <main>
      <form action="" class="form_login">
        <h2 class="form_login-title">PHOCKET</h2>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="joabmanoel@email.com" />
        </div>
        <div class="form-group">
          <label for="password">Passoword:</label>
          <input type="password" name="password" placeholder="********" />
        </div>
        <div class="form-group">
          <a href="#">Ainda não possui conta? Cadastre-se aqui!</a>
        </div>
        <button type="submit">Log in</button>
      </form>

      <div class="image_container">
        <img src="<?php echo $BASE_URL; ?>/assets/img/6Yrg.gif" alt="" />
      </div>
    </main>
    <footer></footer>
  </body>
</html>
