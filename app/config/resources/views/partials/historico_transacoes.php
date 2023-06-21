<div class="historico-list_TransactionModel">
    <div class="historico-line">
        <p class="type-TransactionModel">
            Despesa
        </p>

        <p class="date-TransactionModel">
            10/04/2023
        </p>

        <p class="value-TransactionModel">R$50,00</p>
    </div>


    <?php foreach ($transactions as $transaction) {?>
        <div class="historico-line">
            <p class="type-TransactionModel">
                <?php echo $transaction['type']; ?>
            </p>

            <p class="date-TransactionModel">
                <?php echo $transaction['date']; ?>
            </p>

            <p class="value-TransactionModel">
                R$ <?php echo $transaction['price']; ?>
            </p>
        </div>
    <?php }?>

</div>

