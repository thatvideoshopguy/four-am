<!DOCTYPE html>
<html class="full">

<head>
    <meta charset="utf-8" />

    <title>404 Not Found |
        <?php echo config( 'blog.title') ?>
    </title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
    <meta name="description" content="Oops!"/>

    <link href="<?php echo site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" />

    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center error">
                <h1>This page doesn't exist!</h1>
                <p>Would you like to try our <a href="<?php echo site_url() ?>">homepage</a> instead?</p>
            </div>
        </div>
    </div>
    
     <!-- Core jQuery -->
    <script src="<?php echo site_url() ?>assets/js/jquery1.10.2.min.js"></script>
    <script src="<?php echo site_url() ?>assets/js/modernizr.min.js"></script>
    <script src="<?php echo site_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Additional jQuery -->
    <script src="<?php echo site_url() ?>assets/js/main.js"></script>

</body>

</html>
