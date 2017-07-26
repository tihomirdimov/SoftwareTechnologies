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
<?php
if (isset($_GET['num'])) {
    $n = intval($_GET['num']);
    $first = 1;
    $second = 1;
    switch ($n) {
        case 1:
            echo $first . ' ';
            break;
        case 2:
            echo $first . ' ' . $second . ' ';
            break;
        default:
            echo $first . ' ' . $second . ' ';
            for ($i = 2; $i < $n; $i++) {
                $temp = $first + $second;
                echo $temp . ' ';
                $first = $second;
                $second = $temp;
            }
    }
}
?>
</body>
</html>