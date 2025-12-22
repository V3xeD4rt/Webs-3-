<?php
class StringUtils
{
    public static function isPalindrome(string $s): bool
    {
        $s = mb_strtolower(preg_replace('/\s+/', '', $s));
        return $s === strrev($s);
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
    $a = "Level";
    $b = "Мадам";
    $c = "Тест";
    echo "{$a} - это палиндром? " . (StringUtils::isPalindrome($a) ? "да" : "нет") . "<br>";
    echo "{$b} - это палиндром? " . (StringUtils::isPalindrome($b) ? "да" : "нет") . "<br>";
    echo "{$c} - это палиндром? " . (StringUtils::isPalindrome($c) ? "да" : "нет") . "<br>";
    ?>
</body>

</html>