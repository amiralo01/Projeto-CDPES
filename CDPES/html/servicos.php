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

            <div class="containers">
                <div class="container">
                    <div class="title-container">
                        Estratégia de marketing
                    </div>

                    <div class="content-container">
                        Com uma boa estratégia marketing contando com ações de diferentes tipos, adaptados à realidade do negócio, como, Marketing de conteúdo, Inbound marketing, Outbound marketing e marketing de guerrilha.
                    </div>

                </div>

                <div class="container">
                    <div class="title-container">
                        Gestão de Redes Sociais
                    </div>

                    <div class="content-container">
                        O gerenciamento de redes sociais consiste em garantir uma boa estratégia multicanal, visando encontar o equilíbrio entre atendimento ao cliente, criação de conteúdo e análise de resultados dentro dos canais sociais da sua empresa.
                    </div>

                </div>

                <div class="container">
                    <div class="title-container">
                        Planejamento Estratégico
                    </div>

                    <div class="content-container">
                        Objetivo atrair as pessoas, despertando interesse do público nos produtos e serviços da marca. Ajudando as empresas a procurar compreender as dores e necessidades dos clientes em potencial par promover soluções mais assertivas. 
                    </div>
                </div>

                <div class="container">
                    <div class="title-container">
                        Anúncios Pagos
                    </div>

                    <div class="content-container">
                        Comprar anúncios e criar ads em diversos canais e portais, e com isso consegue trazer possíveis clientes para sua empresa em seus sites ou e-commerces.
                    </div>
                </div>

                <div class="container">
                    <div class="title-container">
                        Criação de sites
                    </div>

                    <div class="content-container">
                        Criar um site ajuda sua empresa a ganhar visibilidade, mostrar credibilidade, aumentar as vendas, investir em marketing digital e monitorar dados.
                    </div>
                </div>

                <div class="container">
                    <div class="title-container">
                        Diferenciais
                    </div>

                    <div class="content-container">
                        Preços mais acessivos, atendimento presencial para clientes de Santarém e uma semana grátis de teste para o cliente decidir se gostou ou não do resultado adquirido nesse tempo.
                    </div>
                </div>


            </div>

        </div>
    </main>
</body>

</html>