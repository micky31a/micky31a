<?php
// elimina un archivo de cualquier parte del disco duro al que el
// usuario de PHP tiene acceso. Si PHP tiene acceso de root:
$nombre_usuario = "../etc/";
$directorio = "/home/../etc/";
$archivo_a_eliminar = "passwd";
unlink ("/home/../etc/passwd");
echo "&iexcl;El archivo /home/../etc/passwd ha sido eliminado!";
?> 