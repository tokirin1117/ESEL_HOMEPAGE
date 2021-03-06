<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <link rel="stylesheet" href="../css/dark.css" type="text/css" />
    <link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="../css/animate.css" type="text/css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="../css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>ESEL-ADMIN HOME</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">
        <!-- Top Bar
        ============================================= -->


        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>ESEL ADMIN LOGIN PAGE</h1>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">
              <div class="container clearfix">

                <div class="col_three_third col_last nobottommargin">
                  <form enctype="multipart/form-data" id="admin-login" name="admin-login" class="nobottommargin" action="login.php" method="post" onsubmit="return validateForm()">
                   <div class="col_half">
                    <label for="password">비밀번호:</label>
                    <input type="password" name="password" id="password" placeholder="Admin Password" class="form-control" value="">
                  </div>
                  <div class="col_full">
                    <button class="button button-3d button-black nomargin" id="admin-login-submit" name="admin-login-submit" value="register">Login</button>
                  </div>

                 </form>
               </div>
             </div>
          </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <?php include('../footer.html');?>

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="../js/functions.js"></script>

</body>
</html>
