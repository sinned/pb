
(function() {
  if (!window.console) {
    window.console = {};
  }
  // union of Chrome, FF, IE, and Safari console methods
  var m = [
    "log", "info", "warn", "error", "debug", "trace", "dir", "group",
    "groupCollapsed", "groupEnd", "time", "timeEnd", "profile", "profileEnd",
    "dirxml", "assert", "count", "markTimeline", "timeStamp", "clear"
  ];
  // define undefined methods as noops to prevent errors
  for (var i = 0; i < m.length; i++) {
    if (!window.console[m[i]]) {
      window.console[m[i]] = function() {};
    }    
  } 
})();

  $(document).ready(function() {
    /*
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
    */

    // Begin Custom Javascript.

    // squeeze modal 
    /*
    if ($.cookie('show_squeeze') != 'welcome' || document.location.search == '?squeeze') {
      $.cookie('show_squeeze', 'welcome', { expires: 365 });
      $('#squeezeModal').foundation('reveal', 'open');
    }    
    */

    // reset the page (but not the form itself) on submit
    $('#subform').submit(function(e) {
      $('.success').removeClass('success');
      $('#whofor').val('');
      $('#pricetext').html('');
      $('#addtocart').addClass('disabled');
      $('.showifgift').hide();
      $('#giftemailnotify_input').attr('checked',false);            
      $('#giftemail_input').val('');      
      $('#giftmessage_input').val('');    
    });

    $('#addtocart').click(function(e) {
      if ($(this).hasClass('disabled')) {
        $('#messageModal p').html('Please fill out all fields before adding to the cart!');
        $('#messageModal').foundation('reveal', 'open');
      } else {
        $('#subform').submit();
      }
    });

    // checks to see if the add to cart button should be enabled or not.
    function checkToEnableAddToCart () {
      if ($('.product-choice a').hasClass('success')) {
        if ($('a#thisisagift').hasClass('success')) {
          if ($('#giftemail_input').val() != '') {
            $("#addtocart").removeClass('disabled');
          }
        } else {
          $("#addtocart").removeClass('disabled');
        } 
      }
    }
    
    // when a .clearprice is clicked, clear our product choice and reset price
    $('.clearprice').click(function(e) {
      e.preventDefault();
      $('.product-choice a').removeClass('success');
      $('#pricetext').html('');
      $("#addtocart").addClass('disabled');
    })

    $('.subfigurator li a').click(function(e) {
      e.preventDefault();
      $(this).parents('ul').find('a').removeClass('success');
      $(this).addClass('success');

      // logic to set the subscription form
      $('#subscription-size a').each(function (index, value) {
        if ($(this).hasClass('success')) {
          //console.log('Price', $(this).attr('data-size'));     
          $( "#subform input[name='size']" ).attr('value',$(this).attr('data-size'));
        }
      });

      // checks for step 4 show logic
      if ($('#thisisforme').hasClass('success')) {
        // show step 5 for subscription, hide the other rows
        $('#subscription-row').show('fast');
        $('.showifgift').hide();
        $('#giftemail_input').val('');              
        $('#giftmessage_input').val('');
        $( "#subform input[name='Gift_Email_Notify']" ).attr('value', '');                
        $( "#subform input[name='Gift_Email']" ).attr('value', '');        
        $( "#subform input[name='Gift_Message']" ).attr('value', '');
        $('#onetimegift-row').hide(); 
      } else if ($('#thisisagift').hasClass('success')) {
        $('#subscription-row').hide();
        $('.showifgift').show('fast');
        $('#onetimegift-row').hide();  
      } else {
        $('#subscription-row').hide();
        $('.showifgift').hide();
        $('#giftemail_input').val('');      
        $('#giftmessage_input').val('');
        $( "#subform input[name='Gift_Email']" ).attr('value', '');                
        $( "#subform input[name='Gift_Message']" ).attr('value', '');
        $('#onetimegift-row').hide();    
      }

      // defaults for recurring/non-recurring
      if ($('#thisisforme').hasClass('success')) {
        $("#subform input[name='sub_frequency']").attr('value', '1m');     
        $("#subform input[name='sub_startdate']").attr('value','');
      } else {
        $("#subform input[name='sub_frequency']").attr('value', '');
        $("#subform input[name='sub_startdate']").attr('value', '');               
      }

      if ($('#thisisagift').hasClass('success')) {
        $("#giftchoice-row").show('fast');
      } else {
        $("#giftchoice-row").hide();              
      }

      $('.product-choice a').each(function (index, value) {
        if ($(this).hasClass('success')) {
          //console.log('Price', $(this).attr('data-price'));          
          //console.log('Freq', $(this).attr('data-freq'));   
          $("#subform input[name='name']").attr('value', $(this).attr('data-name'))       
          $("#subform input[name='price']").attr('value', $(this).attr('data-price'))       
          $("#subform input[name='code']").attr('value', $(this).attr('data-code'))    
          $("#subform input[name='image']").attr('value', $(this).attr('data-img'))    

          // figure out if subscription recurring
          if ($('#thisisforme').hasClass('success')) {
            $("#subform input[name='sub_frequency']").attr('value', $(this).attr('data-freq'));     
            $("#subform input[name='sub_startdate']").attr('value','');
            $("#subform input[name='code']").attr('value', $("#subform input[name='code']").attr('value')+'-RECUR');       
          } else {
            $("#subform input[name='sub_frequency']").attr('value', '');
            $("#subform input[name='sub_startdate']").attr('value', '');            
          }

          $('#pricetext').html($(this).attr('data-pricetext'));  
        }
      });
        
      checkToEnableAddToCart();
    });

    $('#whofor').change(function (){
      $( "#subform input[name='shipto']" ).attr('value', $(this).val());
    });

    $('#giftmessage_input').change(function (){
      $( "#subform input[name='Gift_Message']" ).attr('value', $(this).val());
    });    

    $('#giftemail_input').change(function (){
      $( "#subform input[name='Gift_Email']" ).attr('value', $(this).val());
      checkToEnableAddToCart();
    });    

    $('#giftemailnotify_input').click(function (){
      if ($(this).prop('checked')) {
        $( "#subform input[name='Gift_Email_Notify']" ).attr('value', 'Yes');        
      } else {
        $( "#subform input[name='Gift_Email_Notify']" ).attr('value', 'No');                
      }
    });    


    $('.faq-answer').hide(); // hide FAQs

    // homepage slider
    $('.slide').show();
    /*
    $('.slider1').bxSlider({
      minSlides: 1,
      maxSlides: 1,
      slideMargin: 0
    });    
    */

    // if the querystring is "?gift", click the "this is a gift"
    if (document.location.search == '?gift') {
      $('#thisisagift').click();
    }    

    // do we need this?
    //$(document).foundation();

  });

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});


