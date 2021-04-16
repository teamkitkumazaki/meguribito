<!doctype html>
<html>
<head>
  <?php
    /*Template Name: 特商法ページ */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header underpage">
    <?php get_template_part("parts/header");?>
  </header>
  <article id="transaction" class="page-transaction">
    <?php if(have_posts()):while(have_posts()): the_post();?>
		<section class="section-lead comp-underpage-lead">
			<div class="section_inner">
				<div class="txt_wrap">
					<h1 class="page_ttl">特定商取引法に基づく表記</h1>
				</div>
        <div class="comp-chart-layout">
          <?php
            $repeat_group = SCF::get( 'transaction_text' );
            foreach ( $repeat_group as $fields ) {
              $transaction_ttl = $fields['transaction_ttl'];
              $privacy_detail = $fields['privacy_detail'];
            ?>
            <div class="chart_item">
              <span class="title"><?php echo $transaction_ttl;?></span>
              <span class="content"><?php echo $privacy_detail;?></span>
            </div>
          <?php } ?>
        </div>
			</div><!-- section_inner -->
		</section>
    <?php endwhile; endif; ?>
	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
