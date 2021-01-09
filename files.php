<?php
$url = $_SERVER['REQUEST_URI'];
$domen 			= $_SERVER['HTTP_HOST'];
$judul = preg_replace("/[^a-zA-Z0-9\s]+/", "", $url);

function trends() {
	if (file_exists('KEY/pop.txt')) {
		$myfile = fopen("KEY/pop.txt", "r") or die("Unable to open file!");
		while( $i < 1000) {
			$seek = rand(0, filesize("KEY/pop.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$firstword = strtok($kiwot, " ");
				include('PENGATURAN/config.php');
				$url = $linkfont($kiwot);
				$url =  ltrim(rtrim($url));
				//$url = preg_replace("/^(\w+\s)/", "", $url);
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				//$judul = preg_replace("/^(\w+\s)/", "", $judul);
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
function poplist() {
	if (file_exists('KEY/pop.txt')) {
		$myfile = fopen("KEY/pop.txt", "r") or die("Unable to open file!");
		while( $i < 500) {
			$seek = rand(0, filesize("KEY/pop.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$firstword = strtok($kiwot, " ");
				include('PENGATURAN/config.php');
				$url = $linkfont($kiwot);
				$url =  ltrim(rtrim($url));
				//$url = preg_replace("/^(\w+\s)/", "", $url);
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				//$judul = preg_replace("/^(\w+\s)/", "", $judul);
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="http://'.$domen.'/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}

function cano($s){
$s = strtolower($s);
$output = str_replace(array('&',',','.','\'','!','@',':','-',')','(','{','}','+','’','*','_','^','[',']','/','|',' ','#','?','>','"',';','<','--'), " ", $s);
$output =  ltrim(rtrim($output));
$s = preg_replace("/[[:blank:]]+/","-",$output);
return $s;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $judul;?> Wiring Diagram Database
 <?php echo strtoupper($domen);?></title>
<meta name="description" content="<?php echo $judul;?> Wiring Diagram Database <?php echo strtoupper($domen);?>">
<meta name="author" content="<?php echo strtoupper($domen);?>">
<link rel="canonical" href="http://<?php echo $domen;?><?php echo $url;?>" />

    <!-- Bootstrap Core CSS -->   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/home3.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.0/masonry.pkgd.min.js"></script>
<?php
    $file_name = 'head.txt';
    $script_head = file_get_contents( $file_name );
    echo $script_head;
    ?>	

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" style="background-color:rgb(56,111,177)" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="/" style="color:#eee">Wiring Diagram Database</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://<?php echo $domen;?>/feed" style="color:#eee">RSS</a>
                    </li>
                    <li>
                        <a href="http://<?php echo $domen;?>/sitemap.xml" style="color:#eee">SITEMAP</a>
                    </li>
					 <li>
                        <a href="http://<?php echo $domen;?>/index.xml" style="color:#eee">Index</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Header -->
    <br>
    <section class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">                        
		<?php
$today = date("D, j M Y H:m:s")." +0000";
include('PENGATURAN/config.php');
$servername = ''.$ssl.'://'.$_SERVER['HTTP_HOST'];
$direktori = $_SERVER['DOCUMENT_ROOT'].'/'.$niche.'/';



$xml = explode('/', $url);

$xml = str_replace('diagramlist', '.txt', $xml[1]);


$interval = -1; //interval -5 jam ke belakang


$urls=@file($direktori.$xml,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) or die('gagal baca list');

$priority = '0.5';
foreach ($urls as $link) {
$letterb		= chr(rand(65,90));
$letters		= chr(rand(97,122));
$unikran		= rand(10000,99999);
$code		= ''.$letterb.''.$letters.''.$unikran.'_2019';
include('PENGATURAN/config.php');
echo "<li class=\"list-group-item\"><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"style=\" color:red\"></i> <a href=\"".$servername."/diagram/".seo_friendly_url($link)."\">".ucwords($link)." (Diagram Files) Free Downloads</a></li>";
}

		
		
		
		
		
function seo_friendly_url($string) {    
include('PENGATURAN/config.php');
//$number_of_characters = 170;
//$string = substr($string, 0, strrpos(substr($string, 0, $number_of_characters), " "));
$string = $linkfont($string);  
return 	str_replace (' ',''.$linkstyle.'',$string);
}

function getTanggal($interval) {

$h = rand(0,23);

$m = rand(10,59); 

$s = rand(10,59); 

	
	$tanggal = date("d"); $bulan = date("m"); $tahun = date("Y");
	return mktime($interval,0,$s,$bulan,$tanggal,$tahun);
}

?>

</div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs">
                    
        <div class="list-group">

            <h3 class="list-group-item list-group-item-info">Diagram List</h3>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/10diagramlist">10 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/11diagramlist">11 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/12diagramlist">12 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/13diagramlist">13 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/14diagramlist">14 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/15diagramlist">15 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/16diagramlist">16 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/17diagramlist">17 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/18diagramlist">18 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/19diagramlist">19 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/1diagramlist">1 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/20diagramlist">20 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/21diagramlist">21 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/22diagramlist">22 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/23diagramlist">23 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/24diagramlist">24 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/25diagramlist">25 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/26diagramlist">26 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/27diagramlist">27 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/28diagramlist">28 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/29diagramlist">29 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/2diagramlist">2 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/30diagramlist">30 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/3diagramlist">3 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/4diagramlist">4 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/5diagramlist">5 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/6diagramlist">6 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/7diagramlist">7 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/8diagramlist">8 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/9diagramlist">9 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/31diagramlist">Wire Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/32diagramlist">Switch Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/33diagramlist">Radio Wiring diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/34diagramlist">Light Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/35diagramlist">Wire Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/36diagramlist">Switch Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/37diagramlist">Radio Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/38diagramlist">Light Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/39diagramlist">Wiring Harness Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/40diagramlist">Trailer Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/41diagramlist">Wiring Harness List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/42diagramlist">Trailer Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/43diagramlist">Plug Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/44diagramlist">Stereo Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/45diagramlist">Ignition Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/46diagramlist">Motor Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/47diagramlist">Relay Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/48diagramlist">Amp Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/49diagramlist">Starter Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/50diagramlist">Fan Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/51diagramlist">Thermostat Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/52diagramlist">Thermostat Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/53diagramlist">Light Switch Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/54diagramlist">Ac Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/55diagramlist">Electrical Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/56diagramlist">Speaker Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/57diagramlist">Alternator Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/58diagramlist">Sensor Circuit List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/59diagramlist">Sensor Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:red"></i> <a href="http://<?php echo $domen;?>/60diagramlist">Subaru Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/61diagramlist">Wire Harness List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/62diagramlist">Sub Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/63diagramlist">Line Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/64diagramlist">Addacircuit List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/65diagramlist">Electrics List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/66diagramlist">Jack Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/67diagramlist">Fuse Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/68diagramlist">Ohm Sub Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/69diagramlist">Ohm Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/70diagramlist">Ic Circuits List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/71diagramlist">Fm Amplifier List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/72diagramlist">Ac Fan Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/73diagramlist">Block Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/74diagramlist">Block Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/75diagramlist">House Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/76diagramlist">Outlet Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/77diagramlist">Plug Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/78diagramlist">Vac Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/79diagramlist">Volt Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/80diagramlist">Wiring Basics List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/81diagramlist">Wiring Block List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/82diagramlist">Atv Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/83diagramlist">Ac Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/84diagramlist">Plug Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/85diagramlist">Fuel Filter List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/86diagramlist">Wire Colors List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/87diagramlist">120 Volt Circuit List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/88diagramlist">120 Volt Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/89diagramlist">120v Ac Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/90diagramlist">120v Led Circuit List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/91diagramlist">123d Circuits List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/92diagramlist">Cool Box Fuse List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/93diagramlist">Fuse Box Boat List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/94diagramlist">Fuse Box List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/95diagramlist">Chevy Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/96diagramlist">Ford Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/97diagramlist">Jeep Cj3b List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/98diagramlist">Ford Hot Rod List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/99diagramlist">Gmc Cab Over List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/100diagramlist">Dodge Wiring List</a></li>


<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/110diagramlist">10 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/111diagramlist">11 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/112diagramlist">12 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/113diagramlist">13 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/114diagramlist">14 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/115diagramlist">15 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/116diagramlist">16 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/117diagramlist">17 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/118diagramlist">18 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/119diagramlist">19 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/11diagramlist">1 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/120diagramlist">20 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/121diagramlist">21 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/122diagramlist">22 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/123diagramlist">23 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/124diagramlist">24 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/125diagramlist">25 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/126diagramlist">26 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/127diagramlist">27 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/128diagramlist">28 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/129diagramlist">29 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/12diagramlist">2 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/130diagramlist">30 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/13diagramlist">3 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/14diagramlist">4 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/15diagramlist">5 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/16diagramlist">6 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/17diagramlist">7 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/18diagramlist">8 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/19diagramlist">9 Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/131diagramlist">Wire Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/132diagramlist">Switch Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/133diagramlist">Radio Wiring diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/134diagramlist">Light Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/135diagramlist">Wire Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/136diagramlist">Switch Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/137diagramlist">Radio Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/138diagramlist">Light Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/139diagramlist">Wiring Harness Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/140diagramlist">Trailer Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/141diagramlist">Wiring Harness List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/142diagramlist">Trailer Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/143diagramlist">Plug Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/144diagramlist">Stereo Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/145diagramlist">Ignition Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/146diagramlist">Motor Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/147diagramlist">Relay Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/148diagramlist">Amp Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/149diagramlist">Starter Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/150diagramlist">Fan Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/151diagramlist">Thermostat Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/152diagramlist">Thermostat Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/153diagramlist">Light Switch Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/154diagramlist">Ac Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/155diagramlist">Electrical Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/156diagramlist">Speaker Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/157diagramlist">Alternator Wiring Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/158diagramlist">Sensor Circuit List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/159diagramlist">Sensor Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:purple"></i> <a href="http://<?php echo $domen;?>/160diagramlist">Subaru Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/161diagramlist">Wire Harness List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/162diagramlist">Sub Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/163diagramlist">Line Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/164diagramlist">Addacircuit List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/165diagramlist">Electrics List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/166diagramlist">Jack Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/167diagramlist">Fuse Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/168diagramlist">Ohm Sub Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/169diagramlist">Ohm Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/170diagramlist">Ic Circuits List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/171diagramlist">Fm Amplifier List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/172diagramlist">Ac Fan Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/173diagramlist">Block Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/174diagramlist">Block Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/175diagramlist">House Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/176diagramlist">Outlet Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/177diagramlist">Plug Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/178diagramlist">Vac Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/179diagramlist">Volt Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/180diagramlist">Wiring Basics List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/181diagramlist">Wiring Block List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/182diagramlist">Atv Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/183diagramlist">Ac Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/184diagramlist">Plug Diagram List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/185diagramlist">Fuel Filter List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/186diagramlist">Wire Colors List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/187diagramlist">120 Volt Circuit List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/188diagramlist">120 Volt Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/189diagramlist">120v Ac Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/190diagramlist">120v Led Circuit List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/191diagramlist">123d Circuits List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/192diagramlist">Cool Box Fuse List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/193diagramlist">Fuse Box Boat List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/194diagramlist">Fuse Box List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/195diagramlist">Chevy Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/196diagramlist">Ford Wiring List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/197diagramlist">Jeep Cj3b List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/198diagramlist">Ford Hot Rod List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/199diagramlist">Gmc Cab Over List</a></li>
<li class="list-group-item "><i class="fa fa-file" aria-hidden="true"style=" color:blue"></i> <a href="http://<?php echo $domen;?>/200diagramlist">Dodge Wiring List</a></li>
        <div>
            <ul class="list-group">
            </ul>
        </div>

                </div>
            </div>

        </div>
        <!-- /.container -->

    </section>
    <!-- /.content-section-a -->
        <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <p class="copyright text-muted small">
                     Read Free Books & Download eBooks matches keywords, searched from 3rd-party sites, to affiliate-networks offering unlimited access to licensed entertainment content. 
                     <br>Read Free Books & Download eBooks allows visitors, otherwise looking for free-content to enjoy more for less.<br>
<a itemprop"URL" href="http://<?php echo $domen;?>/100rss">100</a> <a itemprop"URL" href="http://<?php echo $domen;?>/101rss">101</a> <a itemprop"URL" href="http://<?php echo $domen;?>/102rss">102</a> <a itemprop"URL" href="http://<?php echo $domen;?>/103rss">103</a> <a itemprop"URL" href="http://<?php echo $domen;?>/104rss">104</a> <a itemprop"URL" href="http://<?php echo $domen;?>/105rss">105</a> <a itemprop"URL" href="http://<?php echo $domen;?>/106rss">106</a> <a itemprop"URL" href="http://<?php echo $domen;?>/107rss">107</a> <a itemprop"URL" href="http://<?php echo $domen;?>/108rss">108</a> <a itemprop"URL" href="http://<?php echo $domen;?>/109rss">109</a> <a itemprop"URL" href="http://<?php echo $domen;?>/10rss">10</a> <a itemprop"URL" href="http://<?php echo $domen;?>/110rss">110</a> <a itemprop"URL" href="http://<?php echo $domen;?>/111rss">111</a> <a itemprop"URL" href="http://<?php echo $domen;?>/112rss">112</a> <a itemprop"URL" href="http://<?php echo $domen;?>/113rss">113</a> <a itemprop"URL" href="http://<?php echo $domen;?>/114rss">114</a> <a itemprop"URL" href="http://<?php echo $domen;?>/115rss">115</a> <a itemprop"URL" href="http://<?php echo $domen;?>/116rss">116</a> <a itemprop"URL" href="http://<?php echo $domen;?>/117rss">117</a> <a itemprop"URL" href="http://<?php echo $domen;?>/118rss">118</a> <a itemprop"URL" href="http://<?php echo $domen;?>/119rss">119</a> <a itemprop"URL" href="http://<?php echo $domen;?>/11rss">11</a> <a itemprop"URL" href="http://<?php echo $domen;?>/120rss">120</a> <a itemprop"URL" href="http://<?php echo $domen;?>/121rss">121</a> <a itemprop"URL" href="http://<?php echo $domen;?>/122rss">122</a> <a itemprop"URL" href="http://<?php echo $domen;?>/123rss">123</a> <a itemprop"URL" href="http://<?php echo $domen;?>/124rss">124</a> <a itemprop"URL" href="http://<?php echo $domen;?>/125rss">125</a> <a itemprop"URL" href="http://<?php echo $domen;?>/126rss">126</a> <a itemprop"URL" href="http://<?php echo $domen;?>/127rss">127</a> <a itemprop"URL" href="http://<?php echo $domen;?>/128rss">128</a> <a itemprop"URL" href="http://<?php echo $domen;?>/129rss">129</a> <a itemprop"URL" href="http://<?php echo $domen;?>/12rss">12</a> <a itemprop"URL" href="http://<?php echo $domen;?>/130rss">130</a> <a itemprop"URL" href="http://<?php echo $domen;?>/131rss">131</a> <a itemprop"URL" href="http://<?php echo $domen;?>/132rss">132</a> <a itemprop"URL" href="http://<?php echo $domen;?>/133rss">133</a> <a itemprop"URL" href="http://<?php echo $domen;?>/134rss">134</a> <a itemprop"URL" href="http://<?php echo $domen;?>/135rss">135</a> <a itemprop"URL" href="http://<?php echo $domen;?>/136rss">136</a> <a itemprop"URL" href="http://<?php echo $domen;?>/137rss">137</a> <a itemprop"URL" href="http://<?php echo $domen;?>/138rss">138</a> <a itemprop"URL" href="http://<?php echo $domen;?>/139rss">139</a> <a itemprop"URL" href="http://<?php echo $domen;?>/13rss">13</a> <a itemprop"URL" href="http://<?php echo $domen;?>/140rss">140</a> <a itemprop"URL" href="http://<?php echo $domen;?>/141rss">141</a> <a itemprop"URL" href="http://<?php echo $domen;?>/142rss">142</a> <a itemprop"URL" href="http://<?php echo $domen;?>/143rss">143</a> <a itemprop"URL" href="http://<?php echo $domen;?>/144rss">144</a> <a itemprop"URL" href="http://<?php echo $domen;?>/145rss">145</a> <a itemprop"URL" href="http://<?php echo $domen;?>/146rss">146</a> <a itemprop"URL" href="http://<?php echo $domen;?>/147rss">147</a> <a itemprop"URL" href="http://<?php echo $domen;?>/148rss">148</a> <a itemprop"URL" href="http://<?php echo $domen;?>/149rss">149</a> <a itemprop"URL" href="http://<?php echo $domen;?>/14rss">14</a> <a itemprop"URL" href="http://<?php echo $domen;?>/150rss">150</a> <a itemprop"URL" href="http://<?php echo $domen;?>/151rss">151</a> <a itemprop"URL" href="http://<?php echo $domen;?>/152rss">152</a> <a itemprop"URL" href="http://<?php echo $domen;?>/153rss">153</a> <a itemprop"URL" href="http://<?php echo $domen;?>/154rss">154</a> <a itemprop"URL" href="http://<?php echo $domen;?>/155rss">155</a> <a itemprop"URL" href="http://<?php echo $domen;?>/156rss">156</a> <a itemprop"URL" href="http://<?php echo $domen;?>/157rss">157</a> <a itemprop"URL" href="http://<?php echo $domen;?>/158rss">158</a> <a itemprop"URL" href="http://<?php echo $domen;?>/159rss">159</a> <a itemprop"URL" href="http://<?php echo $domen;?>/15rss">15</a> <a itemprop"URL" href="http://<?php echo $domen;?>/160rss">160</a> <a itemprop"URL" href="http://<?php echo $domen;?>/161rss">161</a> <a itemprop"URL" href="http://<?php echo $domen;?>/162rss">162</a> <a itemprop"URL" href="http://<?php echo $domen;?>/163rss">163</a> <a itemprop"URL" href="http://<?php echo $domen;?>/164rss">164</a> <a itemprop"URL" href="http://<?php echo $domen;?>/165rss">165</a> <a itemprop"URL" href="http://<?php echo $domen;?>/166rss">166</a> <a itemprop"URL" href="http://<?php echo $domen;?>/167rss">167</a> <a itemprop"URL" href="http://<?php echo $domen;?>/168rss">168</a> <a itemprop"URL" href="http://<?php echo $domen;?>/169rss">169</a> <a itemprop"URL" href="http://<?php echo $domen;?>/16rss">16</a> <a itemprop"URL" href="http://<?php echo $domen;?>/170rss">170</a> <a itemprop"URL" href="http://<?php echo $domen;?>/171rss">171</a> <a itemprop"URL" href="http://<?php echo $domen;?>/172rss">172</a> <a itemprop"URL" href="http://<?php echo $domen;?>/173rss">173</a> <a itemprop"URL" href="http://<?php echo $domen;?>/174rss">174</a> <a itemprop"URL" href="http://<?php echo $domen;?>/175rss">175</a> <a itemprop"URL" href="http://<?php echo $domen;?>/176rss">176</a> <a itemprop"URL" href="http://<?php echo $domen;?>/177rss">177</a> <a itemprop"URL" href="http://<?php echo $domen;?>/178rss">178</a> <a itemprop"URL" href="http://<?php echo $domen;?>/179rss">179</a> <a itemprop"URL" href="http://<?php echo $domen;?>/17rss">17</a> <a itemprop"URL" href="http://<?php echo $domen;?>/180rss">180</a> <a itemprop"URL" href="http://<?php echo $domen;?>/181rss">181</a> <a itemprop"URL" href="http://<?php echo $domen;?>/182rss">182</a> <a itemprop"URL" href="http://<?php echo $domen;?>/183rss">183</a> <a itemprop"URL" href="http://<?php echo $domen;?>/184rss">184</a> <a itemprop"URL" href="http://<?php echo $domen;?>/185rss">185</a> <a itemprop"URL" href="http://<?php echo $domen;?>/186rss">186</a> <a itemprop"URL" href="http://<?php echo $domen;?>/187rss">187</a> <a itemprop"URL" href="http://<?php echo $domen;?>/188rss">188</a> <a itemprop"URL" href="http://<?php echo $domen;?>/189rss">189</a> <a itemprop"URL" href="http://<?php echo $domen;?>/18rss">18</a> <a itemprop"URL" href="http://<?php echo $domen;?>/190rss">190</a> <a itemprop"URL" href="http://<?php echo $domen;?>/191rss">191</a> <a itemprop"URL" href="http://<?php echo $domen;?>/192rss">192</a> <a itemprop"URL" href="http://<?php echo $domen;?>/193rss">193</a> <a itemprop"URL" href="http://<?php echo $domen;?>/194rss">194</a> <a itemprop"URL" href="http://<?php echo $domen;?>/195rss">195</a> <a itemprop"URL" href="http://<?php echo $domen;?>/196rss">196</a> <a itemprop"URL" href="http://<?php echo $domen;?>/197rss">197</a> <a itemprop"URL" href="http://<?php echo $domen;?>/198rss">198</a> <a itemprop"URL" href="http://<?php echo $domen;?>/199rss">199</a> <a itemprop"URL" href="http://<?php echo $domen;?>/19rss">19</a> <a itemprop"URL" href="http://<?php echo $domen;?>/1rss">1</a> <a itemprop"URL" href="http://<?php echo $domen;?>/200rss">200</a> <a itemprop"URL" href="http://<?php echo $domen;?>/20rss">20</a> <a itemprop"URL" href="http://<?php echo $domen;?>/21rss">21</a> <a itemprop"URL" href="http://<?php echo $domen;?>/22rss">22</a> <a itemprop"URL" href="http://<?php echo $domen;?>/23rss">23</a> <a itemprop"URL" href="http://<?php echo $domen;?>/24rss">24</a> <a itemprop"URL" href="http://<?php echo $domen;?>/25rss">25</a> <a itemprop"URL" href="http://<?php echo $domen;?>/26rss">26</a> <a itemprop"URL" href="http://<?php echo $domen;?>/27rss">27</a> <a itemprop"URL" href="http://<?php echo $domen;?>/28rss">28</a> <a itemprop"URL" href="http://<?php echo $domen;?>/29rss">29</a> <a itemprop"URL" href="http://<?php echo $domen;?>/2rss">2</a> <a itemprop"URL" href="http://<?php echo $domen;?>/30rss">30</a> <a itemprop"URL" href="http://<?php echo $domen;?>/31rss">31</a> <a itemprop"URL" href="http://<?php echo $domen;?>/32rss">32</a> <a itemprop"URL" href="http://<?php echo $domen;?>/33rss">33</a> <a itemprop"URL" href="http://<?php echo $domen;?>/34rss">34</a> <a itemprop"URL" href="http://<?php echo $domen;?>/35rss">35</a> <a itemprop"URL" href="http://<?php echo $domen;?>/36rss">36</a> <a itemprop"URL" href="http://<?php echo $domen;?>/37rss">37</a> <a itemprop"URL" href="http://<?php echo $domen;?>/38rss">38</a> <a itemprop"URL" href="http://<?php echo $domen;?>/39rss">39</a> <a itemprop"URL" href="http://<?php echo $domen;?>/3rss">3</a> <a itemprop"URL" href="http://<?php echo $domen;?>/40rss">40</a> <a itemprop"URL" href="http://<?php echo $domen;?>/41rss">41</a> <a itemprop"URL" href="http://<?php echo $domen;?>/42rss">42</a> <a itemprop"URL" href="http://<?php echo $domen;?>/43rss">43</a> <a itemprop"URL" href="http://<?php echo $domen;?>/44rss">44</a> <a itemprop"URL" href="http://<?php echo $domen;?>/45rss">45</a> <a itemprop"URL" href="http://<?php echo $domen;?>/46rss">46</a> <a itemprop"URL" href="http://<?php echo $domen;?>/47rss">47</a> <a itemprop"URL" href="http://<?php echo $domen;?>/48rss">48</a> <a itemprop"URL" href="http://<?php echo $domen;?>/49rss">49</a> <a itemprop"URL" href="http://<?php echo $domen;?>/4rss">4</a> <a itemprop"URL" href="http://<?php echo $domen;?>/50rss">50</a> <a itemprop"URL" href="http://<?php echo $domen;?>/51rss">51</a> <a itemprop"URL" href="http://<?php echo $domen;?>/52rss">52</a> <a itemprop"URL" href="http://<?php echo $domen;?>/53rss">53</a> <a itemprop"URL" href="http://<?php echo $domen;?>/54rss">54</a> <a itemprop"URL" href="http://<?php echo $domen;?>/55rss">55</a> <a itemprop"URL" href="http://<?php echo $domen;?>/56rss">56</a> <a itemprop"URL" href="http://<?php echo $domen;?>/57rss">57</a> <a itemprop"URL" href="http://<?php echo $domen;?>/58rss">58</a> <a itemprop"URL" href="http://<?php echo $domen;?>/59rss">59</a> <a itemprop"URL" href="http://<?php echo $domen;?>/5rss">5</a> <a itemprop"URL" href="http://<?php echo $domen;?>/60rss">60</a> <a itemprop"URL" href="http://<?php echo $domen;?>/61rss">61</a> <a itemprop"URL" href="http://<?php echo $domen;?>/62rss">62</a> <a itemprop"URL" href="http://<?php echo $domen;?>/63rss">63</a> <a itemprop"URL" href="http://<?php echo $domen;?>/64rss">64</a> <a itemprop"URL" href="http://<?php echo $domen;?>/65rss">65</a> <a itemprop"URL" href="http://<?php echo $domen;?>/66rss">66</a> <a itemprop"URL" href="http://<?php echo $domen;?>/67rss">67</a> <a itemprop"URL" href="http://<?php echo $domen;?>/68rss">68</a> <a itemprop"URL" href="http://<?php echo $domen;?>/69rss">69</a> <a itemprop"URL" href="http://<?php echo $domen;?>/6rss">6</a> <a itemprop"URL" href="http://<?php echo $domen;?>/70rss">70</a> <a itemprop"URL" href="http://<?php echo $domen;?>/71rss">71</a> <a itemprop"URL" href="http://<?php echo $domen;?>/72rss">72</a> <a itemprop"URL" href="http://<?php echo $domen;?>/73rss">73</a> <a itemprop"URL" href="http://<?php echo $domen;?>/74rss">74</a> <a itemprop"URL" href="http://<?php echo $domen;?>/75rss">75</a> <a itemprop"URL" href="http://<?php echo $domen;?>/76rss">76</a> <a itemprop"URL" href="http://<?php echo $domen;?>/77rss">77</a> <a itemprop"URL" href="http://<?php echo $domen;?>/78rss">78</a> <a itemprop"URL" href="http://<?php echo $domen;?>/79rss">79</a> <a itemprop"URL" href="http://<?php echo $domen;?>/7rss">7</a> <a itemprop"URL" href="http://<?php echo $domen;?>/80rss">80</a> <a itemprop"URL" href="http://<?php echo $domen;?>/81rss">81</a> <a itemprop"URL" href="http://<?php echo $domen;?>/82rss">82</a> <a itemprop"URL" href="http://<?php echo $domen;?>/83rss">83</a> <a itemprop"URL" href="http://<?php echo $domen;?>/84rss">84</a> <a itemprop"URL" href="http://<?php echo $domen;?>/85rss">85</a> <a itemprop"URL" href="http://<?php echo $domen;?>/86rss">86</a> <a itemprop"URL" href="http://<?php echo $domen;?>/87rss">87</a> <a itemprop"URL" href="http://<?php echo $domen;?>/88rss">88</a> <a itemprop"URL" href="http://<?php echo $domen;?>/89rss">89</a> <a itemprop"URL" href="http://<?php echo $domen;?>/8rss">8</a> <a itemprop"URL" href="http://<?php echo $domen;?>/90rss">90</a> <a itemprop"URL" href="http://<?php echo $domen;?>/91rss">91</a> <a itemprop"URL" href="http://<?php echo $domen;?>/92rss">92</a> <a itemprop"URL" href="http://<?php echo $domen;?>/93rss">93</a> <a itemprop"URL" href="http://<?php echo $domen;?>/94rss">94</a> <a itemprop"URL" href="http://<?php echo $domen;?>/95rss">95</a> <a itemprop"URL" href="http://<?php echo $domen;?>/96rss">96</a> <a itemprop"URL" href="http://<?php echo $domen;?>/97rss">97</a> <a itemprop"URL" href="http://<?php echo $domen;?>/98rss">98</a> <a itemprop"URL" href="http://<?php echo $domen;?>/99rss">99</a> <a itemprop"URL" href="http://<?php echo $domen;?>/9rss">9</a>
 </p>
                </div>
            </div>
        </div>
    </footer>

   
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/callme.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



</body>

</html>

