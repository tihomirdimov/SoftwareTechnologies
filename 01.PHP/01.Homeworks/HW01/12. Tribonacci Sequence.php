<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
</form>
<?php
if (isset($_GET['num'])) {
    $n = intval($_GET['num']);
    $first = 1;
    $second = 1;
    $third = 2;
    switch ($n) {
        case 1:
            echo $first . ' ';
            break;
        case 2:
            echo $first . ' ' . $second . ' ';
            break;
        case 3:
            echo $first . ' ' . $second . ' ' . $third . ' ';
            break;
        default:
            echo $first . ' ' . $second . ' ' . $third . ' ';
            for ($i = 3; $i < $n; $i++) {
                $temp = $first + $second + $third;
                echo $temp . ' ';
                $first = $second;
                $second = $third;
                $third = $temp;
            }
    }
}
?></body>
</html>