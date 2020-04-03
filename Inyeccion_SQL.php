<?php
$offset = $argv[0]; // atencion, no se valida la entrada!
$consulta = "SELECT id, nombre FROM productos ORDER BY nombre LIMIT 20 " .
 "OFFSET $offset;";
$resultado = pg_query($conexion, $consulta);
?> 