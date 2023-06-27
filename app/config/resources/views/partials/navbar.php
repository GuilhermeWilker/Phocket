<div class="navbar__header">
      <div class="user_info-container">
            <div class="user_info">
                <?php if (isset($_SESSION['logged'])) { ?>
                    <p>
                       <?php echo $_SESSION['user']->username; ?> 
                    </p>
                <?php } ?>
                
                    <a href="/logout" class="btn_logout">Logout</a>

            </div>

            <div class="user_total-balance rental">
                <div class="img_rental">
                    <img class="icon" src="/assets/imgs/balance-icon.png" />
                </div>  
                <small>Saldo total:</small>

                    <p>
                        R$ <?php echo formatCurrency($totalBalance); ?>
                    </p>
            </div>

            <div class="user_total-income rental">
                <div class="img_rental">
                    <img class="icon" src="/assets/imgs/growth-icon.png" />
                </div>               
                <small>Rentabilidade:</small>
               
                    <p>
                        R$ <?php echo formatCurrency($totalIncome); ?>
                    </p>
            </div>

            <div class="user_total-expenses rental">
                <div class="img_rental">
                    <img class="icon" src="/assets/imgs/noun-icon.png" />
                </div>
                <small>Depesas:</small>
          
                    <p>
                        R$ -<?php echo formatCurrency($totalExpenses); ?>
                    </p>                 
            </div>
        </div>
    </div>

    <!-- <img class="img_dashboard"
      src="https://indiefy.net/static/img/landing/pro/money.gif"
      alt="Money Guy"
    /> -->
</div>