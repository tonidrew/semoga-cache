<?php
include('config.php');
function poplist() {
	if (file_exists('kw.txt')) {
		$myfile = fopen("kw.txt", "r") or die("Unable to open file!");
		while( $i < 12) {
			$seek = rand(0, filesize("kw.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				include('config.php');
				$url = $linkfont($kiwot);
				$url =  ltrim(rtrim($url));
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				$judul = preg_replace("/^(\w+\s)/", "", $judul);
				echo '<li class="list-group-item "><i class="fa fa-hotel" aria-hidden="true"style=" color:red"></i> <a href="http://'.$domen.''.$single.''.$url.'" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
function trends() {
	if (file_exists('kw.txt')) {
		$myfile = fopen("kw.txt", "r") or die("Unable to open file!");
		while( $i < 20) {
			$seek = rand(0, filesize("kw.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				include('config.php');
				$url = $linkfont($kiwot);
				$url =  ltrim(rtrim($url));
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				$judul = preg_replace("/^(\w+\s)/", "", $judul);
				echo '<li class="list-group-item "><i class="fa fa-hotel" aria-hidden="true"style=" color:red"></i> <a href="http://'.$domen.''.$single.''.$url.'" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Download <?php echo $site_name;?> - <?php echo $site_desc;?></title>
<meta name="description" content="Download <?php echo $site_desc;?>">
<meta name="keywords" content="<?php echo $site_keyword;?>">
<meta name="author" content="<?php echo strtoupper($domen);?>">
<link rel="canonical" href="http://<?php echo $domen;?>/promo" />

    <!-- Bootstrap Core CSS -->   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/homepages/home3.css" rel="stylesheet">

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
                <a class="navbar-brand topnav" href="/" style="color:#eee"> <?php echo strtoupper($domen);?>: <?php echo $site_name;?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/feed" style="color:#eee">RSS</a>
                    </li>
                    <li>
                        <a href="/sitemap.xml" style="color:#eee">SITEMAP</a>
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
		<?php trends();?>
</div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs">
                    
        <div class="list-group">
            <h3 class="list-group-item list-group-item-info">Cheap Hotels</h3>
      <?php poplist();?>
        <div>
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
                    <img src="/disclaimer-old.png">
                     <p class="copyright text-muted small">
                     <?php echo strtoupper($domen);?>: <?php echo $site_name;?> matches keywords, searched from 3rd-party sites, to affiliate-networks offering unlimited access to licensed entertainment content. 
                     <br><?php echo strtoupper($domen);?>: <?php echo $site_name;?> allows visitors, otherwise looking for free-content to enjoy more for less.
                     <br><a href="/">Home</a> | <a data-toggle="modal" data-target="#privacy-policy">Privacy Policy</a> | <a data-toggle="modal" data-target="#dmca-notice">DMCA</a> | <a data-toggle="modal" data-target="#contact-us">Contact Us</a>
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

<div id="privacy-policy" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Privacy Policy</h4>
      </div>
      <div class="modal-body">
                    <p><strong>PLEASE READ THESE TERMS AND CONDITIONS OF SERVICE CAREFULLY.</strong></p>

                    <p><strong>ACCEPTANCE OF TERMS</strong></p>

                    <p>eBook Library (the "Site") provides articles, photos and video  hosting/blogging service to you (the "Service(s)"), subject to the following Terms of Service  ("TOS"), which may be updated from time to time without notice to you. Your use of the Service  constitutes acceptance of these TOS and creates a binding legal agreement, so read them  carefully. Please note, you must be 13 years or older to use this Service. Any reference to us,  our, we or similar words shall refer to this Site and its affiliates thereto.</p>

                    <p><strong>REGISTRATION</strong></p>

                    <p>You agree that all information provided to us upon registration and at all other times will be  true, accurate, current and complete. You also agree that you ensure this information will be  kept up to date at all times. This especially applies to your email address since we will direct  all communication to you about your account to your email address. We will use the information  you provide to us in accordance with our Privacy Policy (as determined below).</p>

                    <p><strong>PRIVACY POLICY AND CONSUMER EDUCATION</strong></p>

                    <p>In order to use the Services, you agree to be bound by the Privacy Policy of the Site. Please  review the Privacy Policy (which may be accessed at the Site) on a regular basis as it may be  updated from time to time.</p>

                    <p><strong>COPYRIGHTS</strong></p>

                    <p>Unless otherwise indicated, all Site non content materials, including, without limitation, the  Site logo, and all designs, text, graphics, other non content files, and the selection and  arrangement thereof are the proprietary and copyrighted property of the Site. You may  electronically copy and print to hard copy portions of this Site for the sole purpose of using  materials it contains for informational and non-commercial, personal use only. Any other use of  the materials in this Site that originated from us - including any commercial use, reproduction  for purposes other than described above, modification, distribution, republication, display or  performance - without the prior written permission of us is strictly prohibited.</p>

                    <p><strong>TRADEMARKS</strong></p>

                    <p>The Site name and logo are our trademarks, and may not be copied, imitated or used, in whole or  in part, without our prior written permission. In addition, all page headers, custom graphics,  button icons and scripts are service marks, trademarks and/or trade dress of the Site, and may  not be copied, imitated or used, in whole or in part, without our prior written permission.</p>

                    <p><strong>USE OF CONTENT SUBMITTED BY YOU/USER/AUTHOR</strong></p>

                    <p>BY UPLOADING, POSTING, SENDING OR SUBMITTING PHOTOGRAPHS, PICTURES, IMAGES OR ANY OTHER CONTENT  INCLUDING, WITHOUT LIMITATION, GRAPHICS, VIDEO, DATA, TEXT, FILES, LINKS, SOFTWARE, MUSIC, SOUND  ("CONTENT"), YOU ARE CONSENTING TO BE BOUND BY THESE TERMS OF USE. IF YOU DO NOT AGREE, DO NOT  UPLOAD, POST, SEND OR SUBMIT ANY CONTENT TO THIS SITE.</p>

                    <p>You agree that any Content you upload, post, email, transmit or otherwise make available via the  Service is non-confidential and that we shall have a perpetual, worldwide, non-exclusive license  to use any such Content in connection with the Service and our business (and any successor),  including without limitation for promoting and redistributing part or all of the Service (and  derivative works thereof) in any media formats and through any media channels. You also hereby  grant each User a non-exclusive license to access your Content through the Site, and to use,  reproduce, distribute, prepare derivative works of, display and perform such Content as  permitted through the functionality of the Site and under these Terms of Service. The submission  of any materials to us irrevocably waives any and all "moral rights" in such materials,  including the rights of paternity and integrity. The foregoing license granted by you terminates  once you remove or delete Content from the Site.</p>

                    <p><strong>USER / AUTHOR CONDUCT</strong></p>

                    <p>You understand that all Content posted by Users/Authors, whether publicly posted or privately  transmitted, are the sole responsibility of the User from which such Content originated. This  means that you - the Author, and not us - the Site, are entirely responsible for all Content  that you/user/author upload, post, email, transmit or otherwise make available via the Service.  We do not control the Content posted via the Service and, as such, do not guarantee the  accuracy, integrity or quality of such Content.</p>

                    <p>You understand that by using the Service, you may be exposed to Content that is offensive,  indecent or objectionable. Under no circumstances will we be liable in any way for any Content,  including, but not limited to, for any errors or omissions in any Content, or for any loss or  damage of any kind incurred as a result of the use of any Content posted, emailed, transmitted  or otherwise made available via the Service.</p>

                    <p>You agree to not use the Service to:</p>
                    <ol class="entry-list">  <li>upload, post, email, transmit or otherwise make available any Content that is unlawful,      harmful, threatening, abusive, harassing, tortuous, defamatory, vulgar, obscene, libelous,      invasive of another’s privacy, hateful, or racially, ethnically or otherwise objectionable;  </li>  <li>harm minors in any way;</li>  <li>impersonate any person or entity, including, but not limited to, a Site official, forum      leader, guide or host, or falsely state or otherwise misrepresent your affiliation with a      person or entity;  </li>  <li>forge headers or otherwise manipulate identifiers in order to disguise the origin of any      Content transmitted through the Service;  </li>  <li>upload, post, email, transmit or otherwise make available any Content that you do not have a      right to make available under any law or under contractual or fiduciary relationships (such      as inside information, proprietary and confidential information learned or disclosed as part      of employment relationships or under nondisclosure agreements);  </li>  <li>upload, post, email, transmit or otherwise make available any Content that infringes any      patent, trademark, trade secret, copyright or other proprietary rights of any party, or      which would violate any right of publicity, right of privacy or other right of any party      without first obtaining permission of the owner of such right. This includes group or      individual portraits of people taken by professional photographers. Photos of people may      only be used with the permission of the individual whose image is portrayed (or for minors,      the permission of their parent or guardian). This includes celebrities and professional      athletes, as well as ordinary citizens;  </li>  <li>upload, post, email, transmit or otherwise make available any unsolicited or unauthorized      advertising, promotional materials, "junk mail," "spam," "chain letters," "pyramid schemes,"      or any other form of solicitation;  </li>  <li>upload, post, email, link, transmit or otherwise make available any material that contains      software viruses or any other computer code, files or programs designed to interrupt,      destroy or limit the functionality of any computer software or hardware or      telecommunications equipment;  </li>  <li>interfere with or disrupt the Service or servers or networks connected to the Service, or      disobey any requirements, procedures, policies or regulations of networks connected to the      Service;  </li>  <li>intentionally or unintentionally violate any applicable local, state, national or      international law, including, but not limited to, regulations promulgated by the U.S.      Securities and Exchange Commission, any rules of any national or other securities exchange,      including, without limitation, the New York Stock Exchange, the American Stock Exchange or      the NASDAQ, and any regulations having the force of law;  </li>  <li>"stalk" or otherwise harass another;</li>  <li>collect or store personal data about other Users;</li>  <li>link to or refer to Content not allowed under these TOS;</li>  <li>otherwise use the service in a manner deemed inappropriate by us.</li>
                    </ol>
                    <p>&nbsp;</p>

                    <p><strong>POSSIBLE CONTENT REMOVAL</strong></p>

                    <p>We retain the right, but not the obligation, to monitor and edit or remove any activity or  Content that it deems in its sole discretion to be harmful to Users, us or the rights of any  third party, or to violate any applicable law. This includes the right, but not the obligation,  to remove any text or images uploaded by you that we deem in our sole judgment to be  inappropriate or that we believe may subject us to any liability, including without limitation  the following:</p>
                    <ul class="entry-list">  <li>photographs, pictures, images, text or other materials submitted by Users that are protected      by trademark, copyright, right of publicity or other proprietary right, without the express      permission of the owner of those rights;  </li>  <li>partially or fully nude images of anyone, at any age, of any gender, including sexually      suggestive images or words;  </li>  <li>profanity or offensive comments including but not limited to expressions of racism, bigotry      or hatred, or that are abusive, slanderous or offensive;  </li>  <li>any illegal material such as expressions of abuse, offensive language and imagery, obscenity      or pornography, including, but not limited to, child abuse, child pornography, depictions of      minors engaged in sexual conduct or explicitly sexual situations, or any other material that      could give rise to any civil or criminal liability under, or otherwise violate, any      applicable law.  </li>
                    </ul>
                    <p><strong>LINKING TO OUR SITE</strong></p>

                    <p>You are granted a limited, non-exclusive right to create a hyperlink to this Site provided such  link does not portray us or any of its services in a false, misleading, derogatory or otherwise  defamatory manner. This limited right may be revoked at any time. You may not use, frame or  utilize framing techniques to enclose any of our trademarks, logos or other proprietary  information, including the images found at the Site, the content of any text or the  layout/design of any page or form contained on a page without our express written consent.</p>

                    <p>Further, you may not use any meta tags or any other "hidden text" utilizing our name, trademark  or product name without our express written consent. Except as noted above, you are not conveyed  any right or license by implication, estoppel or otherwise in or under any of our patent,  trademark, copyright or proprietary rights or any third party. We make no claim or  representation regarding, and accepts no responsibility for the quality, content, nature or  reliability of web sites linking to this Site.</p>

                    <p><strong>THIRD PARTY LINKS</strong></p>

                    <p>We may provide links to web pages and content of third parties ("Third Party Content") as a  service to those interested in this information. We do not monitor, nor does it have any control  over, any Third Party Content. We do not endorse or adopt any Third Party Content and can make  no guarantee as to its accuracy or completeness. We make no representations or warranties of any  kind regarding such Third Party Content, or any information contained therein, and undertakes no  responsibility to update or review any Third Party Content.</p>

                    <p>When leaving the Site, you should be aware that the TOS no longer govern, and, therefore, you  should review the applicable terms and policies, including privacy and data gathering practices,  of that particular site. Users use these links and Third Party Content contained therein at  their own risk.</p>

                    <p><strong>CLAIMS OF COPYRIGHT INFRINGEMENT; DESIGNATED AGENT</strong></p>

                    <p>If you believe that any material on the Site infringes upon any copyright that you own or  control, or that any link on the Site directs users to another web site that contains material  that infringes upon any copyright that you own or control, you may file a notification of such  infringement with our Designated Agent. Please see NOTICE AND PROCEDURE FOR NOTIFYING DESIGNATED  AGENT OF CLAIMS OF COPYRIGHT INFRINGEMENT.</p>

                    <p><strong>NOTICE AND PROCEDURE FOR NOTIFYING DESIGNATED AGENT OF CLAIMS OF COPYRIGHT      INFRINGEMENT.</strong></p>

                    <p>Pursuant to the Digital Millennium Copyright Act ("DMCA"), 17 U.S.C. 512(c)(3), the following  information must be provided to our Designated Agent,</p>
                    <blockquote><p>Copyright Agent<br>      .<br>      <a href="https://goo.gl/forms/vnX09gBf78xy8C6P2" target="_blank" rel="nofollow noreferrer external">CONTACT US</a>  </p></blockquote>
                    <p>for notifications:</p>
                    <ul class="entry-list">  <li>A physical or electronic signature of a person authorized to act on behalf of the owner of      an exclusive right that is allegedly infringed.  </li>  <li>Identification of the copyrighted work claimed to have been infringed, or, if multiple      copyrighted works at a single online site are covered by a single notification, a      representative list of such works at that site.  </li>  <li>Identification of the material that is claimed to be infringing or to be the subject of      infringing activity and that is to be removed or access to which is to be disabled, and      information reasonably sufficient to permit the service provider to locate the material.  </li>  <li>Information reasonably sufficient to permit us to contact the complaining party, such as an      address, telephone number, and, if available, an electronic mail address at which the      complaining party may be contacted.  </li>  <li>A statement that the complaining party has a good faith belief that use of the material in      the manner complained of is not authorized by the copyright owner, its agent, or the law.  </li>  <li>A statement that the information in the notification is accurate, and under penalty of      perjury, that the complaining party is authorized to act on behalf of the owner of an      exclusive right that is allegedly infringed.  </li>  <li>Should you fail to comply with all of the aforementioned requirements in your notice, your      notice may not be valid.  </li>  <li>It is our policy to terminate the accounts and/or membership of Users who are repeat      infringers or who are repeatedly charged with infringement, in appropriate circumstances.  </li>
                    </ul>
                    <p><strong>TERMINATION</strong></p>

                    <p>In the event that you are a registered user of the Site, you may terminate such registration by  notifying the Site by sending e-mail to <a href="https://goo.gl/forms/v6j07uEUnP4uoSfI2" target="_blank" rel="nofollow noreferrer external">https://goo.gl/forms/v6j07uEUnP4uoSfI2</a>.  After receipt of your termination notice, we will terminate your account.<br> We may terminate  your access to the Services or your registration at any time in the event of a breach of these  TOS by User or anyone accessing the Services using registered User’s username. We, at our sole  discretion, may also terminate these TOS at any time without cause, and may suspend access to  the Service with or without notice, to any User.</p>

                    <p><strong>INDEMNIFICATION</strong></p>

                    <p>User agrees to indemnify and hold us, our parents, friends, affiliates, officers and employees,  harmless from any claim or demand, including reasonable attorneys’ fees, made by any third party  due to or arising out of User’s use of the Site, the violation of these TOS by User, or the  infringement by User, or any other user of User’s account, of any intellectual property or other  right of any person or entity.</p>

                    <p><strong>DISCLAIMER OF WARRANTIES</strong></p>

                    <p>YOU EXPRESSLY UNDERSTAND AND AGREE THAT:</p>
                    <ol class="entry-list">  <li>YOUR USE OF THE SERVICE IS AT YOUR SOLE RISK. THE SERVICE IS PROVIDED ON AN "AS IS" AND "AS      AVAILABLE" BASIS. WE HEREBY DISCLAIM ALL WARRANTIES AND CONDITIONS WITH REGARD TO ANY      MATERIALS POSTED IN THIS WEB SITE OR ANY OTHER MATERIALS WHICH ARE REFERENCED BY OR LINKED      TO THIS WEB SITE, AND/OR EXPRESSLY DISCLAIM ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR      IMPLIED, INCLUDING, BUT NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS      FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT.  </li>  <li>WE MAKE NO WARRANTY THAT      <ol class="entry-list">          <li>THE SERVICE WILL MEET YOUR REQUIREMENTS,</li>          <li>THE SERVICE WILL BE UNINTERRUPTED, TIMELY, SECURE, MALWARE-FREE OR ERROR-FREE,</li>          <li>THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SERVICE WILL BE ACCURATE OR              RELIABLE,          </li>          <li>THE QUALITY OF ANY PRODUCTS, SERVICES, INFORMATION, OR OTHER MATERIAL PURCHASED OR              OBTAINED BY YOU THROUGH THE SERVICE WILL MEET YOUR EXPECTATIONS, AND          </li>          <li>ANY ERRORS IN THE SOFTWARE WILL BE CORRECTED.</li>      </ol>  </li>  <li>ANY MATERIAL DOWNLOADED, ACCESSED, VIEWED OR OTHERWISE OBTAINED THROUGH THE USE OF THE      SERVICE IS DONE AT YOUR OWN DISCRETION AND RISK AND THAT YOU WILL BE SOLELY RESPONSIBLE FOR      ANY DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF ANY      SUCH MATERIAL.  </li>  <li>IN NO EVENT SHALL WE BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, INCIDENTAL, CONSEQUENTIAL      DAMAGES, OR FOR DAMAGES OF ANY KIND ARISING OUT OF OR IN CONNECTION WITH THE USE OR      PERFORMANCE OF INFORMATION CONTAINED IN ANY MATERIALS POSTED IN THIS WEB SITE OR IN ANY      OTHER MATERIALS WHICH ARE REFERENCED BY OR LINKED TO THIS WEB SITE, UNDER ANY THEORY OF      LIABILITY USED.  </li>  <li>NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM US OR THE SITE OR      THROUGH OR FROM THE SERVICE SHALL CREATE ANY WARRANTY NOT EXPRESSLY STATED IN THE TOS.  </li>
                    </ol>
                    <p>We reserve the right to change any and all content contained on the Site at any time without  notice. Reference to any products, services, processes or other information, by trade name,  trademark, manufacturer, supplier or otherwise does not constitute or imply endorsement,  sponsorship or recommendation thereof by us.</p>

                    <p><strong>LIMITATION OF LIABILITY</strong></p>

                    <p>YOU EXPRESSLY UNDERSTAND AND AGREE THAT WE SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT,  INCIDENTAL, SPECIAL, CONSEQUENTIAL OR EXEMPLARY DAMAGES, INCLUDING BUT NOT LIMITED TO, DAMAGES  FOR LOSS OF PROFITS, GOODWILL, USE, DATA OR OTHER INTANGIBLE LOSSES (EVEN IF WE HAVE BEEN  ADVISED OF THE POSSIBILITY OF SUCH DAMAGES), RESULTING FROM:</p>
                    <ol class="entry-list">  <li>THE USE OR THE INABILITY TO USE THE SERVICE;</li>  <li>THE COST OF PROCUREMENT OF SUBSTITUTE GOODS AND SERVICES RESULTING FROM ANY GOODS, DATA,      INFORMATION OR SERVICES PURCHASED OR OBTAINED OR MESSAGES RECEIVED OR TRANSACTIONS ENTERED      INTO THROUGH OR FROM THE SERVICE;  </li>  <li>UNAUTHORIZED ACCESS TO OR ALTERATION OF YOUR TRANSMISSIONS OR DATA;</li>  <li>STATEMENTS OR CONDUCT OF ANY THIRD PARTY ON THE SERVICE; OR</li>  <li>ANY OTHER MATTER RELATING TO THE SERVICE.</li>
                    </ol>
                    <p><strong>EXCLUSIONS AND LIMITATIONS</strong></p>

                    <p>SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF CERTAIN WARRANTIES OR THE LIMITATION OR  EXCLUSION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES. ACCORDINGLY, SOME OF THE ABOVE  LIMITATIONS MAY NOT APPLY TO YOU.</p>

                    <p><strong>NOTICE</strong></p>

                    <p>Notices to you may be made via either email or regular mail. The Service may also provide notices  of changes to the TOS or other matters by displaying notices or links to notices to you  generally on the Service.</p>

                    <p><strong>GENERAL INFORMATION</strong></p>

                    <p>The TOS constitute the entire agreement between you and us and governs your use of the Service,  superseding any prior agreements between you and us. You also may be subject to additional terms  and conditions that may apply when you use our affiliate services, third-party content or  third-party software. The TOS and the relationship between you and us shall be governed by the  laws of the State of New York without regard to its conflict of law provisions. You agree to  submit to the personal and exclusive jurisdiction of the courts located within the county of  Rockland, New York. The failure of us to exercise or enforce any right or provision of the TOS  shall not constitute a waiver of such right or provision. If any provision of the TOS is found  by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the  court should endeavor to give effect to the parties’ intentions as reflected in the provision,  and the other provisions of the TOS remain in full force and effect. You agree that regardless  of any statute or law to the contrary, any claim or cause of action arising out of or related to  use of the Service or the TOS must be filed within one (1) year after such claim or cause of  action arose or be forever barred. The section titles in the TOS are for convenience only and  have no legal or contractual effect.</p>

                    <p><strong>VIOLATIONS AND COMMENTS</strong></p>

                    <p>Please report any violations of the TOS to <a href="https://goo.gl/forms/vnX09gBf78xy8C6P2" target="_blank" rel="nofollow noreferrer external">CONTACT US</a>,  titled: Abuse; or make any comments to <a href="https://goo.gl/forms/vnX09gBf78xy8C6P2" target="_blank" rel="nofollow noreferrer external">HERE</a>.
                    </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="dmca-notice" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Privacy Policy</h4>
      </div>
      <div class="modal-body">
                    <p><strong>Notification of Copyright Infringement</strong></p>

                    <p>We respect the intellectual property rights of others and expects our users to do the same. In
                        accordance with the Digital Millennium Copyright Act of 1998, the text of which may be found on
                        the U.S. Copyright Office website at <a title="DMCA"
                                                                href="http://www.copyright.gov/legislation/dmca.pdf"
                                                                target="_blank" rel="nofollow noreferrer external">www.copyright.gov/legislation/dmca.pdf</a>,
                        we will respond expeditiously to claims of copyright infringement committed using our service
                        that are reported to our Designated Copyright Agent identified in the sample notice below.</p>

                    <p>If you are a copyright owner, or are authorized to act on behalf of one or authorized to act
                        under any exclusive right under copyright, please report alleged copyright infringements taking
                        place on or through the site and service (collectively the "Service") by completing the
                        following DMCA Notice of Alleged Infringement and delivering it to our Designated Copyright
                        Agent.</p>

                    <p>Upon receipt of Notice as described below, our Designated Copyright Agent will take whatever
                        action, in its sole discretion, it deems appropriate, including removal of the challenged use
                        from the Service and/or termination of the user's account in appropriate circumstances.</p>

                    <p><strong>DMCA Notice of Alleged Infringement ("Notice")</strong></p>
                    <ol class="entry-list">
                        <li>Identify the copyrighted work that you claim has been infringed, or - if multiple
                            copyrighted works are covered by this Notice - you may provide a representative list of the
                            copyrighted works that you claim have been infringed.
                        </li>
                        <li>Identify the material or link you claim is infringing (or the subject of infringing
                            activity) and that access to which is to be disabled, including at a minimum, if applicable,
                            the URL of the link shown on the Service where such material may be found.
                        </li>
                        <li>Provide your mailing address, telephone number, and, if available, email address.</li>
                        <li>Include both of the following statements in the body of the Notice:
                            <ul class="entry-list">
                                <li>"I hereby state that I have a good faith belief that the disputed use of the
                                    copyrighted material is not authorized by the copyright owner, its agent, or the law
                                    (e.g., as a fair use)."
                                </li>
                                <li>"I hereby state that the information in this Notice is accurate and, under penalty
                                    of perjury, that I am the owner, or authorized to act on behalf of the owner, of the
                                    copyright or of an exclusive right under the copyright that is allegedly infringed."
                                </li>
                            </ul>
                        </li>
                        <li>Provide your full legal name and your electronic or physical signature.</li>
                    </ol>
                    <ul class="entry-list">
                        <li>Deliver this Notice, with all items completed, to our Designated Copyright Agent:<br>
                            <blockquote>
                                <p>Copyright Agent<br> c/o eBook Library<br>
                                    a/n Kenneth Malamed.                                    <br> <a href="https://goo.gl/forms/vnX09gBf78xy8C6P2" class="__cf_email__" data-cfemail="442f212a2a21302c6a29252825292120042329252d286a272b29">[Contact Form]</a></a>
                            </blockquote>
                        </li>
                    </ul>
                    <p><strong>Counter Notices</strong></p>

                    <p>One who has posted material that allegedly infringes a copyright may send our Designated
                        Copyright Agent a counter notice pursuant to Sections 512(g)(2) and 512(g)(3) of the DMCA. When
                        our Designated Copyright Agent receives a counter notice, it may in its discretion reinstate the
                        material in question in not less than 10 nor more than 14 days after it receives the counter
                        notice unless it first receive notice from the copyright claimant that they have filed a legal
                        action to restrain the allegedly infringing activity.</p>

                    <p>To provide a counter notice to our Designated Copyright Agent, please return the following form
                        to the Designated Copyright Agent. Please note that if you provide a counter notice, in
                        accordance with the our Privacy Policy (located at the site) and the terms of the DMCA, the
                        counter notice will be given to the complaining party.</p>

                    <p><strong>COUNTER NOTICE</strong></p>
                    <ol class="entry-list">
                        <li>Identification of the material that has been removed or to which access has been disabled on
                            the service and the location at which the material appeared before it was removed or access
                            to it was disabled:
                        </li>
                        <li>I hereby state under penalty of perjury that I have a good faith belief that the material
                            was removed or disabled as a result of mistake or misidentification of the material to be
                            removed or disabled.
                        </li>
                        <li>Your name, address, telephone number and, if available, email address:</li>
                        <li>I hereby state that I consent to the jurisdiction of the Federal District Court for the
                            judicial district in which my address is located or, if my address is outside of the United
                            States, for any judicial district in which we may be found, and I will accept service of
                            process from the complaining party who notified us of the alleged infringement or an agent
                            of such person.
                        </li>
                        <li>Your physical or electronic signature (full legal name):____________________________</li>
                    </ol>
                    <p>The Counter Notice should be delivered to our Designated Copyright Agent:</p>
                    	<blockquote>
                                <p>Copyright Agent<br> c/o eBook Library<br>
                                    a/n Kenneth Malamed.                                    <br> <a href="https://goo.gl/forms/vnX09gBf78xy8C6P2">[Contact Us]</a></a>
                    	</blockquote>
                    <p><strong>Notification of Trademark Infringement</strong></p>

                    <p>If you believe that your trademark (the "Mark") is being used by a user in a way that constitutes
                        trademark infringement, please provide our Designated Copyright Agent (specified above) with the
                        following information:</p>
                    <ol class="entry-list">
                        <li>Your physical or electronic signature, or a physical or electronic signature of a person
                            authorized to act on your behalf;
                        </li>
                        <li>Information reasonably sufficient to permit it to contact you or your authorized agent,
                            including a name, address, telephone number and, if available, an email address;
                        </li>
                        <li>Identification of the Mark(s) alleged to have been infringed, including
                            <ol class="loroman entrili">
                                <li>for registered Marks, a copy of each relevant federal trademark registration
                                    certificate or
                                </li>
                                <li>for common law or other Marks, evidence sufficient to establish your claimed rights
                                    in the Mark, including the nature of your use of the Mark, and the time period and
                                    geographic area in which the Mark has been used by you;
                                </li>
                            </ol>
                        </li>
                        <li>Information reasonably sufficient to permit our Designated Copyright Agent to identify the
                            use being challenged;
                        </li>
                        <li>A statement that you have not authorized the challenged use, and that you have a good-faith
                            belief that the challenged use is not authorized by law; and
                        </li>
                        <li>A statement under penalty of perjury that all of the information in the notification is
                            accurate and that you are the Mark owner, or are authorized to act on behalf of the Mark
                            owner.
                        </li>
                    </ol>
                    <p>Upon receipt of notice as described above, our Designated Copyright Agent will seek to confirm
                        the existence of the Mark on the Service, notify the registered user who posted the content
                        including the Mark, and take whatever action, in its sole discretion, it deems appropriate,
                        including temporary or permanent removal of the Mark from the Service.</p>

                    <p>A registered user may respond to notice of takedown by showing either (a) that the Mark has been
                        cancelled, or has expired or lapsed or (b) that the registered user has a trademark
                        registration, an unexpired license covering the use, or some other relevant right to the Mark,
                        or (c) that the use is for other reasons shown by the registered user non-infringing. If the
                        registered user makes an appropriate showing of either (a), (b) or (c) then our Designated
                        Copyright Agent may exercise its discretion not to remove the Mark.</p>

                    <p>If our Designated Copyright Agent decides to comply with a takedown request, it will do so within
                        a reasonably expeditious period of time. Notwithstanding the foregoing, our Designated Copyright
                        Agent will comply as appropriate with the terms of any court order relating to alleged trademark
                        infringement on the Service.</p>

                    <p><strong>Notification of Other Intellectual Property ("IP") Infringement</strong></p>

                    <p>If you believe that some other IP right of yours is being infringed by a user, please provide our
                        Designated Copyright Agent (specified above) with the following information:</p>
                    <ol class="entry-list">
                        <li>Your physical or electronic signature, or a physical or electronic signature of a person
                            authorized to act on your behalf;
                        </li>
                        <li>Information reasonably sufficient to permit our Designated Copyright Agent to contact you or
                            your authorized agent, including a name, address, telephone number and, if available, an
                            email address;
                        </li>
                        <li>Identification of the IP alleged to have been infringed, including (i) a complete
                            description or explanation of the nature of the IP, (ii) evidence that you own the IP in the
                            relevant jurisdiction, including copies of relevant patents, registrations, certifications
                            or other documentary evidence of your ownership, and (iii) a showing sufficient for our
                            Designated Copyright Agent to determine without unreasonable effort that the IP has been
                            infringed;
                        </li>
                        <li>Information reasonably sufficient to permit our Designated Copyright Agent to identify the
                            use being challenged;
                        </li>
                        <li>A statement that you have not authorized the challenged use, and that you have a good-faith
                            belief that the challenged use is not authorized by law; and
                        </li>
                        <li>A statement under penalty of perjury that all of the information in the notification is
                            accurate and, that you are the IP owner, or are authorized to act on behalf of the IP owner.
                        </li>
                    </ol>
                    <p>Upon receipt of notice as described above, our Designated Copyright Agent will seek to confirm
                        the existence of the IP on the Service, notify the registered user who posted the content
                        including the IP, and take whatever action, in its sole discretion, it deems appropriate,
                        including temporary or permanent removal of the IP from the Service.</p>

                    <p>A registered user may respond to notice of takedown by showing either (a) that the claimant does
                        not own the IP or (b) that the IP is not infringed. If the registered user succeeds in showing
                        either (a), (b) or (c) then our Designated Copyright Agent may exercise its discretion not to
                        remove the IP.</p>

                    <p>If our Designated Copyright Agent decides to comply with a takedown request, it will do so within
                        a reasonably expeditious period of time.</p>

                    <p><strong>We Have No Obligation to Adjudicate IP Claims - User's Agreement to Hold Us Harmless From
                            Claims</strong></p>

                    <p>Claimants and users must understand that we are not an intellectual property tribunal. While we
                        and our Designated Copyright Agent may in our discretion use the information provided in order
                        to decide how to respond to infringement claims, we are not responsible for determining the
                        merits of such claims. If a user responds to a claim of infringement by providing assurances
                        that its content is not infringing, the user agrees that if we thereafter restore or maintain
                        the content, the user will defend and hold us harmless from any resulting claims of infringement
                        brought against us and our Designated Copyright Agent.</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="contact-us" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Us</h4>
      </div>
      <div class="modal-body">
                    <iframe width="100%" height="500px" src="https://goo.gl/forms/vnX09gBf78xy8C6P2"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--
<script type="text/javascript">
    var delay=2000; //1 second
    setTimeout(function() {
	$(document).ready(function(){
		$("#pop-pdf").modal('show');
	});
    }, delay);
</script>
-->


</body>

</html>