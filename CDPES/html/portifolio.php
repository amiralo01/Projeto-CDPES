<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/portfolio.css">
    <title>CDPES</title>
</head>

<body>
    <?php
    if (isset($_SESSION['id'])) {
        echo "Bem vindo ", $_SESSION['nome'];
    }
    ?>
    <header>
        <div class="side-left">
            <img class="logo" src="img/logo.png" alt="logo" width="60">
        </div>

        <div class="side-right">
            <a href="index.php">Início</a>
            <a href="servicos.php">Serviços</a>
            <a href="portifolio.php">Portfólio</a>
            <a href="contato.php">Contato</a>
        </div>
    </header>


    <main>
        <div class="menu-principal">

            <div class="title">
                A CDPES também foi responsável pelo crescimento de grandes negócios
            </div>
            <div class="image">
                <img class="AMARIZ" src="img/AMARIZ.png" alt="AMARIZ" width="70">
                <img class="micropigmentadora" src="img/tatianeteixeira.png" alt="micropigmentadora" width="70">
                <img class="MAMEDE" src="img/MAMEDE.png" alt="MAMEDE" width="70">
            </div>
        </div>
    </main>
</body>

</html>