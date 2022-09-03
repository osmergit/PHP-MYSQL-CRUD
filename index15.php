<?php
$navigator_user_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? strtolower($_SERVER['HTTP_USER_AGENT']):'';
if(
stristr($navigator_user_agent, "iphone")or
stristr($navigator_user_agent, "ipad")or
stristr($navigator_user_agent, "android")or
stristr($navigator_user_agent, "kindle")
) 
{
header("Location: mobile/indexmobil.html");
}
?>


<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>INVIERTA EN LA BOLSA DE VALORES</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  
	  <style type="text/css" data-type="vc_shortcodes-custom-css-16559">.vc_custom_1481881728039{background-color: #eeeeee !important;}.vc_custom_1486119147179{background-image: url(https://www.interbanctrading.com/wp-content/uploads/2014/05/platform_bg.png?id=15403) !important;}.vc_custom_1485967613669{background-image: url(https://www.interbanctrading.com/wp-content/uploads/2014/05/Mockup-Interbanctrading-Mobile.jpg?id=16697) !important;}.vc_custom_1450336434123{padding-top: 10px !important;}</style>
       
       <style>
	   
	   
	   <style type="text/css">
	   
<!--


body {
	
	background:#8ba987 url('http://www.inviertaenusa.co/nyse.jpg') no-repeat center center;
    background-size:100% 100%;
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

.ab{
min-width:10%;
max-width:100%;
width:20%;
 padding: 20px;
border: 1px solid #555;
font-weight:bold;
overflow:hidden;
line-height: 60px;
float:left;
}

	   
.container {
	width: 100%;
	max-width: 1260px;/* puede que sea conveniente una anchura máxima (max-width) para evitar que este diseño sea demasiado ancho en un monitor grande. Esto mantiene una longitud de línea más legible. IE6 no respeta esta declaración. */
	min-width: 780px;/* puede que sea conveniente una anchura mínima (min-width) para evitar que este diseño sea demasiado estrecho. Esto permite que la longitud de línea sea más legible en las columnas laterales. IE6 no respeta esta declaración. */
	background-color: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño. No es necesario si establece la anchura de .container en el 100%. */
}
	 
	 .sampletext {
 border: 1px solid #DBE1EB;
  font-size: 18px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 4px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
}
	   .newsticker {
  position: relative;
  margin-left: 20px;
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: inline-flex;
  white-space: nowrap;
  max-width: 100%;
  overflow: hidden;
}
.newsticker div {
  display: inline-table;
  float: left;
  margin: 0;
  padding-right: 15px;
}

.newsticker span {
  margin: 0 5px 0 0;
}

@-webkit-keyframes marqueeAnimation-3609677  { 100%  {margin-left:-4808px}}

@-webkit-keyframes marqueeAnimation-36096770  { 100%  {margin-left:-4808px}}
#caja{
	width: 100%;
	margin: auto;
	height: 0px;
	background: #000;
	box-shadow: 10px 10px 3px #D8D8D8;
	transition: height .4s;
}
#texto {
	

    text-align: justify;

}
#caja2{
	width: 100%;
	margin: auto;
	height: 0px;
	background: #000;
	box-shadow: 10px 10px 3px #D8D8D8;
	transition: height .4s;
}

#boton2:hover + div#caja2{
	height: 100px;
}

#boton2{
	padding: 10px;
	background: orange;
	width: 95px;
	cursor: pointer;
	margin-top: 10px;
	margin-bottom: 10px;
	box-shadow: 0px 0px 1px #000;
	display: inline-block;
}


#boton{
	padding: 10px;
	background: orange;
	width: 95px;
	cursor: pointer;
	margin-top: 10px;
	margin-bottom: 10px;
	box-shadow: 0px 0px 1px #000;
	display: inline-block;
}

#boton:hover{
	opacity: .8;
}

figure{
	width: 180px;
	display: inline-block;
	margin-top: 10px;
	float: right;
}

figure img{
	width: 180px;
}
#contenedor{
	width: 50%;
	margin: auto;
}
#miframe{
width:100%;
height:100%;
}

.zona{
	width: 100%;
	max-width: 1260px;/* puede que sea conveniente una anchura máxima (max-width) para evitar que este diseño sea demasiado ancho en un monitor grande. Esto mantiene una longitud de línea más legible. IE6 no respeta esta declaración. */
	min-width: 800px;/* puede que sea conveniente una anchura mínima (min-width) para evitar que este diseño sea demasiado estrecho. Esto permite que la longitud de línea sea más legible en las columnas laterales. IE6 no respeta esta declaración. */
	height: 100%;
	max-height: 1260px;
	background-color: #FFF;
	margin: 0 auto; 	
	
}


	   </style> 
       
       <script>
	   


