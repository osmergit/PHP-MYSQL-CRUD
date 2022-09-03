<?PHP

// Declare the new variable as an array
$arrCSV = array();

// Open the CSV file
if (($handle = fopen("http://ichart.finance.yahoo.com/table.csv?s=AAPL&d=7&e=7&f=2012&g=d&a=8&b=7&c=1984&ignore=.csv", "r")) !==FALSE)
{

// Set the parent array key to 0
$key = 0;
// While there is data available loop through unlimited times (0) using separator (,)
while (($data = fgetcsv($handle, 0, ",")) !==FALSE) {

    // Count the total keys in each row
    $c = count($data);
    //print  $c . "<BR>"; // <------ 7 o numero de colunas

    //Populate the array
    If ($key != 0) {
        $arrCSV[$key-1][0] = strtotime($data[0]); //Time
        $arrCSV[$key-1][1] = $data[1];            //Open
        $arrCSV[$key-1][2] = $data[2];            //High
        $arrCSV[$key-1][3] = $data[3];            //Low
        $arrCSV[$key-1][4] = $data[6];            //Adj Close
        $arrCSV[$key-1][5] = $data[5];            //Volume
    }

    $key++;
} // end while

$keymax = $key;

// Close the CSV file
fclose($handle);
} // end if

print "?(/* AAPL historical OHLC data from the Google Finance API */<BR>";
echo json_encode($arrCSV,JSON_NUMERIC_CHECK);
print ");";

?>