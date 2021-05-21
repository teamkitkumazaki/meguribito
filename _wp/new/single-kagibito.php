<!doctype html>
<html>
<head>
  <?php get_template_part("parts/head");?>
</head>
<body>
<header class="comp-header underpage">
<?php get_template_part("parts/header");?>
</header>
<article id="kagibitoDetail" class="page-kagibito-detail">
  <?php if(have_posts()):while(have_posts()): the_post();?>
  <section class="section-kagibito comp-underpage-lead">
    <div class="section_inner">
      <div class="basic_info">
        <div class="kagibito_info">
          <?php if ( has_post_thumbnail() ): ?>
          <span class="icon" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );?>)"></span>
          <?php else: ?><!-- アイキャッチが無い時-->
          <span class="icon" style="background-image: url(https://meguribito.com/wp-content/themes/meguribito/assets/img/common/icon_default.svg)"></span>
          <?php endif; ?>
          <div class="txt_wrap">
            <h1 class="kagibito_name"><?php echo esc_html( SCF::get('post_title'));?></h1>
            <h2 class="position"><span class="place"><?php echo esc_html( SCF::get('belongs'));?></span><span class="locaton"><?php echo esc_html( SCF::get('area_name'));?></span></h2>
            <div class="comp-sns-wrap">
              <?php if(get_post_meta($post->ID, 'instagram',true)):?>
              <a class="ig" target="_blank" href="<?php echo esc_html( SCF::get('instagram'));?>"></a>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID, 'facebook',true)):?>
              <a class="fb" target="_blank" href="<?php echo esc_html( SCF::get('facebook'));?>"></a>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID, 'twitter',true)):?>
              <a class="tw" target="_blank" href="<?php echo esc_html( SCF::get('twitter'));?>"></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="kagibito_status">
          <!--<div class="status_item">
            <span class="title">迎え入れた<span>旅人数</span></span>
            <span class="number">98</span>
          </div> -->
          <?php
            $plan_length = count(SCF::get('hosting_plan'));
            $true_length = $plan_length - 1;
          ?>
          <div class="status_item">
            <span class="title">今まで企画した<span>プラン数</span></span>
            <span class="number"><?php echo $true_length;?></span>
          </div>
        </div>
      </div><!-- basic_info -->
      <div class="message_info">
        <?php if(get_post_meta($post->ID, 'profile_txt',true)):?>
        <div class="message_item">
          <h3 class="message_ttl">プロフィール</h3>
          <div class="description">
            <p><?php echo SCF::get('profile_txt');?></p>
          </div>
        </div>
        <?php endif; ?>
        <?php if(get_post_meta($post->ID, 'policy_txt',true)):?>
        <div class="message_item">
          <h3 class="message_ttl">旅人に体験してほしいこと</h3>
          <div class="description">
            <p><?php echo SCF::get('policy_txt');?></p>
          </div>
        </div>
        <?php endif; ?>
      </div><!-- message_info -->
    </div><!-- section_inner -->
  </section>
  <?php if($true_length != 0):?>
  <section class="section-plans">
    <div class="section_inner">
      <div class="comp-section-title">
        <p class="upper_txt"><?php echo esc_html( SCF::get('family_name'));?>さん主催のプランはこちら</p>
        <h2 class="title">開催中のプラン</h2>
      </div><!-- comp-section-title -->
      <div class="comp-plan-list-02">
        <?php
          $repeat_group = SCF::get( 'hosting_plan' );
          foreach ( $repeat_group as $fields ) {
            $plan_item = $fields['plan_item'];
          ?>
          <?php if($plan_item != null):?>
          <div class="plan_item">
            <div class="img_wrap">
              <?php
              $plan_thumb_sp = SCF::get($plan_item, 'main_sp');
              $plan_thumb_sp_url = wp_get_attachment_image_src($plan_thumb_sp,'meduim_large');
              ?>
              <a href="<?php echo get_permalink($plan_item);?>" style="background-image: url(<?php echo $plan_thumb_sp_url;?>)">
                <img src="<?php echo get_the_post_thumbnail_url($plan_item,'medium_large');?>">
              </a>
            </div><!-- img_wrap -->
            <div class="txt_wrap">
              <div class="title_wrap">
                <h3><a href="<?php echo get_permalink($plan_item);?>"><?php echo SCF::get('post_title', $plan_item);?></a></h3>
                <div class="location">
                  <span class="area"><?php echo esc_html( SCF::get('area_name'));?></span><span class="guesthouse"><?php echo esc_html( SCF::get('belongs'));?></span>
                </div>
              </div><!-- title_wrap -->
            </div>
          </div>
          <?php endif; ?>
          <?php } ?>
      </div><!-- comp-plan-list-02 -->
    </div><!-- section_inner -->
  </section>
  <?php endif; ?>
  <?php endwhile; endif; ?>
  <section class="section-others">
    <div class="section_inner">
      <div class="comp-section-title button">
        <div class="title_wrap">
          <p class="upper_txt">あなたの旅を案内する、地元のキープレイヤー</p>
          <h2 class="title">カギビト一覧</h2>
        </div>
        <div class="comp-link-button">
          <a href="/kagibito-list"><span>カギビト一覧をみる</span></a>
        </div>
      </div>
      <div class="comp-kagibito-list in_detail">
        <?php
          $args2 = array(
            'posts_per_page' => '4',
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
    </div><!-- section_inner -->
  </section>
</article>
<?php get_template_part("parts/hummenu");?>
<?php get_template_part("parts/footer");?>
</body>
</html>
