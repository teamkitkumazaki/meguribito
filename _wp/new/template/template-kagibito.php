<!doctype html>
<html>
<head>
  <?php
    /*Template Name: カギビト一覧 */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header underpage">
    <?php get_template_part("parts/header");?>
  </header>
  <article id="kagibitoList" class="page-kagibito-list">
		<section class="section-lead comp-underpage-lead">
			<div class="section_inner">
				<div class="txt_wrap">
					<h1 class="page_ttl">カギビト一覧</h1>
					<h2 class="sub_ttl">あなたの旅を案内する、地元のキープレイヤー。</h2>
					<p class="description">
						<span>カギビトとは、あなたの旅を案内する、地元のキープレイヤーの方々です。</span><span>地域に根ざした宿泊施設やコワーキングスペース等を運営しており、</span><span>カギビトは地域に根ざす人同士の繋がりを多く持ち、あなたをその土地の日常の中に案内してくれます。</span>
					</p>
				</div>
			</div><!-- section_inner -->
		</section>
		<section class="section-plans">
			<div class="section_inner">
				<div class="comp-kagibito-list">
          <?php
            $args2 = array(
              'posts_per_page' => '24',
              'orderby' => 'rand',
              'post_type' => 'kagibito',
              'paged' => $paged,
            );
            $the_query2 = new WP_Query( $args2 );
            if ( $the_query2->have_posts() ) :
              while ( $the_query2->have_posts() ) : $the_query2->the_post();
              echo  '
              <div class="kagibito_item">
                <div class="img_wrap">
                  <a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ).'"></a>
                </div>
                <div class="txt_wrap">
                  <a class="name" href="'.get_the_permalink().'">'. SCF::get('post_title').'</a>
                  <div class="location">
                    <span>'.SCF::get('belongs').'</span>
                    <span>'.SCF::get('area_name').'</span>
                  </div>
                </div>
              </div>';
              endwhile;
              endif;
            ?>
				</div><!-- comp-kagibito-list -->

				<!--<div class="wp-pagenavi comp-pager">
          <div class="wp-pagenavi" role="navigation">
						<span class="pages">1 / 6</span><span aria-current="page" class="current">1</span><a class="page larger" title="Page 2" href="https://ableartcom.jp/artist/page/2/">2</a><a class="page larger" title="Page 3" href="https://ableartcom.jp/artist/page/3/">3</a><a class="page larger" title="Page 4" href="https://ableartcom.jp/artist/page/4/">4</a><a class="page larger" title="Page 5" href="https://ableartcom.jp/artist/page/5/">5</a><span class="extend">...</span><a class="nextpostslink" rel="next" href="https://ableartcom.jp/artist/page/2/">»</a><a class="last" href="https://ableartcom.jp/artist/page/6/">最後 »</a>
					</div>
				</div> --> <!-- comp-pager -->
        
			</div><!-- section_inner -->
		</section>
	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
