var main = function() {

    var txt = '<div class="col-lg-4 col-md-6 col-sm-6">\
    <div class="accordion">\
        <div class="list-item accordion__item js-accordion-item active">\
            <div class="list-item-header accordion-header js-accordion-header"\
                style="display: flex;justify-content: space-between;align-items: center;">\
                <div class="list-item-title">\
                    Yesterday\'s Best\
                </div>\
                <i class="fa fa-chevron-down"></i>\
            </div>\
            <div class="list-item-body accordion-body js-accordion-body">\
                <div class="accordion-body__contents">\
                    <div class="list-content">\
                        <div class="content-item">\
                            <div class="text-wrapper-left first ">Handicapper</div>\
                            <div class="text-wrapper-right first">Profit</div>\
                        </div>\
                        <div class="content-item">\
                            <div class="text-wrapper-left">Wallace Gilberry</div>\
                            <div class="text-wrapper-right">$1,185</div>\
                        </div>\
                        <div class="content-item">\
                            <div class="text-wrapper-left">Wallace Gilberry</div>\
                            <div class="text-wrapper-right">$1,185</div>\
                        </div>\
                        <div class="content-item">\
                            <div class="text-wrapper-left">Wallace Gilberry</div>\
                            <div class="text-wrapper-right">$1,185</div>\
                        </div>\
                        <div class="content-item">\
                            <div class="text-wrapper-left">Wallace Gilberry</div>\
                            <div class="text-wrapper-right">$1,185</div>\
                        </div>\
                    </div>\
                </div>\
            </div><!-- end of accordion body -->\
        </div><!-- end of accordion item -->\
    </div>\
</div>';

    var init = function() {
        bind();
        toggleMenu();
        accordionEvent();
        getBestHandicappers();
    }

    var bind = function() {
        $(window).on("resize", toggleMenu);
        $(".toggle-menu").on("click", toggleMenuDisplay);
        $(window).on("resize", accordionEvent);
        $(window).on("load scroll", headerFixed);
        $(".tab-button.best").on("click", getBestHandicappers);
        $(".tab-button.leaders").on("click", getLeadersHandicappers);
    }

    var headerFixed = function() {
        var scrollTop = $(window).scrollTop();
        console.log(scrollTop)
        if (scrollTop > 110 ) {
            $(".header-wrapper").addClass("fixed");
        } 

        if (scrollTop < 110) {
            $(".header-wrapper").removeClass("fixed");
        }
    }

    var toggleMenu = function() {
        var browserWidth = window.innerWidth;
        if (browserWidth < 720 ) {
            $(".primary-menu").addClass("toggle-active");
        } 

        if (browserWidth > 720) {
            $(".primary-menu").removeClass("toggle-active");
        }
    }

    var toggleMenuDisplay = function() {
        $(".primary-menu").toggleClass("display");
        if ($(".primary-menu").hasClass("display")) {
            $(".toggle-menu").html('<i class="fa fa-times"></i>');
        } else {
            $(".toggle-menu").html('<i class="fa fa-bars"></i>');
        }
    }

    var accordionEvent = function() {
        var browserWidth = window.innerWidth;
        if (browserWidth < 576 ) {
            if (!$(".accordion").hasClass("js-accordion")) {
                $(".accordion").addClass("js-accordion");
                accordion.init({ speed: 300, oneOpen: true });
            }
        } 

        if (browserWidth > 576) {
            $(".accordion").removeClass("js-accordion");
        }
    }

    var getBestHandicappers = function() {
        var htmlTxt = txt + txt + txt;
        $(".tab-button.leaders").removeClass("active");
        $(".tab-button.best").addClass("active");
        $(".handicapper-list .list-wrapper .row").html(htmlTxt);
        accordionEvent();
    }

    var getLeadersHandicappers = function() {
        var htmlTxt = txt + txt + txt + txt + txt + txt;
        $(".tab-button.leaders").addClass("active");
        $(".tab-button.best").removeClass("active");
        $(".handicapper-list > .list-wrapper > .row").html(htmlTxt);
        accordionEvent();
    }

    return {
        init: init
    }

}();

var accordion = (function(){

    return {
      // pass configurable object literal
       init: function($settings) {
      var $accordion = $(".js-accordion");
      var $accordion_header = $accordion.find(".js-accordion-header");
      var $accordion_item = $(".js-accordion-item");

      // default settings 
      var settings = {
        // animation speed
        speed: 300,

        // close all other accordion items if true
        oneOpen: true
      };
         console.log("accordion");
       $accordion_header.on("click", function() {
         accordion.toggle($(this));
       });

      // ensure only one accordion is active if oneOpen is true
       if(settings.oneOpen && $(".js-accordion-item.active").length > 1) {
         $(".js-accordion-item.active").removeClass("active");
       }

      // reveal the active accordion bodies
      $(".js-accordion-item.active").find("> .js-accordion-body").show();
      },
      toggle: function($this) {
        var settings = {
          // animation speed
          speed: 300,

          // close all other accordion items if true
          oneOpen: true
        };

      if(settings.oneOpen && $this[0] != $this.closest(".js-accordion").find("> .js-accordion-item.active > .js-accordion-header")[0]) {
        $this.closest(".js-accordion")
          .find("> .js-accordion-item") 
          .removeClass("active")
          .find(".js-accordion-body")
          .slideUp()
      }
      $('#yourElement').css('transform', 'rotate(180deg)');
      // show/hide the clicked accordion item
      $this.closest(".js-accordion-item").toggleClass("active");
      if ($this.closest(".js-accordion-item").hasClass("active")) {
        $this.find(".fa-chevron-down").css('transform', 'rotate(0deg)');
      } else {
        $this.find(".fa-chevron-down").css('transform', 'rotate(180deg)');
      }
      $this.next().stop().slideToggle(settings.speed);
      }
    }
    })();

$(document).ready(function() {
    main.init();
});