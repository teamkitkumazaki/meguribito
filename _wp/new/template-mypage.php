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
 * Template Name: マイページ
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
  <article id="mypage" class="page-mypage">
		<?php if (is_user_logged_in()) : ?>
			<?php
				$userInfo = wp_get_current_user();
			?>
		<section class="section-account-info">
			<div class="section_inner">
				<h1 class="mypage_title">マイページ</h1>
				<div class="flex_wrap">
					<div class="myprofile">
						<div class="icon_wrap">
							<span class="icon_image"></span>
						</div>
						<div class="profile_wrap">
							<p class="user_name"><?php echo $userInfo->display_name;?><span class="user_email">(<?php echo $userInfo->user_email;?>)</p>
							<!-- <div class="profile_detail">
								<div class="profile_point">
									<span class="title">予約/計画中のプラン</span>
									<span class="num">3</span>
									<span class="unit">件</span>
								</div>
							</div> --><!-- profile_detail -->
							<a id="logoutLink" class="logout_link" href="/my-account/customer-logout">ログアウト</a>
						</div>
					</div>
					<div class="history_wrap">
						<div class="status_item">
							<span class="title">今まで行った<span>プランの数</span></span>
							<span class="number">4</span>
						</div>
					</div>
				</div>
			</div><!-- section_inner -->
		</section>
		<?php endif;?>
		<section class="section-mypage">
			<div class="section_inner">
        <?php if(have_posts()):while(have_posts()): the_post();?>
          <?php the_content();?>
        <?php endwhile; endif;?>
			</div>
		</section>
		<section class="section-unsubscribe">
			<div class="section_inner">
				<a class="unsubscribe_button" href="/my-account/delete"><span>アカウントの削除</span></a>
			</div>
		</section>
	</article>
	<div class="comp-text-set" style="opacity:0; height:0px;">
		<p>予約中・情報・変更・見る・履歴</p>
	</div>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
	<?php $url = $_SERVER['REQUEST_URI']; ?>
	<?php if(strstr($url,'bookings') == false): ?>
		<style>
		.page-mypage .section-mypage h2{
			display: none !important;
		}
		</style>
	<?php endif; ?>
</body>
</html>
