<?php
    if (isset($_POST['color'])) {
        setcookie('bg_color', $_POST['color'], time() +60*60*24*15);
    }
    if (isset($_COOKIE['bg_color'])) {
        $bgcolor = $_COOKIE['bg_color'];
    } else {
        $bgcolor = 'white';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
</head>
<body style="background-color: <?php echo $bgcolor; ?>;">
    <form method="POST">
        <label for="color">Choose Background Color:</label>
        <select name="color" id="color">
            <option value="white" <?php if ($bgcolor == 'white') echo 'selected'; ?>>White</option>
            <option value="lightblue" <?php if ($bgcolor == 'lightblue') echo 'selected'; ?>>Light Blue</option>
            <option value="lightgreen" <?php if ($bgcolor == 'lightgreen') echo 'selected'; ?>>Light Green</option>
            <option value="lightyellow" <?php if ($bgcolor == 'lightyellow') echo 'selected'; ?>>Light Yellow</option>
        </select>
        <input type="submit" value="Change Color">
    </form>

</body>
</html>

