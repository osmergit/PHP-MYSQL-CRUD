<?php session_start();
	echo $_SESSION["usuario"];
		if(!isset($_SESSION["usuario"])){
		header("Location:login.php");
    }
	
     

	 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>ZONA DE USUARIOS REGISTRADOS</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!-- Including the Lobster font from Google's Font Directory -->
     
        
        <!-- Enabling HTML5 support for Internet Explorer -->
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

	
   
    
	
	
  
	
        <header>

<TABLE >
<TR>
<TD>
<div>
    <center><font size = 6 color="#800080">  INVERSIONISTAS BOLSA DE VALORES USA ZONA DE USUARIOS REGISTRADOS </font></center>
</div>
	</TD>

</TR>
</TABLE>	
	
			
			  </header>
        
   <center>
  
            <ul class="fancyNav">
                <li id="home"><a href="#home" class="homeIcon">INICIO</a></li>
                <li id="news"><a href="operabiertas.php">Abiertas</a></li>
                <li id="about"><a href="openclose.php">Cerradas</a></li>
                <li id="services"><a href="capital.php">Capital</a></li>
                <li id="contact"><a href="logout.php">Salir</a></li>
            </ul>
			
 </center>
 



    <h3><!-- end .content --></h3>
  </div>
  </div>
</th>
  
  </tr>
  <tr>
  </tr>
     </tbody>
	 </div>
</table>
   


 



   
        <footer></footer>
            
    </body>
</html>
