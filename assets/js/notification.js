$(function() {
  function processOrderContent(target){
    var overview = $('.woocommerce-order-overview');
    var detail = $('.woocommerce-table--order-details');
    var customer = $('.woocommerce-customer-details');
    var summary = [];
    var customerInfoIndex;
    var userName;
    var thText;
    var notice;
    var adminMail;
    var orderID = overview.find('.order').find('strong').text();
    var orderDate = overview.find('.date').find('strong').text();
    var userMail = overview.find('.email').find('strong').text();
    var orderPrice = overview.find('.amount').find('bdi').text();
    var paymentWay = overview.find('.method').find('strong').text();
    var planTitle = detail.find('.product-name > a').text();
    var planLink = detail.find('.product-name > a').attr('href');
    detail.find('.product-name .wc-booking-summary-list').find('li').each(function(index) {
      summary[index] = $(this).text();
    });
    detail.find('tfoot').find('tr').each(function(index) {
      thText = $(this).find('th').text();
      if(thText == '注:'){
        $(this).find('th').text('備考メモ:');
        notice = $(this).find('td').text();
      }
    });
    if(notice == null || notice == undefined){
      var bikouText = 'なし';
    }else{
      var bikouText = notice;
    }

    var userInfo = customer.find('address').html().split('<br>');
    var phoneNumber = customer.find('.woocommerce-customer-details--phone').text();
    console.log('length:' + userInfo.length);
    if( userInfo.length == 4 ){
      userName = userInfo[3].split('<p')[0].trim();
    }else{
      userName = userInfo[3].trim() + ' ' + userInfo[4].split('<p')[0].trim();
    }

    function sendNotification(){
      $.ajax({
        url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSdCxSOEiLKEsCcKcXlrd1bPAiOSAt0HmSj9v6kfMZ8C8Yl1hw/formResponse",
        data: {
          "entry.1942362755": orderID.trim(), /* 注文番号*/
          "entry.1619736945": orderDate.trim(), /* 注文日 */
          "entry.2069170194": planTitle.trim(), /* プラン名 */
          "entry.749004892": summary[0].trim(), /* 予約期間 */
          "entry.931787715": summary[1].trim(), /* 予約人数 */
          "entry.1096370239": orderPrice.trim(), /* 合計金額 */
          "entry.1281991666": paymentWay.trim(), /* 決済方法 */
          "entry.1202046061": userName, /* 予約者氏名 */
          "entry.1046093059": userMail.trim(), /* メールアドレス */
          "entry.1614975227": '〒' + userInfo[0].trim(), /* 郵便番号 */
          "entry.672112545": userInfo[1].trim() + userInfo[2].trim(), /* 住所 */
          "entry.572457701": phoneNumber.trim(), /* 電話番号 */
          "entry.1572497431": bikouText.trim(), /* 備考欄 */
          "entry.1400370769": adminMail, /* 通知先メールアドレス*/
        },
      type: "POST",
      dataType: "xml",
      statusCode: {
          0: function () {},
          200: function () {}
        }
      });
    }

    function init(){
      console.log('planLink:' + planLink);
      $.ajax({
        url: planLink,
        cache: false,
        dataType: 'html',
        success: function(html) {
          adminMail = $(html).find('#adminMail').text();
          console.log('adminMail:' + adminMail);
          sendNotification();
        }
      });
    }

    init();

  }

  processOrderContent($('article'));

});
