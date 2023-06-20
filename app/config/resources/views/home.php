<?php $this->extends('master', ['title' => $title]); ?>

    <br>
    <h4 class='heading'>
        O melhor lugar para gerenciar sua rentabilidade! 🪙
    </h4>

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
                <a href="/cadastrar">Ainda não possui conta? Cadastre-se aqui!</a>
            </small>

            <input type="submit" value="Login" class='button-login'>
        </form>
    </section>

    <section class="hero">
        <h3>Bem-vindo ao PHocket!</h3>
        <p>Antes de tudo faça o seu login ao lado!</p>

        <div class="img-container">
            <img src="https://indiefy.net/static/img/landing/pro/money_guy.gif"  alt="Phocket Boy">
        </div>
        
    </section>
   </main>

   <footer class='footer'></footer>
