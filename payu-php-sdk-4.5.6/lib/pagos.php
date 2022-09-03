<?php
require_once 'PayU.php';

PayU::$apiKey = "bl2wA4PfQi7QT647Fpn6fD8MeY"; //Ingrese aquí su propio apiKey.
PayU::$apiLogin = "10rwl7p732Vtaz3"; //Ingrese aquí su propio apiLogin.
PayU::$merchantId = "1"; //Ingrese aquí su Id de Comercio.
PayU::$language = SupportedLanguages::ES; //Seleccione el idioma.
PayU::$isTest = True; //Dejarlo True cuando sean pruebas.

?>