    <!-- Include Header --> 
    <?php
        include('header.php');
    ?>
     <!-- Include Database Configuration --> 
  <?php
      include('nxtsoft/dbconfig.php');
      $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');

      $q = "SELECT * FROM mec_banners WHERE status=1 ORDER BY sno DESC";
      $r = mysqli_query($con, $q);
  ?>
    <!-- Banner -->
    <div class="master-slider ms-skin-default" id="masterslider">
      <!-- slide 1 -->
  <?php
      while ($row = mysqli_fetch_array($r))
      {
        $banner_title = $row['banner_title'];
        $banner_image = $row['main_image'];
        $banner_desc = $row['short_description'];
        $link = $row['link_url'];

        $path = $GLOBALS['BASE_URL'].$GLOBALS['BANNER_FOLDER'].$banner_image;
  ?>
        <div class="ms-slide slide-3" data-delay="9">
          <div class="slide-pattern"></div>
          <img src="js/masterslider/blank.gif" data-src="<?php echo $path; ?>"
            alt="" />

          <h3 class="ms-layer text48 text-center no-border" style="top: 230px;" data-type="text" data-delay="500"
            data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> <?php echo $banner_title; ?> </h3>

          <h3 class="ms-layer text49 text-center" style="top: 300px;" data-type="text" data-delay="1000"
            data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> <?php echo $banner_desc; ?> </h3>
    <?php
      if($link !="")
      {
    ?>
          <a href="<?php echo $link; ?>" class="ms-layer sbut21" style="left: 730px; top: 380px;" data-type="text" data-delay="1500"
            data-ease="easeOutExpo" data-duration="1200" data-effect="scale(1.5,1.6)"> Read more </a>
    <?php
     }
    ?>      

        </div>

  <?php
      }
  ?>
      

    </div>
    <div class="clearfix"></div>

    <!-- Categories -->

    <section class="sec-padding">
      <div class="container">
        <div class="row no-gutter">
          <div class="col-md-4 col-sm-12 col-xs-12 text-center bmargin">
            <div class="feature-box-86 bg-color-light"> <img src="images/693.png" alt="" />
              <div class="clearfix"></div>
              <h3 class="text-white paddtop1">Cataract</h3>
              <p class="text-white">A cataract is a dense, cloudy area that forms in the lens of the eye. A cataract begins when proteins in the eye form clumps that prevent the lens from sending clear images to the retina.<br><br></p>
            </div>
            <div class="clearfix"></div>
            <br />
            <div class="divider-line solid blue"></div>
            <a class="btn btn-border blue pull-left btn-minus-margin" href="treatments/cataract.php">Read more</a>
          </div>
          
          <!--end item-->

          <div class="col-md-4 col-sm-12 col-xs-12 text-center bmargin">
            <div class="feature-box-86"> <img src="images/694.png" alt="" />
              <div class="clearfix"></div>
              <h3 class="text-white paddtop1">Oculoplasty</h3>
              <p class="text-white">Oculoplastic surgeons perform procedures such as the repair of eyelids (blepharoplasty), repair of tear duct obstructions, orbital fracture repairs, removal of tumors in and around the eyes, eyelid and facial reconstruction.</p>
            </div>
            <div class="clearfix"></div>
            <br />
            <div class="divider-line solid blue"></div>
            <a class="btn btn-border blue pull-left btn-minus-margin" href="treatments/oculoplasty.php">Read more</a>
          </div>
          <!--end item-->

          <div class="col-md-4 col-sm-12 col-xs-12 text-center bmargin">
            <div class="feature-box-86 bg-color-light"> <img src="images/695.png" alt="" />
              <div class="clearfix"></div>
              <h3 class="text-white paddtop1">Squint</h3>
              <p class="text-white">A squint, or strabismus, is a condition in which the eyes do not align properly. One eye turns inwards, upwards, downwards, or outwards, while the other one focuses at one spot. <br><br></p>
            </div>
            <div class="clearfix"></div>
            <br />
            <div class="divider-line solid blue"></div>
            <a class="btn btn-border blue pull-left btn-minus-margin" href="treatments/squint.php">Read more</a>
          </div>
          <!--end item-->

        </div>
      </div>
    </section>
    <div class="clearfix"></div>

    <!-- About Doctor -->
    <section class="sec-padding section-light">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h3 class="uppercase">about doctor</h3>
            <div class="title-line-4 blue less-margin align-center"></div>
            <br>
            <br>
          </div>
          <div class="clearfix"></div>

          <div class="col-md-12 row">
            <div class="col-md-4 col-sm-12 col-xs-12 bmargin slide-controls-color-10">
              <div>
                <div>
                  <img src="images/doctor.jpg" alt="" class="img-responsive" />
                  <div class="mybox">Senior Consultant ophthalmologist</div>
                </div>
               </div>
  
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 bmargin">
              <h4 class="capitalizetxt" style="text-transform:capitalize;">Dr Minudath K B</h4>
              <div class="title-line-4 blue less-margin"></div><br>
              <strong>Senior Consultant ophthalmologist</strong>
              <div class="clearfix"></div>
              <br />
              <h4 class="less-mar2">SPECIALISED IN</h4>
              <p>
                <table>
                  <tr>
                    <td valign="top">CATARACT SURGERY :</td>
                    <td>PHACOEMULSIFICATION</td>
                  </tr>
                  <tr><td style="height:10px;"></td></tr>
                  <tr>
                    <td valign="top">OCULOPLASTY :</td>
                    <td>PTOSIS CORRECTION, LID REPAIRS, DCR, ORBITAL TUMOR REMOVAL</td>
                  </tr>
                  <tr><td style="height:10px;"></td></tr>
                  <tr>
                    <td valign="top">COSMETIC :</td>
                    <td>
                      SQUINT CORRECTION, BLEPHAROPLASTY <br>
                      (EYE LIFT/FACE LIFT) <br>
                      BOTOX FOR AGE REVERSAL <br>
                      REMOVAL OF SKIN TAGS MOLES AND WARTS
                    </td>
                  </tr>
                </table>
              </p>
              <br />
              <div class="divider-line solid light opacity-7 padding-top-1"></div>
              <a class="btn btn-border blue pull-left btn-minus-margin" href="about.php">Read more</a>
            </div>
                 
          </div>
          <!--end item-->

        </div>
      </div>
    </section>
    <div class="clearfix"></div>

    <!-- Health Tips -->

    <?php
    $q1="SELECT name,review FROM mec_testimonial WHERE status=1 ORDER BY created_date DESC";
    $r1=mysqli_query($con,$q1);
    ?>
    <section class="sec-padding">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12 bmargin slide-controls-color-10">
            <h4 class="uppercase">patient reviews</h4>
            <div class="title-line-4 blue less-margin"></div>
            <div class="clearfix"></div>
            <br />
            <div id="owl-demo3" class="owl-carousel text-center">
            <?php 
            while($row=mysqli_fetch_array($r1))
            {
              $name=$row['name'];
              $review=$row['review'];
            ?>
              <div class="item">
                <div class="clearfix"></div>
                <p>
                  <?php echo $review;?>.
                </p>
                <br>
                <h5><i><?php echo $name;?></i></h5>
                <div class="divider-line solid light margin opacity-7"></div>
              </div>
              <!--end slide item-->
              <?php 
            } 
            ?>
            </div>
            <!--end carousel-->
  
          </div>
          <!--end item-->

        </div>
        <div style="text-align:center;">
            <br><br>
          <a class="btn btn-border blue btn-minus-margin" data-toggle="modal" data-target=".review">Write your review</a>
        </div>
        
      </div>
    </section>
    <div class="clearfix"></div>

    <!-- Gallery -->
    <?php
		                
                        $q = "SELECT gallery_image FROM mec_gallery WHERE status=1 GROUP BY sno DESC";
                        $r = mysqli_query($con, $q);
        
                        $num = mysqli_num_rows($r);
                            echo'
    <section class="sec-padding section-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 bmargin">
            <h4 class="uppercase">Gallery</h4>
            <div class="title-line-4 blue less-margin"></div>
          </div>
          <div class="col-md-12">
            <div class="carousel_holder">
              <div id="owl-demo5" class="owl-carousel">';
              while ($row = mysqli_fetch_array($r)) {
                  
                  $gallery_image = $row['gallery_image'];
      
                  $path = $GLOBALS['GALLERY_FOLDER'].$gallery_image;
                  //echo $path;
    echo' 
                <div class="item"><img src="'.$path.'" alt=""></div>';
              }?>      
              </div>        
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>

    <!-- NEWS -->
    <?php
		                $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
                        $q = "SELECT sno,news_title,main_image,short_description FROM mec_news WHERE status=1 GROUP BY sno DESC LIMIT 3";
                        $r = mysqli_query($con, $q);
        
                        $num = mysqli_num_rows($r);
echo'
    <section class="sec-padding section-blue">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 bmargin">
            <h4 class="uppercase text-white">Health News</h4>
          </div>'; 
            while ($row = mysqli_fetch_array($r)) {
                $sno=$row['sno'];
                $news_title=$row['news_title'];
                $short_description=$row['short_description'];
                $main_image = $row['main_image'];
                
                $path = $GLOBALS['NEWS_FOLDER'].$main_image;
                // echo $path;
              echo'       
          <div class="col-md-4 col-sm-6 col-xs-12 bmargin">        
            <div class="clearfix"></div>
              <br />
              <div class="image-left"><img width="150px" src="'.$path.'" alt="" class="img-responsive" /></div>
                <div class="text-box-right more-padding-4">
                  <h6 class="nopadding text-white">'.substr($news_title,0,18).'</h6>
                  <p class="paddtop1 text-white">'.$short_description.'</p>
                </div>
          </div>';
            }?>
          <!--end item--> 
        </div>
      
      </div>
    </section>
    <div class="clearfix"></div>

    <!-- Include Footer --> 
    <?php
    include('footer.php');
    ?>

  

    