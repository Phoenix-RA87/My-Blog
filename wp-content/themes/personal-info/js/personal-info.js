jQuery(document).ready(function() {
  jQuery().fancybox({});
  //load html
  var homePageTitle = document.title;
  var homePageUrl = window.location.href;

  jQuery(document).on("click", ".perosnal_info_menu li a", function(eve) {
    eve.preventDefault();
    jQuery("#personal-ajax-content").html('<div class="ajax-loader"></div>');
    jQuery("#personal-ajax-content").show();
    // window.location.hash = jQuery(this).attr('href')
    var title = jQuery(this).text();
    var url = jQuery(this).attr("href");

    jQuery("#personal-ajax-content").load(
      jQuery(this).attr("href") + " #wraper",
      {},
      function(e) {
        document.title = title + " | " + homePageTitle.split("|")[0];
        window.history.pushState(document.title, document.title, url);
      }
    );
    jQuery("#wraper").hide();
  });

  // close model box
  jQuery(document).on("click", ".ajaxcontent-close", function(e) {
    if (jQuery("#personal-ajax-content").html().length > 10) {
      e.preventDefault();
      window.history.back();
      jQuery("#personal-ajax-content").hide();
      jQuery("#wraper").show();
    }
  });
});
