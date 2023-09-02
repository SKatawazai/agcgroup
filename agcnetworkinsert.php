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

        </div>
             
             <div class="row">
            
            <?php 
                
                
                if (isset($_POST['insert'])) 
                {
                    $Title = $_POST['title'];
                    $Content = $_POST['content'];
                    
                    $insert = mysql_query("insert into agcnetwork (title,content) values('$Title','$Content')");
                    
                    if($insert)
                    {
                        header('location:agcnetworkadmin.php');
                    }
                    
                }
                
            ?>          
            
            <div class="col-md-12 tablestyle">
                          
                <form method="post" enctype="multipart/form-data">
                    <table width="100%" height="480px"  align="center" class="table-advance table-hover">
                        <div class="form-group">

                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="text"  class="form-control" placeholder="Title" name="title" />
                                    </div>
                                </td>
                            </tr>
            
                            <tr>    
                                <td>
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <textarea cols="10" rows="30" name="content" class="ckeditor form-control"></textarea>
                                    </div>
                                </td>
                            </tr>
                             
                            <tr>
                                <td height="70">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="submit" name="insert" id="" value="Insert" class="form-control btn btn-success">
                                    </div>
                                </td> 
                            </tr>
                        </div>
                    </table>
                </form>
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