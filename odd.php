<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>ODD</title>
    <style>
        .text {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="text">
    <?php
    $array=[1,2,3,4,5,6,7,8,9];
    foreach($array as $key){
        if($key %2 !==0){
           echo " $key <br>";
        }
    }
    ?>
    </div>
</body>
</html>