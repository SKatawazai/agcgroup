
<?php

    include("include/connect.php");
   
    //include('adminpanel/include/sessioncheck.php');


    
	if(isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        

        $deleteqry = mysql_query("delete from homeabout where id='$id'");
        
        if ($deleteqry)
        {
        	header('location:homeaboutadmin.php');
        }

    }


?>
