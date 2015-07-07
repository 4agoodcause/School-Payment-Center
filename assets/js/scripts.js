$(function(){

  var categoriesMobileToggle = function() {
    var navLink = $('.categories-nav-title');

    function triggerClass() {
      var windowWidth = $(window).width();
      if (windowWidth < 1000) {
        navLink.addClass('categories-trigger');
        toggleNav();
      }
    }
    triggerClass();

    $(window).resize(function() {
      triggerClass();

      var windowWidth = $(window).width();
      if (windowWidth > 1000) {
        navLink.removeClass('categories-trigger');
      }
    });

    function toggleNav() {
      var trigglerLink = $('.categories-trigger')
      trigglerLink.bind('click', function(e){
        e.preventDefault();
        $(this).toggleClass('is-active');
        $(this).parent().find('.categories-nav-items').toggleClass('is-active');
      });
    }
  }

  var navMobileToggle = function() {
    var navToggle = $('.mobile-nav-trigger');
    var navItems = $('.header-nav .nav-items');

    navToggle.bind('click', function(e){
      e.preventDefault();
      $(this).toggleClass('is-active');
      navItems.toggleClass('is-active');
    });
  }

  categoriesMobileToggle();
  navMobileToggle();

});