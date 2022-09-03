<?php
require_once 'conexion.php';
class Paises extends Conexion {

    public $mysqli;
    public $data;

    public function __construct() {
        $this->mysqli = parent::conectar();
        $this->data = array();
    }

    //*****************************************************************
    // LISTAMOS DE PAISES
    //*****************************************************************
    
	
	//******************************************************
	
	public function detalles($u,$i){
        $resultado = $this->mysqli->query("SELECT  *  FROM operaciones where estado_oper = 'cerrada' and ced_inver = $u and cod_oper = $i");
 

 
 
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
			
	
        }

        if (isset($data)) {
            return $data; 
        } 
        
    }
	
	
	//******************************************************
	
	
	public function paises($u){
        $resultado = $this->mysqli->query("SELECT  sum(pl) as winlost FROM operaciones where ced_inver = $u");
 

 
 
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
			
	
        }

        if (isset($data)) {
            return $data; 
        } 
        
    }

}

?>



  
         