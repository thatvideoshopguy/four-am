<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
    <meta name="description" content="<?php echo config('blog.description')?>" />
    <link rel="shortcut icon" href="<?php echo site_url() ?>img/favicon.ico">
    
    <title>
        <?php echo isset($title) ? _h($title) : config( 'blog.title') ?>
    </title>

    <!-- Core CSS -->
    <link href="<?php echo site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" />

    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

    <!-- TOP NAVBAR -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <div class="brand">
                    <a href="<?php echo site_url() ?>">
                        <?php echo config( 'blog.title') ?>
                    </a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" id="display" class="display">next<br><span class="glyphicon glyphicon-chevron-down"></span></a>
                    </li>
                    <li><a href="#" id="display1" class="display">prev<br><span class="glyphicon glyphicon-chevron-up"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ENTRIES + FOOTER (see main.html.php) -->
    <div class="container-fluid">
        <?php echo content()?>
    </div>

    <!-- Core jQuery -->
    <script src="<?php echo site_url() ?>assets/js/jquery1.10.2.min.js"></script>
    <script src="<?php echo site_url() ?>assets/js/modernizr.min.js"></script>
    <script src="<?php echo site_url() ?>assets/js/bootstrap.min.js"></script>
<!--
    <script>
       $('#div0').addClass('current'); 
    </script>-->
    
    <!-- Additional jQuery -->
    <script src="<?php echo site_url() ?>assets/js/main.js"></script>

    <!-- Script to ID elements -->
    <script>
        jQuery('img').parent('p').addClass('big');
        $("blockquote").addClass("well");
    </script>
    
    <!-- Script for Next/Prev Buttons -->
    <script>
       
    </script>

</body>

</html>