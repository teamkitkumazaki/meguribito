<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part("parts/head");?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php do_action( 'storefront_before_site' ); ?>
	<?php do_action( 'storefront_before_header' ); ?>
<header class="comp-header underpage">
<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: 決済情報入力画面
 *
 * @package storefront
 */

get_header(); ?>
</header>
<?php
/**
 * Functions hooked in to storefront_before_content
 *
 * @hooked storefront_header_widget_region - 10
 * @hooked woocommerce_breadcrumb - 10
 */
 do_action( 'storefront_before_content' );
 do_action( 'storefront_content_top' );
?>
  <article id="paymentPage" class="page-payment">
		<?php $url = $_SERVER['REQUEST_URI']; ?>
		<?php if(strstr($url,'/order-received/')): ?>
			<section class="section-lead-completed comp-underpage-lead">
				<div class="section_inner">
					<div class="txt_wrap">
						<h1 class="page_ttl">ご予約頂きありがとうございました。</h1>
						<h2 class="sub_ttl">ご予約を承りました。下記の予約詳細または、予約確認メールにてご予約内容をご確認ください。</h2>
					</div>
				</div><!-- section_inner -->
			</section>
		<?php else: ?>
			<section class="section-lead comp-underpage-lead">
				<div class="section_inner">
					<div class="txt_wrap">
						<h1 class="page_ttl">お客様情報の入力</h1>
						<h2 class="sub_ttl">お客様情報及び決済情報の入力をお願いします。</h2>
					</div>
				</div><!-- section_inner -->
			</section>
		<?php endif; ?>
		<section class="section-payment">
			<div class="section_inner">
        <?php if(have_posts()):while(have_posts()): the_post();?>
          <?php the_content();?>
        <?php endwhile; endif;?>
			</div>
		</section>
		<?php $url = $_SERVER['REQUEST_URI']; ?>
		<?php if(strstr($url,'order-received') == false): ?>
		<section class="section-payment-terms">
			<div class="section_inner">
				<h3 class="corp_title">お申し込み・契約について</span></h3>
				<div class="payment_terms">
					<div class="terms_item">
						<span class="num">1</span>
						<span class="text">Meguribitoは、手配契約・運送等契約の当事者とはならず、お客様と宿泊施設の直接契約となります。</span>
					</div>
					<div class="terms_item">
						<span class="num">2</span>
						<span class="text">Meguribitoは、お客様と宿泊施設との間の仲介・媒介・斡旋等を行いません。予約後の連絡についても，当事者間で直接行ってください。</span>
					</div>
					<div class="terms_item">
						<span class="num">3</span>
						<span class="text">Meguribitoが積極的に特定の宿泊施設を紹介したり，勧めたりすることはありません。お客様のご判断で、宿泊施設や体験をお選びください。</span>
					</div>
					<div class="terms_item">
						<span class="num">4</span>
						<span class="text">Meguribitoは、ストライプジャパン株式会社が提供する決済サービス「STRIPE」を利用しています。本サイトを通じて決済した場合であっても、Meguribitoが宿泊プランの料金を収受するものではありません。</span>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		<div class="comp-text-set" style="opacity:0; height:0px;">
			<p>代表者・メールマガジンを受け取る・内容・方法・間・(税込)</p>
		</div>
	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
<script>
var titleTxt = [];
var limitNum = 20;
$('#order_comments').attr('placeholder', '宿泊拠点に事前に伝えておきたい内容・ご不明点・ご質問など');
var cvcInput = $('#stripe-cvc-element').find('iframe').contents().find('input');
console.log('cvcInput:' + cvcInput);
$.each(cvcInput, function(index, element) {
	console.log(index + ':' + element);
});
/*for (var i = 0; i < limitNum; i++) {
	console.log('i:' + i);
	console.log(cvcInput[i].attr('name'));
	console.log('password:' + cvcInput[i]);
}*/
$('.woocommerce-billing-fields').find('h3').each(function(index) {
	titleTxt[index] = $(this).text();
	if(titleTxt[i] = '請求先情報の詳細'){
		$(this).text('代表者情報の詳細');
	}
});

</script>
</html>
