
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
        if (isset($_GET["n"])) {
            $n =(int) $_GET["n"];
            if($n % 3 == 0 & $n % 15 != 0 ) echo"Fizz";
            if($n % 5 == 0 & $n % 15 != 0) echo"Buzz";
            if($n % 15 == 0 ) echo"FizzBuzz";
        }
        ?>
    </header>
    <main></main>
</body>
</html>
