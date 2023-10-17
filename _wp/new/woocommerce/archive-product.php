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
          <?php if (current_user_can('administrator') || current_user_can('editor')) {
            get_template_part("parts/planListPreview");
          }else{
            get_template_part("parts/planList");
          }
          ;?>
    		</div><!-- section_inner -->
    	</section>
  	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
