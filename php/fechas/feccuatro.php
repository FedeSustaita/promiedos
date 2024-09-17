<?php
$ruta = '../../';
include "../../php/conexion.php"; // Conexión a la base de datos
$conexion = conectar();

if ($conexion) {
    $i = isset($_POST['i']) ? (int)$_POST['i'] : 0; // Asegúrate de que $i sea un entero y maneja el caso cuando no está definido

    // Asegúrate de que $i esté en el rango válido (0 a 9)
    if ($i >= 0 && $i <= 9) {
        $columnNames = [
            1 => "fechauno",
            2 => "fechados",
            3 => "fechatres",
            4 => "fechacuatro",
            5 => "fechacinco",
            6 => "fechaseis",
            7 => "fechasiete",
            8 => "fechaocho",
            9 => "fechanueve"
        ];

        if (isset($columnNames[$i])) {
            $columnName = $columnNames[$i]; // Obtén el nombre de la columna basado en 'i'
            $consulta = 'SELECT ' . $columnName . ' FROM fechasurt';
            $sentencia = mysqli_prepare($conexion, $consulta);

            if ($sentencia) {
                $q = mysqli_stmt_execute($sentencia);
                if ($q) {
                    mysqli_stmt_bind_result($sentencia, $fechauno);
                    ?>
                    <h2>FECHA <?php echo $i; ?></h2>
                    <?php
                    while (mysqli_stmt_fetch($sentencia)) {
                        $equipo1 = (int)($fechauno / 10);
                        $equipo2 = $fechauno % 10;
                        ?>
                        <div class="contenedoras">
                            <div class="local">
                                <?php
                                // Obtener nombre del equipo1
                                $conexion2 = conectar();
                                $consulta2 = 'SELECT nombre FROM tabla WHERE id=?';
                                $sentencia2 = mysqli_prepare($conexion2, $consulta2);
                                mysqli_stmt_bind_param($sentencia2, 'i', $equipo1);
                                if (mysqli_stmt_execute($sentencia2)) {
                                    mysqli_stmt_bind_result($sentencia2, $nombre);
                                    if (mysqli_stmt_fetch($sentencia2)) {
                                        echo htmlspecialchars($nombre);
                                    }
                                }
                                mysqli_stmt_close($sentencia2);
                                mysqli_close($conexion2);
                                ?>
                            </div>
                            <div class="puntloc">-</div>
                            <div class="vs">
                                <p>vs</p>
                            </div>
                            <div class="puntvist">-</div>
                            <div class="visitante">
                                <?php
                                // Obtener nombre del equipo2
                                $conexion2 = conectar();
                                $consulta2 = 'SELECT nombre FROM tabla WHERE id=?';
                                $sentencia2 = mysqli_prepare($conexion2, $consulta2);
                                mysqli_stmt_bind_param($sentencia2, 'i', $equipo2);
                                if (mysqli_stmt_execute($sentencia2)) {
                                    mysqli_stmt_bind_result($sentencia2, $nombre);
                                    if (mysqli_stmt_fetch($sentencia2)) {
                                        echo htmlspecialchars($nombre);
                                    }
                                }
                                mysqli_stmt_close($sentencia2);
                                mysqli_close($conexion2);
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    mysqli_stmt_close($sentencia);
                }
            }
        }
    } else {
        // Cuando $i está fuera del rango válido, no mostrar nada
        echo '<h2>FECHA NO DISPONIBLE</h2>';
    }
    mysqli_close($conexion);
}
?>
