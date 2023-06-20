<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/global.css">
</head>
<body>
    <br>
    
    <h4 class='heading'>O melhor lugar para gerenciar sua rentabilidade! 🪙</h4>

   <main>
    <section class="section_form-container">
        <form class="form" method="post" action="/cadastrar">
            <h2>PHOCKET</h2>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name='username' placeholder="seuemail@gmail.com">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name='email' placeholder="seuemail@gmail.com">
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" placeholder="*********">
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirme sua senha:</label>
                <input type="password" name="confirm-password" placeholder="*********">
            </div>

            <small>
                <a href="/">Já possui conta? Clique aqui!</a>
            </small>

            <input type="submit" value="Login" class='button-login'>
        </form>
    </section>

    <section class="hero">
        <h3>Obrigado por escolher <br> o PHocket!</h3>
        <p>Antes de tudo faça o seu cadastro ao lado!</p>

        <div class="img-container">
            <img src="https://indiefy.net/static/img/landing/pro/money.gif"  alt="Money Guy">
        </div>
        
    </section>
   </main>

   <footer class='footer'></footer>
</body>
</html>