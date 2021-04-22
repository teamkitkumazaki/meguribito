$(function() {

  //ローディングアニメーション
  function loadingAnimation(target) {
  var originSrc = [];
  var loadingCount = 0;
  var imgLength = target.find('li').length;
  var current_scrollY = $(window).scrollTop();
  var loadingState = 0;

    function homeKvShifter(){
      var slider = $('#slideShow');
      var sliderLength = $('#slideShow').find('li').length;
      var slideTxt = $('#slideTxt');
      var slideNumber = slideTxt.find('.number')
      var slideTxtBox = slideTxt.find('p');
      var objSelect;
      var timeId;
      var duration = 8000;
      var interval = 8000;
      var current = 0;
      var objBox = [];
      var btnList = [];
      var imgAlt = [];

    function changeState() {
      if (current < sliderLength - 1) {
        current++;
      } else {
        current = 0;
      }
      slideChange(current)
    }

    function startAuto() {
      timeId = setTimeout(changeState, interval);
    }

    function stopAuto() {
      clearTimeout(timeId)
    }

    function complete() {
      startAuto();
    }

    function slideChange(e) {
      console.log('e:' + e);
      $('.display_slide').removeClass('display_slide');
      setTimeout(function() {
        $('.slide' + e).addClass('display_slide');
        var slidenum = e + 1;
        slideNumber.html('0' + slidenum);
        slideTxtBox.addClass('change').html(imgAlt[e]).removeClass('change');
      }, 10);
      complete();
      current = e;
    };

    function init() {
      console.log('init');
      slider.find('li').each(function(index) {
        imgAlt[index] = $(this).find('img').attr('alt');
        if(index == 0){
          $(this).addClass('display_slide');
        }
        $(this).addClass('slide' + index);
      });
      startAuto();
    };

    init();

  }

  function loadingDelete(){
    homeKvShifter();
    setTimeout(function() {
      $('#loadInner').addClass('loaded');
      setTimeout(function() {
        $('#loading').addClass('loaded');
        $('body').removeClass('bind');
      }, 1000);
    }, 1000);
  }


  function init(){
    if(current_scrollY < 100){
      $('body').addClass('bind');
    }
    target.find('li img').each(function(index) {
      originSrc[index] = $(this).attr('src');
      $(this).attr('src', "");
      $(this).attr('src', originSrc[index]);
      console.log('index:' + originSrc[index]);
      $(this).on({
        'load': function(){
          loadingCount = loadingCount + 1;
          if(loadingCount = imgLength){
            loadingState = 1;
            loadingDelete();
          }
        }
      })
    });
    setTimeout(function() {
      if(loadingState == 0){
        loadingDelete();
      }
    }, 8000);
  }

  init();

}

if (document.getElementById('index')) {
  loadingAnimation($('#slideShow'));
}

  //ヘッダーのスクロール制御
  function scrollJudge(target) {
    var scrollSwitch = 0;
    var fixedHeader = $('#fixedHeader');
    var wHeight = $(window).height();

    function afterScroll() {
      fixedHeader.addClass('rolled');
      $('header').addClass('rolled');
      if (document.getElementById('planDetail')) {
        $('#fixedCartButton').addClass('display');
      }
      scrollSwitch = 1;
    };


    function beforeScroll() {
      fixedHeader.removeClass('rolled');
      $('header').removeClass('rolled');
      if (document.getElementById('planDetail')) {
        $('#fixedCartButton').removeClass('display');
      }
      scrollSwitch = 0;
  };

  function init() {
    var timer = false;
    var delayedEffect = [];
    $(window).on({
      'load': function() {
        var scroll = $(window).scrollTop();
        if (scroll > wHeight) {
          if (scrollSwitch == 0) {
            afterScroll();
          }
        } else {
          if (scrollSwitch == 1) {
            beforeScroll();
          }
        }
      },
      'scroll': function() {
        if (timer !== false) {
          clearTimeout(timer);
        }
        timer = setTimeout(function() {
          var scroll = $(window).scrollTop();
          if (scroll > wHeight) {
            if (scrollSwitch == 0) {
              afterScroll();
            }
          } else {
            if (scrollSwitch == 1) {
              beforeScroll();
            }
          }
        }, 1);
        $(".effect").each(function() {
          var imgPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > imgPos - windowHeight + windowHeight / 7) {
            $(this).removeClass('effect');
          };
        });
        $(".delayed_effect").each(function(index) {
          delayedEffect[index] = $(this);
          var imgPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > imgPos - windowHeight + windowHeight / 7) {
            setTimeout(function() {
              delayedEffect[index].removeClass('delayed_effect');
            }, 500);
          };
        });
      }
    });
  };

  init();

};
  scrollJudge($('body'));

  //ページトップに戻るボタン
  function returnTop(){
    var returnTop = $('#returnTop').find('button');
    returnTop.on({
      'click': function() {
        $("html, body").animate({scrollTop: 0}, 600);
      }
    });
  }

  returnTop();


  /* トップページ メインのピックアップ画像切り替え */
  function slideItemThumb(target) {
  var currentSlide = 1;
  var sliderImg = [];
  var targetSlide;
  var targetImgWrap = $('#mainPickImg');
  var targetImg = $('#mainPickImg').find('img');
  var slideNum = target.find('li').length - 1;
  var slideNextButton = target.find('.slide_next');
  var slidePrevButton = target.find('.slide_prev');

  function slideChange(e) {
    console.log(currentSlide);
    targetImgWrap.addClass('slide_change');
    setTimeout(function() {
      targetImg.attr('src', sliderImg[e]);
      targetImgWrap.removeClass('slide_change');
    }, 500);
    /*targetSlide = target.find('.slide' + currentSlide);
    target.find('.active_slide').removeClass('active_slide');
    targetSlide.addClass('active_slide');
    target.find('.current').text(currentSlide);*/
  };

  function slideNext(){
    if (currentSlide < slideNum - 0.1) {
      currentSlide = currentSlide + 1;
    } else {
      currentSlide = 1;
    }
    slideChange();
  };

  function slidePrev(){
    if (currentSlide == 1) {
      currentSlide = slideNum;
    } else {
      currentSlide = currentSlide - 1;
    }
    slideChange();
  };

  function tabTouch(){
    if(startTouchX - endTouchX > 50){
      slideNext();
    }else if(startTouchX - endTouchX < - 50){
      slidePrev();
    }
  };

  function windowDrag() {
    if (startDragX - endDragX > 100) {
      slideNext();
    } else if (startDragX - endDragX < -100) {
      slidePrev();
    }
  };

  function init() {
    target.find('button').each(function(index) {
      sliderImg[index] = $(this).find('img').attr('src');
      $(this).on({
        'click': function() {
          $('.active_box').removeClass('active_box');
          $(this).addClass('active_box');
          slideChange(index);
        }
      })
    });



    target.on({
      'touchstart' : function(e){
        startTouchX = event.changedTouches[0].pageX;
      },
      'touchmove' : function(e){
        /*
        movingTouchX = event.changedTouches[0].pageX;
        var movingX = movingTouchX - startTouchX;
        var sliderPosition = parseInt($('#top_slide ul').css('left'));
        Position = sliderPosition + movingX;
        console.log(Position);
        $('#top_slide ul').css({'left': Position + 'px'});
        */
      },
      'touchend' : function(e){
        endTouchX = event.changedTouches[0].pageX;
        tabTouch();
      }
    });
  };

  init();

};

