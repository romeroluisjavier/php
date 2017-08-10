<?php
require ('controller/ComponentesController.php');
require ('controller/FormulasController.php');

$c_componentes = new ComponentesController();
$c_formulas = new FormulasController();

if($_GET['action'] == ''){
    //no hay accion, hago la accion por defecto
    $c_formulas->mostrar_formulas();
}
else{
    //parseo (separo) la URL
    $partesURL = explode ("/",$_GET['action']);
    //leo la URL para entender que tengo que hacer
    if($partesURL[0] === 'componentes') {
        $c_componentes->mostrar_componentes();
    } elseif($partesURL[0] === 'formulas') {
        $c_formulas->mostrar_formulas();
    } elseif($partesURL[0] === 'formula') {
        $c_formulas->mostrar_formula_by_id($partesURL[1]);
    }
}

 ?>