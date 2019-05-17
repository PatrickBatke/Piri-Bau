/* Scroll zum Bereich */
$('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').stop().click(function(){
  if(location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
        var UD_HASH = this.hash;
        var UD_ZIEL = $(this.hash);
        if(UD_ZIEL.length){
        var UD_ABSTAND_TOP = UD_ZIEL.offset().top;
        $('html,body').animate({scrollTop: UD_ABSTAND_TOP},1000,function(){
        window.location.hash = UD_HASH;
        });
        return false;
  }
  }
  });	
  /* Active Link */
  $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').click(function(){
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');
        $(this).addClass('active-link');      

  });
  /* Scroll Position */
/*   $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    console.log(scroll);
    $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');
    if (scroll <= 599)
    {
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');
    }
    if (scroll >= 600 && scroll <= 1699)
    {        
        $('#menu-item-164 a').addClass('active-link');
    }
    if (scroll >= 1700 && scroll <= 4799)
    {        
        $('#menu-item-658 a').addClass('active-link');
    }
    if (scroll >= 4800 && scroll <= 5699)
    {        
        $('#menu-item-657 a').addClass('active-link');
    }
    if (scroll >= 5700)
    {        
        $('#menu-item-647 a').addClass('active-link');
    }
  }); */

  function getViewportOffset($e) {
    var $window = $(window),
    scrollLeft = $window.scrollLeft(),
    scrollTop = $window.scrollTop(),
    offset = $e.offset();
    return {
    left: offset.left - scrollLeft,
    top: offset.top - scrollTop - $('#navigation-menu').height()
    };
    }
    $(window).on("load scroll resize", function() {
    var viewportOffsetaboutus = getViewportOffset($("#about"));
    var viewportOffsetleistungen = getViewportOffset($("#services2"));
    var viewportOffsetzufkunden = getViewportOffset($("#references2"));
    var viewportOffsetfindus2 = getViewportOffset($("#contact")); 
    if (viewportOffsetaboutus.top > 101)
    {
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');       
    }
    if (viewportOffsetaboutus.top <= 100 && viewportOffsetaboutus.top >= 0)
    {
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');       
        $('#menu-item-164 a').addClass('active-link');
    }
    if (viewportOffsetleistungen.top <= 100)
    {   
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');     
        $('#menu-item-658 a').addClass('active-link');
    }
    if (viewportOffsetzufkunden.top <= 100)
    {   $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');     
        $('#menu-item-657 a').addClass('active-link');
    }
    if (viewportOffsetfindus2.top <= 100)
    {
        $('#navigation-menu>#navbarNavDropdown-left a, #navigation-menu>#navbarNavDropdown-right a, #navigation-menu #mobile-menu a').removeClass('active-link');        
        $('#menu-item-647 a').addClass('active-link');
    }    
    });