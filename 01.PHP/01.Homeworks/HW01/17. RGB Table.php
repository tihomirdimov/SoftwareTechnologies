<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        table * {
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>
    <?php
    $r = 51;
    $g = 51;
    $b = 51;
    $z = 0;
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        echo "<td style=\"background-color: rgb(" . $r . "," . $z . "," . $z . ");\"></td>";
        echo "<td style=\"background-color: rgb(" . $z . "," . $g . "," . $z . ");\"></td>";
        echo "<td style=\"background-color: rgb(" . $z . "," . $z . "," . $b . ");\"></td>";
        $r += 51;
        $g += 51;
        $b += 51;
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>