<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- 
    Stone Template
    http://www.templatemo.com/preview/templatemo_452_stone
    -->
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="css/normalize.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="css/templatemo-style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
 
</head>


 <!-- HEADER -->
 <div class="site-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">Stone</a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="promotion.html">Promotion</a></li>
                            <li><a href="products.html">Products</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </nav>         
            </div>
        </div>
    </div> <!-- .site-header -->
    
    @yield('content')
    
    <!-- footer -->

    <div class="fourth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>NEW PRODUCT PROMOTION ?</h2>
                    <a href="contact.html">(BE THERE RIGHT NOW)</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social">
                        <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                        <li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
                        <li class="rss"><a href="#" class="fa fa-rss"></a></li>
                        <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    <p>Copyright &copy; 2084 Company Name</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>    
    
</body>
</html>

