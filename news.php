  <!-- Include Header --> 
  <?php
      include('header.php');
  ?>
  <!-- Include Database Configuration --> 
  <?php
      include('nxtsoft/dbconfig.php');
  ?>

  <!-- Banner section -->  
  <section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase">Our News</h4>
        <br>
        <div class="text-white"><a href="<?php echo $GLOBALS['BASE_URL'] ?>index.php" class="text-white">Home</a><i> / </i> News</div>
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="images/media/innerpage/about.jpg" alt="" class="img-responsive"/> </div>
  </section>
  <div class="clearfix"></div>

  <!-- News Listing -->
<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="clearfix"></div>
            <?php
		                $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
                        $q = "SELECT sno,news_title,main_image,short_description FROM mec_news WHERE status=1 GROUP BY created_date DESC";
                        $r = mysqli_query($con, $q);
        
                        $num = mysqli_num_rows($r);
                        while ($row = mysqli_fetch_array($r)) {
                            $sno=$row['sno'];
                            $news_title=$row['news_title'];
                            $main_image = $row['main_image'];
                            $short_description = $row['short_description'];

                            $path = $GLOBALS['NEWS_FOLDER'].$main_image;
                           // echo $path;
echo'
                <div class="col-md-4 col-sm-12 col-xs-12 bmargin sec-bpadding-2"> 
                <img src="'.$path.'" alt="" class="img-responsive" />
                    <div class="col-md-12 no-gutter">
                        <div class="text-box padding-top-5">
                            <h4 class=" raleway"><a href="news-detail.php?sno='.$sno.'">'.$news_title.'</a>
                            </h4>
                            <div class="divider-line solid light"></div><br/>
                            <p>'.$short_description.'</p>                        
                        </div>
                    </div>
                </div>';
            }?>
        </div>
    </div>
</section>
<div class="clearfix"></div>
  
  <!-- Include Footer --> 
  <?php
  include('footer.php');
  ?>
  
