<!-- Include Header --> 
<?php
    include('page_header.php');
?>
<!-- Include Left Side Bar --> 
<?php
    include('page_left-sidebar.php');
?>
<!-- Include Right Side Bar --> 
<?php
    include('page_right-sidebar.php');
?>
 
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add New Banner</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Add New Banner</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form id="FrmeaddBannerPop"name="FrmeaddBannerPop" action="banner-addAction.php" enctype="multipart/form-data" method="POST">
            <div class="row clearfix">
                <div class="col-sm-12">
                <strong>Banner Title*</strong>
                    <div class="form-group">
                        <input id="banner_title" name="banner_title" type="text" class="form-control" required/>
                    </div>
                </div>
        
                <div class="col-sm-12">
                <strong>Banner Image*</strong>(1920px*630px)
                    <div class="form-group">
                        <input id="banner_main_image" name="banner_main_image" type="file" class="form-control" required/>
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Banner Description*</strong>
                    <div class="form-group">
                        <textarea id="banner_short_description" name="banner_short_description" class="form-control"></textarea>
                    </div>
                </div>
                 <div class="col-sm-12">
                <strong>Link URL</strong>
                    <div class="form-group">
                        <input id="banner_url" name="banner_url" type="text" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-danger waves-effect" onclick="javascript:geteditorvalue();" >PUBLISH NEWS</button>
                <button type="button" class="btn btn-danger bg-grey waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</section>

<!-- Include Footer -->
<script>
    function geteditorvalue()
    {
        var innerHtml = $('.note-editable').html();
        document.getElementById('news_inline_editor').value=innerHtml;
        //alert(innerHtml);
    }
</script>
<?php
    include('page_footer.php');
?>