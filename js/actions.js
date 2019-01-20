$(document).ready(function(){
  $('.sidenav').sidenav();
});


function autoType(elementClass, typingSpeed){
  var thhis = $(elementClass);
  thhis.css({
    //"position": "relative",
    "display": "inline-block"
  });
  thhis.prepend('<div class="cursor" style="left: initial; right:0;"></div>');
  thhis = thhis.find(".text-js");
  var text = thhis.text().trim().split('');
  var amntOfChars = text.length;
  var newString = "";
  thhis.text("|");
  setTimeout(function(){
    thhis.css("opacity",1);
    thhis.prev().removeAttr("style");
    thhis.text("");
    for(var i = 0; i < amntOfChars; i++){
      (function(i,char){
        setTimeout(function() {        
          newString += char;
          thhis.text(newString);
        },i*typingSpeed);
      })(i+1,text[i]);
    }
  },1500);
}

$(document).ready(function(){
 
  autoType(".type-js",80);
});


$(document).ready(function(){
  var zindex = 10;
  
  $("div.card").click(function(e){
    e.preventDefault();

    var isShowing = false;

    if ($(this).hasClass("show")) {
      isShowing = true
    }

    if ($("div.cards").hasClass("showing")) {
      // a card is already in view
      $("div.card.show")
        .removeClass("show");

      if (isShowing) {
        // this card was showing - reset the grid
        $("div.cards")
          .removeClass("showing");
      } else {
        // this card isn't showing - get in with it
        $(this)
          .css({zIndex: zindex})
          .addClass("show");

      }

      zindex++;

    } else {
      // no cards in view
      $("div.cards")
        .addClass("showing");
      $(this)
        .css({zIndex:zindex})
        .addClass("show");

      zindex++;
    }
    
  });
});



(function($){
  'use strict';
    $(window).on('load', function () {
        if ($(".pre-loader").length > 0)
        {
            $(".pre-loader").fadeOut("slow");
        }
    });
})(jQuery)


$(document).ready(function(){
  $('.slider').slider({
    height : 600,
    interval: 3000
  }
  );
});


(function($) {
  var $window = $(window),
    $html = $('nav');
      //console.log($window.width());
  function resize() {
      if ($window.width() < 600 || $window.width() == 980) {
        //console.log($window.width());
          return $html.addClass('mob-head');
      }
      //console.log($window.width());

      $html.removeClass('mob-head');
  }

  $window
      .resize(resize)
      .trigger('resize');
})(jQuery);



(function($) {
  var $window = $(window),
    $html = $('#link_col');
      //console.log($window.width());
  function resize() {
      if ($window.width() < 600 || $window.width() == 980) {
        //console.log($window.width());
          return $html.addClass('m5');
      }
      //console.log($window.width());

      $html.removeClass('m5');
  }

  $window
      .resize(resize)
      .trigger('resize');
})(jQuery);