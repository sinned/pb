;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
    $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
    $.fn.foundationButtons          ? $doc.foundationButtons() : null;
    $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
    $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
    $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
    $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
    $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
    $.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
    $.fn.foundationClearing         ? $doc.foundationClearing() : null;

    $.fn.placeholder                ? $('input, textarea').placeholder() : null;

    // Begin Custom Javascript.
    $('.toggle_gift').click(function(e) {    
      if ($(this).is(':checked')) {
        $(this).siblings().removeClass('hide');
      } else {
        $(this).siblings('.whofor').addClass('hide')
        $(this).siblings('.whofor').children('input').val('');
      }
    });

    $('.subfigurator li a').click(function(e) {
      e.preventDefault();
      $(this).parents('ul').find('a').removeClass('success');
      $(this).addClass('success');

      // logic to set the subscription form
      $('#subscription-size a').each(function (index, value) {
        if ($(this).hasClass('success')) {
          console.log('Price', $(this).attr('data-size'));     
          $( "#subform input[name='size']" ).attr('value',$(this).attr('data-size'));
        }
      });
      $('#subscription-choice a').each(function (index, value) {
        if ($(this).hasClass('success')) {
          console.log('Price', $(this).attr('data-price'));          
          console.log('Freq', $(this).attr('data-freq'));   
          $("#subform input[name='name']").attr('value', $(this).attr('data-name'))       

          $("#subform input[name='price']").attr('value', $(this).attr('data-price'))       
          $("#subform input[name='code']").attr('value', $(this).attr('data-code'))       
          $("#subform input[name='sub_frequency']").attr('value', $(this).attr('data-freq'))     
          $('#pricetext').html($(this).attr('data-pricetext'));  
        }
      });
    });

    $('#whofor').change(function (){
      console.log('it is for: ', $(this).val());
      $( "#subform input[name='shipto']" ).attr('value', $(this).val());
    });

    $('.faq-answer').hide(); // hide FAQs

  });

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
  if (Modernizr.touch && !window.location.hash) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }

})(jQuery, this);
