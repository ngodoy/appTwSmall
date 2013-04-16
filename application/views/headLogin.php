<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="apptw">
        <meta name="author" content="Nestor Godoy">

        <!-- Le styles -->

        <link href="<?= base_url() ?>css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?= base_url() ?>css/general.css" rel="stylesheet">


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="<?= base_url() ?>js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons 
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">-->
        <link href="<?= base_url() ?>img/icon/ico_twitter.png" rel="shortcut icon" type="image/ico">
        <script src="<?= base_url() ?>js/jquery-1.9.1.min.js"></script>
        <script src="<?= base_url() ?>js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>js/prefixfree.min.js"></script>

    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a class="brand" href="#">Project name</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="<?= base_url() ?>login">Home</a></li>
                            <li><a href="#contact">Filter</a></li>
                            <li><a href="<?= base_url() ?>login/nuevo">nuevo</a></li>
                            <li><a href="<?= base_url() ?>login/cerrar">Close</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>