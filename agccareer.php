
<!--./ DB Connection -->
<?php 
    
    include('include/connect.php');

    $selectagccareer = mysql_query("select * from agccareer");
    $select_agccareer = mysql_fetch_array($selectagccareer);


    $selectagccareerimg = mysql_query("select * from imgall where pagename = 'AGC_Career'");
    $select_agccareerimg = mysql_fetch_array($selectagccareerimg);
    
    ?>

<?php $name = "agccareer"; ?>

<!-- ############################### Head Section Start ######################################## -->
<?php include('include/head.php'); ?>

</head>
<!-- ############################### Head Section Start ######################################## -->


<body id="top">

<!-- ############################### Main content Start ######################################## -->


<!-- ############################### Menu Start ######################################## -->
<?php include('include/menu.php'); ?>
<!-- ############################### Menu End ######################################## -->



<!-- ############################### Slider Start ######################################## -->



<!-- ############################### Slider End ######################################## -->


<!-- ############################### Brief Info Section Start ######################################## -->

<div class="row">
  
  <div class="wrapper row3">
  <main class="hoc container cler"> 
    <div class="group">

    <?php 
        do { ?>

    <h6 class="heading font-x2"><?php echo $select_agccareer['Title']; ?></h6>
      <article class="third first">
        <p style="text-align: justify;"><?php echo $select_agccareer['Description']; ?></p>


    <?php } while($select_agccareer = mysql_fetch_array($selectagccareer)); ?>

      </article>
    </div>

    <div class="clear"></div>
  </main>
</div>

</div>
<!-- ############################### Brief Info Section End ######################################## -->

<hr />







<!-- ############################### Footer Section Start ######################################## -->
<?php include('include/footer.php'); ?>
<!-- ############################### Footer Section End ######################################## -->


<!-- ############################### Main content End ######################################## -->


</body>
</html>