<?php
    if(!isset($_SESSION))
        session_start();
    if(!isset($_SESSION["success"]))
    {   echo "<script>alert('Bạn phải đăng nhập tài khoản có quyền quản trị để vào trang quản trị');</script>"; header("location:index.php");}
    if($_SESSION["quyen"]!=1)
    {   echo "<script>alert('Tài khoản này không được quyền truy cập trang quản trị');</script>"; header("location:index.php");}
?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang quản trị</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" type="text/css" href="css/Logi.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background: #ffffff">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
<?php 
        echo "
            <li>Xin chào, <strong>{$_SESSION['hoten']}</strong> đến với trang quản trị</li>
            <li><a href='index.php?mod=User&act=logout'>Đăng xuất</a></li>";
?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="admin.php?mod=Product&act=QuanLy">Quản lý sản phẩm</a></li>
                        <li><a href="admin.php?mod=User&act=QuanLy">Quản lý user</a></li>
                        <li><a href="admin.php?mod=Category&act=QuanLy">Quản lý loại nón</a></li>
                        <li><a href="admin.php?mod=Order&act=QuanLy">Quản lý hóa đơn</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

<?php
    if(isset($_GET["mod"]))
    {
        include_once("Controller/".$_GET['mod']."/".$_GET['act'].'.php');
    }
    else
    {
        include_once("Controller/Product/QuanLy.php");
    }
?>

    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><a href="index.html"><img src="img/logo.png"></a></h2>
                        <p>ARROW SHOP tự hào là một trong những cửa hàng tiên phong về xu hướng mũ bảo hiểm 3/4 và thời trang Vintage tại Việt Nam. Trong quá trình thành lập và phát triển, nhờ vào sự nỗ lực và cố gắng không ngừng của đại gia đình Arrow, sự giúp đỡ anh em bạn bè và trên hết là sự ủng hộ chân thành, niềm tin của quý khách hàng dành cho chúng tôi. </p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">DỊCH VỤ KHÁCH HÀNG</h2>
                        <ul>
                            <li><a href="#">Nhượng Quyền</a></li>
                            <li><a href="#">Nhà Phân Phối</a></li>
                            <li><a href="#">Dealer</a></li>
                            <li><a href="#">Cộng Tác Viên</a></li>
                            <li><a href="#">Tuyển Dụng</a></li>
                        </ul>                        
                    </div>
                </div>
                    
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">HỖ TRỢ KHÁCH HÀNG</h2>
                        <ul>
                            <li><a href="contact.html">GIỚI THIỆU VỀ ARROW SHOP</a></li>
                            <li><a href="contact.html">THÔNG TIN CHI TIẾT VỀ ARROW SHOP</a></li>
                            <li><a href="#">Chính sách vận chuyển</a></li>
                            <li><a href="#">Chính sách đổi trả</a></li>
                            <li><a href="#">Chính sách thanh toán</a></li>
                            <li><a href="#">Tin tức</a></li>
                        </ul>                        
                    </div>
                </div>  
            </div>
        </div>
    </div> <!-- End footer top area -->
        
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>Copyrights © 2017 by Suplo. Powered by Haravan</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
    <!-- Latest jQuery form server -->

    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>