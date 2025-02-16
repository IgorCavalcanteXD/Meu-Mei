<?php

include("../config/protect.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../src/images/logoIcon.png" />
    <title>Home - Meu Mei</title>

    <!-- Linkando Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet" />

    <!-- Linkando CSS -->
    <link rel="stylesheet" href="../style/cabecalho2.css" />
    <link rel="stylesheet" href="../style/home.css" />
    <!-- Linkando Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body class="body">
    <!-- Cabeçalho - Início -->
    <header class="fixarCabecalho">
        <div class="cabecalho">
            <div class="logo">
                <img src="../src/images/Logo.svg" alt="Logo do Meu Mei" />
            </div>
            <div class="iconsCabecalho">
                <img class="iconsCabecalho2" id="icon1"
                    src="../src/images/icon/auto_stories_FILL0_wght400_GRAD0_opsz24.svg"
                    alt="Icone que redireciona para a página sobre" />
                <a href="logout.php">
                    <img class="iconsCabecalho2" id="icon2"
                        src="../src/images/icon/account_box_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="Icone que abre uma aba de perfil" />
                </a>

            </div>
        </div>
    </header>
    <!-- Cabeçalho - Fim -->

    <div class="principal">
        <div class="separadores">
            <div class="separadores-individual">
                <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                <p id="rmrb">RELATÓRIO MENSAL DE RECEITAS BRUTAS</p>
                <img class="line1" src="../src/images/images home/Line 2.png" alt="">
            </div>
            <div id="campo-consulta1" class="campo-consulta">
                <div class="campo-relatorios">
                </div>
            </div>
            <div class="separadores-individual">
                <img class="line2" src="../src/images/images home/Line 2.png" alt="">
                <p id="rmrb">DASN - SIMEI</p>
                <img class="line2" src="../src/images/images home/Line 2.png" alt="">
            </div>
            <div id="campo-consulta2" class="campo-consulta">
                <div class="campo-relatorios">
                </div>
            </div>
        </div>
    </div>
</body>

</html>