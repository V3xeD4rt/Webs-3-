<?php
class MathUtils
{
    public static function square(float $x): float
    {
        return $x * $x;
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
    $n = 5.0;
    $r= MathUtils::square($n);
    echo "Квадрат числа {$n}: {$r}" . "<br>";
    ?>
</body>

</html>