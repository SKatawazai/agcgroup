<!--./ DB Connection -->
<?php include('include/connect.php'); ?>

<!--./ Head start -->
<?php include('adminpanel/include/head.php'); ?>


<?php
    
    session_start();

    if(!isset($_SESSION['login']))
    {
        header('location:AGCLogin.php?login=false');
    }

    if($_SESSION['type'])
    {
        $user_type = $_SESSION['type'];
        $_SESSION['type'] = $user_type;
    }

?>

</head>
<body>
    
    <!--./ Menu start -->
    <?php include('adminpanel/include/menu.php'); ?>
    
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
             <div class="row">

                    <?php if($user_type=='user') { ?><?php } ?>
                    <?php if($user_type=='admin') { ?>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="alert alert-danger back-widget-set text-center">
                        
                            <i class="fa fa-user fa-5x"></i>
                        <a href="usersadmin.php"><h3>New User</h3>
                        </a>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="alert alert-danger back-widget-set text-center">
                      
                            <i class="fa fa-camera-retro fa-5x"></i>
                        <a href="logoadmin.php"><h3>Logo</h3>
                        </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="alert alert-danger back-widget-set text-center">
                      
                            <i class="fa fa-image fa-5x"></i>
                        <a href="slideradmin.php"><h3>Slider</h3>
                        </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="alert alert-danger back-widget-set text-center">
                      
                            <i class="fa fa-home fa-5x"></i>
                        <a href="homeaboutadmin.php"><h3>Home</h3>
                        </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="alert alert-danger back-widget-set text-center">
                    <i class="fa fa-spinner fa-spin fa-5x"></i>
                        <a href="agcaboutadmin.php"><h3>About Us</h3>
                        </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="alert alert-danger back-widget-set text-center">
                      
                            <i class="fa fa-book fa-5x"></i>
                        <a href="agcnetworkadmin.php"><h3>AGC Network</h3>
                        </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="alert alert-danger back-widget-set text-center">
                      
                            <i class="fa fa-user fa-5x"></i>
                        <a href="agccareeradmin.php"><h3>AGC Career</h3>
                        </a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="alert alert-danger back-widget-set text-center">
                      
                            <i class="fa fa-tasks fa-5x"></i>
                        <a href="agcgroupadmin.php"><h3>AGC Group</h3>
                        </a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="alert alert-danger back-widget-set text-center">
                      
                            <i class="fa fa-camera-retro fa-5x"></i>
                        <a href="imgalladmin.php"><h3>All Images</h3>
                        </a>
                        </div>
                    </div>

                  
                      
                            

                    </div>
        </div>              
            
            



    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    
    <!--./ Footer start -->
    <?php include('adminpanel/include/footer.php'); ?>
  
</body>
</html>