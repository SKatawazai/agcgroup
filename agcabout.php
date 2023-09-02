
<!--./ DB Connection -->
<?php 
    
    include('include/connect.php');

    $selectagcabout = mysql_query("select * from agcabout");
    $select_agcabout = mysql_fetch_array($selectagcabout);


    $selectagcaboutimg = mysql_query("select * from imgall where pagename = 'AGC_About'");
    $select_agcaboutimg = mysql_fetch_array($selectagcaboutimg);
    
    ?>

<?php $name = "agcabout"; ?>

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

<div class="row">

  <img src="<?php echo $select_agcaboutimg['image'] ?>" alt="AGC About" style="width: 100%;" />

</div>

<!-- ############################### Slider End ######################################## -->


<!-- ############################### Brief Info Section Start ######################################## -->

<div class="row">
  
  <div class="wrapper row3">
  <main class="hoc container cler"> 
    <div class="group">

    <?php 
        do { ?>

    <h6 class="heading font-x2"><?php echo $select_agcabout['title']; ?></h6>
      <article class="third first">
        <p style="text-align: justify;"><?php echo $select_agcabout['content']; ?></p>


    <?php } while($select_agcabout = mysql_fetch_array($selectagcabout)); ?>

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