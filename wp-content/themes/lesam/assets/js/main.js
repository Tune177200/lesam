jQuery(document).ready(function($){
    
})

jQuery(".menu ul li a").wrap("<span></span>");
jQuery(".menu li").find("ul").prev().addClass("hasSub");
jQuery(".menu li").find("ul").prev().append("<em class='subarrow'></em>");
jQuery(".menu li").find("ul").wrap("<div class='submn'></div>");

jQuery('.menu .subarrow').each(function() {
    jQuery(this).on("click", function() {
        jQuery(this).parent().next().toggleClass('opened');
        jQuery(this).parent().toggleClass('opened');
    });
});

jQuery(".nav-sub li").find("ul").prev().addClass("hasSub");

jQuery('.control-page').each(function() {
    var currentid = jQuery(this).attr('href');
    jQuery(this).on("click", function(e) {
        e.preventDefault();
        jQuery(this).toggleClass('active-burger');
        jQuery(currentid).toggleClass('open-sub');
        jQuery('body').toggleClass('open-page');
    });
});	

jQuery(".slick-0-desktop").slick({
    autoplay: true,
    autoplaySpeed: 10000,
    speed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade:true
});
jQuery(".slick-3").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 700,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '0px',
    responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 474,
          settings: {
            slidesToShow: 1,
          }
        }
    ]
});

jQuery(".slick-4").slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 700,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 991,
      settings: {
      slidesToShow: 2,
      }
    },
    {
      breakpoint: 474,
      settings: {
      slidesToShow: 1,
      }
    }
  ]
});


jQuery(".slick-1").slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 700,
  slidesToShow: 1,
  slidesToScroll: 1
});

jQuery(".slick-blog").slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 700,
  slidesToShow: 3,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: '0px',
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      }
    }
]
});

jQuery(".slick-5").slick({
  autoplay: true,
  autoplaySpeed: 2500,
  speed: 700,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 991,
      settings: {
      slidesToShow: 4,
      }
    },
    {
      breakpoint: 640,
      settings: {
      slidesToShow: 3,
      }
    },
    {
      breakpoint: 474,
      settings: {
      slidesToShow: 2,
      }
    }
  ]
});

jQuery(".slider-vertical").each(function(e){
  var idSlider = "slider-vertical-"+ e;
  jQuery(this).attr("id", idSlider);
  var strIdSlider = "#" + idSlider;
  jQuery(this).find('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    //adaptiveHeight: true,
    asNavFor: strIdSlider + ' .slider-nav'
  });
  jQuery(this).find('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: strIdSlider + ' .slider-for',
    vertical: true,
    dots: false,
    arrows: false,
    //centerMode: true,
    //adaptiveHeight: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          vertical: false,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          vertical: true,
        }
      },
      {
        breakpoint: 567,
        settings: {
          slidesToShow: 4,
          vertical: false,
        }
      },
      {
        breakpoint: 474,
        settings: {
          slidesToShow: 3,
          vertical: false,
        }
      }
    ]
  });
});