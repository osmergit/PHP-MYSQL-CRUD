 <?php
 
 $password = htmlentities(addslashes($_POST["password"]));
 $login = htmlentities(addslashes($_POST["login"]));
 function convertCurrency($amount, $from, $to) {
     $url = 'http://finance.google.com/finance/converter?a=' . $amount . '&from=' . $from . '&to=' . $to;
     $data = file_get_contents($url);
         preg_match_all("/<span class=bld>(.*)<\/span>/", $data, $converted);
         $final = preg_replace("/[^0-9.]/", "", $converted[1][0]);
        return round($final, 3);
   }

  // echo convertCurrency(1, 'EUR', 'USD'); 
   echo convertCurrency(1, $password, $login); 
   ?>