<!doctype html>
<html>
<head>
  <?php
    /*Template Name: お知らせ一覧ページ */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header <?php echo SCF::get('headertype', $post->ID);?>">
  <?php get_template_part("parts/header");?>
  </header>
  <?php if(have_posts()):while(have_posts()): the_post();?>
    <article id="newsList" class="page-news-list">
  		<section class="section-news">
  			<div class="section_inner">
  				<div class="comp-section-title margin">
  					<p class="upper_txt">運営からのお知らせ、イベント情報など</p>
  					<h2 class="title">メグリビトからのお知らせ</h2>
  				</div><!-- comp-section-title -->
  				<div class="comp-news-tags">
  				</div>
          <div class="comp-news-list archive">
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
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
    				</div><!-- news_item -->
    			</div><!-- comp-news-list -->
  				<div class="wp-pagenavi comp-pager">
            <div class="wp-pagenavi" role="navigation">
  						<span class="pages">1 / 6</span><span aria-current="page" class="current">1</span><a class="page larger" title="Page 2" href="https://ableartcom.jp/artist/page/2/">2</a><a class="page larger" title="Page 3" href="https://ableartcom.jp/artist/page/3/">3</a><a class="page larger" title="Page 4" href="https://ableartcom.jp/artist/page/4/">4</a><a class="page larger" title="Page 5" href="https://ableartcom.jp/artist/page/5/">5</a><span class="extend">...</span><a class="nextpostslink" rel="next" href="https://ableartcom.jp/artist/page/2/">»</a><a class="last" href="https://ableartcom.jp/artist/page/6/">最後 »</a>
  					</div>
  				</div><!-- comp-pager -->
  			</div><!-- section_inner -->
  		</section>
  	</article>
  <?php endwhile; endif;?>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
