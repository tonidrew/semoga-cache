<?php
include('PENGATURAN/config.php');
$servername = ''.$ssl.'://'.$_SERVER['HTTP_HOST'];

$direktori = $niche;
function getTanggal($interval) {

$h = rand(0,23);

$m = rand(10,59); 

$s = rand(10,59); 

	
	$tanggal = date("d"); $bulan = date("m"); $tahun = date("Y");
	return mktime($interval,0,$s,$bulan,$tanggal,$tahun);
}

$handle = opendir($direktori);

while (false !== ($entry = readdir($handle))) {
	if ($entry != "." && $entry != "..") {		
		$data .= $entry."\n";		
		
	}	
}
closedir($handle);

$data = trim($data);
if ($data != "") {	
$data = explode ("\n", $data);

sort($data, SORT_NATURAL | SORT_FLAG_CASE);
//echo $data[0];
}


header('Content-Type: text/xml');

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
   echo "
<?xml-stylesheet type=\"text/xsl\" href=\"/main-sitemap.xsl\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"><!-- Generator by AGCMASTERCLASS.COM  -->\n";
   
   foreach ($data as $judul) {
   echo "<sitemap>\n";
      echo "<loc>".$servername."/".str_replace(".txt", "", $judul)."-map.xml</loc>\n";  
      echo "\t\t<lastmod>".date("Y-m-d\TH:m:s+00:00", getTanggal($interval*$i))."</lastmod>\n";
   
   echo "</sitemap>\n";
   }
   echo "</sitemapindex>";


?>

