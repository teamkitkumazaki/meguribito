<div class="header_inner">
		<div class="header_left">
			<div class="h_logo">
				<div id="humButton" class="hum_button">
					<button></button>
				</div>
				<a class="logo_link" href="<?php echo esc_url(home_url('/' ));?>"></a>
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
						<div class="count">
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
	<?php wp_reset_query(); ?>
