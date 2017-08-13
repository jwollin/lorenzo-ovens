jQuery(document).ready(function() {
    var menuToggle = jQuery(".menu-toggle");
    var menuClose = jQuery(".menu-close");
    var mobileMenu = jQuery(".mobile-menu");
    menuToggle.on("click", function() {
        mobileMenu.addClass("active-menu");
        if(mobileMenu.hasClass("active-menu")) {
            mobileMenu.fadeIn("slow");
            // Prevent the window from scrolling while the modal is open
            var scrollPosition = [
                self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
                self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
            ];
            var html = jQuery('html');
            html.data('scroll-position', scrollPosition);
            html.data('previous-overflow', html.css('overflow'));
            html.css('overflow', 'hidden');
            window.scrollTo(scrollPosition[0], scrollPosition[1]);
        }
   }); // Open mobile menu function
    menuClose.on("click", function() {
        if(mobileMenu.hasClass("active-menu")) {
            mobileMenu.removeClass("active-menu");
            mobileMenu.fadeOut("slow");
        }
    }); // Close mobile menu function


});