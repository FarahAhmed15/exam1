<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Average</title>
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
    $array=[5,10,15,20,25];
    $average=array_sum($array)/count($array);
    echo "The average of the numbers in the array is: $average";
    ?>
    </div>
</body>
</html>