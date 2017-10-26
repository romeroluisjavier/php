<?php
class Api{
  protected $method = "";
  protected $endpoint = "";
  protected $args = array();

  function __construct($request){
    header("Content-Type: application/json");
    $this->args = explode('/', $request);
    $this->endpoint = array_shift($this->args);
    $this->method = $_SERVER['REQUEST_METHOD'];
  }

  public function processAPI() {
     if (method_exists($this, $this->endpoint)) {
        $retorno = $this->{$this->endpoint}($this->args);
        return $this->_response($retorno);
     } else {
        $retorno = $this->operaciones($this->args);
        return $this->_response($retorno);
     }
 
   }

   private function _response($data, $status = 200) {
       header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
       return json_encode($data);
   }

   private function _requestStatus($code){
       $status = array(
         200 => "OK",
         404 => "Not found",
         500 => "Internal Server Error"
       );
       return ($status[$code])? $status[$code] : $status[500];
    }

  public function operaciones($argumentos){
    switch ($this->method) {
      case 'GET':
            $result = new stdClass();
            $result->Descripcion = "Utilice algunos de los metodos mencionados pasando dos ints como parametros";
            $result->Metodos = array("sumar", "restar", "multiplicar");
            $result->ApiEndpoint = __METHOD__;
            return $result ;
        break;
      default:
           return "Método no válido";
        break;
    }
   }

   public function sumar($argumentos){
    switch ($this->method) {
      case 'GET':
          if(count($argumentos)==2){
           
            $arg1 = (int)$argumentos[0];
            $arg2 = (int)$argumentos[1];
            $suma = $arg1 + $arg2;
            $result = new stdClass();
            $result->Argumeto1 = $arg1;
            $result->Argumeto2 = $arg2;
            $result->Resultado = $suma;
            $result->Descripcion = "Suma: ". $arg1. " + ". $arg2 . " = " . $suma;
            $result->ApiEndpoint = __METHOD__;
            return $result;
          }else{
            return "Sin argumentos";
          }
        break;
      default:
           return "Método no válido";
        break;
    }
   }

   public function restar($argumentos){
    switch ($this->method) {
      case 'GET':
          if(count($argumentos)==2){
           
            $arg1 = (int)$argumentos[0];
            $arg2 = (int)$argumentos[1];
            $suma = $arg1 - $arg2;
            $result = new stdClass();
            $result->Argumeto1 = $arg1;
            $result->Argumeto2 = $arg2;
            $result->Resultado = $suma;
            $result->Descripcion = "Resta: ". $arg1. " - ". $arg2 . " = " . $suma;
            $result->ApiEndpoint = __METHOD__;
            return $result;
          }else{
            return "Sin argumentos";
          }
        break;
      default:
           return "Método no válido";
        break;
    }
   }

   public function multiplicar($argumentos){
    switch ($this->method) {
      case 'GET':
          if(count($argumentos)==2){
           
            $arg1 = (int)$argumentos[0];
            $arg2 = (int)$argumentos[1];
            $suma = $arg1 * $arg2;
            $result = new stdClass();
            $result->Argumeto1 = $arg1;
            $result->Argumeto2 = $arg2;
            $result->Resultado = $suma;
            $result->Descripcion = "Multiplica: ". $arg1. " * ". $arg2 . " = " . $suma;
            $result->ApiEndpoint = __METHOD__;
            return $result;
          }else{
            return "Sin argumentos";
          }
        break;
      default:
           return "Método no válido";
        break;
    }
   }
}

 ?>
