<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    @media only screen and (max-width: 768px) {}
    body{
        margin: 0px;
        justify-content:top;
        background: linear-gradient(to bottom right, white, grey);
        width: auto;
        height: 100vh;
    }
    .cabecalho {
        display: flex;
        margin: auto;
    }
    .cabecalho h1{
        font-size: 35px;
        margin:auto;
        padding: 20px;
        align-items:center;
        text-align:center;
        font-family: 'Kanit';
        width:400px;
        height: 40px;
    }
    header {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 30;
    }
    .coluna1 {
        text-align: center;

        width: 450px;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .coluna1 h1{
        font-family: 'poppins';
        font-size:18px;
    }
    .coluna1 h2{
        font-family: 'roboto';
    }
    .coluna1 h3{
        font-family: 'roboto';
        font-size: 22px;
    }
    </style>
</head>
    <body>
        <div class="cabecalho">
            <h1>Feedback enviado!</h1>
        </div>
        <header>
            <div class="coluna1">
                <h2>Feedback registrado:</h2>
                <h3>Nome e Email:</h3>
                <h1><?php
                echo $text= $_POST['texto1'];
                ?></h1>
                <h1><?php
                echo $text= $_POST['texto2'];
                ?></h1>
                <h3>Mensagem:</h3>
                <h1><?php
                echo $text= $_POST['texto3'];
                ?></h1>
            </div>
        </header>
    </body>
</html>

