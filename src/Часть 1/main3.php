<?php
declare(strict_types=1);
echo "A yo whats up nig";
function divide(float $a, float $b): ?float {
    return $b === 0.0 ? null : $a / $b;
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
    <?php const a = 1.0; const b = 0.0 ?>
    <header>
        <?php if (divide(a, b)==null)
        {  
            echo "Ошибка деления на ноль";
        }
        else{echo divide(a, b);}?>
    </header>
    <main></main>
</body>
</html>
