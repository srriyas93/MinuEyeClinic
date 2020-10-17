<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="#"><img src="assets/images/logo.png" width="25" alt="24NXT"><span class="m-l-10">24NXT</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>Minu Eye Clinic</h4>
                        <small><?php echo $_SESSION['email']?></small>
                    </div>
                </div>
            </li>
            <li id="menu-dashboard"><a href="dashboard.php"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li id="menu-testimonials"> <a href="javascript:void(0);" class="menu-toggle"><i  class="zmdi zmdi-settings"></i><span>Testimonial</span></a>
                <ul class="ml-menu">
                    <li id="menu-testimonial-add"><a href="testimonial-add.php">Add New Testimonial</a></li>
                    <li id="menu-testimonial"><a href="testimonial.php">Testimonials</a></li>
                </ul>
            </li>
            <li id="menu-treatment"> <a href="javascript:void(0);" class="menu-toggle"><i  class="zmdi zmdi-settings"></i><span>Treatments</span></a>
                <ul class="ml-menu">
                    <li id="menu-treatments-add"><a href="treatments-add.php">Add New Treatment</a></li>
                    <li id="menu-treatments"><a href="treatments.php">Treatments</a></li>
                </ul>
            </li>
            <li id="menu-banner"> <a href="javascript:void(0);" class="menu-toggle"><i  class="zmdi zmdi-assignment"></i><span>Banner</span></a>
                <ul class="ml-menu">
                    <li id="menu-banner-add"><a href="banner-add.php">Add New Banner</a></li>
                    <li id="menu-banners"><a href="banners.php">Banners</a></li>
                </ul>
            </li>
            <li id="menu-newses"><a href="javascript:void(0);" class="menu-toggle"><i  class="zmdi zmdi-assignment"></i><span>News</span></a>
                <ul class="ml-menu">
                    <li id="menu-news-add"><a href="news-add.php">Add New News</a></li>
                    <li id="menu-news"><a href="news.php">News</a></li>
                </ul>
            </li>
            <li id="menu-galleries"> <a href="javascript:void(0);" class="menu-toggle"><i  class="zmdi zmdi-assignment"></i><span>Gallery</span></a>
                <ul class="ml-menu">
                    <li id="menu-gallery-add"><a href="gallery-add.php">Add New Image</a></li>
                    <li id="menu-gallery"><a href="gallery.php">Gallery</a></li>
                </ul>
            </li>
            
            <li id="menu-admin"><a href="admin.php"><i class="zmdi zmdi-account"></i><span>Admin</span></a></li>
       
    </div>
</aside>