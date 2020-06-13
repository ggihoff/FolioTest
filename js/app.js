$(document).ready(function() {

 
    $(".spinner-container").fadeTo( "slow" , 0, function() {


  
    $('.spinner-container').hide();
    });

    document.getElementById("home").style.overflowY = "scroll";

    var scrollLink = $(".scroll");
  
    // Smooth scrolling
    scrollLink.click(function(e) {
      e.preventDefault();
      $("body,html").animate({
        scrollTop: $(this.hash).offset().top
      });
    });
  
    // Active link switching
    $(window).scroll(function() {
      var scrollbarLocation = $(this).scrollTop();
  
      scrollLink.each(function() {
        var sectionOffset = $(this.hash).offset().top - 20;
  
        if (sectionOffset <= scrollbarLocation) {
          $(this)
            .parent()
            .addClass("active");
        }
      });
    });
  });