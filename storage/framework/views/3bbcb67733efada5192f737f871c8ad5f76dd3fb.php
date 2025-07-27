<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reach Into Cultural Heights (RICH)</title>

    <meta name="description" content="Empowering the next generation through education and writing.">

    <meta name="keywords" content="academic accountability, better attitudes and behavior, beign considerate and respectful, learning program, responsibility, selfesteem, students success, technology, understanding using values">

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>
    <link href="css/app.css" rel="stylesheet">

    <style>
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <header>
        <div class="container-fluid top-bar">&nbsp;</div>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Brand</a> -->
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <img class="img-responsive img-center" src="<?php echo e(asset('images/richinc-logo.jpg')); ?>" style="width:210px; height:110px;" alt="Richinc Logo">
                    </a>
                </div>

                <!-- Right Side Of Navbar -->
                <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right main-menu">
                        <li><a href="<?php echo e(url('/')); ?>">About Us</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Our Programs <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(url('#')); ?>">RICH for Success</a></li>
                                <li><a href="<?php echo e(url('#')); ?>">NVLP Essays</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <?php echo $__env->make('flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <footer class="layout-footer">
        <div class="layout-footer__top-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <h6>About Us</h6>

                        <div class="row">
                            <div class="col-xs-6 col-sm-12">
                                <a href="<?php echo e(url('/history')); ?>">Our History</a>
                            </div>
                            <div class="col-xs-6 col-sm-12">
                                <a href="<?php echo e(url('/board')); ?>">Our Board</a>
                            </div>
                            <div class="col-xs-6 col-sm-12">
                                <a href="<?php echo e(url('/team')); ?>">Administration</a>
                            </div>

                            <div class="col-xs-6 col-sm-12">
                                <a href="<?php echo e(url('/finances')); ?>">Finances</a>
                            </div>

                            <div class="col-xs-6 col-sm-12">
                                <a href="<?php echo e(url('/privacy')); ?>">Privacy</a>
                            </div>

                            <?php /* <div class="col-xs-6 col-sm-12">
                                <a href="#">Terms &amp; Conditions</a>
                            </div> */ ?>

                            <div class="col-xs-6 col-sm-12">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h6>Sign up for our newsletter</h6>

                        <?php /* <div class="row">
                            <div id="mc_embed_signup">
                                <form role="form" action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="" _lpchecked="1">
                                    <div class="input-group">
                                        <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address...">
                                        <span class="input-group-btn">
                                            <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default">Go</button>
                                        </span>
                                    </div>
                                    <div id="mce-responses">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                </form>
                            </div>
                        </div> */ ?>

                        <div class="row">
                            <div class="col-md-10">
                                <ul class="list-inline social-buttons">
                                    <li><a href="https://twitter.com/richincorg"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://www.facebook.com/RICHIncOrg"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/company/reach-into-cultural-heights"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/106477086705359351661">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h6>Contact</h6>
                        <div class="row">
                            <div itemscope="" itemtype="http://data-vocabulary.org/Organization" class="col-xs-7 col-md-12 padding-bottom-small">
                                <meta itemprop="name" content="Reach Into Cultural Heights">
                                <span itemprop="address" class="office-address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                    <p>Reach Into Cultural Heights Inc. (RICH)<br>61-43 186th Street<br>Fresh Meadows, NY 11365<br>USA</p>
                                </span>
                                <p itemprop="telephone" class="hidden-xs office-telephone">Tel. (+1) 718-523-4099</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="layout-footer__bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>&copy; 2016 Reach Into Cultural Heights, Inc. 61-43 186th St. Fresh Meadows. NY 11365</p>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
    </footer>

    <!-- JavaScripts -->
    <?php /* // <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> */ ?>
    <?php /* // <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> */ ?>
    <?php /* // <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
    <script type="text/javascript" src="js/app.js"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
