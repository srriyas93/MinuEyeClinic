<?php
      include('../nxtsoft/dbconfig.php');
      $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
?>
<!-- Include Header --> 
<?php
      include('../header.php');
  ?>

  <!-- Banner section -->  
  <section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase">Cataract</h4>
        <br>
        <div class="text-white"><a href="index.php" class="text-white">Home</a><i> / </i> Cataract</div>
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="../images/media/innerpage/about.jpg" alt="" class="img-responsive"/> </div>
  </section>
  <div class="clearfix"></div>
  
    <!-- Treatments -->

    <?php
        $q="SELECT title,description,image,rank FROM mec_treatments WHERE category_id=1 AND status=1 ORDER BY rank";
        $r=mysqli_query($con,$q);
        $num=mysqli_num_rows($r);
        if($num==0){
        ?>
          <div class="container">
            <div class="row no-gutter">
              <br><br>
                <h4>No Treatments Records Under the Category</h4>
            </div>
            <div class="clearfix"></div>
            <br><br>
          </div>
          <?php
        }
    ?>
    <section class="sec-padding">
      <div class="container">
        <?php
        while ($row=mysqli_fetch_array($r)) 
        {
          $title=$row['title'];
          $description=$row['description'];
          $image=$row['image'];
          $rank=$row['rank'];

          $path=$GLOBALS['BASE_URL'].$GLOBALS['TREATMENT_FOLDER'].$image;
            ?>
        <div class="row no-gutter">
          <div class="col-md-5"><img src="<?php echo $path; ?>" alt="" class="img-responsive" /></div>
          <div class="col-md-7">
            <div class="text-box padding-left-5">
              <h4 class="raleway"><?php echo $title; ?></h4>
              <br />
              <p><?php echo $description; ?>.</p>
          
            </div>
          </div>
          <div class="clearfix"></div>
          <br><br>
        </div>
        <?php
        } ?>
      </div>
    </section>
    <!--end item -->
    <div class="clearfix"></div>
  
  <!-- Include Footer --> 
  <?php
  include('../footer.php');
  ?>
  
