<?php
class ComponentesController{

  function __construct(){

  }

  function home(){
    $this->updateData();
    $this->view->mostrarComponentes();
  }

  function iniciar() {
    echo __METHOD__;
  }

  function mostrar_componente() {
    if(isset($_GET["id"]) && !empty($_GET["id"])){
      echo __METHOD__;
    }else {
      $this->iniciar();
    }
  }

  function eliminar_componente(){
    if(isset($_GET["id"]) && !empty($_GET["id"])){
     echo __METHOD__;
    } {
      $this->iniciar();
    }
  }

  function agregar_componente(){
    echo __METHOD__;
    $this->iniciar();
  }

  function mostrar_componentes() {
    echo "Calculadora Cientifica, Calculadora Simple";
  }
 
}

?>
