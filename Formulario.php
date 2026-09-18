<!DOCTYPE html>
<html>
<head>
    <title>Formulario de entrada del dato</title>
        <style>
        body {
            background-color: lightblue;
            font-family: Arial;
        }

        h1 {
            color: darkblue;
        }

        form {
            background-color: white;
            padding: 20px;
            width: 350px;
        }

        input {
            background-color: lightgray;
        }

        input[type="submit"] {
            background-color: darkblue;
            color: white;
        }
    </style>
</head>
</head>

<body>
    <h1>Formulario para poder votar</h1>

    <form method="post" action="pagina2.php">
        Ingrese su nombre:
        <input type="text" name="nombre" id="nombre">
        <br> <br>
        Ingrese su Edad:
        <input type="number" name="edad" id="edad">
        <br> <br>

        <input type="submit" value="confirmar">
    </form>
</body>
</html>
