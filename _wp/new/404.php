<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part("parts/head");?>
</head>
<body>
<header class="comp-header underpage">
	<?php get_template_part("parts/header");?>
</header>
<article id="page404" class="page-404">
	<section class="section-lead comp-underpage-lead">
		<div class="section_inner">
			<div class="txt_wrap">
				<h1 class="page_ttl">ページが見つかりません</h1>
				<h2 class="sub_ttl"><span>お探しのページは存在しません。恐れ入りますが、</span><span>ブラウザバックまたは下記のボタンよりトップページへお戻りください。</span></h2>
			</div>
			<div class="comp-booking-button">
				<a href="/">トップページに戻る</a>
			</div>
		</div><!-- section_inner -->
	</section>
</article>
<?php get_template_part("parts/hummenu");?>
<?php get_template_part("parts/footer");?>
</body>
</html>
