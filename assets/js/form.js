$(function() {
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
        target.find('select[name="category"]'), //0 お問い合わせ項目
        target.find('input[name="username"]'), //1 氏名
        target.find('input[name="companyname"]'), //2 所属
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
      items[2].prop('isSuccess', true);
      //0 お問い合わせ内容
      items[0].on({
        'blur': function(){
          checkEmptyText( items[0], '※項目を選択してください。' );
          checkAll();
        }
      });
      //1 氏名
      items[1].on({
        'keyup': function(){
          checkEmptyText( items[1], '※氏名を入力してください。' );
          checkAll();
        },
        'blur': function(){
          checkEmptyText( items[1], '※氏名を入力してください。' );
          checkAll();
        }
      });
      //2 所属
      items[2].on({
        'keyup': function(){
          checkAll();
        },
        'blur': function(){
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
      var category = target.find('select[name="category"]').val();
      var userName = target.find('input[name="username"]').val();
      var companyName = target.find("input[name=companyname]").val();
      var userMail = target.find("input[name=usermail]").val();
      var content = target.find("textarea[name=content]").val();
      event.preventDefault();
      $.ajax({
        url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfqxzVsBM_LV2SpMnBH2F4j1XTMU-swfdcRnAjO2kH4ewxHjA/formResponse",
        data: {
          "entry.434479048": category,
          "entry.983139926": userName,
          "entry.801301662": companyName,
          "entry.1625400235": userMail,
          "entry.95880827": content,
        },
      type: "POST",
      dataType: "xml",
      statusCode: {
          0: function () {
            setTimeout(function() {
              $('#ajaxLoader').removeClass('loading');
              $('#statusMessage').addClass('complete').html('<span class="text">メッセージは送信されました。自動返信メールをご確認ください。</span>');
            }, 500);
          },
          200: function () {
            $('#statusMessage').addClass('error').html('<span class="text">メッセージ送信に失敗しました。お手数ではございますが、時間を置いてもう一度お試しください。</span>');
            setTimeout(function() {
              location.href = 'https://www.zeroworks.biz/'
            }, 3000);
          }
        }
      });
    }

    init();

  };

  if (document.getElementById('contact')) {
    setMyForm($('#formWrap'));
  }
});