var clic = 1;
function divLogin(){ 
   if(clic==1){
   document.getElementById("caja").style.height = "100px";
   clic = clic + 1;
   } else{
       document.getElementById("caja").style.height = "0px";      
    clic = 1;
   }   
}




$(function(){
	$("#webticker").marquee({
	    //speed in milliseconds of the marquee
	    duration: 35000,
	    //gap in pixels between the tickers
	    gap: 50,
	    //time in milliseconds before the marquee will start animating
	    delayBeforeStart: 0,
	    //'left' or 'right'
	    direction: 'left',
	    //true or false - should the marquee be duplicated to show an effect of continues flow
	    duplicated: true,
	    pauseOnHover:true
	});	
});

jQuery.getJSON("/trade.php/trader/widgets/fluxValues",function(data){
	setFluxValues(data);
});
	
setInterval(function(){
	jQuery.getJSON("/trade.php/trader/widgets/fluxValues",function(data){
		setFluxValues(data);
	});
},30000)




function setFluxValues(assets){
	for(var i in assets){
		var asset=assets[i];
		var asset_name=asset["flux_name"];
		var asset_vale=asset["flux_value"];
		var asset_state=asset["flux_state"];

		
		$("[asset_name='"+asset_name+"']").find(".asset_value")
			.html(asset_vale)
			.css("color",   asset_state=="up" ? "#00D532" : "#ff2d13" );

		$("[asset_name='"+asset_name+"']").find(".asset_status_up_down")
			.html("<i class='fa fa-caret-"+asset_state+"'></i>")
			.css("color",   asset_state=="up" ? "#00D532" : "#ff2d13" )
			.css("font-size",   "13px" );
	}
}


function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function abrirVentana(url) {
var altura=900;
var anchura=500;
 
// calculamos la posicion x e y para centrar la ventana
var y=parseInt((window.screen.height/2)-(altura/2));
var x=parseInt((window.screen.width/2)-(anchura/2));
window.open(url,target='blank','width='+anchura+',height='+altura+',top='+y+',left='+x+',toolbar=no,location=no,status=no,menubar=yes,scrollbars=yes,directories=no,resizable=no')
  // window.open(url, "nuevo", "directories=no, location=yes, menubar=yes, scrollbars=yes, statusbar=no, tittlebar=no, width=500, height=900");
}
 //pagina en movimiento
 
 
//pagina en movimiento
</script>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="forregistrar_files/formoid1/jquery.min.js"></script>     
	<script type="text/javascript" src="forregistrar_files/formoid1/formoid-solid-blue.js"></script>
	</head>
	<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 9200515;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<!-- End of LiveChat code -->
	
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>INVERSIONISTAS BOLSA DE VALORES</h1>
						<p>Aumente su &nbsp;&bull;&nbsp; Dinero&nbsp;&bull;&nbsp; Pregunte Como</p>
						<nav>
								<ul>
							
    <ul class="nav nav-list">
  <li class="ab"><a href="#" onclick="myFunction('Demo3')" ><i></i>Invierta</a></li>
  <li class="ab"><a href="#" onclick="myFunction('Demo1')" ><i></i>Cambio</a></li>
  <li class="ab"><a href="#" onclick="myFunction('Demo2')"> Login</a></li>
  <li class="ab"><a href="#" onClick="abrirVentana('forregistrar.html')"><i class="icon-fixed-width icon-cogs"></i> Registrar</a></li>
  <li class="ab"><a href="correo1.php"><i class="icon-fixed-width icon-cogs"></i>Email</a></li>
  <li class="ab"><a href="#" onclick="myFunction('Demo4')">Acerca</a></li>
  <li class="ab"><a href="pagfinanciera.php"><i class="icon-fixed-width icon-home"></i> Acciones</a></li>
 <li class="ab"><a href="videos.php"><i class="icon-fixed-width icon-home"></i> Videos</a></li>
  <li class="ab"><a href="videos.php"><i class="icon-fixed-width icon-home"></i> Trader Realizados</a></li>
  <li class="ab"><a href="videos.php"><i class="icon-fixed-width icon-home"></i> Siguenos Twitter </a></li>
