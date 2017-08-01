<?php
require ('config/ConfigApp.php');
require ('controller/ComponentesController.php');
require ('controller/FormulasController.php');

$c_componentes = new ComponentesController();
$c_formulas = new FormulasController();

$controllers = ['Componentes' =>  $c_componentes, 'Formulas' =>  $c_formulas];

if (array_key_exists(ConfigApp::$ACTION,$_REQUEST) && array_key_exists($_REQUEST[ConfigApp::$ACTION], ConfigApp::$ACTIONS)){
    $action = $_REQUEST[ConfigApp::$ACTION];
    $nombreController = ConfigApp::$ACTIONS[$action];
    $controllers[$nombreController]->{$action}();
} else {
    $c_componentes->iniciar();
}
 ?>
