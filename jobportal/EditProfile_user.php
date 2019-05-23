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
	
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

	<style>
	a
	{
	color:#0066FF;
	text-decoration:none;
	
	}
	</style> 	
	<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
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
<li class="dropdown ttmenu-half"><a href="JobSeeker_home.php" >Home </a>

<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Profile <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="jobseeker_prof.php">View Profile</a></li>
<li><a href="jobseeker_prof1.php">Edit profile</a></li>


</ul>
</div>
</div>

</div>

</li>
</ul>
</li>
<li><a href="SearchJob.php">Search Job</a></li>
<li><a href="Applied_Job.php">Applied Job</a></li>
<li><a href="change_password_user.php">Change Password</a></li>
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
<li class="active">Edit Profile</li>
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

<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">var arrFormValidation=
             [
			 		[//Name
						["minlen=1",
		"Please Enter Name"
						  ]
					
                     ],
                   [//Address
						  ["minlen=1",
		"Please Enter Address"
						  ]
						  
                   ],
                   [//City
						["minlen=1",
		"Please Enter City"
						  ] 					  				
                   ],
				   [//Email
						  
						["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]  
                   ],
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ],
						  ["maxlen=10",
		"Please Enter valid Mobile "
						  ] 	  
                   ],
				   [//Qual
						  
						
								 
						  
                   ],
				   
				   [//Gender
						  
						  
                   ],
				   
				   
				   [//User
						  ["minlen=1",
		"Please Enter UserName "
						  ]
						 
						  
                   ],
				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]  
						  
						  
                   ],
				    
					
				   
            ];
</SCRIPT>

<div class="form-group">
<form method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">

						<h2><span><font color="#FB3C04"><center><strong>Profile</strong></center></font> </a></span></h2>
						 
<?php

$ID=$_SESSION['ID'];
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$sel="select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
$res=mysql_query($sel);
while($ar=mysql_fetch_array($res))
{
?>
<table width="78%" align="center" cellpadding="40px" cellspacing="0" class="table table-bordered">

<tr>
                    
                    <tr>
                      <td>JobSeeker Name</td>
                      <td><span id="sprytextfield3">
                        <label>
                        <input type="text" class="form-control" name="txtName" id="txtName" value="<?php echo $ar['JobSeekerName'];?>"/>
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                   
                    <tr>
                      <td>Address</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtAddress" class="form-control" id="txtAddress" cols="20" rows="2"><?php echo $ar['Address'];?></textarea>
                        </label>
                      <span class="textareaRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>City</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" class="form-control" name="txtCity" id="txtCity" value="<?php echo $ar['City'];?>"/>
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td><span id="sprytextfield5">
                        <label>
                        <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="<?php echo $ar['Email'];?>" />
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>Mobile</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" class="form-control" name="txtMobile" id="txtMobile" value="<?php echo $ar['Mobile'];?>"/>
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>Qualification</td>
                      <td><label>
                        <select name="cmbQual" id="cmbQual" class="form-control">
						 <option value="<?php echo $ar['Qualification'];?>"><?php echo $ar['Qualification'];?></option>
                          <option value="B.C.A">B.C.A</option>
                          <option value="M.C.A">M.C.A</option>
                          <option value="B.Sc.I.T">B.Sc.I.T</option>
                          <option value="B.Sc.C.S">B.Sc.C.S</option>
                          <option value="M.Sc.I.T">M.Sc.I.T</option>
                          <option value="M.Sc.C.S">M.Sc.C.S</option>
                          <option value="M.B.A">M.B.A</option>
                          <option value="B.B.A">B.B.A</option>
                          </select>
                      </label></td>
                    </tr>
                    
                      <td>Gender</td>
                      <td><label>
                        <select name="cmbGender" id="cmbGender" class="form-control">
						 <option value="<?php echo $ar['Gender'];?>"><?php echo $ar['Gender'];?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </label></td>
                    </tr>
                    
                   
                    <tr>
                      <td>User Name</td>
                    <td><span id="sprytextfield8">
                        <label>
                        <input type="text" class="form-control" name="txtUserName" id="txtUserName" value="<?php echo $ar['UserName'];?>"/>
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                     <tr>
                    <td>&nbsp;</td>
                    <td><label>
                      <input type="submit" class="form-control btn btn-default" style="width:70px;"  name="sub" id="sub" value="Submit" />
                    </label></td>
                  </tr>
                </table>   

		</div>
<?php		 
}
if(isset($_POST['sub']))
{
$o="Update JobSeeker_Reg set JobSeekerName='".$_POST['txtName']."', Address='".$_POST['txtAddress']."',City='".$_POST['txtCity']."',Email='".$_POST['txtEmail']."',Mobile='".$_POST['txtMobile']."',Qualification='".$_POST['cmbQual']."',Gender='".$_POST['cmbGender']."',UserName='".$_POST['txtUserName']."' where JobSeekId='".$ID."' ";
mysql_query($o);

echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'jobseeker_prof1.php\';</script>';
}

?>


</form>


<script type="text/javascript">
<!--
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
//-->
</script>     
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