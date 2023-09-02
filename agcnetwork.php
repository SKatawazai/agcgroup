
<!--./ DB Connection -->
    <?php 
    
    include('include/connect.php');

    $selectagcnet = mysql_query("select * from agcnetwork");
    $select_agcnetwork = mysql_fetch_array($selectagcnet);


    $selectagcnetimg = mysql_query("select * from imgall where pagename = 'AGC_Network'");
    $select_agcnetworkimg = mysql_fetch_array($selectagcnetimg);
    
    ?>

<?php $name = "agcnetwork"; ?>

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

  <img src="<?php echo $select_agcnetworkimg['image']; ?>" alt="AGC Network" style="width: 100%;" />

</div>

<!-- ############################### Slider End ######################################## -->


<!-- ############################### Brief Info Section Start ######################################## -->

<div class="row">
  
  <div class="wrapper row3">
  <main class="hoc container cler"> 
    <div class="group">

    <?php 
      do { ?>

    <h6 class="heading font-x2"><?php echo $select_agcnetwork['title']; ?></h6>
      <article class="third first">
        <p style="text-align: justify;"><?php echo $select_agcnetwork['content']; ?></p>
    <?php } while($select_agcnetwork = mysql_fetch_array($selectagcnet)); ?>

      </article>
    </div>

    <div class="clear"></div>
  </main>
</div>

</div>
<!-- ############################### Brief Info Section End ######################################## -->



<!-- ############################### Products Section Start ######################################## -->
<div class="row">

<div class="wrapper row3">
  <section class="hoc container clear">
    <ul class="nospace group services">
      <li class="one_half first">
        <article class="infobox">
        <h3>Alokozay Head Office</h3>
          <p> <img src="images/AGCNetwork/ak_headoffice.jpg" alt="Alokozay Head Office" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            P.O Box 261602, Jebel Ali Free Zone<br />
            Dubai - U.A.E.<br />
            Tel: +971 4 887 1155<br />
            Fax: +971 4 887 1077<br />
            <br /><br />
            Emails:<br />
            info@alokozay.com<br />
            customerservice@alokozay.com<br />
        </article>
      </li>

      <li class="one_half">
        <article class="infobox">
        <h3>Alokozay - United Arab Emirates</h3>
          <p> <img src="images/AGCNetwork/map_uae.jpg" alt="Alokozay UAE" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            P.O Box 261602, Jebel Ali Free Zone<br />
            Dubai - U.A.E.<br />
            Tel: 93 - 20 - 2103842 / 2100247<br />
            Fax: +971 4 887 1077<br />
            <br /><br />
            Emails:<br />
            info@alokozay.com<br />
            customerservice@alokozay.com<br />       
        </article>
      </li>

      <li class="one_half first">
        <article class="infobox">
        <h3>Alokozay - Afghanistan</h3>
          <p> <img src="images/AGCNetwork/ak_headoffice.jpg" alt="Alokozay Afghanistan" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            GULZAR MARKET, 2ND FLOOR MANDAWE JADID,<br />
            KABUL, AFGHANISTAN<br />
            TEL: 93 - 20 - 2103842 / 2100247<br />
            TELEFAX: 93 - 20 - 2100798<br />
            MOBILE: 93 - 79 - 132273<br />  
        </article>
      </li>

      <li class="one_half">
        <article class="infobox">
        <h3>Alokozay - Azerbaijan</h3>
          <p> <img src="images/AGCNetwork/ak_headoffice.jpg" alt="Alokozay Azerbaijan" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            Prospect Street, Nevchilyar, Block 127, Office 17 - BAKU<br />
            contact person:  Mr Omar<br />
            Mob:  + 994-50-2152387<br />
            Tel:  + 994-50-2152387<br />
            Fax:  + 994-12-4934264<br />       
        </article>
      </li>

      <li class="one_half first">
        <article class="infobox">
        <h3>Alokozay Head Office</h3>
          <p> <img src="images/AGCNetwork/ak_headoffice.jpg" alt="Alokozay Head Office" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            P.O Box 261602, Jebel Ali Free Zone<br />
            Dubai - U.A.E.<br />
            Tel: +971 4 887 1155<br />
            Fax: +971 4 887 1077<br />
            <br /><br />
            Emails:<br />
            info@alokozay.com<br />
            customerservice@alokozay.com<br />
        </article>
      </li>

      <li class="one_half">
        <article class="infobox">
        <h3>Alokozay - United Arab Emirates</h3>
          <p> <img src="images/AGCNetwork/map_uae.jpg" alt="Alokozay UAE" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            P.O Box 261602, Jebel Ali Free Zone<br />
            Dubai - U.A.E.<br />
            Tel: +971 4 887 1155<br />
            Fax: +971 4 887 1077<br />
            <br /><br />
            Emails:<br />
            info@alokozay.com<br />
            customerservice@alokozay.com<br />       
        </article>
      </li>

      <li class="one_half first">
        <article class="infobox">
        <h3>Alokozay Head Office</h3>
          <p> <img src="images/AGCNetwork/ak_headoffice.jpg" alt="Alokozay Head Office" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            P.O Box 261602, Jebel Ali Free Zone<br />
            Dubai - U.A.E.<br />
            Tel: +971 4 887 1155<br />
            Fax: +971 4 887 1077<br />
            <br /><br />
            Emails:<br />
            info@alokozay.com<br />
            customerservice@alokozay.com<br />
        </article>
      </li>

      <li class="one_half">
        <article class="infobox">
        <h3>Alokozay - United Arab Emirates</h3>
          <p> <img src="images/AGCNetwork/map_uae.jpg" alt="Alokozay UAE" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            P.O Box 261602, Jebel Ali Free Zone<br />
            Dubai - U.A.E.<br />
            Tel: +971 4 887 1155<br />
            Fax: +971 4 887 1077<br />
            <br /><br />
            Emails:<br />
            info@alokozay.com<br />
            customerservice@alokozay.com<br />       
        </article>
      </li>

      <li class="one_half first">
        <article class="infobox">
        <h3>Alokozay Head Office</h3>
          <p> <img src="images/AGCNetwork/ak_headoffice.jpg" alt="Alokozay Head Office" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            P.O Box 261602, Jebel Ali Free Zone<br />
            Dubai - U.A.E.<br />
            Tel: +971 4 887 1155<br />
            Fax: +971 4 887 1077<br />
            <br /><br />
            Emails:<br />
            info@alokozay.com<br />
            customerservice@alokozay.com<br />
        </article>
      </li>

      <li class="one_half">
        <article class="infobox">
        <h3>Alokozay - United Arab Emirates</h3>
          <p> <img src="images/AGCNetwork/map_uae.jpg" alt="Alokozay UAE" class="img img-responsive" style="width: 100%;" /> </p>
          <h3>Alokozay International Ltd.</h3>
            P.O Box 261602, Jebel Ali Free Zone<br />
            Dubai - U.A.E.<br />
            Tel: +971 4 887 1155<br />
            Fax: +971 4 887 1077<br />
            <br /><br />
            Emails:<br />
            info@alokozay.com<br />
            customerservice@alokozay.com<br />       
        </article>
      </li>

    </ul>
    <div class="clear"></div>
  </section>
</div>
</div>
<!-- ############################### Products Section End ######################################## -->

<hr />

<!-- ############################### Footer Section Start ######################################## -->
<?php include('include/footer.php'); ?>
<!-- ############################### Footer Section End ######################################## -->


<!-- ############################### Main content End ######################################## -->


</body>
</html>