<?php $this->extends('master', ['title' => $title]); ?>

<main class="dashboard flex">
  <article class="navbar">
    <div class="navbar__header">
      <div class="user_info-container">
        <div class="user_info">
          <p>Guilherme Wilker</p>
        </div>

        <div class="user_total-balance rental">
          <small>Saldo total:</small>

          <div class="flex">
            <p>R$ 3.000,00</p>
            <img class="icon" src="/assets/imgs/balance-icon.png" />
          </div>
        </div>

        <div class="user_total-income rental">
          <small>Rentabilidade:</small>
          <div class="flex">
            <p>R$ 3.000,00</p>
            <img class="icon" src="/assets/imgs/growth-icon.png" />
          </div>
        </div>

        <div class="user_total-expenses rental">
          <small>Depesas:</small>
          <div class="flex">
            <p>R$ 500,00</p>
            <img class="icon" src="/assets/imgs/noun-icon.png" />
          </div>
        </div>
      </div>
    </div>

    <img
      class="img_dashboard"
      src="https://indiefy.net/static/img/landing/pro/money.gif"
      alt="Money Guy"
    />
  </article>

  <section class="dashboard_area">
    <article class="grafico">gráfico</article>

    <article class="actions flex">
      <div class="transaction_box">
        <h4>Registrar nova transação</h4>

        <form action="" method="post">
          <div class="form-transaction-group">
            <label for="">Digite o valor</label>
            <div class="flex">
              <input type="text" />
              <img class="icon" src="/assets/imgs/balance-icon.png" />
            </div>
          </div>

          <div class="form-transaction-group flex">
            <label for="">Data</label>
            <input type="date" />
          </div>

          <div class="form-transaction-group flex">
            <label for="">Tipo</label>
            <select name="Tipo" id="">
              <option value="">De transação</option>
              <option value="gain">Rentabilidade</option>
              <option value="loss">Despesa</option>
            </select>
          </div>

          <div class="form-transaction-group flex">
            <input type="submit" value="Adicionar" />
          </div>
        </form>

        <p class="clock">12:05:06</p>
      </div>

      <div class="income_history">
        <h4>Histórico</h4>
      </div>
    </article>
  </section>
</main>

