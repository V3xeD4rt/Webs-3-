<?php
declare(strict_types=1);
echo "A yo whats up nig";
function grade(int $score): ?string 
{
    return match (true)
    {
    $score >= 90 => 'A',
    $score >= 75 => 'B',
    $score >= 60 => 'C',
    default => 'F',
    };
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
    <?php const a = 90;const b = 75;const c = 50; ?>
    <header>
        <?php echo grade(a);?>
        <?php echo grade(b);?>
        <?php echo grade(c);?>
    </header>
    <main></main>
</body>
</html>
