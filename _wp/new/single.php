<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part("parts/head");?>
</head>
<body>
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
<article id="newsDetail" class="page-news-detail">
	<?php if(have_posts()):while(have_posts()): the_post();?>
		<section class="section-main">
			<div class="img_box" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/news/main.jpg);">
				<!-- <img src="<?php echo get_template_directory_uri();?>/assets/img/sample/main_sp.jpg"> -->
			</div>
		</section>
		<section class="section-contents">
			<div class="section_inner">
				<div class="post_contents">
					<div class="post_head">
						<div class="post_date">
							<div class="date_wrapper">
								<span>2021.05.06</span>
							</div>
						</div>
						<h1 class="post_title"><?php echo esc_html( SCF::get('post_title'));?></h1>
						<ul class="post_tags">
							<li><a href="/?tag=14"><span>#</span>キャンペーン</a></li>
							<li><a href="/?tag=14"><span>#</span>募集</a></li>
						</ul>
						<div class="post_desc">
							<p><?php echo SCF::get('post_desc');?></p>
						</div>
					</div><!-- post_head -->
					<?php the_content();?>
					<div class="comp-article-content">
						<div class="content_item">
							<h2 class="section_ttl">山形の主な取材先について</h2>
							<div class="img_wrap">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/news/detail01.jpg">
							</div>
							<div class="content_txt">
								<p>山形は自然がとても豊かで、年間を通して楽しめる絶景スポットが数多くあります。全国から多くの観光客が訪れる山寺立石寺、樹氷とスキーで有名な蔵王、日本百名山に選ばれた月山など、見るものを虜にする自然風景は、山形の確かな財産と言えるでしょう。</p>
								<p>山形の人は親切な人が多いので、困ったことがあれば頼んだりお願いしたりできる関係ができています。道ですれ違った近所の人とあいさつを交わしたり、野菜やお菓子をおすそわけしたり、こんなことが日常茶飯事です。</p>
								<p>また日本海側では新鮮な海の幸、山側では蕎麦や芋煮など山の幸が楽しめるので、グルメな旅をするのにもおすすめな場所です。</p>
							</div>
						</div><!-- content_item -->
						<div class="content_item">
							<h2 class="section_ttl">銀山温泉</h2>
							<div class="img_wrap">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/news/detail02.jpg">
							</div>
							<div class="content_txt">
								<p>大正時代にタイムスリップ。</p>
								<p>日本三大銀山として栄えた延沢温泉に由来する、東北の温泉街。銀山川沿いにある大正から昭和初期に建てられた木造の建築がガス灯で照らさる光景は、情緒たっぷりだ。</p>
							</div>
						</div><!-- content_item -->
						<div class="content_item">
							<h2 class="section_ttl">立石寺</h2>
							<div class="content_txt">
								<p>芭蕉が愛した寺。</p>
								<p>松尾芭蕉が「閑けさや 岩にしみ入る 蝉の音」を詠んだ立石寺。1,000段を越える階段を登り景色を眺めると、周囲の山々とミニチュアのような門前町の絶景が広がる。</p>
							</div>
							<div class="img_wrap">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/news/detail03.jpg">
							</div>
							<div class="content_txt">
								<p>芭蕉が愛した寺。</p>
								<p>松尾芭蕉が「閑けさや 岩にしみ入る 蝉の音」を詠んだ立石寺。1,000段を越える階段を登り景色を眺めると、周囲の山々とミニチュアのような門前町の絶景が広がる。</p>
							</div>
						</div><!-- content_item -->
					</div><!-- comp-article-content -->
					<div class="sns_share">
						<p class="share_ttl">この記事をシェアする</p>
						<ul>
							<li>
								<a href="https://twitter.com/share?url=<?php echo get_permalink($id); ?>" target="_blank"><img src="https://journal.komons-japan.com/wp-content/themes/komons-theme/img/journal/share_twitter.png" alt="twitter"></a>
							</li>
							<li>
								<a href="http://www.facebook.com/share.php?u=<?php echo get_permalink($id); ?>" rel="nofollow" target="_blank"><img src="https://journal.komons-japan.com/wp-content/themes/komons-theme/img/journal/share_facebook.png" alt="facebook"></a>
							</li>
						</ul>
					</div><!-- sns_share -->
				</div><!-- post_contents -->
			</div><!-- section_inner -->
		</section>
		<section class="section-relation">
			<div class="section_inner">
				<h2 class="relation_ttl">こちらの記事もオススメです</h2>
				<div class="comp-news-list archive">
					<div class="news_item"></div><!-- news_item -->
					<div class="news_item">
						<div class="img_wrap">
							<a href="#aaaa" style="background-image: url(assets/img/news/news02.jpg)"><img src="<?php echo get_template_directory_uri();?>/assets/img/news/news02.jpg"></a>
						</div>
						<div class="txt_wrap">
							<a class="category" href="#aaaa">#お知らせ</a>
							<h3><a class="name" href="#aaaa">MEGURIBITOのサービス利用時におけるコロナ対策、及び今後の利用方針について</a></h3>
							<div class="desc_wrap">
								<p class="description">本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜…</p><p>
							</p></div>
						</div>
					</div><!-- news_item -->
					<div class="news_item">
						<div class="img_wrap">
							<a href="#aaaa" style="background-image: url(assets/img/news/news03.jpg)"><img src="<?php echo get_template_directory_uri();?>/assets/img/news/news03.jpg"></a>
						</div>
						<div class="txt_wrap">
							<a class="category" href="#aaaa">#キャンペーン</a>
							<h3><a class="name" href="#aaaa">交通費・宿泊費支給！しまなみ海道サイクリングツアーのモニターを募集しております！</a></h3>
							<div class="desc_wrap">
								<p class="description">本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜…</p><p>
							</p></div>
						</div>
					</div><!-- news_item -->
					<div class="news_item">
						<div class="img_wrap">
							<a href="#aaaa" style="background-image: url(assets/img/news/news04.jpg)"><img src="<?php echo get_template_directory_uri();?>/assets/img/news/news04.jpg"></a>
						</div>
						<div class="txt_wrap">
							<a class="category" href="#aaaa">#パートナー募集</a>
							<h3><a class="name" href="#aaaa">東北地方(秋田・山形)に在住のカメラマン・ライターを募集しております！</a></h3>
							<div class="desc_wrap">
								<p class="description">本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜…</p><p>
							</p></div>
						</div>
					</div><!-- news_item -->
				</div>
			</div>
		</section>
	<?php endwhile; endif;?>
</article>
<?php get_template_part("parts/hummenu");?>
<?php get_template_part("parts/footer");?>
</body>
</html>
