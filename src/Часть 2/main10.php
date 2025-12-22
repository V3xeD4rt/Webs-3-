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
        echo "Оплата криптовалютой: " . $amount . "\n";
        return true;
    }
}
function processPayment(Payable $payment, float $amount): void
{
    $payment->pay($amount);
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
    $p = new CashPayment(65.5);
    $pd = new CryptoPayment(65.5);
    ?>
    <header>
        <?php echo $p->getInfo(); ?><br>
        <?php echo $pd->getInfo(); ?><br>
    </header>
    <main></main>
</body>

</html>