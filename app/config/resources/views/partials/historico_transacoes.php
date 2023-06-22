<div class="historico-list_TransactionModel">
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

