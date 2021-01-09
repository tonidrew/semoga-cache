<?php
if(preg_match('/SemrushBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/MJ12bot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/AhrefsBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/BLEXBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/YandexBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/DotBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/AspiegelBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/Bytespider/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/rogerbot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/eCairn-Grabber/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/MBCrawler/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/Baiduspider/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/SeznamBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/Mail.RU_Bot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>
<?php
include('config.php');
include ('fungsi.php');

$q = $_GET['q'];
if(cek_badword($q)) {
    header( "Location: $domain" );
    exit;
}
$keyword = bersih($q);
$fulljudul = ucwords($keyword);

$keyword = preg_replace("/^(\w+\s)/", "", $keyword);
$judul = ucwords($keyword);
$negara = negara($judul);
$judul = preg_replace("~\s+\S+$~", "", $judul);
$judul = preg_replace("~\s+\S+$~", "", $judul);

$cano = ''.$domain.''.$single.''.sanitize_title2($q);
$data = ambil_gambar($keyword);
if(empty($data) || $data == false) {
    $data = ambil_gambar($keyword);
}
$rating = number_format(rand( 50, 500));
$url = $_SERVER['REQUEST_URI'];
$url = str_replace('AGCMASTERCLASS/', '', $url);
$asin = ambil_asin($url);
$asin = strtoupper($asin);
function poplist() {
	if (file_exists('bismillah.txt')) {
		$myfile = fopen("bismillah.txt", "r") or die("Unable to open file!");
		while( $i < 20) {
			$seek = rand(0, filesize("bismillah.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				include($_SERVER['DOCUMENT_ROOT']."/PENGATURAN/config.php");
				$url = $linkfont($kiwot);
				$titled =  ltrim(rtrim($titled));
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				echo '<a itemprop="url" href="http://'.$domen.'/diagram/'.$url.'" title="'.ucwords($judul).'">'.ucwords($judul).'</a>, ';
				
			}
			$i++;
		}
		fclose($myfile);
	} 
}
$ads ='/diagram.php?file='.$fulljudul.'&subId='.sanitize_title2($q).'';
header( "refresh:13;url=$ads" );
?><!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>[DIAGRAM] <?php echo $fulljudul;?> FULL Version HD Quality  <?php echo $negara;?> - <?php echo strtoupper( $domen ); ?></title>
        <meta property="og:title" content="[DIAGRAM] <?php echo $fulljudul;?> FULL Version HD Quality  <?php echo $negara;?> - <?php echo strtoupper( $domen ); ?>">
        <meta property="og:description" content="Read Or Download <?php echo $judul;?> For FREE <?php echo $negara;?> at <?php echo strtoupper( $domen ); ?>">
        <meta name="description" content="Read Or Download <?php echo $fulljudul;?> For FREE <?php echo $negara;?> at <?php echo strtoupper( $domen ); ?> ">
       <meta name="keywords" content="<?php echo $site_keyword;?>">
 <link rel="canonical" href="<?php echo $cano; ?>" />
        <?php include('css.php'); ?>

    </head>
    <body itemscope itemtype="http://schema.org/WebPage">
<agcmasterclass itemprop="text">
        <?php include('header.php'); ?>

        <div class="container">
 <ol class="breadcrumb">
                          <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo $domain;?>"><span itemprop="title">Home</span></a></li> >> 
                         <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo $domain;?>/diagram"alt="Diagram <?php echo $negara; ?>"title="Diagram <?php echo $negara; ?>"><span itemprop="title">DIAGRAM</span></a></li> >> 
                          <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo $cano;?>"alt="<?php echo $fulljudul; ?> FREE <?php echo $negara; ?>"title="<?php echo $fulljudul; ?> FREE <?php echo $negara; ?>"><span itemprop="title"><?php echo $fulljudul; ?></span></a></li>
                        </ol>	
            <div class="ads">

            </div>
            <?php if(empty($data) || $data == false) {
function limit_words($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}

                echo '<h1 itemprop="name">'.$fulljudul.'</h1>';
$fafifu = file_get_contents('fafifu.txt');
$fafifu = str_replace('[judul]', $fulljudul , $fafifu);
$fafifu = str_replace('[negara]', $negara , $fafifu);
$fafifu = spintax($fafifu);
echo $fafifu;

echo '';
  $firstx = ($nav - 1) * 10;
  $firstx = $firstx + 1; 
  $urlrss    = 'http://www.bing.com/search?q='.urlencode(limit_words($fulljudul,5)).'&count=10&first='.$firstx.'&format=rss';
  $feedbing  = simplexml_load_string(BingText($urlrss));
   foreach ($feedbing->channel->item as $itembing):
       $titled	= $itembing->title;
       $tit	= $itembing->title;
$titled		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikip�dia','YouTube','Agoda'),' ',$titled);
       $url = sanitize_title($titled);
       $desced	= $itembing->description;
$desced		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikip�dia','YouTube','Agoda'),' ',$desced);
       $pubded	= $itembing->pubDate; 
  echo  '<p>'.$desced.'</p>';
endforeach;

            }
            else { ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="thumbnail" style="background-image: url('<?php echo $data[0]['thumb']; ?>'); background-color: #cccccc; background-size: cover; background-repeat: no-repeat; background-position: center center;width:100%;height:auto;min-height:300px">
                        <img itemprop="image" src="<?php echo $data[0]['thumb']; ?>" alt="<?php echo $fulljudul; ?>" />
                   
                    </div>
                    <div class="ads">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                    <h1 class="entry-title"itemprop="name"><a href="<?php echo $cano; ?>" rel="bookmark"><?php echo $fulljudul; ?></a></h1>
                    <ul class="list-group">
                        <li class="list-group-item">Category : <?php echo $negara; ?></li>
                        <li class="list-group-item">Post Date : <?php echo date('F j, Y') ?></li>
                        <li class="list-group-item text-center"><a class="btn btn-primary" href="/diagram.php?file=<?php echo $fulljudul; ?>" rel="nofollow">Download Full Version!</a></li>
                    </ul>
                    </div>
<div itemscope itemtype="http://data-vocabulary.org/Review-aggregate" class="meta">
<span class="entry-tags">Filled in: <?php echo $negara; ?></span>
<span itemprop=itemreviewed><a href="<?php echo $cano; ?>" title="<?php echo $fulljudul; ?>"><?php echo $fulljudul; ?></a></span>
<span itemprop=rating itemscope itemtype=http://data-vocabulary.org/Rating>
<span itemprop=average>9</span> out of <span itemprop=best>10</span></span> based on <span itemprop=votes><?php echo rand(1,10);?>0</span> ratings. 
<span itemprop=count><?php echo rand(1,10);?>0</span> user reviews.
</div>
                    <div class="relatedkey clearfix">
                    
                    </div>
                </div>
            </div>
<div class="striped text-center">
            <h2><?php echo $fulljudul; ?></h2>
            <div class="panel panel-default">
            </div>

            <div class="row">
            <?php
                if($data !== false) {
                    foreach($data as $i) {
                        echo "<div class=\"galeri col-xs-6 col-sm-4 col-md-3\">\n";
                        echo "<a title=\"".ucwords($i['judul'])."\" href=\"".$i['thumb']."\"><div class=\"thumbnail\" style=\"background-image: url('".$i['thumb']."'); background-color: #cccccc; background-size: cover; background-repeat: no-repeat; background-position: center center;width:160px;height:140px;\"><noscript><img itemprop=\"image\" src=\"".$i['thumb']."\" alt=\"".ucwords($i['judul'])."\"/></noscript></div></a>\n";
                        //echo "<h3><a href=\"".$single."".sanitize_title($i['judul'])."\"rel=\"nofollow\">".ucwords($i['judul'])."</a></h3>\n";
                        echo "<h3>".ucwords($i['judul'])."</h3>\n";
 
                        echo "</div>\n";
                    }
                }
            ?>
            </div>
            </div>
            <?php } ?>
<div class="overlay">
	<div class="ct">
   <p><span class="green"><a href="/diagram.php?file=<?php echo $fulljudul; ?>" rel="nofollow">Create Free Account to Read Or Download <br>
    <?php echo $fulljudul;?> </a></span></p>
<center><div class="thumbnail"style=" background-repeat: no-repeat; background-position: center center;width:160px;height:140px;" ><img src="<?php echo $data[0]['thumb']; ?>"onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuuQQpxiPLkYOGPLhprADcxlxo1mFhveLegG93pDcciP2JFVmWEg';"></div></center>
		<a href="<?php echo $ads; ?>" rel="nofollow" id="continue" class="x-domain clone">Create my account now</a>
<br>
	</p><div class="secure"><img src="/lp2/asset/secure-icon.png" /> Secure Verified
	</div>



	</center></div>

	</div>

<script type="text/javascript">
window.onload = function() {
document.body.innerHTML += '<div id="overlay" style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #000;filter:alpha(opacity=1);-moz-opacity:0.5;-khtml-opacity: 0.5;opacity: 0.01;z-index: 10;"></div>';
}
</script>
<seo itemprop="description">

<h4>Diagram <?php echo $fulljudul; ?></h4>
                   <?php poplist();?>


        </div>
</seo>
</agcmasterclass>

        <?php include('footer.php'); ?>
 	
<?php include('histats.php'); ?>

    </body>
</html>