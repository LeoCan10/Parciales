<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion lV</title>
    <style>
        body {
            background-color: aquamarine;
        }

        img {
            position: absolute;
        }

        #1 {
            top: 0;
            right: 0;
        }

        #2 {
            top: 0;
            left: 0;
        }
    </style>
</head>

<body>
    <img alt="1" id="1" src="path/to/colapinto.jpg">
    <img alt="2" id="2" src="path/to/colapinto.jpg">

    <table>
        <?php
        for ($i = 1; $i <= 11; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 7; $j++) {
                echo "<td>";
                $suma = $i + $j;
                $cuadrado = $suma * $suma;
                $cubo = $cuadrado * $cuadrado;

                if ($i > $j) {
                    echo "$cuadrado";
                } else {
                    echo "$cubo";
                }

                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>