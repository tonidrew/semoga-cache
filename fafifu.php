<?php
$rand	= rand(1,13);
$fafifu = file_get_contents('artikel/'.$rand.'.txt');
$fafifu = str_replace('[judul]', $fulljudul , $fafifu);
$fafifu = str_replace('[negara]', $negara , $fafifu);
$fafifu = spintax($fafifu);
echo $fafifu;

?>     