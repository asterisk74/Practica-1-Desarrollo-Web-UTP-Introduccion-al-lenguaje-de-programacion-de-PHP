    <!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>

    <style>
        body {
            background-color: lightgray;
            font-family: Arial;
        }

        h1 {
            color: darkblue;
        }

        .datos {
            color: black;
        }

        .correcto {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Resultado</h1>

    <?php
    $nombre = strtolower($_POST['nombre']);
    $edad = $_POST['edad'];

    echo "El nombre es: " . $nombre . "<br><br>";
    echo "La edad es: " . $edad . "<br><br>";

    if ($edad < 0) 
        {
            echo "<p class='error'>La edad no puede ser negativa.</p>";
        }
    elseif ($edad >= 18) 
        {
            echo "<p class='correcto'>Usted puede votar en las próximas elecciones de 2028.</p>";
        }
    else 
        {
            echo "<p class='error'>Usted no es mayor de edad.</p>";
        }
    ?>
