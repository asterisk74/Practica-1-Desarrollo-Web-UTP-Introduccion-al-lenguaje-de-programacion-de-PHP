
    <?php

    $nombre = $_REQUEST['nombre'];
    echo "El nombre es: ".$nombre."<br>";

    $Edad = $_POST["edad"];

    if (isset($Edad) and $Edad >= 18)
        {
            echo "Usted puedo votar en las proximas elecciones 2028";
        }
        else echo "Usted no es mayor de edad";
    ?>