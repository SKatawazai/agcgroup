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
                    
                if (isset($_POST['register'])) 
                {
                    $Username = $_POST['username'];
                    $Password = $_POST['password'];
                    $Email = $_POST['email'];
                    $Confirmpassword = $_POST['confpassword'];
                    $Usertype = $_POST['usertype'];
                    
                    
                    if($Confirmpassword == $Password)
                    {
                        $insertqry = mysql_query("insert into users (username,password,email,user_type) values('$Username','$Password','$Email','$Usertype')");
                        
                        header('location:usersadmin.php');
                    }
                    
                    else if($Confirmpassword != $Password)
                    {
                        $msg = "Sorry Password does not match!"; 
                    }
                    
                }

            ?>          
            
            <div class="col-md-12 tablestyle">
                          
                <form method="post" enctype="multipart/form-data">
                    <table width="100%" height="520px"  align="center" class="table-advance table-hover">
                        <div class="form-group">
                            
                            
                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="text"  class="form-control" placeholder="Username" name="username" />
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="text"  class="form-control" placeholder="Email" name="email" />
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="100%">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="password"  class="form-control" placeholder="Password" name="password" />
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
                                    <input type="text"  class="form-control" placeholder="Usertype" name="usertype" />
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td height="70">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                    <input type="submit" name="register" id="btnsave" value="Insert Data" class="form-control btn-success">
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