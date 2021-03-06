<?php
session_start();

if(!isset($_SESSION['use']))
{
    // not logged in
    header('Location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="javas/homepage.js">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
</head>



<body>
    <style >
        body{
            background:url(https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg);
        }
    </style>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
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
            <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
                <img src="" alt="HOME"">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
           
            

            <li class="dropdown">
                <a href="profile.php?name=<?php echo $_SESSION['use'];?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['use'];?> <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="profile.php"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                   
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a  data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-user-plus"></i> Create<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="signup.php"><i class="fa fa-angle-double-right"></i> Add patient</a></li>
                        <li><a href="addusers.php"><i class="fa fa-angle-double-right"></i>Add user</a></li>
                        <li><a href="record.php "><i class="fa fa-angle-double-right"></i> Update patient profile</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-user"></i>  Delete  <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="delete.php"><i class="fa fa-angle-double-right"></i> select Patient Id </a></li>
                        
                    </ul>
                </li>
                <li>
                    <a  data-toggle="collapse" data-target="#submenu-3"><i class=""></i> View Patients<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-3" class="collapse">
                        <li><a href="read.php"><i class="fa fa-angle-double-right"></i> view registered patients</a></li>
                        <li><a href="select.php"><i class="fa fa-angle-double-right"></i> view patient profile</a></li>
                        
                    </ul>
                </li>
               
              
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
       
            <!-- Page Heading -->
            
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1>Welcome!</h1>
                   
                </div>
                
            
            
    </div>
    dfghyjuik
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</body>
</html>
