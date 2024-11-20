<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>String</title>
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
    $original="The weather today is perfect for a walk in the park";
    $word="weather";
    if(str_contains($original,$word)){
        echo "The string contains the word: $word";
    }else{
        echo "The string contains the word: $word";
    }
    ?>
    </div>
</body>
</html>