<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Previous Month Number</title>
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
    $date=date("m", strtotime("-1 month"));
    echo "The Previous Month Number is: $date";
    ?>
    </div>
</body>
</html>