
<?php
require_once 'conexion.php';
class operaciones extends Conexion {

    public $mysqli;
    public $data;

    public function __construct() {
        $this->mysqli = parent::conectar();
        $this->data = array();
    }

    //*****************************************************************
    // LISTAMOS TODO EL PERSONAL
    //*****************************************************************
    public function operaciones($pagina){
		$tamagno_paginas=5;
				$empezar_desde=($pagina-1)*$tamagno_paginas;
        $resultado = $this->mysqli->query("SELECT
			*
		    FROM
            operaciones where estado_oper = 'abierta'  limit $empezar_desde,$tamagno_paginas
            ");

//$numero_filas = mysql_num_rows($resultado);
//operaciones where estado_oper = 'abierta' limit $empezar_desde,$tamagno_paginas
	$numero_filas = $resultado->num_rows;
 //$resultado = $this->mysqli->query($consulta)
   $total_paginas = ceil( $numero_filas/$tamagno_paginas);
	//echo "Número de registros de la consulta: ".$numero_filas."<br>";
	// echo "Número de paginas: ".$total_paginas."<br>";  
	// echo "pagina: ".$pagina."<br>";   
       
	   
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data; 
        } 
        
    }
	
    //*****************************************************************
    // AGREGAR PERSONAL
    //*****************************************************************
    
	//******************************************************************
	//*****************************************************************************
	
	  public function operaciones2($pagina,$usuario){
      //$pagina = 2
  $tamagno_paginas=5;
				$empezar_desde=($pagina-1)*$tamagno_paginas;
        $resultado = $this->mysqli->query("SELECT
			*
		    FROM
            operaciones where estado_oper = 'abierta' and ced_inver = $usuario  limit $empezar_desde,$tamagno_paginas
            ");

//$numero_filas = mysql_num_rows($resultado);
//operaciones where estado_oper = 'abierta' limit $empezar_desde,$tamagno_paginas
	$numero_filas = $resultado->num_rows;
 //$resultado = $this->mysqli->query($consulta)
   $total_paginas = ceil( $numero_filas/$tamagno_paginas);
	//echo "Número de registros de la consulta: ".$numero_filas."<br>";
	// echo "Número de paginas: ".$total_paginas."<br>";
	// echo "pagina: ".$pagina."<br>";


        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data;
        }

    }
	
	
	    public function opercerradas($pagina){
		$tamagno_paginas=5;
				$empezar_desde=($pagina-1)*$tamagno_paginas;
        $resultado = $this->mysqli->query("SELECT
			*
		    FROM
            operaciones where estado_oper = 'cerrada'  limit $empezar_desde,$tamagno_paginas
            ");


	$numero_filas = $resultado->num_rows;

   $total_paginas = ceil( $numero_filas/$tamagno_paginas);
     
	   
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data; 
        } 
        
    }
	
	
	//************************************************************************
	//***********************************************************************
	
	
	
	
	public function opercerradas2($pagina,$usuario){
		$tamagno_paginas=5;
				$empezar_desde=($pagina-1)*$tamagno_paginas;
        $resultado = $this->mysqli->query("SELECT
			*
		    FROM
            operaciones where estado_oper = 'cerrada' and ced_inver = $usuario limit $empezar_desde,$tamagno_paginas
            ");


	$numero_filas = $resultado->num_rows;

   $total_paginas = ceil( $numero_filas/$tamagno_paginas);
     
	   
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data; 
        } 
        
    }
	
	
	//************************************************************************
	//***********************************************************************


	
	public function opercerradas3($pagina,$usuario){
		$tamagno_paginas=5;
				$empezar_desde=($pagina-1)*$tamagno_paginas;
        $resultado = $this->mysqli->query("SELECT
			sum(pl) AS value_sum 
		    FROM
            operaciones WHERE  ced_inver = $usuario limit $empezar_desde,$tamagno_paginas
            ");


	$numero_filas = $resultado->num_rows;

   $total_paginas = ceil( $numero_filas/$tamagno_paginas);
     
	   
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data; 
        } 
        
    }
	
	
	//************************************************************************
	//***********************************************************************
	
	
		public function opercerradas4($pagina,$usuario){
		$tamagno_paginas=5;
				$empezar_desde=($pagina-1)*$tamagno_paginas;
        $resultado = $this->mysqli->query("SELECT
			sum(com_oper) AS value_com 
		    FROM
            operaciones WHERE  ced_inver = $usuario limit $empezar_desde,$tamagno_paginas
            ");


	$numero_filas = $resultado->num_rows;

   $total_paginas = ceil( $numero_filas/$tamagno_paginas);
     
	   
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data; 
        } 
        
    }
	
	
	//************************************************************************
	//***********************************************************************


public function opercerradas5($pagina,$usuario){
		$tamagno_paginas=5;
				$empezar_desde=($pagina-1)*$tamagno_paginas;
        $resultado = $this->mysqli->query("SELECT
				inv_inicial 
		    FROM
            inversionista WHERE  ced_inver = $usuario limit $empezar_desde,$tamagno_paginas
            ");


	$numero_filas = $resultado->num_rows;

   $total_paginas = ceil( $numero_filas/$tamagno_paginas);
     
	   
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data; 
        } 
        
    }
	
	
	//************************************************************************
	//***********************************************************************



