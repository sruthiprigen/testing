<?php
session_start();
if (!isset($_SESSION)) 
{
  
  $a=$_SESSION['dd'];
if($a=="")
{
header("location:index.php");
}
}
?>



<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!--  33:43  -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<title>Job Portal |Job Portal Site</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="images/apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="images/xapple-touch-icon-72x72.png.pagespeed.ic.lf5d8kCpOf.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="images/xapple-touch-icon-76x76.png.pagespeed.ic.ATZZpSeito.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="images/xapple-touch-icon-114x114.png.pagespeed.ic.Fi5O5s2tzL.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="images/xapple-touch-icon-120x120.png.pagespeed.ic.uPQH0sygdV.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="images/xapple-touch-icon-144x144.png.pagespeed.ic.yZ9-_sm5OF.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="images/xapple-touch-icon-152x152.png.pagespeed.ic.gThaVrKtXF.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="images/xapple-touch-icon-180x180.png.pagespeed.ic.Q8Pmsj5fQM.png"/>
<link rel="stylesheet" type="text/css" href="rs-plugin/css/A.settings.css.pagespeed.cf.xeOyGChsgq.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="A.fonts%2c%2c_font-awesome-4.3.0%2c%2c_css%2c%2c_font-awesome.min.css%2bcss%2c%2c_bootstrap.css%2bcss%2c%2c_animate.css%2cMcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css"/>
<link rel="stylesheet" type="text/css" href="css/A.menu.css.pagespeed.cf.0_hLwXzYkZ.css">
<link rel="stylesheet" type="text/css" href="css/A.carousel.css%2bbxslider.css%2cMcc.jgeTii-u52.css.pagespeed.cf.STKSIMl7GF.css"/>
<link rel="stylesheet" type="text/css" href="A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
	a
	{
	color:#0066FF;
	text-decoration:none;
	
	}
	</style>
</head>
<body>
<div id="loader">
<div class="loader-container">
<img src="images/site.gif" alt="" class="loader-site">
</div>
</div>
<div id="wrapper">
<div class="topbar">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<p><i class="fa fa-graduation-cap"></i> Best Job portal.</p>
</div>
<div class="col-md-6 text-right">
<ul class="list-inline">
<li>
<a class="social" href="#"><i class="fa fa-facebook"></i></a>
<a class="social" href="#"><i class="fa fa-twitter"></i></a>
<a class="social" href="#"><i class="fa fa-google-plus"></i></a>
<a class="social" href="#"><i class="fa fa-linkedin"></i></a>
</li>

</ul>
</div>
</div>
</div>
</div>
<header class="header">
<div class="container">
<div class="hovermenu ttmenu">
<div class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="fa fa-bars"></span>
</button>
<div class="logo">
<a class="navbar-brand" href="index-2.html"><img src="images/xlogin-logo.png.pagespeed.ic.rk5LaeLYSz copy.png" style="width:200px;height:30px;" alt=""></a>
</div>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="dropdown ttmenu-half"><a href="Employer_home.php" >Home </a>

<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Profile <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="company_prof.php">View Profile</a></li>
<li><a href="company_prof1.php">Edit profile</a></li>


</ul>
</div>
</div>

</div>

</li>
</ul>
</li>
<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Manage Job <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="InsertJob.php">Add Vacancy</a></li>
<li><a href="update_job.php">Update Vacancy</a></li>
<li><a href="delete_job.php">Delete Vacancy</a></li>

</ul>
</div>
</div>

</div>

</li>
</ul>
</li>
<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Application <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-12">
<div class="box">
<ul>
<li><a href="Application_View.php">View Applicant</a></li>
<li><a href="Approve_User.php">Approve User</a></li>

</ul>
</div>
</div>

</div>
</div>
</li>
</ul>
</li>
<li><a href="change_password.php">Change Password</a></li>
<li><a href="#"></a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

</div>
</div>
</div>
</div>
</header>


<section class="grey section">
<div class="container">
<div class="row">
<div id="content" class="col-md-12 col-sm-12 col-xs-12">
<div class="blog-wrapper">
<div class="row second-bread">
<div class="col-md-6 text-left">
<h1><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">View Applicants</li>
</ol>
</div>
</div>
</div>
</div>


<div class="blog-wrapper">
<div class="blog-desc">
<div class="shop-cart">
<hr class="invis">
<div class="edit-profile">



