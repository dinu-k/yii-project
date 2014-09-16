<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::app()->homeUrl;?>/administrator">Yii Project</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo Yii::app()->user->id; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo Yii::app()->homeUrl;?>/administrator/update/<?php echo Users::model()->find('username=:username',array(':username'=> Yii::app()->user->id))->id; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo Yii::app()->homeUrl;?>/site/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        <a href="<?php echo Yii::app()->homeUrl;?>/administrator"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="">
                        <a href="<?php echo Yii::app()->homeUrl;?>/administrator/users"><i class="fa fa-users fa-1"></i> Users</a>
                    </li>
                    <li class="">
                        <a href="<?php echo Yii::app()->homeUrl;?>/administrator/posts"><i class="fa fa-folder fa-1"></i> Posts</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

<?php echo $content; ?>



        </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/morris/morris-data.js"></script>
    

</body>

</html>
