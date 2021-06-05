<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part("parts/head");?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php do_action( 'storefront_before_site' ); ?>
	<?php do_action( 'storefront_before_header' ); ?>
<header class="comp-header">
	<?php
	/**
	 * The template for displaying full width pages.
	 *
	 * Template Name: トップページ
	 *
	 * @package storefront
	 */

	get_header(); ?>
</header>
	<article id="planDetail" class="page-plan-detail">
	  <?php if(have_posts()):while(have_posts()): the_post();?>
			<?php
				$kagibito_id = SCF::get('kagibito_id');
				$kagiibito_thumb = get_the_post_thumbnail_url($kagibito_id,'thumbnail');
				$kagibito_name = SCF::get('post_title', $kagibito_id);
				$kagibito_family_name = SCF::get('family_name', $kagibito_id);
				$kagibito_belongs = SCF::get('belongs', $kagibito_id);
				$kagibito_area = SCF::get('area_name', $kagibito_id);
				$kagibito_profile = SCF::get('profile_txt', $kagibito_id);
			?>
			<section id="main" class="section-main">
				<?php
					$main_thumb = SCF::get('main_pc');
					$main_thumb_sp = SCF::get('main_sp');
					$thumb_img = wp_get_attachment_image_src($main_thumb,'full');
					$thumb_img_sp = wp_get_attachment_image_src($main_thumb_sp,'medium_large');
				?>
				<div class="img_box" style="background-image: url(<?php echo $thumb_img[0];?>">
					<img src="<?php echo $thumb_img_sp[0];?>">
				</div>
			</section>
			<section id="lead" class="section-lead">
				<div class="section_inner">
					<div class="comp-section-title center">
						<p class="upper_txt"><?php echo $kagibito_name;?>さんと行く</p>
						<h1 class="title"><?php echo SCF::get('display_title');?></h1>
					</div>
					<div class="location">
						<span class="area"><?php echo $kagibito_area;?></span>
						<span class="guesthouse"><?php echo $kagibito_belongs;?></span>
					</div>
					<div class="description">
						<?php echo SCF::get('plan_desc');?>
						<div class="comp-booking-button">
							<button><span>プランを予約する</span></button>
						</div>
						<div class="button_wrap">
							<!--<div class="favorite_button">
								<a class="favorite" href="#aaaa">
									<span class="icon"></span>
									<span class="text">お気に入り登録</span>
								</a>
							</div> -->
							<div class="sns_wrap">
								<a
									class="tw"
									target="_blank"
        					rel="nofollow noopener"
									href="https://twitter.com/share?url=<? echo get_the_permalink(); ?>&text=<? echo get_the_title(); ?>"
								>
									<span class="icon"></span>
									<span class="text">ツイートする</span>
								</a>
								<a
									class="fb"
									target="_blank"
					        rel="nofollow noopener"
									href="http://www.facebook.com/share.php?u=<? echo get_the_permalink(); ?>"
								>
									<span class="icon"></span>
									<span class="text">シェアする</span>
								</a>
								<a
									class="line"
									target="_blank"
					        rel="nofollow noopener"
									href="https://social-plugins.line.me/lineit/share?url=<? echo get_the_permalink(); ?>"
								>
									<span class="icon"></span>
									<span class="text">LINEで送る</span>
								</a>
							</div>
						</div><!-- button_wrap -->
					</div><!-- description -->
				</div><!-- section_inner -->
			</section>
			<section id="outline" class="section-plan-outline">
				<div class="section_inner">
					<div class="lead_flex">
						<div class="kagibito_wrap">
							<div class="kagibito_prof">
								<a href="<?php echo get_permalink($kagibito_id);?>" class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>);"></a>
								<div class="kagibito_info">
									<span class="info"><?php echo $kagibito_belongs;?>・オーナー</span>
									<a class="name" href="<?php echo get_permalink($kagibito_id);?>"><?php echo $kagibito_name;?>さん</a>
								</div>
							</div>
							<div class="description">
								<p><?php echo $kagibito_profile;?></p>
							</div>
						</div><!-- kagibito_wrap -->
						<div class="plan_outline">
							<div class="outline_inner">
								<span class="title">プランの内容</span>
								<div class="content">
									<?php
										$repeat_group = SCF::get( 'plan_outline' );
										foreach ( $repeat_group as $fields ) {
											$plan_list = $fields['plan_list'];
										?>
										<span class="item"><?php echo $plan_list;?></span>
										<?php } ?>
								</div>
							</div>
						</div><!-- plan_outline -->
					</div><!-- lead_flex -->
				</div><!-- section_inner -->
			</section>
			<section id="detail01" class="section-detail01">
				<div class="section_inner">
					<div class="detail_main">
						<div class="img_wrap">
							<?php
								$main_thumb = SCF::get('main_contents_img');
								$thumb_img = wp_get_attachment_image_src($main_thumb,'full');
								$thumb_img_sp = wp_get_attachment_image_src($main_thumb,'medium');
							?>
							<img
							 src="<?php echo $thumb_img[0];?>"
							 srcset="<?php echo $thumb_img[0];?> 1440w, <?php echo $thumb_img_sp[0];?> 768w" sizes="(max-width: 1200px) 100vw, 1200px"
							>
						</div>
						<div class="txt_wrap">
							<h2 class="main_ttl"><?php echo SCF::get('main_contents_ttl');?></h2>
							<div class="description">
								<p><?php echo SCF::get('main_contents_desc');?></p>
							</div>
							<?php if(get_post_meta($post->ID, 'main_contents_comment',true)):?>
							<div class="comp-kagibito-comment">
								<div class="icon_wrap">
									<a href="<?php echo get_permalink($kagibito_id);?>">
										<span class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>);"></span>
										<span class="name"><?php echo $kagibito_family_name;?>さん</span>
									</a>
								</div>
								<div class="comment_wrap">
									<div class="comment_inner">
										<p><?php echo SCF::get('main_contents_comment');?></p>
									</div>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div><!-- detail_main -->
					<div class="comp-plan-detail-flex">
						<?php
							$repeat_group = SCF::get( 'sub_contents' );
							foreach ( $repeat_group as $fields ) {
								$sub_image = wp_get_attachment_image_src($fields['sub_image'],'large');
								$sub_eyecatch = $fields['sub_eyecatch'];
								$sub_ttl = $fields['sub_ttl'];
								$sub_desc = $fields['sub_desc'];
								$sub_comment = $fields['sub_comment'];
							?>
							<div class="detail_item">
								<div class="img_wrap">
									<img src="<?php echo $sub_image[0];?>">
								</div>
								<div class="txt_wrap">
									<?php if($sub_ttl != null || $sub_eyecatch != null):?>
									<div class="title_wrap">
										<?php if($sub_eyecatch != null):?>
										<span class="mini_ttl"><?php echo $sub_eyecatch;?></span>
										<?php endif; ?>
										<?php if($sub_ttl != null):?>
										<h3 class="detail_ttl"><?php echo $sub_ttl;?></h3>
										<?php endif; ?>
									</div>
									<?php endif; ?>
									<div class="description">
										<?php echo $sub_desc;?>
									</div>
									<?php if($sub_comment != null):?>
									<div class="comp-kagibito-comment">
										<div class="icon_wrap">
											<a href="<?php echo get_permalink($kagibito_id);?>" class="icon">
												<span class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>);"></span>
											</a>
											<a href="<?php echo get_permalink($kagibito_id);?>">
												<span class="name"><?php echo $kagibito_family_name;?>さん</span>
											</a>
										</div>
										<div class="comment_wrap">
											<div class="comment_inner">
												<p><?php echo $sub_comment;?></p>
											</div>
										</div>
									</div>
									<?php endif; ?>
								</div>
							</div><!-- detail_item -->
							<?php } ?>
					</div><!-- comp-plan-detail-flex -->
				</div><!-- section_inner -->
			</section>
			<section id="detail02" class="section-detail02">
				<div class="section_inner">

					<div class="comp-section-title margin">
						<p class="upper_txt"><?php echo esc_html( SCF::get('yohaku_sub_ttl'));?></p>
						<h2 class="title"><span><?php echo esc_html( SCF::get('yohaku_ttl'));?></span></h2>
					</div>
					<div class="comp-plan-detail-flex">
						<?php
							$repeat_group = SCF::get( 'yohaku_contents' );
							foreach ( $repeat_group as $fields ) {
								$yohaku_image = wp_get_attachment_image_src($fields['yohaku_image'],'large');
								$yohaku_eyecatch = $fields['yohaku_eyecatch'];
								$yohaku_ttl = $fields['yohaku_contents_ttl'];
								$yohaku_desc = $fields['yohaku_desc'];
								$yohaku_comment = $fields['yohaku_comment'];
							?>
							<div class="detail_item">
								<div class="img_wrap">
									<img src="<?php echo $yohaku_image[0];?>">
								</div>
								<div class="txt_wrap">
									<?php if($yohaku_eyecatch != null || $yohaku_ttl != null):?>
									<div class="title_wrap">
										<?php if($yohaku_eyecatch != null):?>
										<span class="mini_ttl"><?php echo $yohaku_eyecatch;?></span>
										<?php endif; ?>
										<?php if($yohaku_ttl != null):?>
										<h3 class="detail_ttl"><?php echo $yohaku_ttl;?></h3>
										<?php endif; ?>
									</div>
									<?php endif; ?>
									<div class="description">
										<?php echo $yohaku_desc;?>
									</div>
									<?php if($yohaku_comment != null):?>
									<div class="comp-kagibito-comment">
										<div class="icon_wrap">
											<a href="<?php echo get_permalink($kagibito_id);?>" class="icon">
												<span class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>);"></span>
											</a>
											<a href="<?php echo get_permalink($kagibito_id);?>">
												<span class="name"><?php echo $kagibito_family_name;?>さん</span>
											</a>
										</div>

										<div class="comment_wrap">
											<div class="comment_inner">
												<p><?php echo $yohaku_comment;?></p>
											</div>
										</div>
									</div>
									<?php endif; ?>
								</div>
							</div><!-- detail_item -->
							<?php } ?>
					</div><!-- comp-plan-detail-flex -->
					<div class="comp-spot-list">
						<div class="spot_inner">
							<div class="spot_ttl">
								<span class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>);"></span>
								<h3 class="title"><?php echo SCF::get('spot_main_ttl');?></h3>
							</div>
							<div id="spotSlider" class="slick-slider">
								<?php
									$repeat_group = SCF::get( 'recommended_spot' );
									$spot_num = 0;
									foreach ( $repeat_group as $fields ) {
										$spot_img = wp_get_attachment_image_src($fields['spot_img'],'medium');
										$spot_ttl = $fields['spot_ttl'];
										$spot_desc = $fields['spot_desc'];
										$spot_comment = $fields['spot_comment'];
										$spot_num = $spot_num + 1;
									?>
									<div class="item_box slick-slide">
										<div class="img_wrap">
											<img src="<?php echo $spot_img[0];?>">
										</div>
										<div class="txt_wrap">
											<div class="title_wrap">
												<span class="num"><?php echo $spot_num;?></span>
												<h4 class="spot_name"><?php echo $spot_ttl;?></h4>
											</div>
											<div class="description">
												<p><?php echo $spot_desc;?></p>
												<?php if($spot_comment != null):?>
												<div class="comp-kagibito-comment brown">
													<div class="icon_wrap">
														<a href="<?php echo get_permalink($kagibito_id);?>" class="icon">
															<span class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>);"></span>
														</a>
													</div>
													<div class="comment_wrap">
														<div class="comment_inner">
															<p><?php echo $spot_comment;?></p>
														</div>
													</div>
												</div>
											<?php endif; ?>
											</div>
										</div>
									</div><!-- item_box -->
								<?php } ?>
							</div><!-- slick-slider -->
						</div>
					</div><!-- comp-spot-list -->
				</div><!-- section_inner -->
			</section>
			<section id="booking" class="section-booking">
				<div class="section_inner">
					<div class="booking_flex">
						<div class="txt_wrap">
							<div class="comp-section-title">
								<p class="upper_txt">宿泊施設について</p>
								<h2 class="title"><span><?php echo SCF::get('gusthouse');?></span></h2>
							</div>
							<div class="address">
								<span class="add_txt"><?php echo SCF::get('guesthouse_address');?></span>
								<a target="_blank" class="map_link" href="<?php echo SCF::get('gesthouse_map');?>">MAP</a>
							</div>
							<div id="guestHouseWrap" class="comp-guesthouse-detail">
								<div id="wrapInner"  class="detail_inner">
									<div id="yadoImageSlider" class="slick-slider">
										<?php
										$repeat_group = SCF::get('guesthouse_img');
										foreach ( $repeat_group as $fields ) {
											$guesthouse_img = wp_get_attachment_image_src($fields['guesthouse_img_item'] , 'medium');
										?>
										<div class="item_box slick-slide">
											<div class="slider_img">
												<img src="<?php echo $guesthouse_img[0];?>">
											</div>
										</div>
										<?php } ?>
									</div>
									<div class="yado_detail_txt">
										<h3 class="yado_detail_ttl"><?php echo SCF::get('gusthouse_desc_ttl');?></h3>
										<div class="description">
											<?php echo SCF::get('gusthouse_desc');?>
										</div>
									</div>
								</div>
							</div>
							<!--<div class="facility">
								<span>エレベーターあり</span>
								<span>Wi-Fi</span>
								<span>エアコン</span>
								<span>ハンガー</span>
								<span>ヘアドライヤー</span>
								<span>キッチン</span>
								<span>無料駐車場</span>
								<span>暖房</span>
							</div> -->
							<div class="comp-booking-button">
								<button><span>プランを予約する</span></button>
							</div>
						</div>
						<div id="heightAdjust" class="height_adjust"></div>
					</div><!-- booking_flex -->
				</div><!-- section_inner -->
			</section>
			<section id="detail03" class="section-detail03">
				<div class="section_inner">
					<div class="detail_flex">
						<div class="flex_left">
							<div class="comp-section-title">
								<p class="upper_txt">旅程・レビュー・よくある質問など</p>
								<h2 class="title"><span>プラン詳細</span></h2>
							</div>
							<!-- <div class="comp-time-shcedule">
								<h3 class="detail_ttl">旅程について</h3>
								<div id="dayShifter" class="day_shifter">
									<button>1日目</button>
									<button>2日目</button>
									<button>3日目</button>
								</div>
								<div class="shcedule_wrap">
									<div id="day1" class="schedule_inner">
										<div class="schedule_item">
											<div class="title_wrap">
												<span class="time">AM10:00ごろ</span>
												<h4 class="title">尾道駅に到着・ヤドカリにチェックイン</h4>
											</div>
											<div class="description">
												<p><span>尾道駅でカギビトと合流し、ゲストハウス「ヤドカリ」までご案内いたします。</span><span>カフェで一息つきながら、チェックインの手続きや荷物の整理を進めましょう！</span></p>
											</div>
										</div>
										<div class="schedule_item">
											<div class="title_wrap">
												<span class="time">AM12:00ごろ</span>
												<h4 class="title">オノミチシェアにドロップイン</h4>
											</div>
											<div class="description">
												<p>シェアオフィス「オノミチシェア」にドロップインをします。10:00~19:00までの時間のオフィス使用料はプラン料金の中に含まれています。深夜帯まで利用したい場合は、直接オフィスの係員の方にご相談ください！</p>
											</div>
										</div>
										<div class="yahoku_item">
											<p class="yohaku_txt">お仕事頑張ってください！</p>
										</div>
										<div class="schedule_item">
											<div class="title_wrap">
												<span class="time">PM17:00ごろ</span>
												<h4 class="title">カギビトと合流・飲屋街「新開地区」へ</h4>
											</div>
											<div class="description">
												<p>シェアオフィス「オノミチシェア」にドロップインをします。10:00~19:00までの時間のオフィス使用料はプラン料金の中に含まれています。深夜帯まで利用したい場合は、直接オフィスの係員の方にご相談ください！</p>
											</div>
										</div>
										<div class="schedule_item">
											<div class="title_wrap">
												<span class="time">PM22:00ごろ</span>
												<h4 class="title">カギビトは朝が早いので帰ります！</h4>
											</div>
											<div class="description">
												<p>シェアオフィス「オノミチシェア」にドロップインをします。10:00~19:00までの時間のオフィス使用料はプラン料金の中に含まれています。深夜帯まで利用したい場合は、直接オフィスの係員の方にご相談ください！</p>
											</div>
										</div>
										<div class="yahoku_item">
											<p class="yohaku_txt">素敵な尾道の夜を！</p>
										</div>
										<div class="schedule_item">
											<div class="title_wrap">
												<span class="time">??:??ごろ</span>
												<h4 class="title">ゲストハウスに帰宅・就寝</h4>
											</div>
										</div>
									</div>
								</div><
							</div> -->
							<!--<div class="comp-trip-review">
								<h3 class="detail_ttl">旅人の声</h3>
								<div class="review_wrap">
									<div class="review_item">
										<a href="#aaaa" class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/common/default_icon.png);"></a>
										<div class="review_content">
											<a class="user_name" href="#aaaa"><span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/common/default_icon.png);"></span><span class="name">skmzk418さん</span></a>
											<p class="review">はじめてにも関わらず、丁寧に収穫の方法を教えてもらいました。単なる体験ではなく、それに携わる人の思いもお聴きすることができ、現地に出向かないと分からない空気感も感じることができました。</p>
										</div>
									</div>
									<div class="review_item">
										<a href="#aaaa" class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/common/default_icon.png);"></a>
										<div class="review_content">
											<a class="user_name" href="#aaaa"><span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/common/default_icon.png);"></span><span class="name">aiueo123さん</span></a>
											<p class="review">体験の合間にコダテルで仕事をさせてもらったのですが、普通のコワーキングスペースとは違い、すぐ近くで会員さん同士でディスカッションがはじまり、興味津々。気づいたら自分もその話の輪に入って盛り上がってしまいました。自分自身の企てもシェアでき、気づきももらいました。ありがとうございました！</p>
										</div>
									</div>
								</div>
							</div> --><!-- comp-trip-review -->
							<div class="comp-trip-faq">
								<h3 class="detail_ttl">よくある質問</h3>
								<div id="faqToggle" class="faq_wrap">
									<?php
										$repeat_group = SCF::get( 'faq' );
										foreach ( $repeat_group as $fields ) {
											$question_q = $fields['question_q'];
											$queation_a = $fields['queation_a'];
										?>
										<div class="qa_item">
											<button class="qa_button">
												<span><?php echo $question_q;?></span>
											</button>
											<div class="qa_contents">
												<p><?php echo $question_a;?></p>
											</div>
										</div>
										<?php } ?>
								</div><!-- faq_wrap -->
							</div><!-- comp-trip-faq -->
							<div class="trip_detail">
								<h3 class="detail_ttl">プランの基本情報</h3>
								<div class="comp-chart-layout">
									<?php
										$repeat_group = SCF::get( 'plan_detail' );
										foreach ( $repeat_group as $fields ) {
											$detail_ttl = $fields['detail_ttl'];
											$detail_content = $fields['detail_content'];
										?>
										<div class="chart_item">
		              		<span class="title"><?php echo $detail_ttl;?></span>
		              		<span class="content"><?php echo $detail_content;?></span>
		            		</div>
										<?php } ?>
								</div>
							</div><!-- trip_detail -->
						</div><!-- flex_left -->
						<div id="fixedSection" class="detail_fix_section">
							<?php
								$article_thumb = SCF::get('thumbnail_img');
								$article_thumb_img = wp_get_attachment_image_src($article_thumb ,'medium-large');
							?>
							<div class="fix_inner">
								<div class="img_wrap">
									<img src="<?php echo $article_thumb_img[0];?>">
								</div>
								<div class="txt_wrap">
									<p class="plan_ttl"><?php echo SCF::get('display_title');?></p>
									<div class="terms_wrap">
										<div class="price_wrap">
											<span class="price">11,000円(税込)から</span>
											<span class="duration">2泊3日から</span>
										</div>
										<!--<div class="term_detail">
											<span class="detail_list">シェアオフィス「オノミチシェア」使用料(10時~18時)はプラン料金の中に含まれています。</span>
											<span class="detail_list">ナイトツアー内での旅人の飲食店は別途自己負担でお願いします。</span>
										</div> -->
									</div>
								</div>
								<div class="comp-booking-button">
									<button><span>プランを予約する</span></button>
								</div>
							</div>
						</div><!-- detail_fix_section -->
					</div>
				</div><!-- section_inner -->
			</section>
	  <?php endwhile; endif; ?>
		<section id="plans" class="section-plans">
			<div class="section_inner">
				<div class="comp-section-title margin button">
					<div class="title_wrap">
						<p class="upper_txt">新しい体験、続々更新中</p>
						<h2 class="title">その他のプランを探す</h2>
					</div>
					<div class="comp-link-button">
						<a href="/plans"><span>体験一覧を見る</span></a>
					</div>
				</div><!-- comp-section-title -->
				<?php get_template_part("parts/planList");?>
			</div><!-- section_inner -->
		</section>
	</article>
	<section id="detailPopup" class="section-popup comp-detail-pop">
		<button id="popClose" class="pop_close"></button>
		<div class="scroll_wrap">
			<div class="section_inner">
				<?php if(have_posts()):while(have_posts()): the_post();?>
				<?php
					$kagibito_id = SCF::get('kagibito_id');
					$kagiibito_thumb = get_the_post_thumbnail_url($kagibito_id,'thumbnail');
					$kagibito_name = SCF::get('post_title', $kagibito_id);
					$kagibito_family_name = SCF::get('family_name', $kagibito_id);
					$kagibito_belongs = SCF::get('belongs', $kagibito_id);
					$kagibito_area = SCF::get('area_name', $kagibito_id);
					$kagibito_profile = SCF::get('profile_txt', $kagibito_id);
				?>
				<div class="detail_left">
					<div class="img_wrap">
						<img src="<?php echo $article_thumb_img[0];?>">
					</div>
					<div class="txt_wrap">
						<h2 class="plan_ttl"><?php echo SCF::get('display_title');?></h2>
						<div class="location">
							<span class="area"><?php echo $kagibito_area;?></span>
							<span class="guesthouse"><?php echo $kagibito_belongs;?></span>
						</div>
						<div class="kagibito_wrap">
							<a href="?php echo get_permalink($kagibito_id);?>" class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>);"></a>
							<div class="kagibito_info">
								<span class="info"><?php echo $kagibito_belongs;?></span>
								<a class="name" href="<?php echo get_permalink($kagibito_id);?>"><?php echo $kagibito_name;?>さん</a>
							</div>
						</div>
					</div>
				</div><!-- detail_left -->
				<?php endwhile; endif; ?>
				<div class="detail_right">
					<div class="comp-booking-section">
						<div class="default_wrap">
							<?php
							/**
							 * The Template for displaying all single products
							 *
							 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
							 *
							 * HOWEVER, on occasion WooCommerce will need to update template files and you
							 * (the theme developer) will need to copy the new files to your theme to
							 * maintain compatibility. We try to do this as little as possible, but it does
							 * happen. When this occurs the version of the template file will be bumped and
							 * the readme will list any important changes.
							 *
							 * @see         https://docs.woocommerce.com/document/template-structure/
							 * @package     WooCommerce\Templates
							 * @version     1.6.4
							 */

							if ( ! defined( 'ABSPATH' ) ) {
								exit; // Exit if accessed directly
							}

							get_header( 'shop' ); ?>

							<div class="single-product">
									<?php while ( have_posts() ) : ?>
										<?php the_post(); ?>
											<?php wc_get_template_part( 'content', 'single-product' ); ?>
									<?php endwhile; // end of the loop. ?>
							</div>
						</div>
					</div>
				</div>
			</div><!-- section_inner -->
		</div><!-- scroll_wrap -->
	</section>
	<div class="comp-text-set" style="opacity:0; height:0px;">
		<p>状況確認・選ぶ・年・0123456789・費用・¥・チェックイン・チェックアウト・月火水木金土日・宿泊タイプ・日程・料金</p>
	</div>
</article>
<?php get_template_part("parts/hummenu");?>
<?php get_template_part("parts/footer");?>
</body>
</html>
