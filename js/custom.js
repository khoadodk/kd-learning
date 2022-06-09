(function ($) {
  $(document).ready(function () {
    $('.default_sidebar > ul').addClass(
      'list-group list-group-flush'
    );
    $('.default_sidebar > ul > li').addClass('list-group-item');
    $('.default_sidebar > ul > li > a').addClass(
      'text-decoration-none text-dark'
    );

    $('.footer_widgets > ul').addClass('list-unstyled');
    $('.footer_widgets > ul > li > a').addClass(
      'text-decoration-none text-white'
    );
    // Comments
    $('#commentform #comment').addClass(
      'form-control form-control-sm mb-2'
    );

    // Contact Form
    $('.wpcf7-submit').addClass('btn btn-outline-primary');
    $('.wpcf7-form-control').addClass('form-control');
  });
})(jQuery);
