<?php
    include("config.php");
    $res = mysql_query("select * from researches", $conn);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="css/colors.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title> ESEL - Researches</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header dark" data-sticky-class="not-dark">
        			<?php include('header.php'); ?>
		</header><!-- #header end -->
            
            
	        	<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('res/research_background.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
			<div class="container clearfix">
				<h1>Researches</h1>
				<span> ESEL에서 진행하고 있는 프로젝트 및 연구 주제들 입니다.</span>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
		
			<div class="heading-block center">
				<br/><br/><br/>
				<h4>수행 과제</h4>
			</div>
			<?php 
			$index =1;
			 while($row = mysql_fetch_array($res)){
		                           if($row['RESEARCH_CATEGORY'] == 1){
		                           	if($index%2 == 1){
			?>
			<div class="row common-height clearfix">
				
				<div class="hidden-xs col-sm-5 col-padding" style="background: url('admin/<?php echo $row['RESEARCH_PICT_URI'];?>') center center no-repeat; background-size: cover;"></div>
				
				<div class="col-sm-7 col-padding" style="background-color: #F5F5F5;">
					<div>
						<div class="heading-block">
							<span class="before-heading color"><?php echo $row['RESEARCH_SPONSER']?></span>
							<h3><?php echo $row['RESEARCH_TOPIC']?></h3>
							<span><i class="icon-calendar"></i> <?php echo $row['RESEARCH_TERM']?></span>
						</div>

						<div class="row clearfix" >

							<div class="col-md-12">
								<?php echo $row['RESEARCH_DESC']?>	
								
							</div>

						</div>

					</div>
				</div>
			</div>
			<?php }else{ ?>
			<div class="row common-height clearfix">
				<div class="col-sm-7 col-padding" style="background-color: #FFFFFF;">
					<div>
						<div class="heading-block">
							<span class="before-heading color"><?php echo $row['RESEARCH_SPONSER']?></span>
							<h3><?php echo $row['RESEARCH_TOPIC']?></h3>
							<span><i class="icon-calendar"></i> <?php echo $row['RESEARCH_TERM']?></span>
						</div>

						<div class="row clearfix" >

							<div class="col-md-12">
								<?php echo $row['RESEARCH_DESC']?>	
								
							</div>

						</div>

					</div>
				</div>
				
				<div class="hidden-xs col-sm-5 col-padding" style="background: url('admin/<?php echo $row['RESEARCH_PICT_URI'];?>') center center no-repeat; background-size: cover;"></div>
			</div>
			<?php } ?>
			<?php 
				} 
				$index++;
			} ?>


		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
        <?php
include('footer.html');
?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>