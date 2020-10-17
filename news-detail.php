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
        <div class="text-white"><a href="#" class="text-white">Home</a><i> / </i> <a href="#" class="text-white">News</a> <i> / </i>New Title</div>
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="images/media/innerpage/about.jpg" alt="" class="img-responsive"/> </div>
  </section>
  <div class="clearfix"></div>

  <!-- News section -->
  <section class="sec-padding">
    <div class="container">
    <?php
                    $sno=$_GET['sno'];
		                $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
                        $q = "SELECT news_title,main_image,news_content FROM mec_news WHERE sno=$sno";
                        $r = mysqli_query($con, $q);
        
                        $num = mysqli_num_rows($r);
                        while ($row = mysqli_fetch_array($r)) {
                            $news_title=$row['news_title'];
                            $main_image = $row['main_image'];
                            $news_content = $row['news_content'];

                            $path = $GLOBALS['NEWS_FOLDER'].$main_image;
                            //echo $path;
echo' <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 bmargin">
              <div class="blog-holder-12">
                <div class="image-holder">
                  <img class="img-responsive" alt="" src="'.$path.'"> 
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 bmargin">
              <h3 class="less-mar1">'.$news_title.'</h3>
              <br/>
              <p>'.$news_content.'</p>
              <br/>
              <div class="clearfix"></div>
            </div>
      </div>';
    }?>
    </div>
  </section>
  <div class="clearfix"></div>

  <!-- Include Footer --> 
  <?php
  include('footer.php');
  ?>