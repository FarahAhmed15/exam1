<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>ASC & DESC</title>
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
    $array = [2,4,3,1,6,7,5,8,0,9];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i+1; $j < count($array); $j++){
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo "Sorted in Ascending Order: ";
    print_r($array);
    echo "<hr>";
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i+1; $j < count($array); $j++){
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo "Sorted in Descending Order: ";
    print_r($array);
    ?>
    </div>
</body>
</html>