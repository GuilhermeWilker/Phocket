<?php
  include_once '../config/url.php';
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="<?php echo $BASE_URL; ?>../assets/css/style.css"
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
      <form action="" method="post" class="form_login">
        <h2 class="form_login-title">PHOCKET</h2>
        <div class="form-group">
          <label for="nome">Username:</label>
          <input type="texte" name="nome" placeholder="Joab Manoel Gomes" />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="joabmanoel@email.com" />
        </div>
        <div class="form-group">
          <label for="password">Passoword:</label>
          <input type="password" name="password" placeholder="********" />
        </div>
        <button type="submit">Log in</button>
      </form>

      <div>
        <h2>Bem-vindo ao PHocket!</h2>
        <h4>Antes de tudo faça o seu cadastro ao lado</h4>

        <div class="image_container">
          <img src="<?php echo $BASE_URL; ?>../assets/img/6Yrg.gif" alt="" />
        </div>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
