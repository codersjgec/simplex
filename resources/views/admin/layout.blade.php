<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elementary | {{$title}}</title>

    <!-- Bootstrap Core CSS -->
    <link href="admins/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admins/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="admins/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html">Elementary Admin</a>
            </div>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{route('admin')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('adminlevel')}}"><i class="fa fa-fw fa-desktop"></i> Level Control</a>
                    </li>
                    <li>
                        <a href="{{route('users')}}"><i class="fa fa-fw fa-users"></i> Users</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admins/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admins/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="admins/js/plugins/morris/raphael.min.js"></script>
    <script src="admins/js/plugins/morris/morris.min.js"></script>
    <script src="admins/js/plugins/morris/morris-data.js"></script>

</body>

</html>
