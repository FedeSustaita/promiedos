<?php
$ruta = '../';
include "../php/conexion.php";
include "../php/encabezado.php";
include "../php/js.php";
$conexion = conectar();
?>

</head>
<body>





<h2>FECHAS</h2>
<div class="cont-botones">
    <div id="botones">
        <button id="funo" onclick="fecuno();">FECHA 1</button> <!-- Botón para iniciar el proceso -->
        <button id="fdos" onclick="fecdos();">FECHA 2</button> <!-- Botón para iniciar el proceso -->
        <button id="ftres" onclick="fectres();">FECHA 3</button> <!-- Botón para iniciar el proceso -->
        <button id="fcuatro" onclick="feccuatro();">FECHA 4</button> <!-- Botón para iniciar el proceso -->
        <button id="fcinco" onclick="feccinco();">FECHA 5</button> <!-- Botón para iniciar el proceso -->
        <button id="fseis" onclick="fecseis();">FECHA 6</button> <!-- Botón para iniciar el proceso -->
        <button id="fsiete" onclick="fecsiete();">FECHA 7</button> <!-- Botón para iniciar el proceso -->
        <button id="focho" onclick="fecocho();">FECHA 8</button> <!-- Botón para iniciar el proceso -->
        <button id="fnueve" onclick="fecnueve();">FECHA 9</button> <!-- Botón para iniciar el proceso -->
    </div>
</div>
<div id="contenedorprueba">
    <div id="mostrar_mensaje"></div> <!-- Aquí se mostrará el resultado -->
</div>

<!-- fecuno -->
<script>
    function fecuno() {
        var parametros = {
            "i": 1  // Envía el valor de 'i' al servidor
        };
        $.ajax({
            data: parametros,
            url: '../php/fechas/fecuno.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
            }
        });
    }
</script>
<!-- fecdos -->
<script>
    function fecdos() {
        var parametros = {
            "i": 2  // Envía el valor de 'i' al servidor
        };
        $.ajax({
            data: parametros,
            url: '../php/fechas/fecdos.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
            }
        });
    }
</script>
<!-- fectres -->
<script>
    function fectres() {
        var parametros = {
            "i": 3  // Envía el valor de 'i' al servidor
        };
        $.ajax({
            data: parametros,
            url: '../php/fechas/fectres.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
            }
        });
    }
</script>
<!-- feccuatro -->
<script>
    function feccuatro() {
        var parametros = {
            "i": 4  // Envía el valor de 'i' al servidor
        };
        $.ajax({
            data: parametros,
            url: '../php/fechas/feccuatro.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
            }
        });
    }
</script>
<!-- feccinco -->
<script>
    function feccinco() {
        var parametros = {
            "i": 5  // Envía el valor de 'i' al servidor
        };
        $.ajax({
            data: parametros,
            url: '../php/fechas/feccinco.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
            }
        });
    }
</script>
<!-- fecseis -->
<script>
    function fecseis() {
        var parametros = {
            "i": 6  // Envía el valor de 'i' al servidor
        };
        $.ajax({
            data: parametros,
            url: '../php/fechas/fecseis.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
            }
        });
    }
</script>
<!-- fecsiete -->
<script>
    function fecsiete() {
        var parametros = {
            "i": 7  // Envía el valor de 'i' al servidor
        };
        $.ajax({
            data: parametros,
            url: '../php/fechas/fecsiete.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
            }
        });
    }
</script>
<!-- fecocho -->
<script>
    function fecocho() {
        var parametros = {
            "i": 8  // Envía el valor de 'i' al servidor
        };
        $.ajax({
            data: parametros,
            url: '../php/fechas/fecocho.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
            }
        });
    }
</script>
<!-- fecnueve -->
<script>
    function fecnueve() {
        var parametros = {
            "i": 9  // Envía el valor de 'i' al servidor
        };
        $.ajax({
            data: parametros,
            url: '../php/fechas/fecnueve.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
            }
        });
    }
</script>









<style>
        /* Estilos para la página */

        h2 {
            color: white;
            text-align: center;
        }
        ul .fixture{
            border-bottom: 10px double #0a381e;
        }
        .contenedoras {
            display: flex;
            justify-content: center;
        }
        .contenedoras div {
            border: solid;
            border-width: 0.1vw;
            width: 25%;
            text-align: center;
            padding: 1vw;
            color: black;
            background-color: grey;
        }
        .contenedoras .vs {
            width: 5%;
        }
        .vs p {
            margin: 0;
        }
        .contenedoras .puntloc, .contenedoras .puntvist {
            width: 5%;
        }
        .imgrugby{
            background-image: url("../img/rugby.jpg");
            background-repeat: no-repeat;
            height:90vh;
            background-size: cover;
        }
        /* .imgrugby img{
            width: 100vw;
        } */
        #funo,#fdos,#ftres,#fcuatro,#fcinco,#fseis,#fsiete,#focho,#fnueve {
            color:#9cde9f;
            border-radius:0.5vw;
            border:solid #9cde9f;
            width: 7vw;
            height: 4vw ;
            background: rgb(68,152,104);
            background: linear-gradient(30deg, rgba(68,152,104,1) 0%, rgba(22,103,57,1) 100%); 
        }
        #funo:hover,#fdos:hover,#ftres:hover,#fcuatro:hover,#fcinco:hover,#fseis:hover,#fsiete:hover,#focho:hover,#fnueve:hover{
            width: 8vw;
            height: 5vw ;
            transition: all 0.5s ease;
        }
        #botones{
            display:flex;
            flex-direction:row;
            width: 100%;
            justify-content:space-between;
        }
        footer{
            text-align:center;
        }
        @media screen and (min-width: 346px) and (max-width: 562px) { /*telefonos en modo vertical*/
            .cont-botones{
                margin:3vw;
            }
            #botones button {
                width: 28vw; /* Ajusta el ancho de los botones en dispositivos móviles */
                height: 6vw; /* Ajusta la altura de los botones en dispositivos móviles */
            }
            #botones{
                display:flex;
                flex-wrap: wrap;
                gap: 2vw;
                /* margin:1vw; */
            }
            .contenedoras{
                border:solid;
                width: 95vw;
                margin-left:2vw;
                margin-right:2vw;
            }
            .contenedoras .puntloc, .contenedoras .puntvist, .contenedoras .vs{
                width: 10%;
                display:flex;
                justify-content:center;
                align-items:center;
                height: 4vh;
            }
            .contenedoras .local , .contenedoras .visitante{
                display:flex;
                justify-content:center;
                align-items:center;
                height: 4vh;
                width: 60vw;
            }
        }
        @media screen and (min-width: 562px) and (max-width: 1000px) {
            .cont-botones{
                margin:3vw;
            }
            #botones button {
                width: 20vw; /* Ajusta el ancho de los botones en dispositivos móviles */
                height: 6vw; /* Ajusta la altura de los botones en dispositivos móviles */
            }
            #botones{
                display:flex;
                flex-wrap: wrap;
                gap: 2vw;
                justify-content: space-around;
                /* margin:1vw; */
            }
        }
    </style>




<?php
include "../php/footer.php";
?>
</body>
</html>
