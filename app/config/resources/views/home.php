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
   <main>
    <section class="section_form-container">
        

        <form class="form" method="post" action="/login">
            <h2>PHOCKET</h2>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name='email' placeholder="seuemail@gmail.com">
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" placeholder="*********">
            </div>

            <small>
                <a href="/">Ainda não possui conta? Cadastre-se aqui!</a>
            </small>

            <input type="submit" value="Login" class='button-login'>
        </form>
    </section>

    <section class="hero">
        <h3>Bem-vindo ao PHocket!</h3>
        <p>Antes de tudo faça o seu login ao lado!</p>

        <div class="img-container">
            <img src="./assets/imgs/mascote.png"  alt="Phocket Boy, mascote da empresa">
        </div>
        
    </section>
   </main>

   <footer class='footer'></footer>
</body>
</html>