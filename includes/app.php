<?php

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

//conectar a la base de datos
$db = conectarDB();

use Model\activeRecord;

activeRecord::setDB($db);
