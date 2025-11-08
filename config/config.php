<?php
// Configurar el tiempo de vida de la cookie de sesión a 2 días (172800 segundos)
ini_set('session.cookie_lifetime', 172800);
// Configurar el tiempo de vida de la sesión en el servidor a 2 días (172800 segundos)
ini_set('session.gc_maxlifetime', 172800);

ini_set('session.cookie_secure', true);
ini_set('session.cookie_httponly', true);

date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_ES.UTF-8');

// Configurar el registro de errores
ini_set('log_errors', 1);

// Configuración general segura
error_reporting(0);
ini_set('display_errors', 0);

$logFileName = '../logs/error_' . date('d-m-Y') . '.log';
ini_set('error_log', __DIR__ . '/' . $logFileName);