<form method="post"  enctype="multipart/form-data" id="form2">
<h2><span><a href="#"><center>Personal Information </center></a></span></h2> 
<?php
						 
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$JobseekId=$_GET['JobSeekId'];
$sel = "select * from JobSeeker_Reg where JobSeekId='".$JobseekId."'";
$res=mysql_query($sel);
while($ar=mysql_fetch_array($res))
{

?>

<table class="table table-bordered" border="1" cellpadding="10px">
                  <tr>
                    <td><strong>Name:</strong></td>
                    <td><?php echo $ar['JobSeekerName'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><?php echo $ar['Address'];?></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><?php echo $ar['City'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $ar['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><?php echo $ar['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Highest Qualification:</strong></td>
                    <td><?php echo $ar['Qualification'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Gender:</strong></td>
                    <td><?php echo $ar['Gender'];?></td>
                  </tr>
				  
				  
                </table>
				<td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
				<?php
				}
				?>
				
		
				<?php
									 
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$JobseekId=$_GET['JobSeekId'];	
$res = "select * from application_master where JobSeekId='".$JobseekId."'  ";
$res=mysql_query($sel);
while($ar=mysql_fetch_array($res))
{
?>
				<table class="table table-bordered" border="1" cellpadding="10px">
				<tr>
                    
                   
<td height="41"><strong>Resume</strong></td>
                    <td> 
<img src="img/".$_FILES['Resume']['name'];  alt="no image" /></td>
<td>
<a href="#">view</a></td>
                  </tr>	
				 
				  </table>
				  <?php
				  }
				  ?>	   
		   		   

 <td>&nbsp;</td>

</form>
				
				
				
              
				
				

                  
				<?php
				$Status=$_GET['Status'];
				if($Status=="Apply" )
				{
				?>				
				
				<form id="form1" method="post" >
				<?php
			
$JobId=$_GET['JobId'];
$JobSeekId=$_GET['JobSeekId'];
$AppId=$_GET['AppId'];
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$sel="select Status,InterviewDate from Application_Master where ApplicationId='".$AppId."'  ";
$res=mysql_query($sel);
while($ar=mysql_fetch_array($res))
{

?>
<table class="table table-bordered" border="1" cellpadding="10px">
<tr>
                    <td><strong>Interview Date</strong></td>
                    <td><input type="date" name="txtInterviewDate" id="txtInterviewDate" value="<?php echo $ar['InterviewDate'];?>" /></td>
                  
				  <td><label>
                      <input type="submit" name="sub" id="sub" value="Approve" class="form-control btn btn-default" style="width:100px;"/><br /><br />
					  <input type="submit" name="sub1" id="sub1" value="Reject" class="form-control btn btn-default" style="width:100px;" />
                    </label></td>
                  </tr>
                </table>             

		
		 <?php
}
if(isset($_POST['sub']))
{
$Status="Approve";
$o="Update Application_Master  set Status='".$Status."', InterviewDate='".$_POST['txtInterviewDate']."' where ApplicationId='".$AppId."' ";
				
	
mysql_query($o);	
echo '<script type="text/javascript">alert("Approve Succesfully");window.location=\'Application_View.php\';</script>';
	  
}



if(isset($_POST['sub1']))
{
$Status="Reject";
$o="Update Application_Master  set Status='".$Status."', InterviewDate='".$_POST['txtInterviewDate']."' where ApplicationId='".$AppId."' ";
				
	
mysql_query($o);	
echo '<script type="text/javascript">alert("Reject Succesfully");window.location=\'Application_View.php\';</script>';
	  
}

?>	
				
				
				
                
                 
           
              
			  
                
				  
				  
              </form>
                 <?php
				 }
				 ?>
                        
						
						
		


      </div>                
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>								
							


<footer class="dark footer section">
<div class="container">
<div class="row">
<div class="col-md-3 col-md-6 col-xs-12">
<div class="widget">
<div class="widget-title">
<h4>About Job Portal</h4>
<hr>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...</p>
<a href="#" class="btn btn-default">Read More</a>
</div>
</div>
<div class="col-md-3 col-md-6 col-xs-12">
<div class="widget">
<div class="widget-title">
<h4>Recent Tweets</h4>
<hr>
</div>
<div class="twitter-widget">
<ul class="latest-tweets">
<li>
<p><a href="#" title="">@Mark</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
<span>2 hours ago</span>
</li>
<li>
<p><a href="#" title=""></a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
<span>2 hours ago</span>
</li>
</ul>
</div>
</div>
</div>
<div class="col-md-3 col-md-6 col-xs-12">
<div class="widget">
<div class="widget-title">
<h4>Popular Courses</h4>
<hr>
</div>
<ul class="popular-courses">
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_01.png.pagespeed.ic.2iuJZT3CaV.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_02.png.pagespeed.ic.c6RThoxSWC.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_03.png.pagespeed.ic.E_Ew4wn4ZP.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_04.png.pagespeed.ic.NGi9jRXTXk.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_05.png.pagespeed.ic.2iuJZT3CaV.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_06.png.pagespeed.ic.o2Uniwq-y5.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_07.png.pagespeed.ic.H-fRTeeP8u.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_08.png.pagespeed.ic.76ek5JLaEY.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_09.png.pagespeed.ic.FJcG938KC-.png" alt=""></a>
</li>
</ul>
</div>
</div>
<div class="col-md-3 col-md-6 col-xs-12">
<div class="widget">
<div class="widget-title">
<h4>Contact Details</h4>
<hr>
</div>
<ul class="contact-details">
<li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
<li><i class="fa fa-envelope"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
<li><i class="fa fa-phone"></i> +90 123 45 67</li>
<li><i class="fa fa-fax"></i> +90 123 45 68</li>
<li><i class="fa fa-home"></i>  INC 22 Elizabeth Str. Melbourne. Victoria 8777.</li>
</ul>
</div>
</div>
</div>
</div>
</footer>
<section class="copyright">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<p><a href="https://www.templatespoint.net" target="_blank">Job Portal</a></p>
</div>
<div class="col-md-6 text-right">
<ul class="list-inline">
<li><a href="#">Terms of Usage</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Sitemap</a></li>
</ul>
</div>
</div>
</div>
</section>
</div>
<script src="js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
<script src="js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script><script>eval(mod_pagespeed_gFRwwUbyVc);</script>
<script>eval(mod_pagespeed_rQwXk4AOUN);</script>
<script>eval(mod_pagespeed_U0OPgGhapl);</script>
<script src="js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js"></script><script>eval(mod_pagespeed_6Ja02QZq$f);</script>
<script>eval(mod_pagespeed_KxQMf5X6rF);</script>
<script src="rs-plugin/js/jquery.themepunch.tools.min.js.pagespeed.jm.0PLSBOOLZa.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script>jQuery(document).ready(function(){jQuery('.tp-banner').show().revolution({dottedOverlay:"none",delay:16000,startwidth:1170,startheight:620,hideThumbs:200,thumbWidth:100,thumbHeight:50,thumbAmount:5,navigationType:"none",navigationArrows:"solo",navigationStyle:"preview3",touchenabled:"on",onHoverStop:"on",swipe_velocity:0.7,swipe_min_touches:1,swipe_max_touches:1,drag_block_vertical:false,parallax:"mouse",parallaxBgFreeze:"on",parallaxLevels:[10,7,4,3,2,5,4,3,2,1],parallaxDisableOnMobile:"off",keyboardNavigation:"off",navigationHAlign:"center",navigationVAlign:"bottom",navigationHOffset:0,navigationVOffset:20,soloArrowLeftHalign:"left",soloArrowLeftValign:"center",soloArrowLeftHOffset:20,soloArrowLeftVOffset:0,soloArrowRightHalign:"right",soloArrowRightValign:"center",soloArrowRightHOffset:20,soloArrowRightVOffset:0,shadow:0,fullWidth:"on",fullScreen:"off",spinner:"spinner4",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",forceFullWidth:"off",hideThumbsOnMobile:"off",hideNavDelayOnMobile:1500,hideBulletsOnMobile:"off",hideArrowsOnMobile:"off",hideThumbsUnderResolution:0,hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,startWithSlide:0,fullScreenOffsetContainer:""});});</script>
<script src="js/bxslider.js.pagespeed.jm.X-sF7YFq4Y.js"></script>
<script type="text/javascript">(function($){"use strict";$('.bxslider').bxSlider({mode:'vertical',minSlides:1,maxSlides:1,slideMargin:0,pager:false,nextText:'<i class="fa fa-arrow-down"></i>',prevText:'<i class="fa fa-arrow-up"></i>',speed:1000,auto:true});})(jQuery);</script>
</body>

<!--  38:47  -->
</html>