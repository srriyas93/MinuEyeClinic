function showConfirmMessage1(module,name,id,status)
{
  //alert(name);
     swal({
          title: "Warning",
          text: "Do you want to change "+name+" status?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete)
            {
                  switch (module)
                  {
                        case "admin":
                                    disableAdminStatus(id,status);
                                    swal(name+" status has been changed Successfully!",
                                    {
                                          icon: "success",
                                    }); 
                        break;
                        case "news":
                                    disableNewsStatus(id,status);
                                    swal(name+" status has been changed Successfully!",
                                    {
                                          icon: "success",
                                    }); 
                        break;
                        case "gallery":
                                    disableImageStatus(id,status);
                                    swal(name+" status has been changed Successfully!",
                                    {
                                          icon: "success",
                                    }); 
                        break;
                        case "banners":
                                    disableBannerStatus(id,status);
                                    swal(name+" status has been changed Successfully!",
                                    {
                                          icon: "success",
                                    }); 
                        break;
                        case "testi":
                                    disabletestiStatus(id,status);
                                    swal(name+" status has been changed Successfully!",
                                    {
                                          icon: "success",
                                    }); 
                        break;
                        case "treat":
                                    disabletreatStatus(id,status);
                                    swal(name+" status has been changed Successfully!",
                                    {
                                          icon: "success",
                                    }); 
                        break;
                  }
            }
            else
            {
                  swal(name+" status change request cancelled!");
            }
      });
}

function disableAdminStatus(admin_id,admin_status){
      //alert(admin_id);
     var url = "custom-ajax.php?mode=disableAdmin&admin_id="+admin_id+"&admin_status="+admin_status;

     $.ajax({
      type: "POST",
      url: url,
      async: false,
      cache: false,
      contentType: false,
      processData: true,
      success: function(responseText)
      {
            if(responseText == "success")
            {
            setTimeout(function()
                  {
            window.location.href = 'admin.php';
         }, 1500);	        
         	
            }	
         }
      }); 
}


function disableNewsStatus(sno,status){
   
      var url = "custom-ajax.php?mode=disableNews&sno="+sno+"&status="+status;
 
      $.ajax({
      type: "POST",
      url: url,
      async: false,
      cache: false,
      contentType: false,
      processData: true,
      success: function(responseText)
      {
            if(responseText == "success")
            {
            setTimeout(function()
            {
             window.location.href = 'news.php';
          }, 1500);	        
                
            }	
      }
  });
} 
function disableBannerStatus(sno,status){
   
      var url = "custom-ajax.php?mode=disableBanner&sno="+sno+"&status="+status;
 
      $.ajax({
      type: "POST",
      url: url,
      async: false,
      cache: false,
      contentType: false,
      processData: true,
      success: function(responseText)
      {
            if(responseText == "success")
            {
           
             window.location.href = 'banners.php';
            } 
      }
  });
} 
function disableImageStatus(sno,status){
    
      var url = "custom-ajax.php?mode=disableImage&sno="+sno+"&status="+status;
 
      $.ajax({
      type: "POST",
      url: url,
      async: false,
      cache: false,
      contentType: false,
      processData: true,
      success: function(responseText)
      {
            if(responseText == "success")
            {
            setTimeout(function()
            {
             window.location.href = 'gallery.php';
          }, 1500);	        
                
            }	
      }
  });
} 

function disabletestiStatus(sno,status){
   
      var url = "custom-ajax.php?mode=disableTesti&sno="+sno+"&status="+status;
 
      $.ajax({
      type: "POST",
      url: url,
      async: false,
      cache: false,
      contentType: false,
      processData: true,
      success: function(responseText)
      {
            if(responseText == "success")
            {
           
             window.location.href = 'testimonial.php';
            } 
      }
  });
} 

function disabletreatStatus(treatment_id,status){
   
      var url = "custom-ajax.php?mode=disableTreat&treatment_id="+treatment_id+"&status="+status;
 
      $.ajax({
      type: "POST",
      url: url,
      async: false,
      cache: false,
      contentType: false,
      processData: true,
      success: function(responseText)
      {
            if(responseText == "success")
            {
           
             window.location.href = 'treatments.php';
            } 
      }
  });
} 

function formIsValid(moduleName,frmId,event)
{
      
      var form = document.getElementById(frmId);
      var isValidForm = form.checkValidity();

      if (isValidForm)
      {
            switch (moduleName)
            {
                  case "admin":
                        insertAdmin(event);
                        break;
                  case "admin_edit":
                        EditAdmin(event);
                        break;
                  case "admin_chgpass":
                        ChangePasswordAdmin(event);
                        break;
                  case "adminlogin":
                        signin(event);
                        break;
                  case "news":
                        addNew(event);
                        break;
                  default:
                        alert("Something Went Wrong! Please Try Later");
            }
      }
      else
      {
            return false;
      }
}

// Function for managing Menu Active
activemenu();
function activemenu()
{
      var urlpath = window.location.pathname;
      url_Index = urlpath.lastIndexOf("/") + 1;
      fileName = urlpath.substr(url_Index);

      var activeMenu = fileName.split('.');
      activeItem = "menu-" + activeMenu[0];
      document.getElementById(activeItem).classList.add("active");

      switch (activeMenu[0])
      {
            case "testimonial-add":
            case "testimonial":
                  document.getElementById('menu-testimonials').classList.add("active");
                  break;
            
            case "treatments-add":
            case "treatments":
                  document.getElementById('menu-treatment').classList.add("active");
                  break;
            
            case "banner-add":
            case "banners":
                  document.getElementById('menu-banner').classList.add("active");
                  break;

            case "news-add":
            case "news":
                  document.getElementById('menu-newses').classList.add("active");
                  break;
            
            case "gallery-add":
            case "gallery":
                  document.getElementById('menu-galleries').classList.add("active");
                  break;
      }
}