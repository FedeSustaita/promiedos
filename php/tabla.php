<?php
$ruta = '../';
include "../php/conexion.php";
include "../php/encabezado.php";
include "../php/js.php";

$conexion = conectar();
if ($conexion) {
    ?>
    <div id="contenedor">
        <!-- <aside id="uniones">
            <article>
                <section>
                    <h3>
                        UNIONES
                    </h3>
                    <ul>
                        <li><a href="#urt">Unión de Rugby de Tucumán</a></li>
                        <li><a href="#ucr">Unión Cordobesa de Rugby</a></li>
                        <li><a href="#urba">Unión de Rugby de Buenos Aires</a></li>
                    </ul>
                </section>
            </article>
        </aside> -->
        <div id="pro">
        <article class="tabla-pos">
                <table>
                    <thead>
                        <th colspan="4" > <div class="equi"><img class="escudo" src="../img/escudos/urt.png"> URT <img class="escudo" src="../img/escudos/urt.png"></div></th>
                        <tr>
                            <td>Puesto</td>
                            <td>Equipos</td>
                            <td>Puntos</td>
                            <td>Partidos Jugados</td>
                        </tr>
                    </thead>
                        <tbody id="equipos-tbody">
                    
                        </tbody>

    <?php
    $consulta = 'SELECT nombre, puntos, pj, foto FROM tabla';
    $sentencia = mysqli_prepare($conexion, $consulta);
    $q = mysqli_stmt_execute($sentencia);
    if ($q) {
        mysqli_stmt_bind_result($sentencia, $nombre, $puntos, $pj, $foto);
        while (mysqli_stmt_fetch($sentencia)) {
            // Escapa las variables para evitar problemas
            $nombreEscapado = addslashes($nombre);
            $puntosEscapado = (int)$puntos;
            $partidosjugados = (int)$pj;

            // Inserta el código JavaScript correctamente con comillas
            echo "<script>
                    equipos.push({equipo: '$nombreEscapado', puntos: $puntosEscapado, partjuga: '$partidosjugados', foto: '$foto'});
                </script>";
                
            }
        }
                ?>
                <script>
                    let contador = 0;
                    equipos.sort((a, b) => b.puntos - a.puntos);
                    let pro = document.getElementById("equipos-tbody");
                    // pro.innerHTML = "";
                    equipos.forEach((equip) => {
                        contador++;
                        pro.innerHTML+=`
                        <tr>
                            <strong><td>${contador}</td>
                            <td class="equipo">${equip.equipo}<img src="../img/escudos/${equip.foto}" class="escudo"></td>
                            <td>${equip.puntos}</td>
                            <td>${equip.partjuga}</td></strong>
                        </tr>
                        `;
                        // pro.innerHTML+=`<p>Nombre: ${equip.equipo}, Puntos: ${equip.puntos}</p>`;
                        });
                        
                </script>
                        </table>
                    </article>
                </div>
            </div> <!-- contenedor -->
            <style>
                *{
                    font-family: "Roboto", sans-serif;
                    font-weight: 700;
                    font-style: normal;
                }
                th{
                    background-color:#008b25;
                }
                td {
                    background-color:grey;
                    color:black;
                    font-family:"arial";
                    /* display:flex; */
                    /* flex-direction: column; */
                    align-items:center;
                }
                .equipo{
                    display:flex; 
                    flex-direction: row; 
                    align-items:center;
                }
                .equi{
                    display:flex; 
                    flex-direction: row; 
                    align-items:center;
                    justify-content:center;
                }
                aside article section{
                    display: flex;
                    flex-direction: column;
                    border:solid;
                }
                aside article h3{
                    text-align: center;
                }
                aside article a{
                    text-align: start;
                    color: white;
                    text-decoration: none;
                    padding: 0.5vw;
                }
                #pro .tabla-pos{
                    display: flex;
                    flex-direction: row;
                    padding: 2vw;
                }
                #uniones{
                    border:none;
                }
                #uniones ul{
                    padding:1vw;
                }
                #uniones ul li{
                    list-style:none;
                    font-style:none;
                    color:white;
                }
                .escudo{
                    height:3vw;
                }
                footer{
                    text-align:center;
                }
                ul .tabla{
                    border-bottom: 10px double #0a381e;
                }
                @media screen and (min-width: 346px) and (max-width: 562px) { /*telefonos en modo vertical*/
                    #contenedor{
                        padding:0;
                        display:flex;
                        justify-content:center;
                    }
                    .tabla-pos{
                        padding-left:0;
                        padding-right:0;
                    }
                    .escudo{
                        height:6vw;
                    }
                    td {
                        font-size: 16px; 
                        padding: 1vw; 
                    }
                    th {
                        font-size: 16px; 
                    }
                    .tabla-pos {
                        padding: 1vw; 
                    }
                    .equi {
                        display:flex;
                        flex-direction: row; 
                    }
                }
                @media screen and (min-width: 562px) and (max-width: 1000px) { /*telefonos en modo vertical*/
                    #contenedor{
                        padding:0;
                        display:flex;
                        justify-content:center;
                    }
                }
            </style>
                <?php
        
    // echo"<script>equipos.sort((a, b) => b.puntos - a.puntos);</script>";
    // echo"<script>console.log(equipos);</script>";
} else {
    echo '<h2 class="text-center">Error de conexion</h2>';
}

desconectar($conexion); // Cerrar la conexión
include "../php/footer.php";
?>
