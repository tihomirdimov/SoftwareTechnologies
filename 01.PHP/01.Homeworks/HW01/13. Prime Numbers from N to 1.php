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
    for ($i = $n; $i > 0; $i--) {
        $counter = 0;
        for ($j = 1; $j <= $n; $j++) {
            if ($i % $j == 0) {
                $counter++;
            }
        }
        if ($counter == 2) {
            echo $i . ' ';
        }
    }
}
?>
</body>
</html>