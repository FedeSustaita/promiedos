<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $ruta ?>css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<style>
    body {
        color: rgb(255, 255, 255);
        background:#166739;
        /* conic-gradient(from 135deg,#166739 90deg,#0000 0) 13px calc(13px/2),
        conic-gradient(from 135deg,#1d6230 90deg,#0000 0),
        conic-gradient(from 135deg at 50% 0,#166739 90deg,#0000 0) #1F7A1F;
        background-size: 26px 13px;*/
        font-family: arial; 
        margin: 0;
    }
    header{
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* margin-bottom: 1vw; */
        padding: 1vw;
        background-image: url(<?php echo $ruta ?>img/dee.png);
        background-repeat: no-repeat;
        background-size: cover;
        /* width: 100%; */
        height: 80vh;
        margin:0;
        border:none;
        /* background-color: #166739;
        border: #104b2a solid; */
    }
    .desple, #hambur{
        display:none;
    } 
    h1{
        text-align: center;
        width: 100%;
        /* width: 25vw; */
        margin: 0;
    }
    .nav{
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .nav a{
        display: flex;
        flex-direction: row;
        padding: 1vw 1vw 0vw 1vw; 
        list-style: none;
        text-decoration: none;
        align-self: flex-end;
        color: white;
    }
    #item{
        float: left;
        list-style: none;
    }
    #despe{
        display: none;
    }
    .nav a:hover{ 
        /* border-radius: 0.5vw; */
        border:solid #50c26f;
        background-color: #008b25;
        font-size: 18px;
        color: rgb(0, 0, 0);
        border-radius:0;
        transform: skew(-12deg);
        /* transform: rotate(360deg); */
        transition: all 0.5s ease;
    }

    @media screen and (min-width: 346px) and (max-width: 562px) { /*telefonos en modo vertical*/
        header{
            flex-direction: row;
            height: 20vh;
        }

        #hambur{
            display:none;
        }
        .desple{
        display:block;
    } 
        .nav{
            height:0;
            overflow:hidden;
        }
        #hambur:checked ~ .nav {
            height:15vh;
            /* display: block; Mostrar cuando el checkbox está marcado */
        }
        label{
            margin:2vw;
        }
        .nav{
            position:absolute;
            top:5vh;
            width: 100vw;
            background-color:#166739;
            transition: all 0.3s ease-out;
        }
        .nav ul{
            display:flex;
            flex-direction:column;
        }
    }
    @media screen and (min-width: 562px) and (max-width: 768px) {
        header{
            flex-direction: row;
            height: 60vh;
        }

        #hambur{
            display:none;
        }
        .desple{
        display:block;
    } 
        .nav{
            height:0;
            overflow:hidden;
        }
        #hambur:checked ~ .nav {
            height:15vh;
            /* display: block; Mostrar cuando el checkbox está marcado */
        }
        label{
            margin:2vw;
        }
        .nav{
            position:absolute;
            top:5vh;
            width: 100vw;
            background-color:#166739;
            transition: all 0.3s ease-out;
        }
        .nav ul{
            display:flex;
            flex-direction:column;
        }
    }
    @media screen and (min-width: 900px) and (max-width: 1000px) {
        header{
            flex-direction: row;
            height: 85vh;
        }

        #hambur{
            display:none;
        }
        .desple{
            display:block;
        } 
        .nav{
            height:0;
            overflow:hidden;
        }
        #hambur:checked ~ .nav {
            height:15vh;
            /* display: block; Mostrar cuando el checkbox está marcado */
        }
        label{
            margin:2vw;
        }
        .nav{
            position:absolute;
            top:15vh;
            width: 100vw;
            background-color:#166739;
            transition: all 0.3s ease-out;
        }
        .nav ul{
            display:flex;
            flex-direction:row;
        }
    }
</style>
<header>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <h1>
            Promiedos Rugby
        </h1>
        <!-- <img src="img/Captura-fotor-bg-remover-2024082610112.png" alt=""> -->
        <input type="checkbox" id="hambur">
        <label for="hambur" class="desple"><i class="fa-solid fa-bars"></i></label>
        <div class="nav">
                <ul>
                    <li id="item">
                        <a href="<?php echo $ruta ?>index.php" class="home">HOME</a>
                    </li>
                    <li id="item">
                        <a href="<?php echo $ruta ?>php/fixture.php" class="fixture">FIXTURE</a>
                    </li>
                    <li id="item">
                        <a href="<?php echo $ruta ?>php/tabla.php"  class="tabla">TABLA</a>
                    </li>
                    <li id="item">
                        <a href="<?php echo $ruta ?>php/ranking.php" class="ranking">RANKING TITULOS</a>
                    </li>
                </ul>
        </div>
</header>