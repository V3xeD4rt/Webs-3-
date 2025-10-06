

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php $user = null;$user?->getName(); ?>
        <?php echo "Вывод с ?", $user?><br>
        <?php echo "Смотри ща прикол будет"?>
        <?php $user = null;$user->getName(); ?>
        <?php echo "Вывод без ?", $user ?>
    </header>
    <main></main>
</body>
</html>
