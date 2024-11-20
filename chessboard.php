<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php
        
        for ($row = 1; $row < 9; $row++) {
            echo "<tr>";
            for ($col = 1; $col < 9; $col++) {
                $isBlack = ($row + $col) % 2 === 0;
                if($isBlack){
                    $class="white";
                }else{
                    $class="black";
                }
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
