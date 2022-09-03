<?php
$amount = 100;
$from_Currency = "INR";
$to_Currency = "BTC";

 $amount = urlencode($amount);
  $from_Currency = urlencode($from_Currency);
  $to_Currency = urlencode($to_Currency);

$get = file_get_contents("https://finance.google.com/finance/converter?a=$amount&from=$from_Currency&to=$to_Currency&meta=ei%3DZsa7WeGkE4_RuASY95SQAw");

  $get = explode("<span class=bld>",$get);


  $get = explode("</span>",$get[1]);  

  $converted_amount = preg_replace("/[^0-9\.]/", null, $get[0]);
  echo ceil($converted_amount);
  

?>


