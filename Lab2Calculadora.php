<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>

    <style>
        body {
            background-color: whitesmoke;
            font-family: Arial;
        }

        h1 {
            color: darkorange;
        }

        form {
            background-color: lightgray;
            padding: 20px;
            width: 400px;
        }

        input {
            background-color: white;
        }

        select {
            background-color: white;
        }

        input[type="submit"] {
            background-color: darkorange;
            color: white;
        }

        .resultado {
            color: darkblue;
        }
    </style>
</head>

<body>
    <h1>Calculadora</h1>
    
    <form method="post" action="">
        Ingrese el primer numero:
        <input type="number" name="num" step="any" required>
        <br><br>

        Ingrese el segundo numero:
        <input type="number" name="num2" step="any" required>
        <br><br>

        Seleccione una opcion:
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select>
        <br><br>

        <input type="submit" value="Calcular">
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
        $num = $_POST["num"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
       
        if ($operacion == "sumar")
            {
                $resultado = $num + $num2;
            }
        elseif ($operacion == "restar")
            {
                $resultado = $num - $num2;
            }
        elseif ($operacion == "multiplicar")
            {
                $resultado = $num * $num2;
            }
            
        $resultado = round($resultado, 3);

        echo "<p class='resultado'>La operacion seleccionada fue $operacion el resultado es $resultado</p>";
        }
    ?>

</body>
</html>
