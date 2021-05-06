<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part("parts/head");?>
</head>
<body>
<header class="comp-header">
<?php get_template_part("parts/header");?>
</header>
<article id="newsDetail" class="page-news-detail">
	<?php if(have_posts()):while(have_posts()): the_post();?>
		<section class="section-main">
      <?php
      	$main_thumb = SCF::get('main_image');
      	$main_img = wp_get_attachment_image_src($main_thumb,'full');
        $support_flag = SCF::get('support_flag');
      ?>
			<div class="img_box" style="background-image: url(<?php echo $main_img[0];?>);">
			</div>
		</section>
		<section class="section-contents">
			<div class="section_inner">
				<div class="post_contents">
					<div class="post_head">
						<div class="post_date">
							<div class="date_wrapper">
								<span><?php echo get_the_date("Y.m.d");?></span>
							</div>
						</div>
						<h1 class="post_title"><?php echo esc_html( SCF::get('post_title'));?></h1>
						<ul class="post_tags">
              <?php
                $i = 0;
                $terms = get_the_terms($post->ID, 'newscat');
                if ( $terms ) {
                  foreach ( $terms as $term ) {
                    $term_link = get_term_link( $term );
                    echo '<li><a href="'.esc_url( $term_link ).'"><span>#</span>'.$term->name.'</a></li>';
                    $i++;
                  }
                }
              ?>
						</ul>
						<div class="post_desc">
							<p><?php echo SCF::get('post_desc');?></p>
						</div>
					</div><!-- post_head -->
          <?php if($support_flag == 'no'):?>
          <div class="content_wrap">
            <?php the_content();?>
          </div>
          <?php endif; ?>
          <?php if($support_flag == 'yes'):?>
            <div class="comp-article-content">
              <?php
                $repeat_group = SCF::get( 'article_section' );
                foreach ( $repeat_group as $fields ) {
                  $section_ttl = $fields['section_ttl'];
                  $txt_upper = $fields['txt_upper'];
                  $txt_lower = $fields['txt_lower'];
                  $section_img = wp_get_attachment_image_src($fields['section_img'] , 'large');
                  $section_img_sp = wp_get_attachment_image_src($fields['section_img'] , 'medium_large');
                ?>
                <div class="content_item">
    							<h2 class="section_ttl"><?php echo $section_ttl;?></h2>
                  <?php if(mb_strlen($txt_upper) > 1):?>
                  <div class="content_txt">
                    <?php echo $txt_upper;?>
                  </div>
                  <?php endif; ?>
                  <?php if(mb_strlen($section_img[0]) > 1):?>
    							<div class="img_wrap">
                    <img
                     src="<?php echo $section_img[0];?>"
                     srcset="<?php echo $section_img[0];?> 1440w, <?php echo $section_img_sp[0];?> 768w"
                    >
    							</div>
                  <?php endif; ?>
                  <?php if(mb_strlen($txt_lower) > 1):?>
                  <div class="content_txt">
                    <?php echo $txt_lower;?>
                  </div>
                  <?php endif; ?>
    						</div><!-- content_item -->
                <?php } ?>
  					  </div><!-- comp-article-content -->
          <?php endif; ?>
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
