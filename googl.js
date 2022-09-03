$(document).ready( function(){
$('#for').load('googl.php');
refresh();
});
 
function refresh()
{
	setTimeout( function() {
	   $('#for').fadeOut('slow').load('googl.php').fadeIn('slow');
	  refresh();
	}, 2000);
}