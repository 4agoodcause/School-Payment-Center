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

  modal = function() {
    var trigger = $('.modal-trigger');
    var closeTrigger = $('.close-modal, .modal-overlay');
    var modal = $('#modal');
    var body = $('body');

    trigger.on('click', function(e) {
      e.preventDefault();

      // var modalContent = $(this).attr('data-modal-content');

      body.toggleClass('modal-active');
      modal.toggleClass('is-active');
      modal.toggleClass('not-active');
      // $(modalContent).toggleClass('is-active');
      // $(modalContent).toggleClass('not-active');
      modal.fadeIn('200');
      // $(modalContent).fadeIn('slow');
    });

    closeTrigger.on('click', function(e) {
      e.preventDefault();

      var modalWrapper = $('.modal-wrapper.is-active');

      body.toggleClass('modal-active');
      modal.toggleClass('is-active');
      modal.toggleClass('not-active');
      modal.fadeOut('200');
      modalWrapper.fadeOut('200');
      modalWrapper.toggleClass('is-active').toggleClass('not-active');
    });
  }

  categoriesMobileToggle();
  navMobileToggle();
  modal();

});