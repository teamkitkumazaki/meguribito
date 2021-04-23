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
 * Template Name: カートページ
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
  <article id="cart" class="page-cart">
    <section class="section-lead comp-underpage-lead">
			<div class="section_inner">
				<div class="txt_wrap">
      		<h1 class="page_ttl">予約内容を確認する</h1>
      		<h2 class="sub_ttl">予約内容を確認頂き、決済へとお進みください。</h2>
    		</div>
			</div><!-- section_inner -->
		</section>
    <section class="section-cart">
			<div class="section_inner">
        <?php if(have_posts()):while(have_posts()): the_post();?>
          <?php the_content();?>
        <?php endwhile; endif;?>
			</div>
		</section>
		<div class="comp-text-set" style="opacity:0; height:0px;">
			<p>メールマガジンを受け取る・内容・方法・間</p>
		</div>
	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
