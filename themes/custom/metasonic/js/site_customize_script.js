/**
 * @file
 * JS file.
 */

(function ($) {
  Drupal.behaviors.currency_converter = {
    attach: function (context) {

      /**
       * Rewrite text in header (User account menu).
       */
      $(".menu-item a:contains('Log in')").html("Login");

      /**
       * Changes the element if the language is Russian (header navigation).
       */
      $("#block-metasonic-main-menu:lang(ru) .menu-item").css('padding', '0px 24px 0px 28px');
    }
  };
})(jQuery);
