<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link real="stylesheet" href="./css/main.css">
        <title>CDPES</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION['id'])){
            echo "Bem vindo ", $_SESSION['nome'];
            }
            include('html/header.php');
        ?>
        <main>
            <div class="container">
                <div class="item">
                    <a href="" class="col-4">

                    </a>
                </div>
            </div>
        </main>
        <div>

        </div>
    </body>
</html>