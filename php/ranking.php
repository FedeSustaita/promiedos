<?php
$ruta = '../';
include "../php/conexion.php";
include "../php/encabezado.php";
include "../php/js.php";
$conexion = conectar();
?>
<style>
        /* Estilos para la página */
    header{
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* margin-bottom: 1vw; */
        padding: 1vw;
        background-image: url(<?php echo $ruta ?>img/lawn.png);
        background-repeat: no-repeat;
        background-size: cover;
        /* width: 100%; */
        height: 90vh;
        margin:0;
        border:none;
        /* background-color: #166739;
        border: #104b2a solid; */
    }
    h2 {
        color: white;
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
        th{
            background-color:#008b25;
        }
        .equi{
            display:flex; 
            flex-direction: row; 
            align-items:center;
            justify-content:center;
        }
        .contenedoras .vs {
            width: 5%;
        }
        .vs p {
            margin: 0;
        }
        .escudo{
            height:3vw;
            margin-left:1vw;
        }
        .tabla-pos{
            display:flex;
            justify-content:center;
        }
        footer{
            text-align:center;
        }
        ul .ranking{
            /* background-color:red; */
            border-bottom: 10px double #0a381e;
        }
        @media screen and (min-width: 346px) and (max-width: 562px) { /*telefonos en modo vertical*/
            header{
            flex-direction: row;
            height: 20vh;
        }
        .escudo{
            height:6vw;
        }
        td {
            font-size: 16px; 
            padding: 2.5vw; 
        }
        th {
            font-size: 16px; 
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
            height: 95vh;
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
    @media screen and (min-width: 346px) and (max-width: 562px) { /*telefonos en modo vertical*/
        header{
            flex-direction: row;
            height: 20vh;
        }
        .escudo{
            height:6vw;
        }
        td {
            font-size: 16px; 
            padding: 2.5vw; 
        }
        th {
            font-size: 16px; 
        }
    }
</style>
</head>
<body>
    <h2>
        Ranking de Titulos
    </h2>
    <div id="pro">
        <article class="tabla-pos">
                <table>
                    <thead>
                        <th colspan="4" > <div class="equi"><img class="escudo" src="../img/escudos/urt.png"> URT <img class="escudo" src="../img/escudos/urt.png"></div></th>
                        <tr>
                            <td>Puesto</td>
                            <td>Equipos</td>
                            <td>Titulos</td>
                        </tr>
                    </thead>
                        <tbody id="equipos-tbody">
                    
                        </tbody>

<?php
    $consulta = 'SELECT nombre, titulos, foto FROM tabla';
    $sentencia = mysqli_prepare($conexion, $consulta);
    $q = mysqli_stmt_execute($sentencia);
    if ($q) {
        mysqli_stmt_bind_result($sentencia, $nombre, $titulos, $foto);
        while (mysqli_stmt_fetch($sentencia)) {
            // Escapa las variables para evitar problemas
            $nombreEscapado = addslashes($nombre);
            $titulosEscapado = (int)$titulos;

            // Inserta el código JavaScript correctamente con comillas
            echo "<script>
                    equiposTitulo.push({equipo: '$nombreEscapado', titulos: '$titulosEscapado', foto: '$foto'});
                </script>";
                
            }
        }
?>
                <script>
                    let contador = 0;
                    equiposTitulo.sort((a, b) => b.titulos - a.titulos);
                    let pro = document.getElementById("equipos-tbody");
                    // pro.innerHTML = "";
                    equiposTitulo.forEach((equip) => {
                        contador++;
                        pro.innerHTML+=`
                        <tr>
                            <strong><td>${contador}</td>
                            <td class="equipo">${equip.equipo}<img src="../img/escudos/${equip.foto}" class="escudo"></td>
                            <td>${equip.titulos}</td>
                        </tr>
                        `;
                        // pro.innerHTML+=`<p>Nombre: ${equip.equipo}, Puntos: ${equip.puntos}</p>`;
                        });
                        
                </script>
            </table>
        </article>
    </div>

<?php
include "../php/footer.php";
?>
</body>
</html>
