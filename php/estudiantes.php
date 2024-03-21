<?php
session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
}
$nombre = $_SESSION["nombre"];
$apellidos = $_SESSION["apellido"];
$contra = $_SESSION["contra"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c91ca5f5f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/styleOptions.css">
    <title>Document</title>
</head>

<body>
    <main>
        <article class="articleAll">
            <section class="section-nav">
            <div class="div1">
                    <a href="estudiantes.php"><i class="fa-solid fa-user iconUser"></i></a>
                    <a href="calendarioEstudiantes.php"><i class="fa-solid fa-calendar iconCalendario"></i></a>
                </div>
                <div class="div2">
                    <a href=""><i class="fa-solid fa-gear"></i></a>
                </div>
            </section>
            <section class="section-container">
                <a href="cerrar_sesion.php"><p class="exit">Cerrar Sesión</p></a>
                <article class="general">
                    <h2>Información general</h2>
                    <section class="info">
                        <figure>
                            <i class="fa-solid fa-user"></i>
                        </figure>
                        <p class="apellido">Nombre: <?php
                        echo "$nombre "; 
                        ?> </p>
                        <p class="datesApellido">Apellidos: <?php echo "$apellidos"; ?> </p>
                        <p>CURP: RIPY980914HTSCRD03</p>
                        <p>Fecha de nacimiento: 14 de Septiembre de 1998</p>
                        <p>Correo electrónico: esteban1057deluxe@gmsil.com</p>
                    </section>
                </article>
                <article class="container-article2">
                    <section class="school">
                        <h2>Información escolar</h2>
                        <section class="info">
                            <p>Nº de control: 19690148</p>
                            <p>Estatus: AEE / Activo con especiales</p>
                            <p>Carrera: Ingenieria En Sistemas Computacionales / 42 / Escolarizado</p>
                            <p>Especialidad: 40 / Desarrollo Full Stack</p>
                        </section>
                    </section>
                    <section class="contact">
                        <h2>Información de contacto</h2>
                        <section class="info">
                            <p>Calle y número: plaza eoliza #313</p>
                            <p>Colonia: carmen 3</p>
                            <p>Municipio: ciudad valles</p>
                        </section>
                    </section>
                </article>
            </section>
        </article>
    </main>
</body>
<script src="../js/app.js"></script>
</html>