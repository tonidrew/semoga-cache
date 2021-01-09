<?php
header("HTTP/1.1 403 Forbidden");
$judul = $_GET['file'];
$subId = $_GET['subId'];

$cc = trim($_SERVER["HTTP_CF_IPCOUNTRY"]);
if ($cc == "AD"|| $cc == "AE"|| $cc == "AG"|| $cc == "AM"|| $cc == "AR"|| $cc == "AS"|| $cc == "AT"|| $cc == "AU"|| $cc == "AW"|| $cc == "AZ"|| $cc == "BE"|| $cc == "BH"|| $cc == "BM"|| $cc == "BN"|| $cc == "BO"|| $cc == "BS"|| $cc == "BY"|| $cc == "BZ"|| $cc == "CA"|| $cc == "CH"|| $cc == "CK"|| $cc == "CL"|| $cc == "CO"|| $cc == "CR"|| $cc == "CW"|| $cc == "CY"|| $cc == "CZ"|| $cc == "DE"|| $cc == "DK"|| $cc == "DM"|| $cc == "EC"|| $cc == "EE"|| $cc == "ES"|| $cc == "FI"|| $cc == "FJ"|| $cc == "FR"|| $cc == "GD"|| $cc == "GR"|| $cc == "GU"|| $cc == "HR"|| $cc == "HT"|| $cc == "HU"|| $cc == "HY"|| $cc == "IE"|| $cc == "IS"|| $cc == "IT"|| $cc == "JO"|| $cc == "JP"|| $cc == "KH"|| $cc == "KN"|| $cc == "KW"|| $cc == "KY"|| $cc == "LA"|| $cc == "LB"|| $cc == "LC"|| $cc == "LT"|| $cc == "LU"|| $cc == "LV"|| $cc == "MD"|| $cc == "ME"|| $cc == "MM"|| $cc == "MN"|| $cc == "MO"|| $cc == "MV"|| $cc == "NI"|| $cc == "NL"|| $cc == "NO"|| $cc == "NP"|| $cc == "NZ"|| $cc == "OM"|| $cc == "PA"|| $cc == "PG"|| $cc == "PL"|| $cc == "PR"|| $cc == "PS"|| $cc == "PT"|| $cc == "PY"|| $cc == "QA"|| $cc == "SA"|| $cc == "SE"|| $cc == "SG"|| $cc == "SI"|| $cc == "SK"|| $cc == "TC"|| $cc == "TT"|| $cc == "UK"|| $cc == "US"|| $cc == "UY"|| $cc == "UZ"|| $cc == "VC"|| $cc == "VG"|| $cc == "VI"|| $cc == "WS"|| $cc == "YE"|| $cc == "ZA") 
{
$offer = 'https://look.tracln.com/offer?prod=2&ref=5251514&s='.$judul.'&sub_id='.$subId.'';
}
else
{
$offer = 'https://look.tracln.com/offer?prod=2&ref=5251514&s='.$judul.'&sub_id='.$subId.'';
}
header("location: $offer");
?>