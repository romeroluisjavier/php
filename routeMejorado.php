<?php
require ('controller/ComponentesController.php');
require ('controller/FormulasController.php');

$c_componentes = new ComponentesController();
$c_formulas = new FormulasController();

$CONTROLLERS = ['Componentes' =>  $c_componentes, 'Formulas' =>  $c_formulas];
$ACTION = "action";
$ACTIONS = [
    'home' =>  "Componentes",
    'mostrar_componente' =>  "Componentes",
    'eliminar_componente' =>  "Componentes",
    'agregar_componente' =>  "Componentes",
    'eliminar_formula' =>  "Formulas",
    'agregar_formula' =>  "Formulas",
    'mostrar_formula' =>  "Formulas"
];


if (array_key_exists($ACTION,$_REQUEST) && array_key_exists($_REQUEST[$ACTION], $ACTIONS)){
    $action = $_REQUEST[$ACTION];
    $controllerName = $ACTIONS[$action];
    $CONTROLLERS[$controllerName]->{$action}();
} else {
    // No existe la Action entonces mustro la Home
    $c_componentes->iniciar();
}
 ?>
