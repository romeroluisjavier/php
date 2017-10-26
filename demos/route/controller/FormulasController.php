<?php

class FormulasController{

  function __construct(){
  }

  function eliminar_formula(){
    if(isset($_GET['id']) && !empty($_GET['id'])){
      $id = $_GET['id'];
      echo __METHOD__ . " id:" . $id;
    } else {
      echo __METHOD__ . " falta GET[id]";
    }
  }

  function agregar_formula(){
    if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
      $nombre = $_POST['nombre'];
      echo __METHOD__ . " nombre:" . $nombre;
    } else {
      echo __METHOD__ . " falta POST[nombre]";
    }
  }

  function mostrar_formula(){
    if(isset($_GET['id']) && !empty($_GET['id']) ){
      $id = $_GET['id'];
      echo __METHOD__ . " id:" . $id;
    } else {
      echo __METHOD__ . " falta GET[id]";
    }
  }

  function mostrar_formula_by_id($id){
      echo __METHOD__ . " id:" . $id;
  }

  function mostrar_formulas(){
    echo "Lista de formulas: Sumar, Restar, Dividir, etc.";
  }
}

?>
