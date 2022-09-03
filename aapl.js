
$(document).ready( function(){
$('#cinco').load('aapl.php');
refresh();
});
 
function refresh()
{
	setTimeout( function() {
	   $('#cinco').fadeOut('slow').load('aapl.php').fadeIn('slow');
	  refresh();
	}, 2000);
}