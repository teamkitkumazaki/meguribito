$(function() {

  //ローディングアニメーション
  function loadingAnimation(target) {
  var originSrc = [];
  var loadingCount = 0;
  var imgLength = target.find('li').length;
  var current_scrollY = $(window).scrollTop();
  var loadingState = 0;

    function homeKvShifter(){
      var slider = $('#sliderImgBox');
      var sliderLength = $('#sliderImgBox').find('li').length;
      var objSelect;
      var timeId;
      var duration = 4000;
      var interval = 4000;
      var current = 0;
      var objBox = [];
      var btnList = [];

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
      $('.display_slide').removeClass('display_slide');
      $('.slide' + e).addClass('display_slide');
      complete();
      current = e;
    };

    function init() {
      slider.find('li').each(function(index) {
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
    setTimeout(function() {
      $('#loadInner').addClass('loaded');
      setTimeout(function() {
        $('#loading').addClass('loaded');
        setTimeout(function() {
          $('#homeKvWrap').removeClass('loading');
          setTimeout(function() {
            $('#homeKvWrap').addClass('loaded');
            $('#sliderImages').removeClass('loading')
            homeKvShifter();
            setTimeout(function() {
              $('header').removeClass('loading');
              $('body').removeClass('bind');
            }, 800);
          }, 800);
        }, 1200);
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
  loadingAnimation($('#sliderImages'));
}

  //ヘッダーのスクロール制御
  function scrollJudge(target) {
    var scrollSwitch = 0;
    var fixedHeader = $('#fixedHeader');
    var wHeight = $(window).height();

    function afterScroll() {
      fixedHeader.addClass('rolled');
      $('header').addClass('rolled');
      scrollSwitch = 1;
    };


    function beforeScroll() {
      fixedHeader.removeClass('rolled');
      $('header').removeClass('rolled');
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

  function humMenuControll(target){
    var btnSearch = $('#btnSearch');
    var btnSearch02 = $('#btnSearch02');
    var humClose = $('#humClose');
    var humState = 0;
    var fadeBox = [];
    var toggleButton = [];
    var toggleContents = [];
    var toggleState = [];
    var current_scrollY;

    function hummenuMove(){
      if(humState == 0){
        target.addClass('open');
        humState = 1;
        current_scrollY = $(window).scrollTop();
        setTimeout(function() {
          $('body').addClass('bind');
          $('body').css({
            top: -1 * current_scrollY
          });
          target.find('.fade_box').each(function(index) {
            fadeBox[index] = $(this);
            var duration = 100 * index;
            setTimeout(function() {
              fadeBox[index].addClass('open');
            }, duration);
          });
        }, 250);
      }else{
        target.removeClass('open');
        $('body').removeClass('bind');
        $('body').attr('style', '');
        $('html, body').prop({scrollTop: current_scrollY});
        humState = 0;
        setTimeout(function() {
          target.find('.fade_box').each(function(index) {
            $(this).removeClass('open');
          });
        }, 1000);
      }
    }

    function humToggleControll(e){
      if (toggleState[e] == -1 || toggleState[e] == 0) {
        toggleButton[e].addClass('active');
        var tagetHeight = toggleContents[e].find('.toggle_inner').outerHeight();
        toggleContents[e].css({
          'height': tagetHeight + 'px'
        });
        toggleState[e] = 1;
      } else {
        toggleButton[e].removeClass('active');
        toggleContents[e].css({
          'height': 0 + 'px'
        });
        toggleState[e] = 0;
      }
    }

    function init(){
      target.find('.search_box').each(function(index) {
        toggleState[index] = -1;
        toggleButton[index] = $(this).find('button');
        toggleContents[index] = $(this).find('.search_toggle');
        toggleButton[index].on({
          'click': function(){
            humToggleControll(index);
          }
        })
      });
      btnSearch.on({
        'click': function(){
          hummenuMove();
        }
      })
      btnSearch02.on({
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

  humMenuControll($('#searchHummenu'));

  function humMenuControll2(target){
    var humMenuButton = $('#humMenuButton');
    var humClose = $('#humClose2');
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
          target.find('.fade_box').each(function(index) {
            fadeBox[index] = $(this);
            var duration = 100 * index;
            setTimeout(function() {
              fadeBox[index].addClass('open');
            }, duration);
          });
        }, 250);
      }else{
        target.removeClass('open');
        $('body').removeClass('bind');
        $('body').attr('style', '');
        $('html, body').prop({scrollTop: current_scrollY});
        humMenuState = 0;
        setTimeout(function() {
          target.find('.fade_box').each(function(index) {
            $(this).removeClass('open');
          });
        }, 1000);
      }
    }

    function init(){
      humMenuButton.on({
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

  humMenuControll2($('#menuHum'));

  //検索欄の有効化
  function controlKeyWordSearch(target,word){
    var searchInput = [];
    var submitButton = [];

    function keyWordSearch(w){
      if(w.length > 0 && w != null){
        location.href = location.protocol + '/?s=' + w;
      }
    }

    function init(){
      target.find('.function-search').each(function(index) {
        searchInput[index] = $(this).find('input');
        submitButton[index] = $(this).find('button');
        submitButton[index].on({
          'click': function(){
            var word = searchInput[index].val();
            keyWordSearch(word);
          }
        })
      });
    }

    init();

  }

    controlKeyWordSearch($('body'));

  // 作品詳細 ローディングアニメーション
  function loadingSet(target){
    var imgPreloader = new Image();
    var mainImg = $('#mainImg');
    var originSrc = mainImg.attr('src');
    var loadingState = 0;
    mainImg.attr('src', "");
    mainImg.attr('src', originSrc);

    function removeLoading(){
      $('article').removeClass('loading');
    }

    function init(){
      mainImg.on({
        'load': function() {
          setTimeout(function() {
            loadingState = 1;
            removeLoading()
          }, 1000);
        }
      })
      setTimeout(function() {
        if(loadingState == 0){
          removeLoading();
        }
      }, 8000);
    }
      init();
  }

  if (document.getElementById('workDetail')) {
    loadingSet();
  }

  // アーティスト詳細 ローディングアニメーション
  function loadingSet2(target) {
  var originSrc = [];
  var loadingCount = 0;
  var imgLength = target.find('.slider_img').length;
  var loadingState = 0;

    function loadingDelete(){
      setTimeout(function() {
        $('article').removeClass('loading');
      }, 1000);
    }


    function init(){
      target.find('.slider_img').each(function(index) {
        originSrc[index] = $(this).attr('src');
        $(this).attr('src', "");
        $(this).attr('src', originSrc[index]);
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

  if (document.getElementById('artistDetail')) {
    loadingSet2($('#artistSlider'));
  }

  function artistPopControll(target){
    var profilePopButton = $('#profilePopButton');
    var detailClose = $('#detailClose');
    var detailPopState = 0;
    var current_scrollY;

    function detailPopMove(){
      if(detailPopState == 0){
        target.addClass('open');
        detailPopState = 1;
        current_scrollY = $(window).scrollTop();
        $('body').addClass('bind');
        $('body').css({
          top: -1 * current_scrollY
        });
      }else{
        target.removeClass('open');
        $('body').removeClass('bind');
        $('body').attr('style', '');
        $('html, body').prop({scrollTop: current_scrollY});
        detailPopState = 0;
      }
    }


    function init(){
      profilePopButton.on({
        'click': function(){
          detailPopMove();
        }
      })
      detailClose.on({
        'click': function(){
          detailPopMove();
        }
      })
    }

    init();

  }

  if (document.getElementById('artistDetail')) {
    artistPopControll($('#artistDetailPop'));
  }

  function worksSearchToggle(target){
    var toggle = [];
    var height = [];
    var toggleState = [];
    var toggleButton = [];
    var toggleContents = [];
    function humToggleControll(e){
      if (toggleState[e] == -1 || toggleState[e] == 0) {
        toggleButton[e].addClass('active');
        var tagetHeight = toggleContents[e].find('.toggle_inner').outerHeight();
        toggle[e].css({
          'height': tagetHeight + height[e] + 30 + 'px'
        });
        toggleState[e] = 1;
      } else {
        toggleButton[e].removeClass('active');
        toggle[e].css({
          'height': height[e] + 'px'
        });
        toggleState[e] = 0;
      }
    }

    function init(){
      target.find('.search_button').each(function(index) {
        toggle[index] = $(this);
        height[index] = $(this).outerHeight();
        toggleState[index] = -1;
        toggleButton[index] = $(this).find('.search_ttl');
        toggleContents[index] = $(this).find('.search_toggle');
        toggleButton[index].on({
          'click': function(){
            humToggleControll(index);
          }
        })
      });
    }

    init();
  }

  if (document.getElementById('worksList')) {
    worksSearchToggle($('#worksSearch'));
  }




  function photoGallaryControll(){
    var gallaryPop = $('#gallaryPop');
    var photoGallary = $('.comp-photo-gallary-list');
    var imgButton = [];
    var imgBox = [];
    var imgBoxLength = [];
    var gallaryImg = $('#gallaryImg');
    var gallaryImgBox = $('#gallaryImgBox');
    var detailClose = $('#detailClose');
    var caretPrev = $('#caretPrev');
    var caretNext = $('#caretNext');
    var gallaryImgBox = $('#gallaryImgBox');
    var gallaryLength = photoGallary.find('button').length;
    var detailPopState = 0;
    var gallaryDisplay = -1;
    var current_scrollY;

    function gallaryPopMove(e, f){
      if(e != -1){
        gallaryPop.addClass('open');
        gallaryImgBox.addClass('loading');
        gallaryImg.attr('src',imgBox[e][f]);
        current_scrollY = $(window).scrollTop();
        detailPopState = e;
        gallaryDisplay = f;
        setTimeout(function() {
          gallaryImgBox.removeClass('loading');
        }, 500);
      }else{
        gallaryPop.removeClass('open');
        detailPopState = -1;
        gallaryDisplay = -1;
        setTimeout(function() {
          gallaryImgBox.addClass('loading');
        }, 500);
      }
    }

    function slideNext(){
      if(gallaryDisplay == imgBoxLength[detailPopState] - 1){
        gallaryDisplay = 0;
      }else{
        gallaryDisplay = gallaryDisplay + 1;
      }
      gallaryImgBox.addClass('loading');
      setTimeout(function() {
        gallaryPopMove(detailPopState, gallaryDisplay);
      }, 350);
    };

    function slidePrev(){
      if(gallaryDisplay != 0){
        gallaryDisplay = gallaryDisplay - 1;
      }else{
        gallaryDisplay = imgBoxLength[detailPopState] - 1;
      }
      gallaryImgBox.addClass('loading');
      setTimeout(function() {
        gallaryPopMove(gallaryDisplay);
      }, 350);
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


    function init(){
      $('article').find('.comp-photo-gallary-list').each(function(index) {
        imgBox[index] = [];
        imgBoxLength[index] = $(this).find('button').length;
        $(this).find('button').each(function(index2) {
          var imgSrc = $(this).find('img').attr('src');
          imgBox[index][index2] = imgSrc;
          $(this).on({
            'click': function(){
              gallaryPopMove(index,index2);
            }
          })
        });
      });
      detailClose.on({
        'click': function(){
          gallaryPopMove(-1, -1);
        }
      })
      gallaryImgBox.on({
        'dragstart': function(e) {
          startDragX = event.pageX;
        },
        'dragend': function(e) {
          endDragX = event.pageX;
          windowDrag();
        }
      });

      gallaryImgBox.on({
        'touchstart' : function(e){
          startTouchX = event.changedTouches[0].pageX;
        },
        'touchend' : function(e){
          endTouchX = event.changedTouches[0].pageX;
          tabTouch();
        }
      });
      caretNext.on({
        'click': function(){
          slideNext();
        }
      })
      caretPrev.on({
        'click': function(){
          slidePrev();
        }
      })
    }

    init();
  }


  if (document.getElementById('usecaseDetail')) {
    photoGallaryControll();
  }

  if (document.getElementById('caseEn')) {
    photoGallaryControll();
  }

  /* お問い合わせフォームのバリデーション */
  function setMyForm(target){
    var ERROR_MESSAGE_CLASSNAME = 'errorMsg'; //エラー時のメッセージ要素のclass名
    var ERROR_INPUT_CLASSNAME = 'errorInput'; //エラー時のinput要素のclass名
    var errorCount = 0;
    var submitButton = $('#submitButton');
    var items = []; //チェック対象となるテキスト入力要素を格納した配列

    //項目チェックする
    var checkAll = function(){
      errorCount = 0;

      //input,textareaのチェック
      for( var i=0; i<items.length; i++ ){
        if( items[i].prop('isSuccess') == false ){
          errorCount++;
        };
      };


      if( errorCount == 0 ){
        submitButton.find('input').attr('disabled', false);
        submitButton.find('input').attr('value', '送信する');
        submitButton.removeClass('disabled');
      }else{
        submitButton.find('input').attr('disabled', true);
        submitButton.addClass('disabled');
        submitButton.find('input').attr('value', '全ての項目を入力ください');
      };
    };

    //エラーメッセージの追加
    var addErrorMessage = function(selector, msg){
      removeErrorMessage(selector);
      selector.parent('div').append('<span class="attention '+ERROR_MESSAGE_CLASSNAME+'">'+msg+'</span>');
      selector.addClass(ERROR_INPUT_CLASSNAME);
    };

    //エラーメッセージの削除
    var removeErrorMessage = function(selector){
      var msgSelector = selector.parent().parent('div').find('.'+ERROR_MESSAGE_CLASSNAME);
      if( msgSelector.length != 0 ){
        msgSelector.remove();
        selector.removeClass(ERROR_INPUT_CLASSNAME);
      };
    };

    //input,textareaの未入力チェック
    var checkEmptyText = function(selector, msg){
      if( selector.val() == '' ||  selector.val() == null){
        addErrorMessage(selector, msg);
        selector.prop('isSuccess', false);
      }else{
        removeErrorMessage(selector);
        selector.prop('isSuccess', true);
      };
    };

    var emptyThrough = function(selector){
      if( selector.val() == '' ||  selector.val() == null){
        removeErrorMessage(selector);
        selector.prop('isSuccess', true);
      }
    };

    //radioの未入力チェック
    var checkRadioBox = function(selector, msg){
      if( selector.prop("checked")){
        removeErrorMessage(selector);
        selector.prop('isSuccess', true);
        submitButton.removeClass('disabled');
        submitButton.find('input').attr('value', '送信する');
      }else{
        addErrorMessage(selector, msg);
        selector.prop('isSuccess', false);
        submitButton.addClass('disabled');
        submitButton.find('input').attr('value', '全ての項目を入力してください');
      };
    };

    //文字列のフォーマットチェック
    function checkFormatText(selector, _mode, msg){
      var value = selector.val();
      switch(_mode){
        //全角のみ
        case 0:
          if(value.match(/^[^ -~｡-ﾟ]*$/)){
            selector.prop('isSuccess', true);
            removeErrorMessage(selector);
          }else{
            selector.prop('isSuccess', false);
          };
          break;
        //ふりがなのみ
        case 1:
          if(value.match(/^[\u3040-\u309F]+$/)){
            selector.prop('isSuccess', true);
          }else{
            selector.prop('isSuccess', false);
          };
          break;
        //半角数字のみ
        case 2:
          if(value.match(/^[0-9]*$/)){
            selector.prop('isSuccess', true);
          }else{
            selector.prop('isSuccess', false);
          };
          break;
        //メールアドレスかどうか
        case 3:
          if(value.match(/^[a-zA-Z0-9!$&*.=^`|~#%'+\/?_{}-]+@([a-zA-Z0-9_-]+\.)+[a-zA-Z]{2,6}$/)){
            selector.prop('isSuccess', true);
          }else{
            selector.prop('isSuccess', false);
          };
          break;
      };
      if( selector.prop('isSuccess') == false ){
        addErrorMessage(selector, msg);
      }else{
        removeErrorMessage(selector);
      };
    };

    //初期設定
    var init = function(){
      target.find('input[type=button]').attr('disabled', true);
      //submitイベントの設定
      target.on({
        'submit': function(){
          checkAll();
        }
      });
      //input要素を配列に格納
      items = [
        target.find('input[name="username"]'), //0 氏名
        target.find('input[name="companyname"]'), //1 所属
        target.find('select[name="prefname"]'), //2 お住まいの都道府県
        target.find('input[name="usermail"]'), //3 メールアドレス
        target.find('textarea[name="content"]'), //4 お問い合わせ内容
        target.find('input[name="agreement"]') //5 プラポリへの同意
      ];
      //input要素のプロパティを設定
      $.each(items, function(index){
        items[index].prop('isSuccess', false);
      });

      //enterキーでsubmitしてしまうのを防止する
      target.find('input[type=text]').on({
        'keypress': function(e){
          if( (e.keyCode == 13) ) return false;
        }
      });
      // -1 お問い合わせの目的
      $('input[name="contacttype"]').on({
        'click': function(){
          var selectedNum = $(this).attr('number');
          if(selectedNum == 1){
            $('#displayControll').addClass('optional');
            if(items[1].prop('isSuccess')){}else{
              items[1].prop('isSuccess', true);
            }
            checkAll();
          }else{
            $('#displayControll').removeClass('optional');
            if(items[1].prop('isSuccess')){
              checkEmptyText( items[1], '※所属を入力してください。' );
              checkAll();
            }
          }
        }
      });
      //0 氏名
      items[0].on({
        'keyup': function(){
          checkEmptyText( items[0], '※氏名を入力してください。' );
          checkAll();
        },
        'blur': function(){
          checkEmptyText( items[0], '※氏名を入力してください。' );
          checkAll();
        }
      });
      //1 所属
      items[1].on({
        'keyup': function(){
          checkEmptyText( items[1], '※所属を入力してください。' );
          checkAll();
        },
        'blur': function(){
          checkEmptyText( items[1], '※所属を入力してください。' );
          checkAll();
        }
      });
      //2 お住まいの都道府県
      items[2].on({
        'blur': function(){
          checkEmptyText( items[2], '※項目を選択してください。' );
          checkAll();
        }
      });
      //3 メールアドレス
      items[3].on({
        'blur': function(){
          checkEmptyText( items[3], '※メールアドレスをご入力ください。' );
          if( items[3].prop('isSuccess') ) checkFormatText( items[3], 3, '※メールアドレスの形式をご確認ください' );
          checkAll();
        }
      });
      //4 お問い合わせ内容
      items[4].on({
        'keyup': function(){
          checkEmptyText( items[4], '※お問い合わせ内容を入力してください。' );
          checkAll();
        },
        'blur': function(){
          checkEmptyText( items[4], '※お問い合わせ内容を入力してください。' );
          checkAll();
        }
      });
      //5 プラポリへの同意
      items[5].on({
        'click': function(){
          checkRadioBox( items[5], '※プライバシーポリシーに同意ください。');
          checkAll();
        }
      });
      submitButton.on({
        'click': function(){
          if( errorCount == 0 ){
            processOrderContent();
            var scrollHeight = $('#formWrap').offset().top;
          }else{
            var scrollHeight = $('#formWrap').offset().top;
            $("html, body").animate({
              scrollTop: scrollHeight
            }, 300);
          };
        }
      })
    };

    function processOrderContent(){
      submitButton.addClass('disabled');
      $('#ajaxLoader').addClass('loading');
      setTimeout(function() {
        $('#ajaxLoader').removeClass('loading');
          target.submit();
      }, 1000);
    }

    init();

  };

  if (document.getElementById('contact')) {
    setMyForm($('#formWrap'));
  }

  if (document.getElementById('artistDetail')) {
    $('#artistSlider').slick({
      accessibility: false,
      infinite: true,
      dots: false,
      slidesToShow: 1,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 1000,
      responsive: [{
        breakpoint: 760,
        settings: {
          slidesToShow: 1,
          centerPadding: '10%',
          centerMode: false,
        }
      }]
    });
  }

});
