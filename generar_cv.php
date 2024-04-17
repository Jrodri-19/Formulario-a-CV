<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Generado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $apellido = $nacimiento = $ocupacion = $celular = $email = $nacionalidad = $nivel_ingles = $lenguajes = $aptitudes = $habilidades = $perfil = "";
        $nombre = limpiarDatos($_POST["Nombre"]);
        $apellido = limpiarDatos($_POST["Apellido"]);
        $nacimiento = limpiarDatos($_POST["Nacimiento"]);
        $ocupacion = limpiarDatos($_POST["Ocupacion"]);
        $celular = limpiarDatos($_POST["Celular"]);
        $email = limpiarDatos($_POST["Email"]);
        $nacionalidad = limpiarDatos($_POST["Nacionalidad"]);
        $nivel_ingles = limpiarDatos($_POST["Nivel_de_ingles"]);
        $lenguajes = isset($_POST["Lenguaje"]) ? $_POST["Lenguaje"] : [];
        $aptitudes = limpiarDatos($_POST["Aptitud"]);
        $habilidades = isset($_POST["habilidades"]) ? implode(", ", $_POST["habilidades"]) : "";
        $perfil = limpiarDatos($_POST["perfil"]);
        
        echo "Nombre: $nombre <br>";
        echo "Apellidos: $apellido <br>";
        echo "Fecha de nacimiento: $nacimiento <br>";
        echo "Ocupación: $ocupacion <br>";
        echo "Teléfono: $celular <br>";
        echo "Correo electrónico: $email <br>";
        echo "Nacionalidad: $nacionalidad <br>";
        echo "Nivel de inglés: $nivel_ingles <br>";
        echo "Lenguajes de programación: " . implode(", ", $lenguajes) . "<br>";
        echo "Aptitudes: $aptitudes <br>";
        echo "Habilidades: $habilidades <br>";
        echo "Perfil: $perfil <br>";
    ?>
</body>
</html>
