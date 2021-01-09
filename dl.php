<?php
header("HTTP/1.1 403 Forbidden");
$judul = $_GET['file'];
$subId = $_GET['subId'];
$cc = trim($_SERVER["HTTP_CF_IPCOUNTRY"]);
if ($cc == "CH"||$cc == "BE"||$cc == "DK"||$cc == "NO"||$cc == "FR"||$cc == "IT"||$cc == "ES") 
{
$offer = 'https://see.kmisln.com/offer?prod=2&ref=5271630&q='.$judul.'&sub_id='.$subId.'';
}
else
{
$offer = 'https://see.kmisln.com/offer?prod=2&ref=5271630&q='.$judul.'&sub_id='.$subId.'';
}
header("location: $offer");
?>