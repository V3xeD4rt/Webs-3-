<?php
interface Payable
{
    public function pay(float $amount): bool;
}
class CashPayment implements Payable
{
    public function pay(float $amount): bool
    {
        echo "Оплата наличными: " . $amount . "\n";
        return true;
    }
}
class CryptoPayment implements Payable
{
    public function pay(float $amount): bool
    {
        echo "Оплата криптой: " . $amount . "\n";
        return true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $p = new CashPayment();
    $pd = new CryptoPayment();
    ?>
    <header>
        <?php echo $p->pay(16782.9); ?><br>
        <?php echo $pd->pay(1634.9); ?><br>
    </header>
    <main></main>
</body>

</html>