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
        <h4 class="title text-white uppercase">Our Gallery</h4>
        <br>
        <div class="text-white"><a href="<?php echo $GLOBALS['BASE_URL'] ?>index.php" class="text-white">Home</a><i> / </i> Gallery</div>
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="images/media/innerpage/about.jpg" alt="" class="img-responsive"/> </div>
  </section>
  <div class="clearfix"></div> 
    <!-- Gallery section -->
<section class="sec-padding">
  <div class="container">
      <div class="row">  
      
        <div class="demo-full-width">                          
          <div id="grid-container" class="cbp">
          <?php
		                $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
                        $q = "SELECT gallery_title,gallery_image FROM mec_gallery WHERE status=1 GROUP BY created_date DESC";
                        $r = mysqli_query($con, $q);
        
                        $num = mysqli_num_rows($r);
                        while ($row = mysqli_fetch_array($r)){
                          $gallery_title=$row['gallery_title'];
                          $gallery_image = $row['gallery_image'];                         
          
                          $path = $GLOBALS['GALLERY_FOLDER'].$gallery_image;
                        // echo $path;   
                         echo'  
            <div class="cbp-item"> <a href="'.$path.'"
              class="cbp-caption cbp-lightbox" data-title="'.$gallery_title.'">
              <div class="cbp-caption-defaultWrap"> <img src="'.$path.'" alt=""> </div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                      <div class="cbp-l-caption-title">'.$gallery_title.'</div>
                    </div>
                  </div>
                </div>
              </a> </div>';}?>            
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
     
    <!-- Include Footer --> 
    <?php
    include('footer.php');
    ?>
  
