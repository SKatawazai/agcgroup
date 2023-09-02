<!--./ DB Connection -->
<?php 
    
    include('include/connect.php');

    $selectqry = mysql_query("select * from logo");
    $select_pic = mysql_fetch_array($selectqry);

 ?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>AGC_ADMIN PANEL</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="assets/login/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/login/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/login/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/login/css/style.css" />
</head>
<body class="body">
    <div class="container">
    	<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 st-1" style="margin-top:100px;">
        	<img src="<?php echo $select_pic['image']; ?>" class="img-responsive style-1" >


            <span class="col-lg-10 col-lg-offset-1 col-xs-offset-1" style="font-size: 20px; color: red; font-weight: bold;"><?php if(isset($_GET['UnameORpass']) == "error") {echo "Invalid Username OR Password!!!";}?></span>
                               
            <span class="col-lg-10 col-lg-offset-2 col-xs-offset-1" style="font-size: 20px; color: red; font-weight: bold;"><?php if(isset($_GET['login']) == "false") {echo "Sorry you must login first!!!";}?></span>
            
            <form action="AGCLoginCode.php" method="post" accept-charset="utf-8">
            
            <div class="input-group" style="padding:10px 40px 5px 40px ;">
            	<span class="input-group-btn" >
                	<span class="btn btn-success"><div class="glyphicon glyphicon-user" style="color:white"></div></span>
                </span>
                <input type="text" name="username" value="" class="form-control" placeholder="Username"  />

            </div>
            <div style="padding:0px 40px;">
                            </div>
            <div class="input-group" style="padding:10px 40px 5px 40px ;">
            	<span class="input-group-btn" >
                	<span class="btn btn-success"><div class="glyphicon glyphicon-lock" style="color:white"></div></span>
                </span>
                <input type="password" name="password" value="" class="form-control" placeholder="Password"  />
            </div>
            <div style="padding:0px 40px;">
                            </div>
            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:10px 40px 5px 40px ;">
                    <input type="submit" name="submit" value="Login" class="btn btn-block fw btn-success"  />
            </div>
            
            </form>
        
        </div>
    </div>
</body>
</html>