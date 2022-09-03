
$(document).ready( function(){
$('#auto1').load('load.php');
refresh();
});
 
function refresh()
{
	setTimeout( function() {
	  $('#auto1').fadeOut('slow').load('load.php').fadeIn('slow');
	  refresh();
	}, 3000);
}