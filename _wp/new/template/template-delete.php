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
    <article id="delete" class="page-delete">
      <section class="section-main">
        <div class="img_wrap"></div>
        <div class="section_inner">
          <div class="comp-section-title margin center">
            <div class="title_wrap">
              <h1 class="title">アカウントの削除</h1>
            </div>
          </div>
          <form id="plugin_delete_me_shortcode_form" method="post">
            <label for="plugin_delete_me_shortcode_password">パスワード</label>
            <input type="password" autocomplete="off" autofocus="autofocus" id="plugin_delete_me_shortcode_password" name="plugin_delete_me_shortcode_password" />
            <p><input type="submit" value="アカウントを削除する" />
          </form>
        </div><!-- section_inner -->
      </section>
    </article>
  <?php endwhile; endif;?>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
