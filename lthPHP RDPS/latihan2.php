<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<body>
    <h2> Latihan 2 </h2>
    <?php
    $total = 0;
    for ($i = 0; $i <= 6; $i++) {
        if ($i % 2 == 0) {
            $total += $i;
        }
    }
    echo "Aklkulturasi bilangan genap 0 s.d 6 adalah $total"
    ?>
</body>
</html>