
<?php

    include("include/connect.php");
   
    //include('adminpanel/include/sessioncheck.php');


    
	if(isset($_GET['id'])) 
    {
        $id = $_GET['id'];


        $selectslider = mysql_query("select * from slider where id='$id'");

        $slider_fetch = mysql_fetch_assoc($selectslider);
        
        $img = $slider_fetch['image'];
        

        $deleteqry = mysql_query("delete from slider where id='$id'");
        
        if ($deleteqry)
        {
        	header('location:slideradmin.php');
        }

        unlink($img);
    }


?>
