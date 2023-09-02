
<!--./ DB Connection -->
    <?php 
    
    include('include/connect.php');

    $selectqry = mysql_query("select * from homeabout");
    $select_homeabout = mysql_fetch_array($selectqry);
    
    ?>

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
<?php include('include/slider.php'); ?>
<!-- ############################### Slider End ######################################## -->


<!-- ############################### Brief Info Section Start ######################################## -->

<div class="row">
  
  <div class="wrapper row3">
  <main class="hoc container cler"> 
    <div class="group">

    <h6 class="heading font-x2"><?php echo $select_homeabout['title']; ?></h6>
    <div class="col-md-3">
      <article class="one_third first">
        

        <img src="<?php echo $select_homeabout['image']; ?>" class="img img-responsive" style="width: 350px; height: 300px;" />
        
      </article>
    </div>

    <div class="col-md-9 col-sm-12 col-xs-12">
      <div class="two_third">
        <ul class="nospace group elements">
          <li class="first">
            <article>
              <p style="text-align: justify;"><?php echo $select_homeabout['content']; ?></p>
              <footer><a class="btn" href="agcgroup.php">Read More &raquo;</a></footer>
            </article>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>

</div>
<!-- ############################### Brief Info Section End ######################################## -->

<hr />

<!-- ############################### Products Section Start ######################################## -->
<div class="row">

<div class="wrapper row3">
  <section class="hoc container clear">
    <ul class="nospace group services">
      <li class="one_half first">
        <article class="infobox">
          <p> <img src="images/Home/AlokozayCola.jpg" alt="Alokozay Cola"> </p>
          <h3>Alokozay Cola</h3>
          <p>Alokozay Range of CSD Beverages are refreshing, electrifying and cool, the ultimate drink to beat the heart. Cola, Cola Light, Breeze, Magic, WOW – Now available in Afghanistan Market.</p>
        </article>
      </li>
      <li class="one_half">
        <article class="infobox">
          <p> <img src="images/Home/AlokozayEnergy.jpg" alt="AlokozayEnergy"> </p>
          <h3>Alokozay Energy</h3>
          <p>Get the bursting shot of power with Alokozay Energy and Alokozay Energy Sugar Free. Now available in Afghanistan Market</p>        </article>
      </li>
    </ul>
    <div class="clear"></div>
  </section>
</div>
</div>
<!-- ############################### Products Section End ######################################## -->

<hr />

<!-- ############################### Quick Access Section Start ######################################## -->
<?php include('include/quickaccess.php'); ?>
<!-- ############################### Quick Access Section End ######################################## -->


<!-- ############################### Footer Section Start ######################################## -->
<?php include('include/footer.php'); ?>
<!-- ############################### Footer Section End ######################################## -->


<!-- ############################### Main content End ######################################## -->


</body>
</html>