if (document.getElementById('index')) {
  slideItemThumb($('#sliderShifter'));
}

// ハンバーガーメニューの開閉
function humMenuControll2(target){
  var humMenuButton = $('#humButton');
  var humMenuButton2 = $('#humButton2');
  var humClose = $('#humClose');
  var humMenuState = 0;
  var fadeBox = [];
  var current_scrollY;

  function hummenuMove(){
    if(humMenuState == 0){
      target.addClass('open');
      humMenuState = 1;
      current_scrollY = $(window).scrollTop();
      setTimeout(function() {
        $('body').addClass('bind');
        $('body').css({
          top: -1 * current_scrollY
        });
      }, 250);
    }else{
      target.removeClass('open');
      $('body').removeClass('bind');
      $('body').attr('style', '');
      $('html, body').prop({scrollTop: current_scrollY});
      humMenuState = 0;
      $(this).removeClass('open');
    }
  }

  function init(){
    humMenuButton.on({
      'click': function(){
        hummenuMove();
      }
    })
    humMenuButton2.on({
      'click': function(){
        hummenuMove();
      }
    })
    humClose.on({
      'click': function(){
        hummenuMove();
      }
    })
  }

  init();
}

humMenuControll2($('#slideMenuNew'));

//よくある質問
function faqToggle(target) {
  var toggleItem = [];
  var toggleButton = [];
  var toggleContents = [];
  var toggleState = [];

  function toggleMove(e) {
    var w = $(window).width();
    var toggleHeight = toggleButton[e].outerHeight();
    var targetHeight = toggleContents[e].outerHeight();
    if (toggleState[e] == -1 || toggleState[e] == 0) {
      toggleButton[e].addClass('active');
      if (w > 750) {
        toggleItem[e].css({
          'height': toggleHeight + targetHeight + 'px'
        });
      } else {
        toggleItem[e].css({
          'height': toggleHeight + targetHeight + 'px'
        });
      }
      toggleState[e] = 1;
    } else {
      toggleButton[e].removeClass('active');
        toggleItem[e].css({
          'height': toggleHeight + 'px'
        });
      toggleState[e] = 0;
    }
  }

  function init() {
    $.each(target.find('.qa_item'), function(index) {
      toggleItem[index] = $(this);
      toggleButton[index] = $(this).find('.qa_button');
      toggleContents[index] = $(this).find('.qa_contents');
      $(this).css({'height': toggleButton[index].outerHeight() + 4 + 'px'});
      toggleState[index] = -1;
      toggleButton[index].on({
        'click': function() {
          toggleMove(index);
        }
      });
    });
  }

  init();

}

if (document.getElementById('planDetail')) {
  faqToggle($('#faqToggle'));
}

