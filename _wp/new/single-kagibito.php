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
          <div class="status_item">
            <span class="title">迎え入れた<span>旅人数</span></span>
            <span class="number">98</span>
          </div>
          <div class="status_item">
            <span class="title">今まで企画した<span>プラン数</span></span>
            <span class="number">3</span>
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
  <section class="section-plans">
    <div class="section_inner">
      <div class="comp-section-title">
        <p class="upper_txt"><?php echo esc_html( SCF::get('family_name'));?>さん主催のプランはこちら</p>
        <h2 class="title">開催中のプラン</h2>
      </div><!-- comp-section-title -->
      <div class="comp-plan-list-02">
        <div class="plan_item">
          <div class="img_wrap">
            <a href="#aaaa" style="background-image: url(https://meguribito.com/wp-content/themes/storefront/assets/img/plan/plan01_sp.jpg)">
              <img src="https://meguribito.com/wp-content/themes/storefront/assets/img/plan/plan01.jpg">
            </a>
          </div><!-- img_wrap -->
          <div class="txt_wrap">
            <div class="title_wrap">
              <h3><a href="#aaaa">建設中のゲストハウスに宿泊しながら学ぶ、新しい場所の作り方。</a></h3>
              <div class="location">
                <span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
              </div>
            </div><!-- title_wrap -->
          </div>
        </div>
        <div class="plan_item">
          <div class="img_wrap">
            <a href="#aaaa" style="background-image: url(https://meguribito.com/wp-content/themes/storefront/assets/img/plan/plan06_sp.jpg)">
              <img src="https://meguribito.com/wp-content/themes/storefront/assets/img/plan/plan06.jpg">
            </a>
          </div><!-- img_wrap -->
          <div class="txt_wrap">
            <div class="title_wrap">
              <h3><a href="#aaaa">大自然×シーシャ？日本屈指の水とすだちで味わう最強の自然派水タバコ。</a></h3>
              <div class="location">
                <span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
              </div>
            </div><!-- title_wrap -->
          </div>
        </div><!-- plan_item -->
      </div><!-- comp-plan-list-02 -->
    </div><!-- section_inner -->
  </section>
  <?php endwhile; endif; ?>
  <section class="section-others">
    <div class="section_inner">
      <div class="comp-section-title button">
        <div class="title_wrap">
          <p class="upper_txt">あなたの旅を案内する、地元のキープレイヤー</p>
          <h2 class="title">カギビト一覧</h2>
        </div>
        <div class="comp-link-button">
          <a href="#aaaa"><span>カギビト一覧をみる</span></a>
        </div>
      </div>
      <div class="comp-kagibito-list in_detail">
        <div class="kagibito_item">
          <div class="img_wrap">
            <a href="#aaaa"><img src="https://meguribito.com/wp-content/themes/storefront/assets/img/kagibito/kagibito01.jpg"></a>
          </div>
          <div class="txt_wrap">
            <a class="name" href="#aaaa">濵田 規史</a>
            <div class="location">
              <span>コダテル</span>
              <span>愛媛県・八幡浜市</span>
            </div>
            <div class="comp-sns-wrap center">
              <a class="ig" href="#aaaa"></a>
              <a class="fb" href="#aaaa"></a>
              <a class="tw" href="#aaaa"></a>
            </div>
          </div>
        </div>
        <div class="kagibito_item">
          <div class="img_wrap">
            <a href="#aaaa"><img src="https://meguribito.com/wp-content/themes/storefront/assets/img/kagibito/kagibito02.jpg"></a>
          </div>
          <div class="txt_wrap">
            <a class="name" href="#aaaa">荒木 貴大</a>
            <div class="location">
              <span>MACCHI</span>
              <span>愛媛県・八幡浜市</span>
            </div>
            <div class="comp-sns-wrap center">
              <a class="ig" href="#aaaa"></a>
              <a class="fb" href="#aaaa"></a>
              <a class="tw" href="#aaaa"></a>
            </div>
          </div>
        </div>
        <div class="kagibito_item">
          <div class="img_wrap">
            <a href="#aaaa"><img src="https://meguribito.com/wp-content/themes/storefront/assets/img/kagibito/kagibito03.jpg"></a>
          </div>
          <div class="txt_wrap">
            <a class="name" href="#aaaa">永原 レキ</a>
            <div class="location">
              <span>IN BETWEEN BLUES</span>
              <span>徳島県・海陽町</span>
            </div>
            <div class="comp-sns-wrap center">
              <a class="ig" href="#aaaa"></a>
              <a class="fb" href="#aaaa"></a>
              <a class="tw" href="#aaaa"></a>
            </div>
          </div>
        </div>
        <div class="kagibito_item">
          <div class="img_wrap">
            <a href="#aaaa"><img src="https://meguribito.com/wp-content/themes/storefront/assets/img/kagibito/kagibito04.jpg"></a>
          </div>
          <div class="txt_wrap">
            <a class="name" href="#aaaa">坂井 勇貴</a>
            <div class="location">
              <span>宝島バナナファーム</span>
              <span>熊本県・宇城市</span>
            </div>
            <div class="comp-sns-wrap center">
              <a class="ig" href="#aaaa"></a>
              <a class="fb" href="#aaaa"></a>
              <a class="tw" href="#aaaa"></a>
            </div>
          </div>
        </div>
      </div><!-- comp-kagibito-list -->
    </div><!-- section_inner -->
  </section>
</article>
<?php get_template_part("parts/hummenu");?>
<?php get_template_part("parts/footer");?>
</body>
</html>
