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
		<?php $url = $_SERVER['REQUEST_URI']; ?>
		<?php if(strstr($url,'cart')): ?>
		<section class="section-corp-info">
			<div class="section_inner">
				<h3 class="corp_title">本サイトの<span>運営業者に関する情報</span></h3>
				<div class="comp-chart-layout">
					<div class="chart_item">
						<span class="title">事業者の名称</span>
						<span class="content">特定非営利活動法人 八幡浜元気プロジェクト</span>
					</div>
					<div class="chart_item">
            <span class="title">通信販売に関する業務の責任者</span>
            <span class="content">濵田規史</span>
          </div>
					<div class="chart_item">
            <span class="title">住所</span>
            <span class="content">〒796-0001<br>愛媛県八幡浜市向灘 3058</span>
          </div>
					<div class="chart_item">
            <span class="title">電話番号</span>
            <span class="content">0894-22-5083<br>受付時間：10時～18時(土日祝を除く)</span>
					</div>
				</div><!-- comp-chart-layout -->
			</div><!-- section_inner -->
		</section>
		<?php endif; ?>
		<div class="comp-text-set" style="opacity:0; height:0px;">
			<p>メールマガジンを受け取る・内容・方法・間</p>
		</div>
	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
