<?php
class Product {
    public function __construct(
        public string $name,
        public float $price
    ) {}
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
    <?php $p = new Product("Молоко", 65.5);
    ?>
    <header>
        <?php echo $p->name;; ?><br>
        <?php echo $p->price; ?><br>
    </header>
    <main></main>
</body>
</html>
