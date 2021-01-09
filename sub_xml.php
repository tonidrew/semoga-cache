<?php
include('PENGATURAN/config.php');
$servername = ''.$ssl.'://'.$_SERVER['HTTP_HOST'];
$direktori = $_SERVER['DOCUMENT_ROOT'].'/sublist/';
$urlx = $_SERVER['REQUEST_URI'];
$urlx = preg_replace("/[^a-zA-Z0-9\s]+/", "", $urlx);
$xml = str_replace ('xml','.txt',$urlx);
$xml = ''.$direktori.''.$xml.'';
$interval = -1; //interval -5 jam ke belakang


$urls=@file($xml,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) or die('gagal baca list');


header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/xsl" href="/main-sitemap.xsl"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<!-- Generator by Map Generator  -->
';
echo "\n";
$priority = '0.1';
foreach ($urls as $link) {
include('PENGATURAN/config.php');
$post = $link;
$post = $linkfont($post);
$post =  ltrim(rtrim($post));
//$post = preg_replace("/^(\w+\s)/", "", $post);
$post = str_replace (' ','.',$post);
echo "\t<url>\n";
echo "\t\t<loc>".$ssl."://".$post.".".$domen."</loc>\n";
echo "\t\t<lastmod>".date("Y-m-d\TH:m:s+00:00", getTanggal($interval*$i))."</lastmod>\n";
echo "\t\t<changefreq>never</changefreq>\n";
echo "\t\t<priority>".$priority."</priority>\n";
echo "\t</url>\n";
}
echo '</urlset>';
function seo_friendly_url($string) {    
	$string = str_replace(array('ä', 'ö', 'ü', 'Ä', 'Ö', 'Ü', 'ß', 'œ'), array('ae', 'oe', 'ue', 'Ae', 'Oe', 'Ue', 'ss', 'oe'), $string);
	$string = str_replace(array('[\', \']'), '', $string);
    $string = preg_replace('/\[.*\]/U', '', $string);
    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
	$string = htmlentities($string, ENT_COMPAT, 'utf-8');
	$string = str_replace(array('&nbsp;','&reg;','&copy;','&euro;','&yen;','&pound;','&cent;','&amp;','&and;','&ang;','&asymp;','&cap;','&cong;','&cup;','&divide;','&empty;','&equiv;','&exist;','&fnof;','&forall;','&frasl;','&ge;','&gt;','&infin;','&int;','&isin;','&lang;','&lceil;','&le;','&lfloor;','&lowast;','&lt;','&minus;','&nabla;','&ne;','&ni;','&notin;','&nsub;','&oplus;','&or;','&otimes;','&part;','&permil;','&perp;','&piv;','&plusmn;','&prod;','&prop;','&quot;','&radic;','&rang;','&rceil;','&rfloor;','&sdot;','&sim;','&sub;','&sube;','&sum;','&sup;','&supe;','&there4;','&thetasym;','&times;','&upsih;'), ' ', $string);
    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\1', $string );
    $string = str_replace(array('\''), '', $string);	
	$string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
    return strtolower(trim($string, ''.$linkstyle.''));	
}

function getTanggal($interval) {

$h = rand(0,23);

$m = rand(10,59); 

$s = rand(10,59); 

	
	$tanggal = date("d"); $bulan = date("m"); $tahun = date("Y");
	return mktime($interval,0,$s,$bulan,$tanggal,$tahun);
}

?>
