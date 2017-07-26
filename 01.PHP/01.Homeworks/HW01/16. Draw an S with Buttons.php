<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
$n = 5;
for ($i = 0; $i < $n; $i++) {
    echo "<button style=\"background-color: blue;\">" . 1 . "</button>";
}
echo '<br/>';
for ($i = 0; $i <$n-2; $i++) {
    echo "<button style=\"background-color: blue;\">" . 1 . "</button>";
    for ($j = 0; $j < $n-1; $j++) {
        echo "<button>" . 0 . "</button>";
    }
    echo "<br/>";
}
for ($i = 0; $i < $n; $i++) {
    echo "<button style=\"background-color:blue;\">" . 1 . "</button>";
}
echo "<br/>";
for ($i = 0; $i < $n-2; $i++) {
    for ($j = 0; $j < $n-1; $j++) {
        echo "<button>" . 0 . "</button>";
    }
    echo "<button style=\"background-color: blue;\">" . 1 . "</button>";
    echo "<br/>";
}
for ($i = 0; $i < $n; $i++) {
    echo "<button style=\"background-color:blue;\">" . 1 . "</button>";
}
?>
</body>
</html>