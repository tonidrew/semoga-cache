<?php
$domains = $_SERVER['HTTP_HOST'];
$file = $_GET['file'];
$title = str_replace('-', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title = preg_replace('/[^A-Za-z0-9 ]/', ' ', $title);
$title = ucwords($title);
$domen = $_SERVER['HTTP_HOST'];
$gambar = preg_replace('/[0-9]+/', '', $title);
function agcmasterclass($haystack, $needles=array(), $offset=0) {
        $chr = array();
        foreach($needles as $needle) {
                $res = stripos($haystack, $needle, $offset);
                if ($res !== false) $chr[$needle] = $res;
        }
        if(empty($chr)) return false;
        return min($chr);
}
$dmcaurl = $_SERVER['REQUEST_URI'];
$juduldmca = str_replace('-', ' ', $dmcaurl);
$dmca		= file_get_contents('dmca.txt', true);
$dmca		= explode(',',$dmca);
if (agcmasterclass($juduldmca,$dmca))
{
$urlredirect = '/dl.php';
header("HTTP/1.1 301 Moved Permanently");
header( "Location: $urlredirect" );
}
function poplist() {
	if (file_exists('KEY/pop.txt')) {
		$myfile = fopen("KEY/pop.txt", "r") or die("Unable to open file!");
		while( $i < 10) {
			$seek = rand(0, filesize("KEY/pop.txt"));
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
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
} 
?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="language" content="EN"> 
  <title>&#10148; Download <?php echo $title; ?> PDF E-Book- <?php echo strtoupper( $domains ); ?></title>
<meta name="description" content="Free  Download <?php echo $title; ?> PDF E-Book at <?php echo strtoupper( $domains ); ?>">
<link href="/lp2/asset/fb.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="/lp3/font-awesome-4.7.0/css/font-awesome.css">
  <link href="/lp2/asset/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="/lp2/asset/icon.png">
  <style>
    .logo {background: transparent url("img/lg.gif") no-repeat scroll 50% 0%;
      background: #fff;
      height: 100px;
      display: block;
      margin-bottom: 10px;
    }
		.panel-footer {background:#fff;}
		h4 small, .h4 small {color:green;}

		.panel-top {
			background: #3579f5 none repeat scroll 0 0;
			color: #fff;
			font-size: 11pt;
			font-weight: bold;
			padding:5px 15px;
			text-align:center;
		}
  </style>
</head>

<body>
  <div id="body">
     <div class="container">
      <div id="scroll">
        <div class="col-md-offset-2 col-md-8 col-sm-12">
          <div class="panel">
						<div class="panel-top">
							<center><h1><?php echo $judul; ?></h1></center>
            </div>
            <div id="input">
              <div class="panel-body" id="description">
                <div class="row">
                  <div class="topreader">
                    <img class="img-responsive" src="/lp2/asset/readertop.jpg" />
                  </div>
                  <div class="reader">
                    <img class="img-responsive" src="/<?php echo sanitize_title($gambar);?>.jpg"onerror="this.src='/asset/page<?php echo rand(1,11);?>'"/>
                  </div>
                  <div class="topreader">
                    <img class="img-responsive" src="/lp2/asset/readerbottom.jpg" />
                  </div>
                </div>
              </div>

              <div class="panel-footer">

									<b>Book Descriptions:</b>
                <p><?php echo $title; ?> is nice books to read or download to add to your book collection</p>
								<b>How it works:</b>
								<ul>
									<li><kbd>1.</kbd> Register for FREE 1st month.</li>
									<li><kbd>2.</kbd> Download your desired books</li>
									<li><kbd>3.</kbd> Easy to cancel your membership.</li>
                                    <li><kbd>4.</kbd> Joint with more than 80.000 Happy Readers.</li>
								</ul>



            <h2>Recommended Books</h2>

<?php poplist();?>


		<p style="font-size:11px;" align="justify"><b style="font-size:13px;">Note:</b>
 We cannot guarantee that every book is in the library. But if You are
still not sure with the service, you can choose FREE Trial service. You
can cancel anytime. You can also find customer support email or phone in
 the next page and ask more details about availability of this book.
Click "CONTINUE" button to proceed.
</p>
              </div>
            </div>



            <div class="panel-body" id="console" style="display: none;">
              <code class="command"></code>
            </div>


            <div class="panel-footer">
              <div class="row">
                <div id="fbFeedbackContent">

								<center><a rel="nofolow" href="/">Home</a> | <a rel="nofolow" href="/contact">Contact</a> | <a rel="nofolow" href="/dmca">DMCA</a> | <a rel="nofolow" href="/privacy.html">Privacy and Policy</a></center>

                  <hr>
                  <p style="text-align:right;color:#3B5998;"><strong>73 Comments</strong></p>
									<hr>

                  <ul>
                    <li>
                      <a class="image">
                        <img class="img" src="/lp2/asset/fb_jenny.jpg" alt="">
                      </a>
                      <div class="postContainer">
                        <a href="#">Jenny Martins</a> <span></span>

                        <p>
                          Finally I get this ebook, thanks for all these <?php echo $judul; ?> can get now! </p>

                        <div class="bottom">
                          <a>Reply</a> · <a class="like"><i></i> 1</a> · <a>Like</a> · <a>Follow</a> · 1 hour ago </div>
                      </div>
                    </li>
                    <li>
                      <a class="image">
                        <img class="img" src="/lp2/asset/fb_lisa.jpg" alt="">
                      </a>
                      <div class="postContainer">
                        <a href="#">Lisa Doran</a> <span></span>
                        <p>
                          cooool I am so happy xD </p>
                        <div class="bottom">
                          <a>Reply</a> · <a class="like"><i></i> 12</a> · <a>Like</a> · <a>Follow</a> · 1 hour ago </div>
                      </div>
                    </li>
                    <li>
                      <a class="image">
                        <img class="img" src="/lp2/asset/picture.jpg" alt="">
                      </a>
                      <div class="postContainer">
                        <a href="#">Markus Jensen</a>
                        <p>
                          I did not think that this would work, my best
friend showed me this website, and it does! I get my most wanted eBook </p>
                        <div class="bottom">
                          <a>Reply</a> · <a class="like"><i></i> 2</a> · <a>Like</a> · <a>Follow</a> · 1 hour ago </div>
                      </div>
                      <ul>
                        <li>
                          <a class="image">
                            <img class="img" src="/lp2/asset/picture_002.jpg" alt="">
                          </a>
                          <div class="postContainer">
                            <a href="#">Michael Strebensen</a>
                            <p>
                              wtf this great ebook for free?! </p>
                            <div class="bottom">
                              <a>Reply</a> · <a class="like"><i></i> 2</a> · <a>Like</a> · <a>Follow</a> · 48 minutes ago </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="image">
                        <img class="img" src="/lp2/asset/picture_003.jpg" alt="">
                      </a>
                      <div class="postContainer">
                        <a href="#">Hun Tsu</a> <span></span>
                        <p>
                          My friends are so mad that they do not know how I have all the high quality ebook which they do not! </p>
                        <div class="bottom">
                          <a>Reply</a> · <a class="like"><i></i> 2</a> · <a>Like</a> · <a>Follow</a> · 3 hour ago </div>
                      </div>
                    </li>
                    <li>
                      <a class="image">
                        <img class="img" src="/lp2/asset/fb_tina.jpg" alt="">
                      </a>
                      <div class="postContainer">
                        <a href="#">Tina Milan</a> <span></span>
                        <p>
                          It's very easy to get quality ebooks ;) </p>
                        <div class="bottom">
                          <a>Reply</a> · <a class="like"><i></i> 2</a> · <a>Like</a> · <a>Follow</a> · 3 hour ago </div>
                      </div>
                    </li>
                    <li>
                      <a class="image">
                        <img class="img" src="/lp2/asset/picture_007.jpg" alt="">
                      </a>
                      <div class="postContainer">
                        <a href="#">Jim Letland</a> <span></span>
                        <p>
                          hahahahaha </p>
                        <div class="bottom">
                          <a>Reply</a> · <a class="like"><i></i> 2</a> · <a>Like</a> · <a>Follow</a> · 5 hour ago </div>
                      </div>
                    </li>
                    <li>
                      <a class="image">
                        <img class="img" src="/lp2/asset/picture_006.jpg" alt="">
                      </a>
                      <div class="postContainer">
                        <a href="#">Lukasz Czaru</a> <span></span>
                        <p>
                          so many fake sites. this is the first one which worked! Many thanks </p>
                        <div class="bottom">
                          <a>Reply</a> · <a class="like"><i></i> 5</a> · <a>Like</a> · <a>Follow</a> · 6 hour ago </div>
                      </div>
                    </li>
                    <li>
                      <a class="image">
                        <img class="img" src="/lp2/asset/picture_005.jpg" alt="">
                      </a>
                      <div class="postContainer">
                        <a href="#">Georgina Kalafikis</a> <span></span>
                        <p>
                          wtffff i do not understand this! </p>
                        <div class="bottom">
                          <a>Reply</a> · <a class="like"><i></i> 1</a> · <a>Like</a> · <a>Follow</a> · 8 hour ago </div>
                      </div>
                      <ul>
                        <li>
                          <a class="image">
                            <img class="img" src="/lp2/asset/fb_martin.jpg" alt="">
                          </a>
                          <div class="postContainer">
                            <a href="#">Martin Borton</a>
                            <p>
                              Just select your click then download
button, and complete an offer to start downloading the ebook. If there
is a survey it only takes 5 minutes, try any survey which works for you.
 </p>
                            <div class="bottom">
                              <a>Reply</a> · <a class="like"><i></i> 17</a> · <a>Like</a> · <a>Follow</a> · 8 hour ago </div>
                          </div>
                          <ul>
                            <li>
                              <a class="image">
                                <img class="img" src="/lp2/asset/picture_004.jpg" alt="">
                              </a>
                              <div class="postContainer">
                                <a href="#">Ida Kelvin</a>
                                <p>
                                  lol it did not even take me 5 minutes at all! XD </p>
                                <div class="bottom">
                                  <a>Reply</a> · <a class="like"><i></i> 13</a> · <a>Like</a> · <a>Follow</a> · 8 hour ago </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
 </div>
              </div>

            </div>
          </div>



        </div>


				<div class="col-md-offset-2 col-md-8">

				</div>
      </div>

		</div>
  </div>
 	<div class="overlay">
	<div class="ct">
   <p><span class="blue">Free Membership Registration</span></p>
	<center><p>You have to create a <span class="red">FREE ACCOUNT</span> in order to continue <span class="blue">READING</span> or  <span class="blue">DOWNLOAD</span>
    <br> <br>
	<a href="/dl.php?file=<?php echo $title; ?>" rel="nofollow" id="continue" class="x-domain clone">Create my account now</a>
<br>
	</p><div class="secure"><img src="/lp2/asset/secure-icon.png" /> Secure Verified
	<br>
	<b>* You need to enable Javascript or disable adblock in order to proceed through the registration flow.</b>
	</div>

<hr>
  <p style="margin-top:3px;font-size:10px;">
    </p><center><a rel="nofolow" href="/">Home</a> - <a rel="nofolow" href="/dmca">DMCA</a> - <a rel="nofolow" href="/privacy">Privacy</a> - <a rel="nofolow" href="/contact">Contact</a></center>
  <p></p>


	</center></div>

	</div>


<script type="text/javascript">
window.onload = function() {
document.body.innerHTML += '<div id="overlay" style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #000;filter:alpha(opacity=1);-moz-opacity:0.5;-khtml-opacity: 0.5;opacity: 0.01;z-index: 10;"></div>';
}
</script>
<?php include('histats.php');?>
</body>
</html>