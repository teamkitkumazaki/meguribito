<!doctype html>
<html>
<head>
  <?php
    /*Template Name: プラン一覧ページ */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header <?php echo SCF::get('headertype', $post->ID);?>">
  <?php get_template_part("parts/header");?>
  </header>
  <?php if(have_posts()):while(have_posts()): the_post();?>
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
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan01_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan01.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">建設中のゲストハウスに宿泊しながら学ぶ、新しい場所の作り方。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan02_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan02.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">ガイド付きの川釣り体験で鮮魚を釣る・捌く・焼く四万十の旅。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan03_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan03.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">古都で古くから愛されるサウナの名所で心と体を整える体験。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan04_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan04.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">大自然×シーシャ？日本屈指の水とすだちで味わう最強の自然派水タバコ。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan05_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan05.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">大自然×シーシャ？日本屈指の水とすだちで味わう最強の自然派水タバコ。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan06_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan06.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">大自然×シーシャ？日本屈指の水とすだちで味わう最強の自然派水タバコ。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
            <div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan01_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan01.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">建設中のゲストハウスに宿泊しながら学ぶ、新しい場所の作り方。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan02_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan02.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">ガイド付きの川釣り体験で鮮魚を釣る・捌く・焼く四万十の旅。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan03_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan03.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">古都で古くから愛されるサウナの名所で心と体を整える体験。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan04_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan04.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">大自然×シーシャ？日本屈指の水とすだちで味わう最強の自然派水タバコ。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan05_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan05.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">大自然×シーシャ？日本屈指の水とすだちで味わう最強の自然派水タバコ。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    				<div class="plan_item">
    					<div class="img_wrap">
    						<a href="#aaaa" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan06_sp.jpg)">
    							<img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan06.jpg">
    						</a>
    					</div><!-- img_wrap -->
    					<div class="txt_wrap">
    						<div class="comp-kagibito-wrap">
    							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito03.jpg);"></span>
    							<span class="name">長原レキさんと行く</span>
    						</div>
    						<div class="title_wrap">
    							<h3><a href="#aaaa">大自然×シーシャ？日本屈指の水とすだちで味わう最強の自然派水タバコ。</a></h3>
    							<div class="location">
    								<span class="area">徳島県・海陽町</span><span class="guesthouse">IN BETWEEN BLUES</span>
    							</div>
    						</div><!-- title_wrap -->
    					</div>
    				</div><!-- plan_item -->
    			</div><!-- comp-plan-list -->
          <div class="wp-pagenavi comp-pager">
            <div class="wp-pagenavi" role="navigation">
  						<span class="pages">1 / 6</span><span aria-current="page" class="current">1</span><a class="page larger" title="Page 2" href="https://ableartcom.jp/artist/page/2/">2</a><a class="page larger" title="Page 3" href="https://ableartcom.jp/artist/page/3/">3</a><a class="page larger" title="Page 4" href="https://ableartcom.jp/artist/page/4/">4</a><a class="page larger" title="Page 5" href="https://ableartcom.jp/artist/page/5/">5</a><span class="extend">...</span><a class="nextpostslink" rel="next" href="https://ableartcom.jp/artist/page/2/">»</a><a class="last" href="https://ableartcom.jp/artist/page/6/">最後 »</a>
  					</div>
  				</div><!-- comp-pager -->
    		</div><!-- section_inner -->
    	</section>
  	</article>
  <?php endwhile; endif;?>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
