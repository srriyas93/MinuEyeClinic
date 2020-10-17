// Function for managing Menu Active
activemenu();
function activemenu()
{
    var urlpath = window.location.pathname;
    url_Index = urlpath.lastIndexOf("/") + 1;
    fileName = urlpath.substr(url_Index);

    var activeMenu = fileName.split('.');
    activeItem = "menu-" + activeMenu[0];
    //document.getElementById(activeItem).classList.add("active");
    switch (activeMenu[0])
    {
        case "index":
                document.getElementById('menu-index').classList.add("active");
                break;
        case "about":
                document.getElementById('menu-about').classList.add("active");
                break;
        case "news":
            document.getElementById('menu-news').classList.add("active");
            break;
        case "gallery":
                document.getElementById('menu-gallery').classList.add("active");
            break;
        case "cataract":
        case "oculoplasty":
        case "squint":
                document.getElementById('menu-treatments').classList.add("active");
            break;
        case "contact":
            document.getElementById('menu-contact').classList.add("active");
        break;
    }
}