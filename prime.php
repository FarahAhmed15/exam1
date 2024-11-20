<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Prime Number</title>
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
    $num=17;
    $prime=true;
    if($num>=1){
        for($x=2;$x<$num;$x++){
            if($num % $x ===0){
                $prime=false;
                break;
            }
        }
    }else{
        echo "$num is not a prime number";
    }
    if($prime){
        echo "$num is a prime number";
    }else{
        echo "$num is not a prime number";
    }
    ?>
    </div>
</body>
</html>