</ul>			
			

		
								<li class="ab"><a href="#" class="fa fa-bar-chart" onclick="myFunction('Demo3')"><span class="label">Quienes Somos</span></a></li>
								<li class="ab"><a href="#" class="fa fa-usd"  onclick="myFunction('Demo1')" ><span class="label">LOGIN</span></a></li>
								
								<li class="ab"><a href="#" class="icon fa-user"  onclick="myFunction('Demo2')" ><span class="label">LOGIN</span></a></li>
								<li class="ab"><a href="#" class="fa fa-registered"  onClick="abrirVentana('forregistrar.html')"><span class="label">Registrese</span></a></li>
								<li class="ab"><a href="correo1.php" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
								<li class="ab"><a href="#" class="icon fa-cogs" onclick="myFunction('Demo4')"><span class="label">Acerca </span></a></li>
								<li class="ab"><a href="pagfinanciera.php" class="fa fa-question-circle" ><span class="label">Chat</span></a></li>
								<li class="ab"><a href="pagfinanciera.php" class="fa fa-camera-retro" ><span class="label">Videos</span></a></li>
								<li class="ab"><a href="pagfinanciera.php" class="fas fa-chart-line" ><span class="label">Trader</span></a></li>
								<li class="ab"><a href="pagfinanciera.php" class="fa-stack fa-lg" ><span class="label">Descargas</span></a></li>
							</ul>
						</nav>
						
						
		 <div id="Demo1" class="w3-container w3-hide">
 
 <iframe src= "https://finance.google.com/finance/converter?a=1&from=SVC&to=BRL&meta=ei%3DihvxWZiDJpDSeJeoq7AD" th="1090" height="200"  src="nyse.jpg"  name="formularios"> 
 <div>

 
<a><img src="nyse.jpg" alt="Insertar logotipo aquí" name="Insert_logo" width="1260" height="200" id="Insert_logo" style="background-color: #8090AB; display:block;" /></a> 
 </div>
 </iframe>

</div>


 <div id="Demo3" class="w3-container w3-hide">
 
 
 
 <iframe src= "https://www.investing.com/markets/" th="1090"  width="1260" height="550"  src="nyse.jpg"  name="formularios2"> 
 <div>

 
<a><img src="nyse.jpg" alt="Insertar logotipo aquí" name="Insert_logo" width="1260" height="200" id="Insert_logo" style="background-color: #8090AB; display:block;" /></a> 
 </div>
 </iframe>

</div>




<div id="Demo2" class="w3-container w3-hide">
  
  <form  action="comprueba_login.php" class=""  method="post">
  


   <div class="form-group">
	
    <label></label>
    
    <input class="sampletext"  type="text" name="login" placeholder="Cedula" color="blue" bgcolor ="blue" >
    <span class="icon fa-user"></span></div>
	<div class="element-password"> 
    <input class="sampletext" type="password" name="password"  placeholder="Password"><span class="icon fa-unlock"></span>
	
	</div>
	

<div ><input type="submit" value="Enviar" class="btn btn-default">
</div>

</form>
  
  
</div>

<div id ="Demo4" class="w3-container w3-hide">
   <div class="w3-white">
 <h3>CUENTA DE INVERSION</h3>
 <p id="texto">A través de nuestros diversos servicios, ud podrá invertir en la bolsa, operando en el mercado Estadunidence a través de una variedad de instrumentos financieros, que le permitirán alcanzar inversiones rentables, seguras, y operando en un mercado transparente y con gran liquidez.</p>
<p id="texto">Al abrir una Cuenta de Inversión, Ud. tendrá absoluto control sobre sus inversiones acorde a su perfil de inversor. Podrá decidir en qué mercados invertir, que instrumentos operar, y cuando comprar y/o vender. Será Ud. quien defina el nivel de riesgo a afrontar, y la estrategia de inversión y portafolio. Por supuesto, contará con toda la ayuda de nuestro equipo de asesores financieros, con quienes podrá resolver sus inquietudes y obtener una valiosa información del mercado
Somos una empresa que brinda asesoría para invertir en el mercado accionario mas grande del mundo en Estados Unidos invirtiendo en Acciones, Indices  y Opciones de Acciones Abre una cuenta con nosotros  desde 1000 dolares en adelante e ingresa al mundo de las inversiones de acciones registrate y pon tu dinero a trabajar</p>

</div>

</div>
<div id="Demo31" class="w3-container w3-hide">

<form  action="afinance.php" class=""  method="post">
  


   <div class="form-group">
	
    <label></label>
    
    <input class="sampletext"  type="text" name="nombr" placeholder="Digite el Symbolo a Consultar" color="blue" bgcolor ="blue" >
    <span class="icon fa-user"></span></div>
	
	

<div ><input type="submit" value="Enviar" class="btn btn-default">
</div>

</form>
  

</div>











		
	 <div >
	
