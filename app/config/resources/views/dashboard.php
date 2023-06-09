<?php $this->extends('master', ['title' => $title]); ?>

<main class="dashboard flex">
  <aside class="navbar">
    <?php require 'partials/navbar.php'; ?> 
  </aside>

  <section class="dashboard_area">

    <article class="grafico">
      <?php require 'partials/grafico.php'; ?>
    </article>
 
    <article class="actions flex">
      <div class="TransactionModel_box">
        <?php echo get('message'); ?>

        <form action="/transaction" class="form-TransactionModel" method="post">
          <div class="form-TransactionModel-group">
            <label for="price">Digite o valor</label> <br>
            <div class="flex">
              <input type="text" name="price" placeholder="R$ 2.500,00" required/>
              <img class="icon" src="/assets/imgs/balance-icon.png" />
            </div>
          </div>

          <div class="form-TransactionModel-group flex">
            <label for="date">Data</label>
            <input type="date" name="date" required/>
          </div>

          <div class="form-TransactionModel-group flex">
            <label for="type">Tipo</label>
            <select name="type" id="" required>
              <option value="">Selecione</option>
              <option value="Receita">Rentabilidade</option>
              <option value="Despesa">Despesa</option>
            </select>
          </div>

          <div class="form-TransactionModel-group flex">
            <input type="submit" value="Adicionar" />
          </div>
        </form>

        <div class="clock">
          <?php require 'partials/clock.php'; ?>
        </div>
      </div>

      <div class="income_history">
        <h4>Histórico 📈</h4>
        <?php require 'partials/historico_transacoes.php'; ?>
      </div>
    </article>
  </section>
</main>
<script src="/assets/script/clock.js" defer></script>

    <script src="./assets/script/grafico.js" defer></script>