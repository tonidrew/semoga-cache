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
$keyword		= str_replace(array('search.php'),'',$keyword);

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
		while( $i < 99) {
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
				echo '<li><a itemprop="url" href="http://'.$domen.'/diagram/'.$url.'" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	} 
}

?><!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- META SEO BY AGCMASTERCLASS.COM -->
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
                         <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo $domain;?>/<?php echo rand(1,30);?>diagramlist"alt="Diagram <?php echo $negara; ?>"title="Diagram <?php echo $negara; ?>"><span itemprop="title">DIAGRAM</span></a></li> >> 
                          <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo $cano;?>"alt="<?php echo $fulljudul; ?> FREE <?php echo $negara; ?>"title="<?php echo $fulljudul; ?> FREE <?php echo $negara; ?>"><span itemprop="title"><?php echo $fulljudul; ?></span></a></li>
                        </ol>	
            <div class="ads">

            </div>
            <?php if(empty($data) || $data == false) {

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
$titled		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Agoda'),' ',$titled);
       $url = sanitize_title($titled);
       $desced	= $itembing->description;
$desced		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Agoda'),' ',$desced);
       $pubded	= $itembing->pubDate; 
  echo  '<p>'.$desced.'</p>';
endforeach;

            }
            else { ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="thumbnail" style="background-image: url('<?php echo $data[0]['thumb']; ?>'); background-color: #cccccc; background-size: cover; background-repeat: no-repeat; background-position: center center;width:100%;height:auto;min-height:300px">
                        <img itemprop="image" src="<?php echo $data[0]['link']; ?>" alt="<?php echo $fulljudul; ?>" />
                   
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
                        echo "<a title=\"".ucwords($i['judul'])."\" href=\"".$i['link']."\"><div class=\"thumbnail\" style=\"background-image: url('".$i['thumb']."'); background-color: #cccccc; background-size: cover; background-repeat: no-repeat; background-position: center center;width:160px;height:140px;\"><noscript><img itemprop=\"image\" src=\"".$i['link']."\" alt=\"".ucwords($i['judul'])."\"/></noscript></div></a>\n";
                        //echo "<h3><a href=\"".$single."".sanitize_title($i['judul'])."\"rel=\"nofollow\">".ucwords($i['judul'])."</a></h3>\n";
                        echo "<h3>".ucwords($i['judul'])."</h3>\n";

                        echo "</div>\n";
                    }
                }
            ?>
            </div>
            </div>
            <?php } ?>
<h4>Diagram <?php echo $fulljudul; ?></h4>
                   
<?php poplist();?>
<seo itemprop="description">
 
<h3>Download ************<?php echo $fulljudul; ?></h3>
<?php
$rand	= rand(1,13);
$fafifu = file_get_contents('artikel/'.$rand.'.txt');
$fafifu = str_replace('[judul]', $fulljudul , $fafifu);
$fafifu = str_replace('[negara]', $negara , $fafifu);
$fafifu = spintax($fafifu);
echo $fafifu;

?>     




            

 <?php
function limit_words($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}
?>

<?php
echo '';
  $firstx = ($nav - 1) * 10;
  $firstx = $firstx + 1; 
  $urlrss    = 'http://www.bing.com/search?q=diagram+'.urlencode(limit_words($fulljudul,5)).'&count=10&first='.$firstx.'&format=rss';
  $feedbing  = simplexml_load_string(BingText($urlrss));
   foreach ($feedbing->channel->item as $itembing):
       $titled	= $itembing->title;
       $tit	= $itembing->title;
$titled		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$titled);
       $url = sanitize_title($titled);
       $desced	= $itembing->description;
$desced		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$desced);
       $pubded	= $itembing->pubDate; 
  echo  '<p>'.$desced.'</p>';
endforeach;
	?>
<p><?php echo $site_keyword;?></p>

        </div>
</seo>
</agcmasterclass>
        <?php include('footer.php'); ?>
    </body>
</html>