<?php

require "conn.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assents/css/global.css">
    <link rel="stylesheet" href="assents/css/home.css">
    <title>Blog</title>
</head>

<body>
    <div class="container">
        <header id="header">

            <div class="menu">
                <h2>Blog</h2>
                <h2><a href="cadastrar.php">Cadastrar</a></h2>
            </div>

            <div class="input-search">
                <i class="bi bi-search"></i>
                <input type="text" name="text" id="text" placeholder="Pesquisar no blog">
            </div>
        </header>

        <main class="container-post">
        <div class="post">
            <div class="top-post">
                <span>07/06/2024</span>
                <i class="bi bi-heart"></i>
            </div>
                <div class="content-post">
                    <h3>Título da Notícia</h3>
                    <p>Descrição...</p>
                </div>
            </div>
        </main>
    </div>
</body>

<footer id="footer">
            <div class="menu">
                <span>&copy; 2022 Copyright Todos os direitos Reservados.</span>
                <span>Powered by Gustavo Henrique Ferreira</span>
            </div>
        </footer>

        <a href="#" class="backToTop">
        <i class="bi bi-arrow-up-circle-fill"></i>
    </a>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="assents\js\script.js"></script>

</html>