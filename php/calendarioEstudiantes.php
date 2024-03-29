<?php
session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c91ca5f5f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/styleOptions.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Calendario</title>
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
                <div class="container">
                    <div class="calendar">
                        <div class="header">
                        <div class="month"></div>
                        <div class="btns">
                            <div class="btn today-btn">
                            <i class="fas fa-calendar-day"></i>
                            </div>
                            <div class="btn prev-btn">
                            <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="btn next-btn">
                            <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        </div>
                        <div class="weekdays">
                        <div class="day">Dom</div>
                        <div class="day">Lun</div>
                        <div class="day">Mar</div>
                        <div class="day">Mie</div>
                        <div class="day">Jue</div>
                        <div class="day">Vie</div>
                        <div class="day">Sab</div>
                        </div>
                        <div class="days">
                        </div>
                    </div>
                    <button class="new_date">Nueva cita</button>
                </div>
                <div class="datesCits">
                    <article class="list">
                        <h3>Historial</h3>
                        <p></p>
                        <p>holaa </p>
                    </article>
                </div>
            </section>
        </article>
        <article class="formulario">
            <button class="cerrar"><i class="fa-solid fa-x"></i></button>
            <form>
                <h3>Nueva cita</h3>
                <input type="text" placeholder="nombre">
                <input type="text" placeholder="apellido">
                <input type="text" placeholder="carrera">
                <input type="text" placeholder="semestre">
                <input type="text" placeholder="fecha (xxxx-xx-xx)">
                <button class="agendar">Agendar</button>
            </form>
            <section>
                <img src="../img/imagen2.png" alt="">
            </section>
        </article>
    </main>
</body>
    <script src="../js/app.js"></script>
</html>