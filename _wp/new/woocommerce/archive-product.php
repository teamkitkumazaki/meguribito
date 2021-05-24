<!doctype html>
<html>
<head>
  <?php get_template_part("parts/head");?>
</head>
<body>
  <header class="comp-header underpage">
  <?php get_template_part("parts/header");?>
  </header>
    <article id="planList" class="page-plan-list">
      <section class="section-plan-list">
    		<div class="section_inner">
    			<div class="comp-section-title margin">
    				<div class="title_wrap">
    					<p class="upper_txt">新しい体験、続々更新中</p>
    					<h2 class="title">新着のプラン</h2>
    				</div>
    			</div><!-- comp-section-title -->
          <div class="comp-plan-list">
  					<?php
  						$args2 = array(
  							'posts_per_page' => '12',
  							'orderby' => 'rand',
  							'post_type' => 'product',
  							'paged' => $paged,
                'post_status' => array(
                    'publish'
                  ),
  						);
  						$the_query2 = new WP_Query( $args2 );
  						if ( $the_query2->have_posts() ) :
  							while ( $the_query2->have_posts() ) : $the_query2->the_post();
  							$kagibito_id = SCF::get('kagibito_id');
  							$kagiibito_thumb = get_the_post_thumbnail_url($kagibito_id,'thumbnail');
  							$kagibito_name = SCF::get('post_title', $kagibito_id);
  							$kagibito_belongs = SCF::get('belongs', $kagibito_id);
  							$kagibito_area = SCF::get('area_name', $kagibito_id);
  							$main_thumb_sp = SCF::get('main_sp');
  							$thumb_img_sp = wp_get_attachment_image_src($main_thumb_sp,'medium_large');
  							echo  '
  							<div class="plan_item">
  								<div class="img_wrap">
  									<a href="'.get_the_permalink().'" style="background-image:url('.$thumb_img_sp[0].');">
  										<img class="img_pc" src="'.get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ).'">
  									</a>
  								</div><!-- img_wrap -->
  								<div class="txt_wrap">
  									<div class="comp-kagibito-wrap">
  										<span class="icon" style="background-image: url('.$kagiibito_thumb.');"></span>
  										<span class="name">'.$kagibito_name.'さんと行く</span>
  									</div>
  									<div class="title_wrap">
  										<h3><a href="'.get_the_permalink().'">'. SCF::get('post_title').'</a></h3>
  										<div class="location">
  											<span class="area">'.$kagibito_area.'</span><span class="guesthouse">'.$kagibito_belongs.'</span>
  										</div>
  									</div><!-- title_wrap -->
  								</div>
  							</div><!-- plan_item -->';
  							endwhile;
  							endif;
  						?>
  				</div><!-- comp-plan-list -->
          <!-- <div class="wp-pagenavi comp-pager">
            <div class="wp-pagenavi" role="navigation">
  						<span class="pages">1 / 6</span><span aria-current="page" class="current">1</span><a class="page larger" title="Page 2" href="https://ableartcom.jp/artist/page/2/">2</a><a class="page larger" title="Page 3" href="https://ableartcom.jp/artist/page/3/">3</a><a class="page larger" title="Page 4" href="https://ableartcom.jp/artist/page/4/">4</a><a class="page larger" title="Page 5" href="https://ableartcom.jp/artist/page/5/">5</a><span class="extend">...</span><a class="nextpostslink" rel="next" href="https://ableartcom.jp/artist/page/2/">»</a><a class="last" href="https://ableartcom.jp/artist/page/6/">最後 »</a>
  					</div>
  				</div> --><!-- comp-pager -->
    		</div><!-- section_inner -->
    	</section>
  	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
