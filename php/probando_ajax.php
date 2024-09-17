<!DOCTYPE html>
<html>
<head>
    <title>Probando</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>

<input type="button" value="SALUDAME" onclick="saludame();">
<div id="mostrar_mensaje"></div>

<script>
    var i = 0; // Declarar i fuera de la función para que se mantenga su valor
    function saludame() { 
        i++; // Incrementar el valor de i
        var parametros = {
            "i" : i // Enviar el valor incrementado de i
        };
        $.ajax({
            data: parametros,
            url: 'incrementar_i.php',
            type: 'POST',
            
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje);
            }
        });
    }
</script>
<?php
$i=0;
// echo $i;
?>
</body>
</html>




<?php
$ruta = '';
include "php/conexion.php";
include "php/encabezado.php";
include "php/js.php";
$conexion = conectar();
if ($conexion) {
?>
<style>
    h2{
        color:black;
    }
    *{
                    font-family: "Roboto", sans-serif;
                    font-weight: 700;
                    font-style: normal;
                }
</style>
        <h2>
            FECHAS
        </h2>
        <button id="miBoton"onclick="saludame();">Haz clic en mí</button>
        <!-- <p id="miMensaje">Este mensaje cambiará al hacer clic en el botón.</p> -->
<div id="contenedorprueba">
<div id="mostrar_mensaje"></div>
<?php

$a1="fechauno";
$a2="fechados";
$a3="fechatres";
$a4="fechacuatro";
$a5="fechacinco";
$a6="fechaseis";
$a7="fechasiete";
$a8="fechaocho";
$a9="fechanueve";
$i=1;
    ?>
    <script>
        i=1;
    </script>
    <?php
    ?>
        <h2>
            FECHA <?php echo $i ?>
        </h2>
    <?php

    $columnName= "a" .$i;

    $consulta = 'SELECT ' . $$columnName . ' FROM fechasurt';
    $sentencia = mysqli_prepare($conexion, $consulta);
    $q = mysqli_stmt_execute($sentencia);
    if ($q) {
        mysqli_stmt_bind_result($sentencia, $fechauno);
        while (mysqli_stmt_fetch($sentencia)) {
            $equipo1=(int)($fechauno/ 10);
            $equipo2=$fechauno%10;


            ?>
            <div class="contenedoras">
                <div>
            <?php

            $conexion2 = conectar();
            $consulta2 = 'SELECT nombre FROM tabla WHERE id=?';
            $sentencia2 = mysqli_prepare($conexion2, $consulta2);
            mysqli_stmt_bind_param($sentencia2, 'i', $equipo1);
            $q2 = mysqli_stmt_execute($sentencia2);
            if ($q2) {
                mysqli_stmt_bind_result($sentencia2, $nombre);
                if (mysqli_stmt_fetch($sentencia2)) {
                    // Inserta el código JavaScript correctamente con comillas
                    echo "$nombre";
                        
                    }
                }
                
            ?>
                </div>
                <div class="puntloc">-</div>
                    <div class="vs">
                        <p>vs</p>
                    </div>
                <div class="puntvist">-</div>
                <div>
            <?php
                $conexion2 = conectar();
            $consulta2 = 'SELECT nombre FROM tabla WHERE id=?';
            $sentencia2 = mysqli_prepare($conexion2, $consulta2);
            mysqli_stmt_bind_param($sentencia2, 'i', $equipo2);
            $q2 = mysqli_stmt_execute($sentencia2);
            if ($q2) {
                mysqli_stmt_bind_result($sentencia2, $nombre);
                if (mysqli_stmt_fetch($sentencia2)) {
                    // Inserta el código JavaScript correctamente con comillas
                    echo "$nombre";
                        
                    }
                }
                ?>
                    </div>
                </div>
                <!-- <br> -->
                <style>
                    .contenedoras{
                        display: flex;
                        justify-content: center;
                    }
                    .contenedoras div{
                        border: solid;
                        border-width: 0.1vw;
                        width:25%;
                        text-align: center;
                        padding:1vw;
                        align-self:center;
                        color: black;
                        background-color:grey;
                    }
                    .contenedoras .vs{
                        width:5%;
                    }
                    .vs p{
                        margin:0;
                    }
                    .contenedoras .puntloc{
                        width:5%;
                    }
                    .contenedoras .puntvist{
                        width:5%;
                    }
                </style>
                <?php




    }
    ?>

    <script>
    var i = 0; 
    function saludame() { 
        i++;
        var parametros = {
            "i" : i 
        };
        $.ajax({
            data: parametros,
            url: 'php/incrementar_i.php',
            type: 'POST',
            
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje);
            }
        });
    }
</script>
<?php
echo $i;
}
?>
</div>
<?php
}
?>
<style>
    h2{
        text-align: center;
        color: black;
    }
</style>














































<?php
$ruta = '';
include "php/conexion.php";
include "php/encabezado.php";
include "php/js.php";
$conexion = conectar();
?>
    <style>
        /* Estilos para la página */
        h2 {
            color: black;
            text-align: center;
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
    </style>
</head>
<body>

<h2>FECHAS</h2>
<button id="decrementar" onclick="decrementar();">decrementar</button> <!-- Botón para iniciar el proceso -->
<button id="incrementar" onclick="incrementar();">incrementar</button> <!-- Botón para iniciar el proceso -->
<div id="contenedorprueba">
    <div id="mostrar_mensaje"></div> <!-- Aquí se mostrará el resultado -->
</div>

<script>
    var i = 1; // Inicializa el contador en 1

    function incrementar() {
        var parametros = {
            "i": i // Envía el valor de 'i' al servidor
        };

        $.ajax({
            data: parametros,
            url: 'php/incrementar_i.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
                i++; // Incrementa 'i' después de cada solicitud exitosa
            }
        });
    }
</script>
<script> 
    var i = 1; // Inicializa el contador en 1

    function decrementar() {

        var parametros = {
            "i": i // Envía el valor de 'i' al servidor
        };

        $.ajax({
            data: parametros,
            url: 'php/decrementar_i.php', // Archivo PHP que manejará la solicitud
            type: 'POST',
            beforesend: function() {
                $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
            success: function(mensaje) {
                $('#mostrar_mensaje').html(mensaje); // Muestra el mensaje que devuelve PHP
                i--; // decrementa 'i' después de cada solicitud exitosa
            }
        });
    }
</script>

</body>
</html>
