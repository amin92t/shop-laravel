$(document).ready(function(){


    function removeAllSidebarToggleClass(){
        $('#sidebar-toggle-hide').removeClass('d-md-inline');
        $('#sidebar-toggle-hide').removeClass('d-none');
        $('#sidebar-toggle-show').removeClass('d-inline');
        $('#sidebar-toggle-show').removeClass('d-md-none');

    }

    $("#sidebar-toggle-hide").click(function(){
        $("#sidebar").fadeOut(300);
        $("#main-body").animate({width: "100%"}, 300);
        setTimeout(function(){
            removeAllSidebarToggleClass();
            $('#sidebar-toggle-hide').addClass('d-none');
            $('#sidebar-toggle-show').removeClass('d-none');

        },300);
    })

    $("#sidebar-toggle-show").click(function(){
        $("#sidebar").fadeIn(300);
        setTimeout(function(){
            removeAllSidebarToggleClass();
            $('#sidebar-toggle-hide').removeClass('d-none');
            $('#sidebar-toggle-show').addClass('d-none');

        },300);
    })

    $("#menu-toggle").click(function(){
        $("#main-section").toggle(300);
    });

    $("#search-toggle").click(function(){
        $("#search-toggle").removeClass("d-md-inline");
        $("#search-area").addClass("d-md-inline");
        $("#search-input").animate({width: "12rem"}, 300);
    });

    $("#serach-area-hide").click(function(){
        $("#search-input").animate({width: "0"}, 300);
        setTimeout(function(){
            $("#search-toggle").addClass("d-md-inline");
            $("#search-area").removeClass("d-md-inline");
        },300);
    });

    $("#header-notification-toggle").click(function(){
        $("#header-notification").fadeToggle();
    });

    $("#header-comment-toggle").click(function(){
        $("#header-comment").fadeToggle();
    });

    $("#header-profile-togger").click(function(){
        $("#header-profile").fadeToggle();
    });

   $(".sidebar-group-link").click(function(){
        $(".sidebar-group-link").removeClass("sidebar-group-link-active");
        $(".sidebar-group-link").children(".sidebar-dropdown-toggle").children(".angle").removeClass("fa-angle-down");
        $(".sidebar-group-link").children(".sidebar-dropdown-toggle").children(".angle").addClass("fa-angle-left");

        $(this).addClass("sidebar-group-link-active");
        $(this).children(".sidebar-dropdown-toggle").children(".angle").removeClass("fa-angle-left");
        $(this).children(".sidebar-dropdown-toggle").children(".angle").addClass("fa-angle-down");


   });


   $("#full-screen").click(function(){
    toggleFullScreen();
   });


   function toggleFullScreen(){

        if(document.fullscreenElement && document.fullscreenElement !== null || !document.webkitIsFullScreen){
            if(document.documentElement.requestFullscreen){
                document.documentElement.requestFullscreen();
            };
            $("#screen-commpress").removeClass("d-none");
        $("#screen-expand").addClass("d-none");
        }else{
            if(document.cancelFullScreen){
                document.cancelFullScreen();
            }else if(document.webkitCancelFullScreen){
                document.webkitCancelFullScreen();
            }
            $("#screen-commpress").addClass("d-none");
            $("#screen-expand").removeClass("d-none");
        };

        


   };
})