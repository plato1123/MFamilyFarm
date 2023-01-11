// (function ($, Drupal) {
//   Drupal.behaviors.someAbitraryKey = {
//     attach: function (context, settings) {
//       // Do something when the page loads.
//       alert("is our theme tweaking yet?");
//     }
//   };
// }(jQuery, Drupal));

(function ($, Drupal) {
  $(window).on('load', function() {
      Drupal.behaviors.myBehavior = {
          attach: function (context, settings) {
                 $(context)
                .find('.funcolumns')
                 .once('.funcolumns')
                 .each(function () {
                  $(this).addClass('superfunforus');
               });
          }
      };
  });
})(jQuery, Drupal);