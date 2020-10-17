  <!-- Include Header --> 
  <?php
      include('header.php');
  ?>

  <!-- Banner section -->  
  <section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase">Contact us</h4>
        <br>
        <div class="text-white"><a href="<?php echo $GLOBALS['BASE_URL'] ?>index.php" class="text-white">Home</a><i> / </i> Contact</div>
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="images/media/innerpage/about.jpg" alt="" class="img-responsive"/> </div>
  </section>
  <div class="clearfix"></div>
  
  <!-- Contact us -->
    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="smart-forms bmargin">
                    <h3>Contact Us</h3>
                    <p>EYE CARE AND OCULOPLASTY</p>
                    <br />
                    <br />
                    <form method="post" action="php/smartprocess.php" id="smart-form">
                    <div>
                        <div class="section">
                        <label class="field prepend-icon">
                            <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
                            <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                        </div>

                        <div class="section">
                        <label class="field prepend-icon">
                            <input type="email" name="emailaddress" id="emailaddress" class="gui-input"
                            placeholder="Email address">
                            <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                        </div>

                        <div class="section colm colm6">
                        <label class="field prepend-icon">
                            <input type="tel" name="telephone" id="telephone" class="gui-input" placeholder="Telephone">
                            <span class="field-icon"><i class="fa fa-phone-square"></i></span> </label>
                        </div>

                        <div class="section">
                        <label class="field prepend-icon">
                            <input type="text" name="sendersubject" id="sendersubject" class="gui-input"
                            placeholder="Enter subjec">
                            <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span> </label>
                        </div>

                        <div class="section">
                        <label class="field prepend-icon">
                            <textarea class="gui-textarea" id="sendermessage" name="sendermessage"
                            placeholder="Enter message"></textarea>
                            <span class="field-icon"><i class="fa fa-comments"></i></span> <span class="input-hint">
                            <strong>Hint:</strong> Please enter between 80 - 300 characters.</span> </label>
                        </div>
 
                        <div class="result"></div>

                    </div>
                    <div class="form-footer">
                        <button type="submit" data-btntext-sending="Sending..."
                        class="button btn-primary blue">Submit</button>
                        <button type="reset" class="button"> Cancel </button>
                    </div>
                    </form>
                </div>

                </div>
                <div class="col-md-4 bmargin">
                    <h3>Address Info</h3>

                    <h6><strong>Dr.Minus Eye Clinic</strong></h6>
                    Fathima Convent Road <br />
                    Christopher  Nagar <br>
                    Ollur P.O 680306 <br>
                    <h6>
                    Phone: +91 8714802881<br />
                    </h6>
                    E-mail: <a href="mailto:drminuseyeclinic@gmail.com">drminuseyeclinic@gmail.com</a><br />
                    Website: <a href="index.php">www.drminuseyeclinic.com</a>
                    <div class="clearfix"></div>
                    <br />
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

  <!-- Include Footer --> 
  <?php
  include('footer.php');
  ?>
  
