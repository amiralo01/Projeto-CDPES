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
    <link rel="stylesheet" href="./css/servicos.css">
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
                serviços
            </div>

            <div class="container">
                <div class="title-container">
                    Estratégia de marketing
                </div>

                <div class="content-container">
                    Com uma boa estratégia marketing contando com ações de diferentes tipos, adaptados à realidade do negócio, como, Marketing de conteúdo, Inbound marketing, Outbound marketing e marketing de guerrilha.
                </div>
            </div>
        </div>
    </main>
</body>
</html>