<div class="comp-plan-list">
  <?php
    $args2 = array(
      'posts_per_page' => '6',
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
      wp_reset_postdata();
    ?>
</div><!-- comp-plan-list -->
