<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $numbers = [1, 2, 3, 4, 5]; 
    $a = array_map(fn($n) => $n ** 2, $numbers); 
    $b = fn($x) => "$x - ".($x % 2 == 0 ? "Четное":"Нечетное")
    ?>
    <header>
        <?php echo $b(1); ?><br>
        <?php echo $b(4); ?><br>
        <?php echo $b(2); ?><br>
    </header>
    <main></main>
</body>
</html>
