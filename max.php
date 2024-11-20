<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Max</title>
    <style>
        .text {
            font-size: 30px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="text">
    <?php
    $numbers=[10,30,20];
    if ($numbers[0] > $numbers[1] && $numbers[0] > $numbers[2]) {
        $max = $numbers[0];
    } elseif ($numbers[1] > $numbers[2]) {
        $max = $numbers[1];
    } else {
        $max = $numbers[2];
    }
    echo "The maximum number is: $max";
    ?>
    </div>
</body>
</html>