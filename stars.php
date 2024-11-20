<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stars</title>
    <style>
    .first {
        text-align: center;
        font-size: 24px;
        line-height: 1.5;
        }
    .second {
            text-align: left;
            font-size: 24px;
            line-height: 1.5;
        }
    .third {
        text-align: left;
        font-size: 24px;
        line-height: 1.5;
    }
    </style>
</head>
<body>
    <div class="first">
    <?php
    for($i=1;$i<=5;$i++){
        for($x=1;$x<=$i;$x++){
            echo "*";
        }
        echo "<br>";
    }
    for($i=1;$i<=4;$i++){
        for($x=$i;$x<=4;$x++){
            echo "*";
        }
        echo "<br>";
    }
    ?>
    </div>
    <hr>
    <div class="second">
    <?php
    for($i=1;$i<=5;$i++){
        for($x=1;$x<=$i;$x++){
            echo "*";
        }
        echo "<br>";
    }
    for($i=1;$i<=5;$i++){
        for($x=$i;$x<=5;$x++){
            echo "*";
        }
        echo "<br>";
    }
    ?>
    </div>
    <hr>
    <div class="third">
    <?php
    for($i=1;$i<=3;$i++){
        for($x=1;$x<=(2*$i-1);$x++){
                echo "*";
            }
        echo "<br>";
    }
    for($i=2;$i>=1;$i--){
        for($x=1;$x<=(2*$i-1);$x++){
                echo "*";
        }
        echo "<br>";
    }
    ?>
    </div>
</body>
</html>