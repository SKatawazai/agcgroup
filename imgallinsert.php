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
                    
                if (isset($_POST['insert'])) 
                {
                    $Pagename = $_POST['pagename'];
                    $Image = $_FILES['pic'];
                    
                    $picpath = "imgall/".$_FILES['pic']['name'];
                    move_uploaded_file($_FILES['pic']['tmp_name'],"imgall/".$_FILES['pic']['name']);

                    $insertqry = mysql_query("insert into imgall (pagename,image) values('$Pagename','$picpath')");
                    
                    if($insertqry)
                    {
                        header('location:imgalladmin.php');
                    }

                }

            ?>          
            
            <div class="col-md-12 tablestyle">
                          
                <form method="post" enctype="multipart/form-data">
                    <table width="100%" height="220px"  align="center" class="table-advance table-hover">
                        <div class="form-group">
                            
                            
                              <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="file"  class="form-control"  name="pic" />
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="text"  class="form-control" placeholder="Pagename" name="pagename" />
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td height="70">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="submit" name="insert" id="btnsave" value="Insert Data" class="form-control btn btn-success">
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