function contetHeightAdjust(){
  var heightAdjust = $('#heightAdjust');
  var guestHouseWrap = $('#guestHouseWrap');
  var wrapInner = $('#wrapInner').outerHeight();
  heightAdjust.css({'height': wrapInner + 30 + 'px'});
  guestHouseWrap.css({'height': wrapInner + 30 + 'px'});
}

if (document.getElementById('planDetail')) {
  $(window).on({
    'resize': function(){
      contetHeightAdjust();
    }
  })
}

function checkoutTextArrange(){
  $('#place_order').text('予約を確定する');
  $('#ce4wp_checkout_consent_checkbox_field').find('label').html('<label class="checkbox "><input type="checkbox" class="input-checkbox " name="ce4wp_checkout_consent_checkbox" id="ce4wp_checkout_consent_checkbox" value="1">メールマガジンを受け取る</label>');
}

if (document.getElementById('paymentPage')) {
  checkoutTextArrange();
}

function arrangeMypageNav(){
  var currentLink = location.href;
  var logout = $('#logoutLink');
  var navigation = $('.woocommerce-MyAccount-navigation');
  var addressLink = $('.woocommerce-MyAccount-navigation-link--edit-address');
  var historyLink = $('.woocommerce-MyAccount-navigation-link--orders');
  var logoutLink = $('.woocommerce-MyAccount-navigation-link--customer-logout a').attr('href');
  var navLink = [];
  console.log('currentLink:' + currentLink);
  addressLink.find('a').attr('href', 'https://meguribito.com/my-account/edit-address/billing/');
  historyLink.find('a').text('');
  logout.attr('href', logoutLink);
}

if (document.getElementById('mypage')) {
  arrangeMypageNav();
}

function setBookingHistory(){
  var detailLink = [];
  var detailLink2 = [];
  var hrefTxt = [];
  var bookingList = $('.my_account_bookings');
  bookingList.find('tr').each(function(index) {
    detailLink[index] = $(this).find('.booked-product a');
    detailLink2[index] = $(this).find('.order-number a');
    detailLink2[index].text('');
    hrefTxt[index] = detailLink[index].attr('href');
    detailLink[index].attr('href', 'javascript:void(0);').attr('link', hrefTxt);
    detailLink2[index].attr('href', 'javascript:void(0);').attr('link', hrefTxt);
  });
}

if (document.getElementById('mypage')) {
  setBookingHistory();
}

function setHistoryList(){
  var detailLink = [];
  var detailLink2 = [];
  var hrefTxt = [];
  var bookingList = $('.woocommerce-MyAccount-orders');
  bookingList.find('tr').each(function(index) {
    detailLink[index] = $(this).find('.woocommerce-orders-table__cell-order-number a');
    detailLink2[index] = $(this).find('.woocommerce-orders-table__cell-order-actions a');
    detailLink2[index].text('');
    hrefTxt[index] = detailLink[index].attr('href');
    detailLink[index].attr('href', 'javascript:void(0);').attr('link', hrefTxt);
    detailLink2[index].attr('href', 'javascript:void(0);').attr('link', hrefTxt);
  });
}

if (document.getElementById('mypage')) {
  setHistoryList();
}

  if (document.getElementById('index')) {
    $('#serviceSlider').slick({
      accessibility: false,
      infinite: true,
      dots: false,
      slidesToShow: 1,
      centerMode: false,
      autoplay: false,
      autoplaySpeed: 5000,
      speed: 500,
      prevArrow: '<button type="button" class="slick-prev">PREV</button>',
      nextArrow: '<button type="button" class="slick-next">NEXT</button>',
      responsive: [{
        breakpoint: 980,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '10%',
          centerMode: false,
        }
      }]
    });
  }

  if (document.getElementById('planDetail')) {
    $('#spotSlider').slick({
      accessibility: false,
      infinite: false,
      dots: true,
      slidesToShow: 3,
      centerMode: true,
      autoplay: false,
      responsive: [{
        breakpoint: 720,
        settings: {
          infinite: true,
          slidesToShow: 1,
          centerPadding: '10%',
          centerMode: true,
        }
      }]
    });
    $('#yadoImageSlider').slick({
      accessibility: false,
      infinite: true,
      dots: false,
      slidesToShow: 1,
      centerMode: false,
      autoplay: false,
      autoplaySpeed: 5000,
      speed: 500,
      prevArrow: '<button type="button" class="slick-prev">PREV</button>',
      nextArrow: '<button type="button" class="slick-next">NEXT</button>',
      responsive: [{
        breakpoint: 980,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '10%',
          centerMode: false,
        }
      }]
    });
    contetHeightAdjust($('#faqToggle'));
  }
  if (document.getElementById('service')) {
    $('#characterSlider').slick({
      accessibility: false,
      infinite: false,
      dots: true,
      slidesToShow: 3,
      centerMode: true,
      autoplay: false,
      responsive: [{
        breakpoint: 720,
        settings: {
          infinite: true,
          slidesToShow: 1,
          centerPadding: '5%',
          centerMode: true,
        }
      }]
    });
  }
});
