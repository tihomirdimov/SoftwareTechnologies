<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
<?php
$red = 0;
$green = 0;
$blue = 0;
$redshades = $red;
$greenshades = $green;
$blueshades = $blue;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $color = "rgb($redshades, $greenshades, $blueshades)";
        echo "<div style=\"background-color :$color\"></div>";
        $redshades += 5;
        $greenshades += 5;
        $blueshades += 5;
    }
    echo "<br/>";
    $red += 51;
    $green += 51;
    $blue += 51;
    $redshades = $red;
    $greenshades = $green;
    $blueshades = $blue;
}
?>
</body>
</html>