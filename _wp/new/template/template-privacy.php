<!doctype html>
<html>
<head>
  <?php
    /*Template Name: プライバシーポリシー */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header underpage">
    <?php get_template_part("parts/header");?>
  </header>
  <article id="privacy" class="page-privacy">
    <?php if(have_posts()):while(have_posts()): the_post();?>
		<section class="section-lead comp-underpage-lead">
			<div class="section_inner">
				<div class="txt_wrap">
					<h1 class="page_ttl">プライバシーポリシー</h1>
					<p class="description"><?php echo SCF::get('post_desc');?></p>
				</div>
			</div><!-- section_inner -->
		</section>
		<hr class="comp-block-line">
		<section class="section-terms">
			<div class="section_inner">
				<div class="comp-privacy-text">
          <?php
            $repeat_group = SCF::get( 'privacy_txt' );
            foreach ( $repeat_group as $fields ) {
              $privacy_ttl = $fields['privacy_ttl'];
              $privacy_detail = $fields['privacy_detail'];
            ?>
            <div class="text_item">
              <h2 class="item_ttl"><?php echo $privacy_ttl;?></h2>
              <div class="content_item"><?php echo $privacy_detail;?></div>
            </div><!-- text_item -->
          <?php } ?>
				</div>
			</div>
		</section>
    <?php endwhile; endif; ?>
	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
