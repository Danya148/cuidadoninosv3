<?php

use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

DB::table("metodopago")->insert([
	"NumTarjeta" => $_POST["NumTarjeta"],
	"PIN" => $_POST["PIN"],
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
    <a href="PagFin.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Siguiente</a>
</body>
</html>
_HTML;