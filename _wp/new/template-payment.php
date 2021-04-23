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
		<div class="comp-text-set" style="opacity:0; height:0px;">
			<p>メールマガジンを受け取る・内容・方法・間・(税込)</p>
		</div>
	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
