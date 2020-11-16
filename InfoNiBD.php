<?php

use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

DB::table("informacionnino")->insert([
	"NombreNi" => $_POST["NombreNi"],
	"EdadNi" => $_POST["EdadNi"],
	"Enfermedades" => $_POST["Enfermedades"],
]);

echo <<<_HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negocio Web</title>
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
</head>
<body>
	<h1> Click al boton para el siguiente formulario</h1>
	<br>
    <a href="Pago.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Siguiente</a>
</body>
</html>
_HTML;
