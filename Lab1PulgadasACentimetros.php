<!DOCTYPE html>
<html>
<head>
    <title>Pulgadas a centimetros</title>

    <style>
        body {
            background-color: lavender;
            font-family: Arial;
        }

        h1 {
            color: purple;
        }

        form {
            background-color: lightyellow;
            padding: 20px;
            width: 400px;
        }

        input {
            background-color: white;
        }

        input[type="submit"] {
            background-color: purple;
            color: white;
        }

        .correcto {
            color: darkgreen;
        }

        .error {
            color: darkred;
        }
    </style>
</head>

<body>
    <h1>Convertidor de pulgadas a centimetros</h1>

    <form method="post" action="">
        Ingrese las pulgadas:
        <input type="number" name="pulgadas" step="any" required>
        <input type="submit" value="Calcular">
        <br><br>
    </form>

    <?php

    const PULGADA_A_CENTIMETROS = 2.54;

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
        $pulgadas = $_POST["pulgadas"];

        if ($pulgadas < 0)
            {
                //respuesta al usuario si introduce un numero negativo
                echo "<p class='error'>El numero a convertir no puede ser negativo</p>";
            }
        else
            {
                //conversion de pulgadas a centimetros
                $centimetros = $pulgadas * PULGADA_A_CENTIMETROS;

                //resultado impreso a pantalla
                echo "<p class='correcto'>$pulgadas pulgadas en centimetros son $centimetros</p>";
            }

        }
    ?>
</body>
</html>
