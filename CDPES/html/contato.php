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
    
    <link rel="stylesheet" href="./css/contato.css">
    <title>CDPES</title>
</head>

<body>
    <?php
    if (isset($_SESSION['msg'])) {
        echo "Bem vindo ", $_SESSION['msg'];
        unset($_SESSION['msg']);
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
                O que é preciso para contratar nosso serviços?
            </div>
            <div class="container">
                <div class="title-container">
                    Basta preencher o formulário abaixo para que nossa equipe entre em contato com você:
                </div>
                <div id="main-container">
                    <form id="form" method="get" onsubmit="alert('Formulário enviado com sucesso!')" action="process.php">
                        <fieldset>

                            <div class="label-float">
                                <label id="labelNome"for="name">*Nome</label> 
                                <br>
                                <input type="text" id="name" name="nome" paceholder="" size="35" required autofocus/>
                                <br>
                            </div>
                            <div class="label-float">
                                <label id="labelEmail"for="email">*E-mail</label> 
                                <br>
                                <input type="email" name="email" id="email" size="25" paceholder="" required/>
                                <br>
                            </div>
                            <div class="label-float">
                                <label for="telefone">*Telefone</label>
                                <br>
                                <input type="tel" id="phone" size="35" paceholder="" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required/>

                            </div>
                            <div class="label-float">
                                <label id="name" for="empresa">*Empresa</label>
                                <br>
                                <input type="text" id="empresa" size="35" paceholder="" required autofocus/> 
                                <br>
                            </div>
                            <div>
                                <input type="checkbox" id="control" required/>
                                <label for="agreement" id="agreement-label">Solicito atendimento</label>
                                <br>
                            </div>
                            <input id="btn-submit" type="submit" value="Confirmar"/>

                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>