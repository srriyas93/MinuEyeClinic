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
                    <h2>Add New News</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Add New News</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form id="FrmeaddNewsPop"name="FrmeaddNewsPop" action="news-addfun.php" enctype="multipart/form-data" method="POST">
            <div class="row clearfix">
                <div class="col-sm-12">
                <strong>News Title*</strong>
                    <div class="form-group">
                        <input id="news_title" name="news_title" type="text" class="form-control" required/>
                    </div>
                </div>
            <!--    <div class="col-sm-12">
                <strong>Thumb Image*</strong>
                    <div class="form-group">
                        <input id="news_thumb_image" name="news_thumb_image" type="file" class="form-control" required/>
                    </div>
                </div>-->
                <div class="col-sm-12">
                <strong>Main Image*</strong>(600px*400px)
                    <div class="form-group">
                        <input id="news_main_image" name="news_main_image" type="file" class="form-control" required/>
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Short Description*</strong>
                    <div class="form-group">
                    <!--    <input id="news_short_description" name="news_short_description" type="text" class="form-control" required/>-->
                        <textarea id="news_short_description" name="news_short_description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <strong>Main Content*</strong>
                        </div>
                        <div class="body">
                            <div id="inline-editor" class="inline-editor"></div>
                        </div>
                    </div>
            <!-- <a href="javascript:geteditorvalue();">Submit</a>-->
                </div>
                <div class="form-group">
                    <input id="news_inline_editor" name="news_inline_editor" type="hidden" class="form-control" required/>
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