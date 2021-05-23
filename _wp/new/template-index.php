<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part("parts/head");?>
</head>
<body>
<header class="comp-header">
	<?php
	/* Template Name: インデックスページ */
	  get_template_part("parts/header");
	?>
</header>
<div id="loading" class="comp-index-loading">
	<div id="loadInner" class="load_inner">
		<div class="loading_content">
			<h1 class="loading_logo"><img src="<?php echo get_template_directory_uri();?>/assets/img/common/logo.svg" alt="Meguribito"></h1>
			<p class="loading_bar"><span></span></p>
		</div>
		<div class="height_adjust"></div>
	</div>
	<!-- load_inner -->
</div>
<article id="index" class="page-index">
	<section class="section-main">
		<div class="main_inner">
			<div class="comp-slider-txt">
				<h2 class="site_ttl"><span>だれかの日常を、</span><span>あなたの旅先に</span></h2>
				<div id="slideTxt" class="slide_txt">
					<div class="number">01</div>
					<p class="txt">カギビトと出会う</p>
				</div>
			</div><!-- comp-slider-txt -->
			<div id="slideShow" class="comp-main-slider">
				<ul>
					<?php
						$repeat_group = SCF::get('main_slider', 56);
						foreach ( $repeat_group as $fields ) {
							$scrolling_img = $fields['slider_img'];
							$slider_img_sp = $fields['slider_img_sp'];
							$slider_txt = $fields['slider_txt'];
							$thumb_img = wp_get_attachment_image_src($scrolling_img,'full');
							$thumb_img_pc = wp_get_attachment_image_src($scrolling_img,'large');
							$thumb_img_sp = wp_get_attachment_image_src($slider_img_sp,'medium_large');
						?>
						<li style="background-image: url(<?php echo $thumb_img_sp[0];?>);">
							<img
								class="blur"
								src="<?php echo $thumb_img_pc[0];?>"
								srcset="<?php echo $thumb_img_pc[0];?> 1440w, <?php echo $thumb_img[0];?> 2048w" sizes="100vw" alt="<?php echo $slider_txt;?>"
							>
						</li>
					<?php } ?>
				</ul>
			</div><!-- comp-main-slider -->
			<div id="gauge" class="gauge_wrap">
				<div class="gauge_inner">
					<span id="gaugeDisplay" class="gauge_display"></span>
				</div>
			</div>
		</div>
	</section>
	<section class="section-pickup">
		<div class="section_inner">
			<div class="comp-section-title center margin">
				<p class="upper_txt">めぐりびと編集部が選ぶ、今月のおすすめ</p>
				<h2 class="title">おすすめのプラン</h2>
			</div><!-- comp-section-title -->
			<div class="comp-pickup-plan">
				<?php
						/* プランの情報 */
						$main_pickup_id = SCF::get('main_pickup');
						$pickup_img_desc = SCF::get('pickup_img_desc');
						$main_plan_ttl = SCF::get('post_title', $main_pickup_id);
						$sp_img = SCF::get('main_sp', $main_pickup_id);
						$thumb = get_the_post_thumbnail_url($main_pickup_id,'large');
						$main_sp = wp_get_attachment_image_src($sp_img,'medium_large');
						/* カギビトの情報 */
						$kagibito_id = SCF::get('kagibito_id', $main_pickup_id);
						$kagiibito_thumb = get_the_post_thumbnail_url($kagibito_id,'thumbnail');
						$kagibito_name = SCF::get('post_title', $kagibito_id);
						$kagibito_belongs = SCF::get('belongs', $kagibito_id);
						$kagibito_area = SCF::get('area_name', $kagibito_id);
					?>
				<div class="pickup_item first">
					<div id="mainPickImg" class="img_wrap">
						<a href="<?php echo get_permalink($main_pickup_id);?>" style="background-image: url(<?php echo $main_sp[0];?>)">
							<?php
								$num = 0;
								$repeat_group = SCF::get( 'main_pickup_img' );
								foreach ( $repeat_group as $fields ) {
									$num = $num + 1;
									$sub_image = wp_get_attachment_image_src($fields['pickup_img_item'],'full');
								?>
								<?php if ($num == 1) {echo '<img id="mainImgThumb" src="'.$sub_image[0].'">';}?>
							<?php } ?>
						</a>
					</div><!-- img_wrap -->
					<div class="txt_wrap">
						<div class="title_wrap">
							<div class="title_txt">
								<div class="comp-kagibito-wrap no_icon">
									<span class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>);"></span>
									<span class="name"><?php echo $kagibito_name;?>さんと行く</span>
								</div>
								<h3><a href="<?php echo get_permalink($main_pickup_id);?>"><?php echo $main_plan_ttl;?></a></h3>
								<div class="location">
									<span class="area"><?php echo $kagibito_area;?></span>
									<span class="guesthouse"><?php echo $kagibito_belongs;?></span>
								</div>
							</div>
							<div id="sliderShifter" class="slider_shifter">
								<?php
									$num = 0;
									$repeat_group = SCF::get( 'main_pickup_img' );
									foreach ( $repeat_group as $fields ) {
										$num = $num + 1;
										$sub_image = wp_get_attachment_image_src($fields['pickup_img_item'],'full');
									?>
									<?php
									if ($num == 1) {
    								echo '<button class="img_box active_box"><img src="'.$sub_image[0].'"></button>';
								} else {
									echo '<button class="img_box"><img src="'.$sub_image[0].'"></button>';
								}
								?>
								<?php } ?>
							</div>
						</div><!-- title_wrap -->
						<div class="desc_wrap">
							<p><?php echo $pickup_img_desc;?></p>
							<div class="kagibito">
								<div class="kagibito_wrap">
									<a href="<?php echo get_permalink($kagibito_id);?>" class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>"></a>
									<div class="kagibito_info">
										<span class="info"><?php echo $kagibito_belongs;?>・オーナー</span>
										<a class="name" href="<?php echo get_permalink($kagibito_id);?>"><?php echo $kagibito_name;?></a>
									</div>
								</div>
								<div class="comp-link-button right">
									<a href="<?php echo get_permalink($main_pickup_id);?>"><span>詳細を見る</span></a>
								</div>
							</div>
						</div><!-- desc_wrap -->
					</div><!-- txt_wrap -->
				</div><!-- pickup_item -->
				<?php
					$repeat_group = SCF::get( 'sub_pickup' );
					foreach ( $repeat_group as $fields ) {
						/* プランの情報 */
						$sub_pickup_id = $fields['sub_pickup_id'];
						$plan_ttl = SCF::get('post_title', $sub_pickup_id);
						$sp_img = SCF::get('main_sp', $sub_pickup_id);
						$thumb = get_the_post_thumbnail_url($sub_pickup_id,'large');
						$main_sp = wp_get_attachment_image_src($sp_img,'medium_large');
						/* カギビトの情報 */
						$kagibito_id = SCF::get('kagibito_id', $sub_pickup_id);
						$kagiibito_thumb = get_the_post_thumbnail_url($kagibito_id,'thumbnail');
						$kagibito_name = SCF::get('post_title', $kagibito_id);
						$kagibito_belongs = SCF::get('belongs', $kagibito_id);
						$kagibito_area = SCF::get('area_name', $kagibito_id);
					?>
					<div class="pickup_item">
						<div class="img_wrap">
							<a href="<?php echo get_permalink($sub_pickup_id);?>" style="background-image: url(<?php echo $main_sp[0];?>)">
								<img src="<?php echo $thumb;?>">
							</a>
						</div><!-- img_wrap -->
						<div class="txt_wrap">
							<div class="comp-kagibito-wrap no_icon">
								<span class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>"></span>
								<span class="name"><?php echo $kagibito_name;?>さんと行く</span>
							</div>
							<div class="title_wrap">
								<h3><a href="<?php echo get_permalink($sub_pickup_id);?>"><?php echo $plan_ttl;?></a></h3>
								<div class="location">
									<span class="area"><?php echo $kagibito_area;?></span>
									<span class="guesthouse"><?php echo $kagibito_belongs;?></span>
								</div>
							</div><!-- title_wrap -->
							<div class="desc_wrap">
								<!--<p>志賀直哉などの文豪も筆を執りに訪れた尾道は、現在もクリエイターに愛されるこの街のディープスポットには、個性的で力強い生き方をするアーティストとの出会いがたくさんあります！</p> -->
								<div class="kagibito">
									<div class="kagibito_wrap">
										<a href="<?php echo get_permalink($sub_pickup_id);?>" class="icon" style="background-image: url(<?php echo $kagiibito_thumb;?>"></a>
										<div class="kagibito_info">
											<span class="info"><?php echo $kagibito_belongs;?>・オーナー</span>
											<a class="name" href="<?php echo get_permalink($kagibito_id);?>"><?php echo $kagibito_name;?></a>
										</div>
									</div>
									<div class="comp-link-button">
										<a href="<?php echo get_permalink($sub_pickup_id);?>"><span>詳細を見る</span></a>
									</div>
								</div>
							</div><!-- desc_wrap -->
						</div><!-- txt_wrap -->
					</div><!-- pickup_item -->
					<?php } ?>
			</div><!-- comp-pickup-plan -->
		</div><!-- section_inner -->
	</section>
	<section class="section-plan-list">
		<div class="section_inner">
			<div class="comp-section-title margin flex">
				<div class="title_wrap">
					<p class="upper_txt">新しい体験、続々更新中</p>
					<h2 class="title">新着のプラン</h2>
				</div>
				<div class="comp-link-button">
					<a href="/plans"><span>体験一覧を見る</span></a>
				</div>
			</div><!-- comp-section-title -->
			<?php get_template_part("parts/planList");?>
		</div><!-- section_inner -->
	</section>
	<section class="section-service">
		<div class="section_inner">
			<div class="txt_wrap">
				<div class="comp-section-sub-title">
					<h2 class="title">メグリビトについて</h2>
					<h3 class="sub_ttl">
						<span>その時間を結ぶ「人」に</span>
						<span>巡り会えるサービス</span>
					</h3>
				</div>
				<div class="comp-service-slider">
					<div id="serviceSlider" class="slick-slider">
						<div class="item_box slick-slide">
							<div class="slider_img">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/index/flow01.jpg">
							</div>
							<div class="slider_txt">
								<span class="number">STEP<span>1</span></span>
								<span class="txt">旅先の目的地に到着すると、案内人カギビトが迎えてくれます。</span>
							</div>
						</div>
						<div class="item_box slick-slide">
							<div class="slider_img">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/index/flow02.jpg">
							</div>
							<div class="slider_txt">
								<span class="number">STEP<span>2</span></span>
								<span class="txt">カギビトに誘われ、ローカルの日常の中へ飛び込みます。</span>
							</div>
						</div>
						<div class="item_box slick-slide">
							<div class="slider_img">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/index/flow03.jpg">
							</div>
							<div class="slider_txt">
								<span class="number">STEP<span>3</span></span>
								<span class="txt">旅先で出会った人と深い関係値を持つことができます。</span>
							</div>
						</div>
						<div class="item_box slick-slide">
							<div class="slider_img">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/index/flow04.jpg">
							</div>
							<div class="slider_txt">
								<span class="number">STEP<span>4</span></span>
								<span class="txt">旅をすればするほど、”帰りたくなる場所”が増えます。</span>
							</div>
						</div>
					</div>
				</div><!-- comp-service-slider -->
				<div class="desc_wrap">
					<p class="description">
						<span>本サービスは、普段出会うことのできない地域の体験やコミュニティに、拠点やそこに根ざす人を通じて出会うことのできるサービスです。</span>
						<span>パッケージ化されたツアーではなく、もっとその地域ならではの場所・人・体験に触れながら旅をする。そして日本全国に帰りたい場所が増えていく体験を提供します。</span>
						</p>
						<div class="comp-link-button right">
							<a href="/service"><span>メグリビトについて</span></a>
						</div>
				</div>
			</div><!-- txt_wrap -->
		</div><!-- section_inner -->
	</section>
	<section class="section-kagibito">
		<div class="section_inner">
			<div class="txt_wrap">
				<div class="comp-section-sub-title">
					<h2 class="title">カギビトについて</h2>
					<h3 class="sub_ttl">
						<span>あなたの旅を案内してくれる</span>
						<span>地元のキープレイヤー</span>
					</h3>
				</div>
				<div class="kagibito_img">
					<div class="img_box" style="background-image:url();"><img src="<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito01.jpg"></div>
					<div class="img_box" style="background-image:url();"><img src="<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito02.jpg"></div>
					<div class="img_box" style="background-image:url();"><img src="<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg"></div>
					<div class="img_box" style="background-image:url();"><img src="<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito04.jpg"></div>
					<div class="img_box" style="background-image:url();"><img src="<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito05.jpg"></div>
					<div class="img_box" style="background-image:url();"><img src="<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito06.jpg"></div>
					<div class="img_box" style="background-image:url();"><img src="<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito07.jpg"></div>
					<div class="img_box" style="background-image:url();"><img src="<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito08.jpg"></div>
					<div class="img_box" style="background-image:url();"><img src="<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito09.jpg"></div>
				</div>
				<div class="desc_wrap">
					<p class="description">
						<span>本サービスは、普段出会うことのできない地域の体験やコミュニティに、拠点やそこに根ざす人を通じて出会うことのできるサービスです。</span>
						<span>パッケージ化されたツアーではなく、もっとその地域ならではの場所・人・体験に触れながら旅をする。そして日本全国に帰りたい場所が増えていく体験を提供します。</span>
					</p>
					<div class="comp-link-button right">
						<a href="/kagibito-list"><span>カギビト一覧</span></a>
					</div>
				</div>
			</div><!-- txt_wrap -->
		</div><!-- section_inner -->
	</section>
	<!--<section class="section-news">
		<div class="section_inner">
			<div class="comp-section-title center margin">
				<p class="upper_txt">ニューストピックス</p>
				<h2 class="title">メグリビトからのお知らせ</h2>
			</div>
			<div class="comp-news-list">
				<div class="news_item">
					<div class="img_wrap">
						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/news/news01.jpg)"><img src="<?php echo get_template_directory_uri();?>/assets/img/news/news01.jpg"></a>
					</div>
					<div class="txt_wrap">
						<a class="category" href="#aaaa">#取材レポート</a>
						<h3><a class="name" href="#aaaa">【愛媛・八幡浜編】みんなの企て場所「コダテル」さんへ取材に行ってきました。</a></h3>
						<div class="desc_wrap">
							<p class="description">本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜…<p>
						</div>
					</div>
				</div>
				<div class="news_item">
					<div class="img_wrap">
						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/news/news02.jpg)"><img src="<?php echo get_template_directory_uri();?>/assets/img/news/news02.jpg"></a>
					</div>
					<div class="txt_wrap">
						<a class="category" href="#aaaa">#お知らせ</a>
						<h3><a class="name" href="#aaaa">MEGURIBITOのサービス利用時におけるコロナ対策、及び今後の利用方針について</a></h3>
						<div class="desc_wrap">
							<p class="description">本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜…<p>
						</div>
					</div>
				</div>
				<div class="news_item">
					<div class="img_wrap">
						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/news/news03.jpg)"><img src="<?php echo get_template_directory_uri();?>/assets/img/news/news03.jpg"></a>
					</div>
					<div class="txt_wrap">
						<a class="category" href="#aaaa">#キャンペーン</a>
						<h3><a class="name" href="#aaaa">交通費・宿泊費支給！しまなみ海道サイクリングツアーのモニターを募集しております！</a></h3>
						<div class="desc_wrap">
							<p class="description">本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜…<p>
						</div>
					</div>
				</div>
				<div class="news_item">
					<div class="img_wrap">
						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/news/news04.jpg)"><img src="<?php echo get_template_directory_uri();?>/assets/img/news/news04.jpg"></a>
					</div>
					<div class="txt_wrap">
						<a class="category" href="#aaaa">#パートナー募集</a>
						<h3><a class="name" href="#aaaa">東北地方(秋田・山形)に在住のカメラマン・ライターを募集しております！</a></h3>
						<div class="desc_wrap">
							<p class="description">本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜…<p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<section class="section-footer-link">
		<div class="section_inner">
			<div class="comp-footer-link">
				<div class="link_item">
					<a href="/news/entry/">
						<span class="img_wrap">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/index/footer_img01.jpg">
						</span>
						<span class="txt_wrap">
							<span class="small">MEGURIBITOに掲載希望のオーナー様へ</span>
							<span class="large">プラン掲載についてのお問い合わせ</span>
						</span>
					</a>
				</div>
				<div class="link_item">
					<a href="#aaaa">
						<span class="img_wrap">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/index/footer_img02.jpg">
						</span>
						<span class="txt_wrap">
							<span class="small">私たちと一緒にサービスをつくってみませんか？</span>
							<span class="large">ライター・カメラマンの募集について</span>
						</span>
					</a>
				</div>
			</div><!-- comp-footer-link -->
		</div><!-- section_inner -->
	</section>
</article>
<div class="comp-text-set" style="opacity:0; height:0px;">
	<p>
	<?php
		$repeat_group = SCF::get('main_slider', 56);
		foreach ( $repeat_group as $fields ) {
			$slider_txt = $fields['slider_txt'];
		?>
		<?php echo $slider_txt;?>,
	<?php } ?>
	</p>
</div>
<?php get_template_part("parts/hummenu");?>
<?php get_template_part("parts/footer");?>
</body>
</html>
