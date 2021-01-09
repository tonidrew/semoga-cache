<?php
include('config.php');
$asin = $_GET['code'];
$ads = 'https://www.agoda.com/partners/partnersearch.aspx?hid='.$asin.'&cid='.$agodaCID.'';
header( "refresh:1;url=$ads" );
?>
<!DOCTYPE html>
<head>
    <title><?php echo $judul; ?></title>
    </head>
    <body>
        <center><img src="/loading.gif"></center>
    </body>
    <?php include('histats.php');?>
</html>
