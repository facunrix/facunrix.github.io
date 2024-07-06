<!DOCTYPE html>
<html lang="es">
<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./s/css/styles.css">
</head>
<body>
    <div class="slidebar">
        <!-- Logo -->
        <div class="logo-content">
            <div class="logo">
                <a href="home.php">
                    <img src="./s/img/ui.png" class="logo-img">
                </a>

            </div>
        </div>

        <!-- Menu hamburguesa -->
        <i class="bx bx-menu" id="btn"></i>

        <ul class="list-name">
            <li class="list-item">
                <a href="#">
                    <i class='bx bxl-postgresql'></i>
                    <span class="links-name">Boton</span>
                </a>
            </li>
        </ul>

        <!-- Cerrar sesion -->
        <ul class="list-logout">
            <li class="list-logout">
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links-name">Cerrar Sesion</span>
                </a>
            </li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./s/js/script_2.js"></script>
</body>
</html>
