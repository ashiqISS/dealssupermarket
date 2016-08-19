<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Panel - Deal SuperMarket</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Online super market">
        <meta name="author" content="Intersmart">

        <!-- The styles -->
<!--        <link id="bs-css" href="<?php echo Yii::app()->baseUrl; ?>/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">-->
        <link href="<?php echo Yii::app()->baseUrl; ?>/admin/css/charisma-app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/css/uploadify.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->baseUrl; ?>/admin/css/animate.min.css' rel='stylesheet'>
        <script>
                var baseurl = "<?php print Yii::app()->request->baseUrl . "/admin.php/"; ?>";
                var basepath = "<?php print Yii::app()->basePath; ?>";
        </script>
        <!-- jQuery -->
<!--        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/jquery/jquery.min.js"></script>-->


        <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/admin/img/logo20.png">

    </head>

    <body>
        <!-- topbar starts -->
        <div class="navbar navbar-static" role="navigation">

            <div class="navbar-inner">
                <button type="button" class="navbar-toggle pull-left animated flip">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::app()->baseUrl; ?>/admin.php/site/home"> <img alt="Logo" src="<?php echo Yii::app()->baseUrl; ?>/admin/img/logo.png"/>
                </a>

                <!-- user dropdown starts -->
                <div class="btn-group pull-right">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/site/Logout">Logout</a></li>
                    </ul>
                </div>


                <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                    <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
        <!-- topbar ends -->
        <div class="ch-container">
            <div class="row">

                <!-- left menu starts -->
                <div class="col-sm-2 col-lg-2">
                    <div class="sidebar-nav">
                        <div class="nav-canvas">
                            <div class="nav-sm nav nav-stacked">

                            </div>
                            <ul class="nav nav-pills nav-stacked main-menu">
                                <li class="nav-header">Main</li>
                                <li><a class="ajax-link" href="<?php echo Yii::app()->baseUrl; ?>/admin.php/site/home"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                                </li>
                                <li class="accordion">
                                    <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i><span> Orders</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Child Menu 1</a></li>
                                        <li><a href="#">Child Menu 2</a></li>
                                    </ul>
                                </li>
                                <li class="accordion">
                                    <a href="#"><i class="glyphicon glyphicon-tag"></i><span> Catalog</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/catalog/products/admin">Products</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/catalog/productCategory/admin">Categories</a></li>
                                    </ul>
                                </li>
                                <li class="accordion">
                                    <a href="#"><i class="glyphicon glyphicon-user"></i><span> Users</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="accordion">
                                            <a href="#"><i class="glyphicon glyphicon-plus"></i> <span>Admin Users</span></a>
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/settings/adminPost/admin"> Post</a></li>
                                                <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/settings/adminUser/admin"> Users</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/user/userDetails/admin">Customers</a></li>
                                    </ul>
                                </li>
                                <li><a class="ajax-link" href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/slider/admin"><i class="fa fa-sliders"></i><span> Slider</span></a>
                                </li>
                                <li class="accordion">
                                    <a href="#"><i class="glyphicon glyphicon-file"></i><span> Pages</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/pages/aboutUs">About Us</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/pages/marketFresh">Market Fresh</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/promotion/admin">Promotion</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/gallery/admin">Gallery</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/pages/contactUs">Contact Us</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/pages/update/id/12">Terms & Conditions</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/pages/update/id/13">Privacy Policy</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/pages/update/id/14">Delivery Information</a></li>
                                    </ul>
                                </li>
                                <li><a class="ajax-link" href="<?php echo Yii::app()->baseUrl; ?>/admin.php/cms/banner/admin"><i class="glyphicon glyphicon-picture"></i><span> Banner</span></a>
                                </li>
                                <li class="accordion">
                                    <a href="#"><i class="glyphicon glyphicon-briefcase"></i><span> Masters</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="<?php echo Yii::app()->baseUrl ?>/admin.php/masters/Countries/admin"> Countries</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl ?>/admin.php/masters/States/admin"> States</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl ?>/admin.php/masters/masterGallery/admin"> Gallery Category</a></li>
                                    </ul>
                                </li>



                            </ul>

                        </div>
                    </div>
                </div>
                <!--/span-->
                <!-- left menu ends -->

                <noscript>
                <div class="alert alert-block col-md-12">
                    <h4 class="alert-heading">Warning!</h4>

                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                        enabled to use this site.</p>
                </div>
                </noscript>
                <div id="content" class="col-lg-10 col-sm-10">
                    <?php echo $content; ?></div>
            </div><!--/fluid-row-->

            <!-- Ad, you can remove it -->


            <hr>



            <footer>
                <p class="col-md-8 col-sm-8 col-xs-12 copyright">&copy; 2016</p>

                <p class="col-md-4 col-sm-4 col-xs-12 powered-by">Powered by: <a
                        href="#">Intersmart</a></p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- external javascript -->

<!--        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->

        <!-- library for cookie management -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/jquery.cookie.js"></script>
        <!-- calender plugin -->
        <script src='<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/moment/min/moment.min.js'></script>
        <script src='<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
        <!-- data table plugin -->
        <script src='<?php echo Yii::app()->baseUrl; ?>/admin/js/jquery.dataTables.min.js'></script>

        <!-- select or dropdown enhancer -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/chosen/chosen.jquery.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/colorbox/jquery.colorbox-min.js"></script>
        <!-- notification plugin -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/jquery.noty.js"></script>
        <!-- library for making tables responsive -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/responsive-tables/responsive-tables.js"></script>
        <!-- tour plugin -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
        <!-- star rating plugin -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/charisma.js"></script>


    </body>
</html>