	  public function opersuma($id){

        $resultado = $this->mysqli->query("SELECT
			*
		    FROM
            operaciones "
           
		               );

 //$this->mysqli->query(resultado);
	//$numero_filas = $resultado->num_rows;

  // $total_paginas = ceil( $numero_filas/$tamagno_paginas);
     
	   $resultado2 = $this->mysqli->query($resultado);

        while( $fila = $resultado2->fetch_assoc() ){
            $data[] = $fila;
        }
	  
	
        if (isset($data)) {
            return $data; 
        } 
        
	  }
	
	
	
	//************************************************************
	//***********************************************************
	
	public function add() {




        $consulta = sprintf(
            "INSERT INTO operaciones values(null, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, null, null, %s );",  
            parent::comillas_inteligentes($_POST['gd']), 
            parent::comillas_inteligentes($_POST['cp']), 
            parent::comillas_inteligentes($_POST['tl']),
            parent::comillas_inteligentes($_POST['to']),
            parent::comillas_inteligentes($_POST['fo']),
            parent::comillas_inteligentes($_POST['ar']),
            parent::comillas_inteligentes($_POST['ho']),
			parent::comillas_inteligentes($_POST['hc']),
			parent::comillas_inteligentes($_POST['va']),
			parent::comillas_inteligentes($_POST['vop']),
			parent::comillas_inteligentes($_POST['cn']),
			parent::comillas_inteligentes($_POST['co']),
			parent::comillas_inteligentes($_POST['vo']),
			parent::comillas_inteligentes($_POST['eo'])
			
            );
        $this->mysqli->query($consulta);

    }
    //*****************************************************************
    // INSERTAR CAPITAL
	//*****************************************************************
     public function addcapital() {




        $consulta = sprintf(
            "INSERT INTO capital values(null, %s, %s, %s, null, null, null, null, %s );",  
            parent::comillas_inteligentes($_POST['gd']), //ced_inver
            parent::comillas_inteligentes($_POST['cp']),  //cod_oper
            parent::comillas_inteligentes($_POST['fo']),  //fecha_inver
            parent::comillas_inteligentes($_POST['vop']),  //valor_inver
            parent::comillas_inteligentes($_POST['fo']),  //fecha_retiro 
            parent::comillas_inteligentes($_POST['va']),   //valor_retiro
            parent::comillas_inteligentes($_POST['va']),   //Valor_actual
			parent::comillas_inteligentes($_POST['pl'])    //valor_pl
			  
		
		
            );
        $this->mysqli->query($consulta);
	 }
	//::::::::::::::::::::::::::::::::::::::::::
		
	
	
	//:::::::::::::::::::::::::::::::::::::::::
	
	
	
	
	
	
	
	public function update($id) {

        $consulta = sprintf(
            " UPDATE operaciones SET
            nom_oper =  %s,
			fecha_open =  %s,
			fecha_close =  %s,
			hora_open =  %s,
			hora_close =  %s,
			pl = %s,
			pldia = %s,
			estado_oper = %s
            WHERE
            cod_oper = %s;",
			  parent::comillas_inteligentes($_POST['nm']), 
			 parent::comillas_inteligentes($_POST['fo']),
			  parent::comillas_inteligentes($_POST['fc']),
			   parent::comillas_inteligentes($_POST['ho']),
			    parent::comillas_inteligentes($_POST['hc']),
                parent::comillas_inteligentes($_POST['pl']),
			   parent::comillas_inteligentes($_POST['pldia']),
			   parent::comillas_inteligentes($_POST['ac']),
			   parent::comillas_inteligentes($_POST['id'])
            );

        $this->mysqli->query($consulta);
          echo "<script type='text/javascript'>window.location='adminopabiertas.php';</script>";
    }
    //*****************************************************************
    // ELIMINAR PRODUCTO
    //*****************************************************************
    public function delete($id) {
        $query = sprintf(
            "DELETE FROM operaciones WHERE cod_oper = %s;", 
            parent::comillas_inteligentes($id)
            );
        $this->mysqli->query($query);
        header("Location: index.php");
    }
	
	//***************************************************
	
	
	//*****************************************************
    //*****************************************************************
    // PERSONAL POR ID
    //*****************************************************************
    public function personalPorId($id){
        $consulta = sprintf("SELECT
                      * FROM 
            operaciones
         
            WHERE
            cod_oper = %s", 
            parent::comillas_inteligentes($id)
            );

        $resultado = $this->mysqli->query($consulta);

        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data; 
        }
    }

}
?>
