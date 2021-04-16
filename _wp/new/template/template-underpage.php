<!doctype html>
<html>
<head>
  <?php
    /*Template Name: 固定ページデフォルト */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header <?php echo SCF::get('headertype', $post->ID);?>">
  <?php get_template_part("parts/header");?>
  </header>
  <?php if(have_posts()):while(have_posts()): the_post();?>
    <article id="<?php echo SCF::get('page_id');?>" class="<?php echo SCF::get('page_class');?>">
      <?php the_content();?>
    </article>
  <?php endwhile; endif;?>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
