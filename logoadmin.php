﻿<!--./ DB Connection -->
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
            
            
            $selectqry = mysql_query("select * from logo");
            $select_pic = mysql_fetch_array($selectqry);
            
            
            ?>



        </div>
             
             <div class="row">
            
                 
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                      
                <table class="table table-advance table-hover">
                          
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th><i class=" fa fa-flag-o"></i> Picture</th>
                            
                            <th> 
                            
                            <a href="logoinsert.php"><button class="btn btn-app btn-success btn-xs">
                                    <i class="ace-icon fa fa-external-link"></i>
                                        Insert
                                    </button></a>
                            
                            </th>
                                
                        </tr>
                    </thead>
                            

                    <?php

                        do { ?>

                        <tr>
                            <td><?php echo $select_pic['id'];?></td>
                            <td><img src="<?php echo $select_pic['image'];?>" class="img-responsive" style="width:250px; height:100px;"></td>
                            
                            <td>  
                                        
                                <a href="logoupdate.php?id=<?php echo $select_pic['id']; ?>"><button class="btn btn-app btn-info btn-xs">
                                    <i class="ace-icon fa fa-edit"></i>
                                        Edit
                                    </button></a>
                                        
                                <a href="logodelete.php?id=<?php echo $select_pic['id']; ?>"><button class="btn btn-app btn-danger btn-xs">
                                    <i class="ace-icon fa fa-trash-o"></i>
                                        Delete
                                    </button></a>
                            </td>
                        </tr> 

                    <?php }
                    while ($select_pic = mysql_fetch_array($selectqry));
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