<div class="navbar__header">
      <div class="user_info-container">
            <div class="user_info">
                <?php if (isset($_SESSION['logged'])) { ?>
                    <p>
                       <?php echo $_SESSION['user']->username; ?> 
                    </p>
                <?php } ?>
                
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
    </div>

    <img class="img_dashboard"
      src="https://indiefy.net/static/img/landing/pro/money.gif"
      alt="Money Guy"
    />
</div>