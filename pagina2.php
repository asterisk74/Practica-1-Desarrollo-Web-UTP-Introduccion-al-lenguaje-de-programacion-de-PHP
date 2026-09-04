
    <?php
    $nombre = strtolower($_POST['nombre']);
    $edad = $_POST['edad'];

    echo "El nombre es: " . $nombre . "<br><br>";
    echo "La edad es: " . $edad . "<br><br>";

    if ($edad < 0) 
        {
            echo "La edad no puede ser negativa.";
        }
    elseif ($edad >= 18) 
        {
            echo "Usted puede votar en las próximas elecciones de 2028.";
        }
    else 
        {
            echo "Usted no es mayor de edad.";
        }
    ?>
