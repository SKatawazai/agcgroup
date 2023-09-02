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

    if(isset($_GET['id'])) 
    {
        $id = $_GET['id'];

        $selectquery = mysql_query("select * from logo where id='$id'");
        $selectfetchdata = mysql_fetch_array($selectquery);

    }


    if (isset($_POST['update'])) 
    {
        $picture = $_FILES['pic'];
        
        $picpath = "logo/".$_FILES['pic']['name'];
        move_uploaded_file($_FILES['pic']['tmp_name'],"logo/".$_FILES['pic']['name']);

        $update_picqry = mysql_query("update logo set image='$picpath' where id='$id'");

        if ($update_picqry)
        {
            header('location:logoadmin.php');
        }
    }
    
    ?>
        </div>              
             <div class="row"></div>
            
             <div class="col-md-12 tablestyle">
                          
                <form method="post" enctype="multipart/form-data">
                    <table width="100%" height="580px"  align="center" class="table-advance table-hover">
                        <div class="form-group">
                            
                            <tr>
                                <td>
                            <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <img src="<?php echo $selectfetchdata['image']; ?>" style="width:100%" height="400px">
                                </div>
                                </td>
                              </tr>
                            
                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="file"  class="form-control"  name="pic" value="" />
                                    </div>
                                </td>
                            </tr>
                             
                            <tr>
                                <td height="70">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="submit" name="update" id="" value="Update Picture" class="form-control btn btn-success">
                                    </div>
                                </td> 
                            </tr>
                        </div>
                    </table>
                </form>
            </div>


    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->

    <!--./ Footer start -->
    <?php include('adminpanel/include/footer.php'); ?>
  
</body>
</html>