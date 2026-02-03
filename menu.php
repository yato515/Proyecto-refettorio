<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
     <link rel="stylesheet" href="estilos.css">
    <!-- CUSTOM JS -->
    <script src="./js/app.js" defer></script>
</head>
<body>

    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="./img/logo.svg" alt="">
                <span>Refettorio Mérida</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span>Menú</span>
            </div>

            <div class="enlace">
                <i class="bx bx-user"></i>
                <span>Gestión de usuarios</span>
            </div>

            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span>Gestión de invitados</span>
            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span>Registro de visitas</span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span>Control de ciclos</span>
            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span>Resultados y reportes</span>
            </div>

        </div>
    </div>
    
</body>
</html>