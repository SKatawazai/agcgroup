<!--./ DB Connection -->
<?php include('include/connect.php'); ?>

<!--./ Head start -->
<?php include('adminpanel/include/head.php'); ?>

<!--./ Session checking -->
<?php include('adminpanel/include/sessioncheck.php'); ?>


    

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


            <?php

                $selectqry = mysql_query("select * from users");
                $selectdata = mysql_fetch_array($selectqry);

            ?>


            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 tablestyle">
                      
                <table class="table table-advance table-hover table-bordered">
                          
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th><i class="fa fa-user"></i> Username</th>
                            <th><i class=" fa fa-bookmark-o"></i> Password</th>
                            <th><i class="fa fa-envelope-o"></i> Email</th>
                            <th> 
                            
                            <a href="usersinsert.php"><button class="btn btn-app btn-success btn-xs">
                                    <i class="ace-icon fa fa-external-link"></i>
                                        Register
                                    </button></a>
                            
                            </th>
                                
                        </tr>
                    </thead>
                            

                    <?php
                            
                        do { ?>

                        <tr>
                            <td><?php echo $selectdata['user_id'];?></td>
                            <td><?php echo $selectdata['username'];?></td>
                            <td><?php echo $selectdata['password'];?></td>
                            <td><?php echo $selectdata['email'];?></td>
                                  
                            <td>  
                                        
                                <a href="usersupdate.php?id=<?php echo $selectdata['user_id']?>"><button class="btn btn-app btn-info btn-xs">
                                    <i class="ace-icon fa fa-edit"></i>
                                        Edit
                                    </button></a>
                                        
                                <a href="usersdelete.php?id=<?php echo $selectdata['user_id']?>"><button class="btn btn-app btn-danger btn-xs">
                                    <i class="ace-icon fa fa-trash-o"></i>
                                        Delete
                                    </button></a>
                            </td>
                        </tr> 

                    <?php }
                    while ($selectdata = mysql_fetch_array($selectqry));
                    ?>

                </table>
            </div>

        </div>              
             <div class="row"></div>
            



    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->

    <!--./ Footer start -->
    <?php include('adminpanel/include/footer.php'); ?>
  
</body>
</html>