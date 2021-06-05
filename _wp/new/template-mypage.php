<!doctype html>
<?php $url = $_SERVER['REQUEST_URI']; ?>
<?php if(strstr($url,'bookings') || strstr($url,'billing') || strstr($url,'edit-account') || is_user_logged_in() == false ): ?>
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
							<span class="title">予約中の<span>プラン数</span></span>
							<span id="settingPlans" class="number"></span>
						</div>
						<div class="status_item">
							<span class="title">今まで行った<span>プランの数</span></span>
							<span id="endedPlans" class="number"></span>
						</div>
					</div>
				</div>
			</div><!-- section_inner -->
		</section>
		<?php endif;?>
		<section class="section-mypage">
			<div id="mypageContent" class="section_inner">
        <?php if(have_posts()):while(have_posts()): the_post();?>
          <?php the_content();?>
        <?php endwhile; endif;?>
			</div>
		</section>
		<?php if( is_user_logged_in() ) : ?>
			<section class="section-unsubscribe">
				<div class="section_inner">
					<a class="unsubscribe_button" href="/my-account/delete"><span>アカウントの削除</span></a>
				</div>
			</section>
		<?php endif; ?>
	</article>
	<div class="comp-text-set" style="opacity:0; height:0px;">
		<p>予約中・情報・変更・見る・履歴・新規会員登録・再発行。パスワードリセットのメールを送信しました。0123456789</p>
	</div>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>

	<?php if(strstr($url,'bookings') == false && is_user_logged_in()): ?>
		<style>
		.page-mypage .section-mypage h2{
			display: none !important;
		}
		</style>
	<?php endif; ?>
	<?php if(strstr($url,'lost-password')): ?>
		<style>
		.form-row-first{
			z-index: 10;
			position: relative;
		}
		.form-row-last{
			width: 100% !important;
			float: none !important;
		}
		</style>
		<?php endif; ?>
		<?php if(strstr($url,'reset-link-sent')): ?>
			<style>
			.section-mypage .section_inner::before{
				display: block;
				content: "パスワードリセットのメールを送信しました。";
				font-family: "FOT-筑紫A丸ゴシック Std D";
				font-weight: bold;
				font-size: 28px;
				line-height: 1.6;
				letter-spacing: 0.03em;
				margin-bottom: 20px;
			}
			.section-mypage .woocommerce{
				background: #fff;
				padding: 20px;
				line-height: 1.6;
				font-size: 14px;
			}
			@media screen and (max-width: 720px){
				.section-mypage .section_inner::before{
					font-size: 20px;
				}
			}
			</style>
		<?php endif; ?>
		<?php echo strstr($url,'bookings');?>
		<?php if(strstr($url,'bookings')): ?>
			<script type="text/javascript">
			function serachCompletedPlans(target){
				var completeCount = 0;
				var settingCount = 0;
				var endedPlans = $('#endedPlans');
				var settingPlans = $('#settingPlans');

				function init(){
					target.find('.booking-status').each(function(index) {
						if($(this).text() == '完了'){
							completeCount = completeCount + 1;
						}else if($(this).text() == '支払済み'){
							settingCount = settingCount + 1;
						}
					});

					endedPlans.text(completeCount);
					settingPlans.text(settingCount);
				}

				init();
			};

			serachCompletedPlans($('#mypageContent'));

			</script>
			<?php else : ?>

				<script type="text/javascript">
				function serachCompletedPlans(target){
					var domain = 'https://' + location.host;
					var endedPlans = $('#endedPlans');
					var settingPlans = $('#settingPlans');
					function init(){
						$.ajax({
							url: domain + '/my-account/bookings',
							cache: false,
							dataType: 'html',
							success: function(html) {
								var completeCount = 0;
								var settingCount = 0;
								console.log('success!');
								$.each($(html).find('#mypageContent').find('.booking-status'), function(index) {
									if($(this).text() == '完了'){
										completeCount = completeCount + 1;
									}else if($(this).text() == '支払済み'){
										settingCount = settingCount + 1;
									}
									endedPlans.text(completeCount);
 									settingPlans.text(settingCount);
								});
							}
						});
					}

					init();

				};

				serachCompletedPlans($('#mypageContent'));

				</script>

		<?php endif; ?>
</body>
</html>
<?php else : ?>
	<script>
		location.href = 'https://meguribito.com/my-account/bookings/';
	</script>
<?php endif; ?>