<div id="webticker_flux" >
		<div id="webticker" class="newsticker"><div style="width: 100000px; margin-left: 0px; animation: marqueeAnimation-36096770 61.7609s linear 0s infinite running;" class="js-marquee-wrapper"><div class="js-marquee" style="margin-right: 50px; float: left;">
										<div asset_name="AUDCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">AUD/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.02145</span>
						</div>
										<div asset_name="AUDCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">AUD/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">0.745025</span>
						</div>
										<div asset_name="AUDJPY">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">AUD/JPY</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">83.435</span>
						</div>
										<div asset_name="AUDNZD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">AUD/NZD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.09037</span>
						</div>
										<div asset_name="AUDUSD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">AUD/USD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">0.74885</span>
						</div>
										<div asset_name="CADCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">CAD/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">0.7294</span>
						</div>
										<div asset_name="CADJPY">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">CAD/JPY</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">81.6875</span>
						</div>
										<div asset_name="CHFJPY">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">CHF/JPY</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">112.003</span>
						</div>
										<div asset_name="EURAUD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/AUD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.45498</span>
						</div>
										<div asset_name="EURCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.4861</span>
						</div>
										<div asset_name="EURCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.08397</span>
						</div>
										<div asset_name="EURDKK">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/DKK</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">7.43805</span>
						</div>
										<div asset_name="EURGBP">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/GBP</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">0.84105</span>
						</div>
										<div asset_name="EURHUF">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/HUF</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">312.927</span>
						</div>
										<div asset_name="EURILS">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/ILS</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">3.95630</span>
						</div>
										<div asset_name="EURJPY">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/JPY</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">121.397</span>
						</div>
										<div asset_name="EURNOK">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/NOK</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">9.35465</span>
						</div>
										<div asset_name="EURNZD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/NZD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.58645</span>
						</div>
										<div asset_name="EURPLN">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/PLN</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">4.22533</span>
						</div>
										<div asset_name="EURSEK">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/SEK</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">9.6497</span>
						</div>
										<div asset_name="EURUSD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/USD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.08952</span>
						</div>
										<div asset_name="GBPAUD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">GBP/AUD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.72987</span>
						</div>
										<div asset_name="GBPCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">GBP/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.76695</span>
						</div>
										<div asset_name="GBPCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">GBP/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.28885</span>
						</div>
										<div asset_name="GBPJPY">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">GBP/JPY</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">144.325</span>
						</div>
										<div asset_name="GBPNZD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">GBP/NZD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.88633</span>
						</div>
										<div asset_name="GBPUSD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">GBP/USD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.29537</span>
						</div>
										<div asset_name="NZDCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">NZD/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">0.936775</span>
						</div>
										<div asset_name="NZDCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">NZD/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">0.68325</span>
						</div>
										<div asset_name="NZDJPY">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">NZD/JPY</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">76.5225</span>
						</div>
										<div asset_name="NZDUSD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">NZD/USD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">0.68675</span>
						</div>
										<div asset_name="USDCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.36405</span>
						</div>
										<div asset_name="USDCHF">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/CHF</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">0.994925</span>
						</div>
										<div asset_name="USDDKK">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/DKK</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">6.8274</span>
						</div>
										<div asset_name="USDHKD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/HKD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">7.77815</span>
						</div>
										<div asset_name="USDILS">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/ILS</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">3.6181</span>
						</div>
										<div asset_name="USDJPY">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/JPY</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">111.423</span>
						</div>
										<div asset_name="USDMXN">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/MXN</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">18.829</span>
						</div>
										<div asset_name="USDNOK">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/NOK</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">8.58575</span>
						</div>
										<div asset_name="USDPLN">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/PLN</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">3.87823</span>
						</div>
										<div asset_name="USDRUB">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/RUB</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">56.938</span>
						</div>
										<div asset_name="USDSEK">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/SEK</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">8.8572</span>
						</div>
										<div asset_name="USDSGD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/SGD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.39705</span>
						</div>
										<div asset_name="USDHUF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/HUF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">287.207</span>
						</div>
										<div asset_name="USDZAR">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/ZAR</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">13.3642</span>
						</div>
										<div asset_name="EURMXN">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/MXN</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">20.5144</span>
						</div>
										<div asset_name="EURRUB">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/RUB</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">62.0933</span>
						</div>
				
		</div><div class="js-marquee" style="margin-right: 50px; float: left;">
										<div asset_name="AUDCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">AUD/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.02145</span>
						</div>
										<div asset_name="AUDCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">AUD/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">0.745025</span>
						</div>
										<div asset_name="AUDJPY">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">AUD/JPY</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">83.435</span>
						</div>
										<div asset_name="AUDNZD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">AUD/NZD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.09037</span>
						</div>
										<div asset_name="AUDUSD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">AUD/USD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">0.74885</span>
						</div>
										<div asset_name="CADCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">CAD/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">0.7294</span>
						</div>
										<div asset_name="CADJPY">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">CAD/JPY</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">81.6875</span>
						</div>
										<div asset_name="CHFJPY">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">CHF/JPY</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">112.003</span>
						</div>
										<div asset_name="EURAUD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/AUD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.45498</span>
						</div>
										<div asset_name="EURCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.4861</span>
						</div>
										<div asset_name="EURCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.08397</span>
						</div>
										<div asset_name="EURDKK">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/DKK</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">7.43805</span>
						</div>
										<div asset_name="EURGBP">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/GBP</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">0.84105</span>
						</div>
										<div asset_name="EURHUF">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/HUF</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">312.927</span>
						</div>
										<div asset_name="EURILS">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/ILS</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">3.95615</span>
						</div>
										<div asset_name="EURJPY">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/JPY</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">121.397</span>
						</div>
										<div asset_name="EURNOK">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/NOK</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">9.35465</span>
						</div>
										<div asset_name="EURNZD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/NZD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.58645</span>
						</div>
										<div asset_name="EURPLN">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/PLN</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">4.22533</span>
						</div>
										<div asset_name="EURSEK">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/SEK</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">9.6497</span>
						</div>
										<div asset_name="EURUSD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/USD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.08952</span>
						</div>
										<div asset_name="GBPAUD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">GBP/AUD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.72987</span>
						</div>
										<div asset_name="GBPCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">GBP/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.76695</span>
						</div>
										<div asset_name="GBPCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">GBP/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.28885</span>
						</div>
										<div asset_name="GBPJPY">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">GBP/JPY</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">144.325</span>
						</div>
										<div asset_name="GBPNZD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">GBP/NZD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.88633</span>
						</div>
										<div asset_name="GBPUSD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">GBP/USD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">1.29537</span>
						</div>
										<div asset_name="NZDCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">NZD/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">0.936775</span>
						</div>
										<div asset_name="NZDCHF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">NZD/CHF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">0.68325</span>
						</div>
										<div asset_name="NZDJPY">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">NZD/JPY</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">76.5225</span>
						</div>
										<div asset_name="NZDUSD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">NZD/USD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">0.68675</span>
						</div>
										<div asset_name="USDCAD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/CAD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.36405</span>
						</div>
										<div asset_name="USDCHF">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/CHF</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">0.994925</span>
						</div>
										<div asset_name="USDDKK">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/DKK</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">6.8274</span>
						</div>
										<div asset_name="USDHKD">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/HKD</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">7.77815</span>
						</div>
										<div asset_name="USDILS">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/ILS</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">3.6181</span>
						</div>
										<div asset_name="USDJPY">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/JPY</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">111.423</span>
						</div>
										<div asset_name="USDMXN">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/MXN</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">18.829</span>
						</div>
										<div asset_name="USDNOK">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/NOK</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">8.58575</span>
						</div>
										<div asset_name="USDPLN">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/PLN</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">3.87823</span>
						</div>
										<div asset_name="USDRUB">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/RUB</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">56.938</span>
						</div>
										<div asset_name="USDSEK">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/SEK</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">8.8572</span>
						</div>
										<div asset_name="USDSGD">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/SGD</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">1.39705</span>
						</div>
										<div asset_name="USDHUF">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">USD/HUF</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">287.207</span>
						</div>
										<div asset_name="USDZAR">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">USD/ZAR</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">13.3642</span>
						</div>
										<div asset_name="EURMXN">
							<span class="asset_status_up_down" style="color: rgb(0, 213, 50); font-size: 30px;"><i class="fa fa-caret-up"></i></span>
							<span class="asset_name">EUR/MXN</span>
							<span class="asset_value" style="color: rgb(0, 213, 50);">20.5144</span>
						</div>
										<div asset_name="EURRUB">
							<span class="asset_status_up_down" style="color: rgb(255, 45, 19); font-size: 30px;"><i class="fa fa-caret-down"></i></span>
							<span class="asset_name">EUR/RUB</span>
							<span class="asset_value" style="color: rgb(255, 45, 19);">62.0933</span>
						</div>
				
		</div></div></div>
</div></div>

 



</header>

</div>












				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; GOD IS GOOD: <a>NEXT GENERATION</a>.</span>
					</footer>

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
       
	</body>
</html>