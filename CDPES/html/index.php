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
    <link rel="stylesheet" href="./css/main.css">
    <title>CDPES</title>
</head>

<body>
    <?php
    if (isset($_SESSION['id'])) {
        echo "Bem vindo ", $_SESSION['nome'];
        include_once("connect.php");
        $result = mysqli_query($mysqli, "SELECT *FROM inicial" );
        echo mysqli_num_rows($result);
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
                Marketing Digital para quem não tem tempo de executar e precisa focar no seu negócio
            </div>

            <div class="container">
                <div class="title-container">
                    Agência de Marketing Digital para empresas pequenas
                </div>

                <div class="content-container">
                    Nós atendemos empresas iniciantes na trajetória do marketing digital, oferecendo consultoria e análise, para que cada centavo investido possa valer a pena. A presença digital tem se tornado um quesito para a sustentabilidade das empresas. Isso quer dizer que, as empresas que não estão presentes devidamente, já estão a um passo atrás para conquistar novos clientes. Conte com a CDPES pra ajudar sua empresa a crescer.
                </div>

            </div>

            <div class="view-plans">
                <a href="http://localhost/CDPES/html/planos.php">Veja nossos planos</a>
            </div>

        </div>
    </main>
</body>

</html>