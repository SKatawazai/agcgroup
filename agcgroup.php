
<!--./ DB Connection -->
    <?php 
    
    include('include/connect.php');

    $selectagc = mysql_query("select * from agcgroup");
    $select_agcgroup = mysql_fetch_array($selectagc);


    $selectagcgroupimg = mysql_query("select * from imgall where pagename = 'AGC_Group'");
    $select_agcgroupimg = mysql_fetch_array($selectagcgroupimg);
    
    ?>

<?php $name = "agcgroup"; ?>

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

  <img src="<?php echo $select_agcgroupimg['image'] ?>" alt="AGC Group" style="width: 100%;" />

</div>

<!-- ############################### Slider End ######################################## -->


<!-- ############################### Brief Info Section Start ######################################## -->

<div class="row">
  
  <div class="wrapper row3">
  <main class="hoc container cler"> 
    <div class="group">

    <?php 
        do { ?>

    <h6 class="heading font-x2"><?php echo $select_agcgroup['title']; ?></h6>
      <article class="third first">
        <p style="text-align: justify;"><?php echo $select_agcgroup['content']; ?></p>


    <?php } while($select_agcgroup = mysql_fetch_array($selectagc)); ?>

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