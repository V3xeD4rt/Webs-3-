<?php
class User
{
    public function __construct(
        public string $name,
        public float $email
    ) {
    }
    public function getInfo(): string
    {
        return "Имя: {$this->name}; Email: {$this->email}";
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
    <?php $p = new User("Молоко", 65.5);
    ?>
    <header>
        <?php echo $p->getInfo(); ?><br>
    </header>
    <main></main>
</body>

</html>