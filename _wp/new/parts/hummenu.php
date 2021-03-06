<div id="fixedHeader" class="comp-header comp-fixed-header">
	<div class="header_inner">
		<div class="header_left">
			<div class="h_logo">
				<div id="humButton2" class="hum_button">
					<button></button>
				</div>
				<a class="logo_link" href="<?php echo esc_url( home_url( '/' ) );?>"></a>
				<div id="hCart" class="header_cart">
					<a href="<?php echo esc_url(home_url('/' ));?>my-account/bookings/"></a>
				</div>
			</div>
			<nav class="h_nav">
				<ul>
					<!--<li><a href="<?php echo esc_url(home_url('/' ));?>information">運営からのお知らせ</a></li> -->
					<li><a href="<?php echo esc_url(home_url('/' ));?>plans">プラン一覧</a></li>
					<li><a href="<?php echo esc_url(home_url('/' ));?>kagibito-list">カギビト一覧</a></li>
				</ul>
				<ul>
					<li><a href="<?php echo esc_url(home_url('/' ));?>service">メグリビトについて</a></li>
					<li><a href="<?php echo esc_url(home_url('/' ));?>about">私たちについて</a></li>
					<!--<li><a href="<?php echo esc_url(home_url('/' ));?>flow">旅の流れ</a></li> -->
				</ul>
			</nav><!-- h_nav -->
		</div><!-- header_left -->
		<div class="header_right">
			<!--<div class="count_contents">
				<div class="count_item line">
					<a href="<?php echo esc_url(home_url('/' ));?>plans">
						<?php
							$wp_query = new WP_Query();
							$param = array(
								'post_type' => 'product',
							);
							$the_query = new WP_Query( $param );
						?>
						<span class="number">
							<span class="num"><?php echo $the_query->found_posts;?></span><span class="unit">件</span>
						</span>
						<span class="content"><span>プラン一覧</span></span>
					</a>
				</div>
				<div class="count_item">
					<a href="<?php echo esc_url(home_url('/' ));?>kagibito-list">
						<?php
							$wp_query2 = new WP_Query();
							$param2 = array(
								'post_type' => 'kagibito',
							);
							$the_query2 = new WP_Query( $param2 );
						?>
						<span class="number">
							<span class="num"><?php echo $the_query2->found_posts;?></span><span class="unit">人</span>
						</span>
						<span class="content"><span>カギビト一覧</span></span>
					</a>
				</div>
			</div> --><!-- count_contents -->
			<div class="box_contents">
				<a class="box_item cart" href="<?php echo esc_url(home_url('/' ));?>my-account/bookings/"><span>マイページ</span></a>
			</div>
		</div><!-- header_right -->
	</div><!-- header_inner -->
</div><!-- comp-fixed-header -->

<div id="slideMenuNew" class="comp-slide-menu">
	<button id="humClose" class="hum_close"></button>
	<div class="search_inner">
		<div class="content">
			<!--<div class="count_contents">
				<div class="count_item line">
					<a href="<?php echo esc_url(home_url('/' ));?>plans">
						<span class="number">
							<span class="num"><?php echo $the_query->found_posts;?></span><span class="unit">件</span>
						</span>
						<span class="content"><span>プラン一覧</span></span>
					</a>
				</div>
				<div class="count_item">
					<a href="<?php echo esc_url(home_url('/' ));?>kagibito-list">
						<span class="number">
							<span class="num"><?php echo $the_query2->found_posts;?></span><span class="unit">人</span>
						</span>
						<span class="content"><span>カギビト一覧</span></span>
					</a>
				</div>
			</div> -->
			<div class="hummenu_nav_upper">
				<div class="nav_item">
					<a class="mypage" href="<?php echo esc_url(home_url('/' ));?>my-account/bookings/"><span>マイページ</span></a>
				</div>
			</div>
			<div class="hummenu_nav_middle">
				<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/' ));?>service"><span>メグリビトについて</span></a>
				</div>
				<!--<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/' ));?>information/"><span>運営からのお知らせ</span></a>
				</div> -->
				<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/' ));?>about"><span>運営団体</span></a>
				</div>
				<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/' ));?>plans">プラン一覧</a>
				</div>
				<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/' ));?>kagibito-list">カギビト一覧</a>
				</div>
				<!--<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/' ));?>flow"><span>旅の流れ</span></a>
				</div> -->
			</div>
			<div class="hummenu_nav_lower">
				<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/' ));?>privacy"><span>プライバシーポリシー</span></a>
				</div>
				<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/' ));?>transaction"><span>特定商取引法に基づく表記</span></a>
				</div>
				<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/'));?>terms">利用規約</a>
				</div>
				<div class="nav_item">
					<a href="<?php echo esc_url(home_url('/' ));?>contact"><span>お問い合わせ</span></a>
				</div>
			</div>
			<div class="sns_wrap">
				  <a class="ig" target="_blank" href="https://www.instagram.com/meguribito_tabi/"></a>
				<a class="fb" target="_blank" href="https://note.com/meguribito_tabi"></a>
				<a class="tw" target="_blank" href="https://twitter.com/MEGURIBITO_TABI"></a>
			</div>
			<div class="nav_footer">
				<span class="logo"></span>
				<span class="catchcopy">誰かの日常を、あなたの旅先に</span>
			</div>
		</div><!-- content -->
</div><!-- search_inner -->
</div><!-- comp-slide-menu -->
<?php wp_reset_query(); ?>
