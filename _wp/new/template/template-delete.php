<!doctype html>
<html>
<head>
  <?php
    /*Template Name: アカウント削除ページ */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header underpage">
  <?php get_template_part("parts/header");?>
  </header>
  <?php if(have_posts()):while(have_posts()): the_post();?>
    <?php $userInfo = wp_get_current_user();?>
    <article id="delete" class="page-delete">
      <section class="section-main">
        <div class="img_wrap"></div>
        <div class="section_inner">
          <div class="comp-section-title center">
            <div class="title_wrap">
              <h1 class="title">アカウントの削除</h1>
            </div>
          </div>
          <div class="delete_form">
            <form id="plugin_delete_me_shortcode_form" method="post">
              <p class="form-row validate-required" id="billing_last_name_field" data-priority="10">
                <label for="plugin_delete_me_shortcode_password" class="">登録メールアドレス</label>
                <span class="woocommerce-input-wrapper">
                  <span class="disable_input"><?php echo $userInfo->user_email;?></span>
                </span>
              </p>
              <p class="form-row validate-required" id="billing_last_name_field" data-priority="10">
                <label for="plugin_delete_me_shortcode_password" class="">パスワード</label>
                <span class="woocommerce-input-wrapper">
                  <input type="password" autocomplete="off" autofocus="autofocus" id="plugin_delete_me_shortcode_password" name="plugin_delete_me_shortcode_password">
                </span>
              </p>
              <div class="submit_wrap">
                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="ログイン">アカウントを削除する</button>
                <input type="submit" value="アカウントを削除する">
              </div>
            </form>
          </div>
        </div><!-- section_inner -->
      </section>
    </article>
  <?php endwhile; endif;?>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
