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


        $selectquery = mysql_query("select * from users where user_id='$id'");
        $selectfetchdata = mysql_fetch_array($selectquery);

    }


    if (isset($_POST['update'])) 
    {
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $Email = $_POST['email'];
        $Confirmpassword = $_POST['confpassword'];
        $Usertype = $_POST['usertype'];

    
        if($Confirmpassword == $Password)
        {
            $insertqry = mysql_query("update users set username='$Username',password='$Password',email='$Email',user_type='$Usertype' where user_id='$id'");
                        
            header('location:usersadmin.php');
        }
                    
         else if($Confirmpassword != $Password)
        {
            $msg = "Sorry Password does not match!"; 
        }
                    
    }

    ?>
        </div>              
             <div class="row"></div>
            
             <div class="col-md-12 tablestyle">
                          
                <form method="post" enctype="multipart/form-data">
                    <table width="100%" height="520px"  align="center" class="table-advance table-hover">
                        <div class="form-group">
                            
                            
                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="text"  class="form-control" placeholder="Username" name="username" value="<?php echo $selectfetchdata['username'] ?>" />
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="text"  class="form-control" placeholder="Email" name="email" value="<?php echo $selectfetchdata['email'] ?>" />
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="text"  class="form-control" placeholder="Password" name="password" value="<?php echo $selectfetchdata['password'] ?>" />
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="100%">
                                    
                                    <span style='font-size: 18px; color: red;'><?php if(isset($msg)){ echo $msg; }?></span>
                                    
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="password"  class="form-control" placeholder="Comfirm Password" name="confpassword" />
                                    </div>
                                </td>
                            </tr>
                             
                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="text"  class="form-control" placeholder="Usertype" name="usertype" value="<?php echo $selectfetchdata['user_type'] ?>" />
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td height="70">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="submit" name="update" id="btnsave" value="Insert Data" class="form-control btn-success">
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