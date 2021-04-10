<!doctype html>
<html>
<head>
  <?php get_template_part("parts/head");?>
</head>
<body>
<header class="comp-header">
<?php get_template_part("parts/header");?>
</header>
<article id="planDetail" class="page-plan-detail">
  <?php if(have_posts()):while(have_posts()): the_post();?>
		<section id="main" class="section-main">
			<div class="img_box" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/sample/main.jpg);">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/main_sp.jpg">
			</div>
		</section>
		<section id="lead" class="section-lead">
			<div class="section_inner">
				<div class="comp-section-title center">
					<p class="upper_txt">村上ひろふみさんと行く</p>
					<h1 class="title"><span>瀬戸内のアーティスト達と過ごす</span><span>ローカルヒッピーライフ</span></h1>
				</div>
				<div class="location">
					<span class="area">広島県・尾道市</span>
					<span class="guesthouse">ゲストハウス ヤドカリ</span>
				</div>
				<div class="description">
					<p>かつて志賀直哉などの文豪も筆を執りに訪れた尾道は、静かな海と風光明媚な景色、そしてほどよく栄え酒場も充実している環境は、じっくりと腰を据えて仕事をするのには最高の街並みです。</p>
					<p>また、港町として栄えた都市であることから歴史的に文化のアンテナが高いこともあり、現在も国内・海外問わず、アーティストやクリエイターが多く在住・移住しているこの町の日常生活の中には、個性的で力強い生き方をするアーティストとの出会いもたくさんあります。</p>
					<div class="button_wrap">
						<div class="favorite_button">
							<a class="favorite" href="#aaaa">
								<span class="icon"></span>
								<span class="text">お気に入り登録</span>
							</a>
						</div>
						<div class="sns_wrap">
							<a class="tw" href="#aaaa">
								<span class="icon"></span>
								<span class="text">ツイートする</span>
							</a>
							<a class="fb" href="#aaaa">
								<span class="icon"></span>
								<span class="text">シェアする</span>
							</a>
							<a class="line" href="#aaaa">
								<span class="icon"></span>
								<span class="text">LINEで送る</span>
							</a>
						</div>
					</div><!-- button_wrap -->
				</div><!-- description -->
			</div><!-- section_inner -->
		</section>
		<section id="outline" class="section-plan-outline">
			<div class="section_inner">
				<div class="lead_flex">
					<div class="kagibito_wrap">
						<div class="kagibito_prof">
							<a href="#aaaa" class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito04.jpg);"></a>
							<div class="kagibito_info">
								<span class="info">ゲストハウスヤドカリ・オーナー</span>
								<a class="name" href="#aaaa">村上 ひろふみさん</a>
							</div>
						</div>
						<div class="description">
							<p>ここにカギビトのプロフィールが入ります。ここにカギビトのプロフィールが入ります。ここにカギビトのプロフィールが入ります。ここにカギビトのプロフィールが入ります。ここにカギビトのプロフィールが入ります。</p>
						</div>
					</div><!-- kagibito_wrap -->
					<div class="plan_outline">
						<div class="outline_inner">
							<span class="title">プランの内容</span>
							<div class="content">
								<span class="item">海沿いの絶景コワーキングオフィス使い放題</span>
								<span class="item">アテンド付きナイトツアー</span>
								<span class="item">ウシオショコラトル工場見学</span>
							</div>
						</div>
					</div><!-- plan_outline -->
				</div><!-- lead_flex -->
			</div><!-- section_inner -->
		</section>
		<section id="detail01" class="section-detail01">
			<div class="section_inner">
				<div class="detail_main">
					<div class="img_wrap">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/detail_main.jpg">
					</div>
					<div class="txt_wrap">
						<h2 class="main_ttl">海に面した静かなコワーキングスペースで、制作に没頭するワーケーションプラン</h2>
						<div class="description">
							<p>かつて志賀直哉などの文豪も筆を執りに訪れた尾道は、静かな海と風光明媚な景色、そしてほどよく栄え酒場も充実している環境は、じっくりと腰を据えて仕事をするのには最高の街並みです。また、港町として栄えた都市であることから歴史的に文化のアンテナが高いこともあり、現在も国内・海外問わず、アーティストやクリエイターが多く在住・移住しているこの町の日常生活の中には、個性的で力強い生き方をするアーティストとの出会いもたくさんあります。</p>
						</div>
						<div class="comp-kagibito-comment">
							<div class="icon_wrap">
								<a href="#aaaa">
									<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito04.jpg);"></span>
									<span class="name">村上さん</span>
								</a>
							</div>
							<div class="comment_wrap">
								<div class="comment_inner">
									<p>“ローカルの巣” 居酒屋「まる」にて、地元の方々と交流しながら地元の食を楽しむツアーです。“ローカルの巣” 居酒屋「まる」にて、地元の方々と交流しながら地元の食。“ローカルの巣” 居酒屋「まる」にて、地元の方々と交流しながら地元の食を楽しむツアーです。“ローカルの巣” 居酒屋「まる」にて、地元の方々と交流しながら地元の食。</p>
								</div>
							</div>
						</div>
					</div>
				</div><!-- detail_main -->
				<div class="comp-plan-detail-flex">
					<div class="detail_item">
						<div class="img_wrap">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/detail_img01.jpg">
						</div>
						<div class="txt_wrap">
							<div class="title_wrap">
								<span class="mini_ttl">こんな体験もできます</span>
								<h3 class="detail_ttl">古参の地元民と、移住者・旅行者が交わるスナック街「新開地区」</h3>
							</div>
							<div class="description">
								<p>市街地から4Km離れた「新開地区」は、港町として栄えた歴史とともに繁栄し今もなお深夜までネオンが灯るスナック・飲屋街。</p>
								<p>古くから地元の住民に愛されたディープなお店だけではなく、移住者や若い店主が空き家物件を活用してここ数年の間にオープンしたような旅行者でも入りやすいお店も多く存在する。</p>
							</div>
							<div class="comp-kagibito-comment">
								<div class="icon_wrap">
									<a href="#aaaa">
										<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito04.jpg);"></span>
										<span class="name">村上さん</span>
									</a>
								</div>
								<div class="comment_wrap">
									<div class="comment_inner">
										<p>“ローカルの巣” 居酒屋「まる」にて、地元の方々と交流しながら地元の食を楽しむツアーです。“ローカルの巣” 居酒屋「まる」にて、地元の方々と交流しながら地元の食。</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- detail_item -->
					<div class="detail_item">
						<div class="img_wrap">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/detail_img02.jpg">
						</div>
						<div class="txt_wrap">
							<div class="title_wrap">
								<span class="mini_ttl">こんな体験もできます</span>
								<h3 class="detail_ttl">古参の地元民と、移住者・旅行者が交わるスナック街「新開地区」</h3>
							</div>
							<div class="description">
								<p>市街地から4Km離れた「新開地区」は、港町として栄えた歴史とともに繁栄し今もなお深夜までネオンが灯るスナック・飲屋街。</p>
								<p>古くから地元の住民に愛されたディープなお店だけではなく、移住者や若い店主が空き家物件を活用してここ数年の間にオープンしたような旅行者でも入りやすいお店も多く存在する。</p>
							</div>
							<div class="comp-kagibito-comment">
								<div class="icon_wrap">
									<a href="#aaaa">
										<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito04.jpg);"></span>
										<span class="name">村上さん</span>
									</a>
								</div>
								<div class="comment_wrap">
									<div class="comment_inner">
										<p>“ローカルの巣” 居酒屋「まる」にて、地元の方々と交流しながら地元の食を楽しむツアーです。“ローカルの巣” 居酒屋「まる」にて、地元の方々と交流しながら地元の食。</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- detail_item -->
				</div><!-- comp-plan-detail-flex -->
			</div><!-- section_inner -->
		</section>
		<section id="detail02" class="section-detail02">
			<div class="section_inner">
				<div class="comp-section-title margin">
					<p class="upper_txt">街の余白について</p>
					<h2 class="title"><span>尾道の街の日常</span></h2>
				</div>
				<div class="comp-plan-detail-flex">
					<div class="detail_item">
						<div class="img_wrap">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/detail_img03.jpg">
						</div>
						<div class="txt_wrap">
							<div class="title_wrap">
								<span class="mini_ttl">こんな体験もできます</span>
								<h3 class="detail_ttl">古参の地元民と、移住者・旅行者が交わるスナック街「新開地区」</h3>
							</div>
							<div class="description">
								<p>市街地から4Km離れた「新開地区」は、港町として栄えた歴史とともに繁栄し今もなお深夜までネオンが灯るスナック・飲屋街。</p>
								<p>古くから地元の住民に愛されたディープなお店だけではなく、移住者や若い店主が空き家物件を活用してここ数年の間にオープンしたような旅行者でも入りやすいお店も多く存在する。</p>
							</div>
						</div>
					</div><!-- detail_item -->
				</div><!-- comp-plan-detail-flex -->
				<div class="comp-spot-list">
					<div class="spot_inner">
						<div class="spot_ttl">
							<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito04.jpg);"></span>
							<h3 class="title">カギビトおすすめのローカルスポット</h3>
						</div>
						<div id="spotSlider" class="slick-slider">
							<div class="item_box slick-slide">
								<div class="img_wrap">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/spot01.jpg">
								</div>
								<div class="txt_wrap">
									<div class="title_wrap">
										<span class="num">1</span>
										<h4 class="spot_name">拉麺またたび</h4>
									</div>
									<div class="description">
										<p>魚介出汁ベースの伝統的なラーメンを、店主の上田さんが化学調味料を一切使わない独自のエッセンスで再解釈した「尾道ラーメン2.0」。実態はラーメン屋というより居酒屋で、店頭に入ると第一声で「何飲む？」と聞かれる。</p>
										<div class="comp-kagibito-comment brown">
											<div class="icon_wrap">
												<a href="#aaaa">
													<span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/kagibito/kagibito04.jpg);"></span>
													<span class="name">村上さん</span>
												</a>
											</div>
											<div class="comment_wrap">
												<div class="comment_inner">
													<p>“ローカルの巣” 居酒屋「まる」にて、地元の方々と交流しながら地元の食を楽しむツアーです。</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- item_box -->
							<div class="item_box slick-slide">
								<div class="img_wrap">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/spot02.jpg">
								</div>
								<div class="txt_wrap">
									<div class="title_wrap">
										<span class="num">2</span>
										<h4 class="spot_name">浄泉寺</h4>
									</div>
									<div class="description">
										<p>東京で音楽活動を長らく続けてきた雪山さんが、尾道にUターンしてきた際に、有効活用されていなかった実家のお寺のお堂を「地元の人たちが集まる賑やかな場所にしたい」との思いからDJブースとスピーカーを導入し、尾道唯一のクラブとして地元のミュージシャンやアーティストに場所を提供しながら、定期的に音楽イベントや展示会などが開催される尾道随一のディープスポット。</p>
									</div>
								</div>
							</div><!-- item_box -->
							<div class="item_box slick-slide">
								<div class="img_wrap">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/spot03.jpg">
								</div>
								<div class="txt_wrap">
									<div class="title_wrap">
										<span class="num">3</span>
										<h4 class="spot_name">やきとり 鳥徳</h4>
									</div>
									<div class="description">
										<p>鹿児島出身の熱狂的阪神ファン(?)堀田さんが店主を務める九州地鶏と焼酎の美味しいお店。長らく地元の人に長く愛されたお店が閉店の危機に直面した際に、ゲストハウス「SHIMA INN」を経営していた堀田さんがお店をそのまま引き継ぎ、「ゲストハウスのフロント兼焼き鳥屋」の形態で2018年にリニューアルオープン。</p>
									</div>
								</div>
							</div><!-- item_box -->
						</div><!-- slick-slider -->
					</div>
				</div><!-- comp-spot-list -->
			</div><!-- section_inner -->
		</section>
		<section id="booking" class="section-booking">
			<div class="section_inner">
				<div class="booking_flex">
					<div class="txt_wrap">
						<div class="comp-section-title">
							<p class="upper_txt">宿泊施設について</p>
							<h2 class="title"><span>みはらし亭</span></h2>
						</div>
						<div class="address">
							<span class="add_txt">広島県尾道市東土堂町15-7</span>
							<a class="map_link" href="#aaaa">MAP</a>
						</div>
						<div id="guestHouseWrap" class="comp-guesthouse-detail">
							<div id="wrapInner"  class="detail_inner">
								<div id="yadoImageSlider" class="slick-slider">
									<div class="item_box slick-slide">
										<div class="slider_img">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/yado01.jpg">
										</div>
									</div>
									<div class="item_box slick-slide">
										<div class="slider_img">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/yado02.jpg">
										</div>
									</div>
									<div class="item_box slick-slide">
										<div class="slider_img">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/yado03.jpg">
										</div>
									</div>
								</div>
								<div class="yado_detail_txt">
									<h3 class="yado_detail_ttl">尾道を見晴らす、ゲストハウス。</h3>
									<div class="description">
										<p>尾道の坂の上にある築100年の茶園【さえん】（別荘建築）を尾道水道が望めるオープンスペースへとして再生しました。日本遺産にもなった絶景の箱庭的空間を歴史あるお寺や身近な自然とともにお楽しみください。</p>
									</div>
								</div>
							</div>
						</div>
						<div class="facility">
							<span>エレベーターあり</span>
							<span>Wi-Fi</span>
							<span>エアコン</span>
							<span>ハンガー</span>
							<span>ヘアドライヤー</span>
							<span>キッチン</span>
							<span>無料駐車場</span>
							<span>暖房</span>
						</div>
						<div class="comp-booking-button">
							<button><span>プランを予約する</span></button>
						</div>
					</div>
					<div id="heightAdjust" class="height_adjust"></div>
				</div><!-- booking_flex -->
			</div><!-- section_inner -->
		</section>
		<section id="detail03" class="section-detail03">
			<div class="section_inner">
				<div class="detail_flex">
					<div class="flex_left">
						<div class="comp-section-title">
							<p class="upper_txt">旅程・レビュー・よくある質問など</p>
							<h2 class="title"><span>プラン詳細</span></h2>
						</div>
						<div class="comp-time-shcedule">
							<h3 class="detail_ttl">旅程について</h3>
							<div id="dayShifter" class="day_shifter">
								<button>1日目</button>
								<button>2日目</button>
								<button>3日目</button>
							</div>
							<div class="shcedule_wrap">
								<div id="day1" class="schedule_inner">
									<div class="schedule_item">
										<div class="title_wrap">
											<span class="time">AM10:00ごろ</span>
											<h4 class="title">尾道駅に到着・ヤドカリにチェックイン</h4>
										</div>
										<div class="description">
											<p><span>尾道駅でカギビトと合流し、ゲストハウス「ヤドカリ」までご案内いたします。</span><span>カフェで一息つきながら、チェックインの手続きや荷物の整理を進めましょう！</span></p>
										</div>
									</div>
									<div class="schedule_item">
										<div class="title_wrap">
											<span class="time">AM12:00ごろ</span>
											<h4 class="title">オノミチシェアにドロップイン</h4>
										</div>
										<div class="description">
											<p>シェアオフィス「オノミチシェア」にドロップインをします。10:00~19:00までの時間のオフィス使用料はプラン料金の中に含まれています。深夜帯まで利用したい場合は、直接オフィスの係員の方にご相談ください！</p>
										</div>
									</div>
									<div class="yahoku_item">
										<p class="yohaku_txt">お仕事頑張ってください！</p>
									</div>
									<div class="schedule_item">
										<div class="title_wrap">
											<span class="time">PM17:00ごろ</span>
											<h4 class="title">カギビトと合流・飲屋街「新開地区」へ</h4>
										</div>
										<div class="description">
											<p>シェアオフィス「オノミチシェア」にドロップインをします。10:00~19:00までの時間のオフィス使用料はプラン料金の中に含まれています。深夜帯まで利用したい場合は、直接オフィスの係員の方にご相談ください！</p>
										</div>
									</div>
									<div class="schedule_item">
										<div class="title_wrap">
											<span class="time">PM22:00ごろ</span>
											<h4 class="title">カギビトは朝が早いので帰ります！</h4>
										</div>
										<div class="description">
											<p>シェアオフィス「オノミチシェア」にドロップインをします。10:00~19:00までの時間のオフィス使用料はプラン料金の中に含まれています。深夜帯まで利用したい場合は、直接オフィスの係員の方にご相談ください！</p>
										</div>
									</div>
									<div class="yahoku_item">
										<p class="yohaku_txt">素敵な尾道の夜を！</p>
									</div>
									<div class="schedule_item">
										<div class="title_wrap">
											<span class="time">??:??ごろ</span>
											<h4 class="title">ゲストハウスに帰宅・就寝</h4>
										</div>
									</div>
								</div><!-- schedule_inner -->
							</div><!-- shcedule_wrap -->
						</div>
						<div class="comp-trip-review">
							<h3 class="detail_ttl">旅人の声</h3>
							<div class="review_wrap">
								<div class="review_item">
									<a href="#aaaa" class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/common/default_icon.png);"></a>
									<div class="review_content">
										<a class="user_name" href="#aaaa"><span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/common/default_icon.png);"></span><span class="name">skmzk418さん</span></a>
										<p class="review">はじめてにも関わらず、丁寧に収穫の方法を教えてもらいました。単なる体験ではなく、それに携わる人の思いもお聴きすることができ、現地に出向かないと分からない空気感も感じることができました。</p>
									</div>
								</div>
								<div class="review_item">
									<a href="#aaaa" class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/common/default_icon.png);"></a>
									<div class="review_content">
										<a class="user_name" href="#aaaa"><span class="icon" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/common/default_icon.png);"></span><span class="name">aiueo123さん</span></a>
										<p class="review">体験の合間にコダテルで仕事をさせてもらったのですが、普通のコワーキングスペースとは違い、すぐ近くで会員さん同士でディスカッションがはじまり、興味津々。気づいたら自分もその話の輪に入って盛り上がってしまいました。自分自身の企てもシェアでき、気づきももらいました。ありがとうございました！</p>
									</div>
								</div>
							</div><!-- review_wrap -->
						</div><!-- comp-trip-review -->
						<div class="comp-trip-faq">
							<h3 class="detail_ttl">よくある質問</h3>
							<div id="faqToggle" class="faq_wrap">
								<div class="qa_item">
									<button class="qa_button">
										<span>滞在中は、コダテルのコワーキングスペースや備品等も使えますか？</span>
									</button>
									<div class="qa_contents">
										<p>長時間に渡らない限りは基本的に無料です。ただし、KAGIBITOの予定もありますので、あらかじめ空いている時間を尋ねていただけるとスムーズです。</p>
									</div>
								</div>
								<div class="qa_item">
									<button class="qa_button">
										<span>KAGIBITOに企ての相談をする場合、お金は別途必要でしょうか？</span>
									</button>
									<div class="qa_contents">
										<p>長時間に渡らない限りは基本的に無料です。ただし、KAGIBITOの予定もありますので、あらかじめ空いている時間を尋ねていただけるとスムーズです。</p>
									</div>
								</div>
							</div><!-- faq_wrap -->
						</div><!-- comp-trip-faq -->
						<div class="trip_detail">
							<h3 class="detail_ttl">プランの基本情報</h3>
							<div class="comp-chart-layout">
								<div class="chart_item">
              		<span class="title">開催時期</span>
              		<span class="content">通年（7月〜9月）</span>
            		</div>
								<div class="chart_item">
              		<span class="title">体験料</span>
              		<span class="content">10,000円（宿泊費込）</span>
            		</div>
                <div class="chart_item">
              		<span class="title">最小催行人数</span>
              		<span class="content">1名</span>
            		</div>
								<div class="chart_item">
              		<span class="title">最大催行人数</span>
              		<span class="content">4名</span>
            		</div>
								<div class="chart_item">
              		<span class="title">拠点名</span>
              		<span class="content">コダテル</span>
            		</div>
								<div class="chart_item">
              		<span class="title">住所</span>
              		<span class="content">〒796-0001　愛媛県八幡浜市向灘2187</span>
            		</div>
								<div class="chart_item">
									<span class="title">電話番号</span>
									<span class="content">0894-21-2629</span>
								</div>
								<div class="chart_item">
									<span class="title">移動手段</span>
									<span class="content">松山空港〜ＪＲ八幡浜駅　車で1.5時間／電車で50分<br>その後、ＪＲ八幡浜駅発のバスに乗って10分、勘定公民館前バス停下車、徒歩２分</span>
								</div>
								<div class="chart_item">
									<span class="title">ネット環境</span>
									<span class="content">Wi-Fi有り</span>
								</div>
								<div class="chart_item">
									<span class="title">アメニティ・設備</span>
									<span class="content">ノートパソコン使用に適した仕事スペース/ハンガー/消化器/キッチン/駐車場（２台）/ヘアドライアー/シャワー室/モニター/コーヒーサーバー</span>
								</div>
								<div class="chart_item">
									<span class="title">その他</span>
									<span class="content">・新型コロナウイルス感染症対策有り<br>・キャンセルについて<br>連絡なしの場合…料金の100％<br>当日…料金の100％<br>前日…料金の80％</span>
								</div>
							</div>
						</div><!-- trip_detail -->
					</div><!-- flex_left -->
					<div id="fixedSection" class="detail_fix_section">
						<div class="fix_inner">
							<div class="img_wrap">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/sample/fix_image.jpg">
							</div>
							<div class="txt_wrap">
								<p class="plan_ttl"><span>瀬戸内のアーティスト達と過ごす</span><span>ローカルヒッピーライフ</span></p>
								<div class="terms_wrap">
									<div class="price_wrap">
										<span class="price">11,000円(税込)</span>
										<span class="duration">2泊3日</span>
									</div>
									<div class="term_detail">
										<span class="detail_list">シェアオフィス「オノミチシェア」使用料(10時~18時)はプラン料金の中に含まれています。</span>
										<span class="detail_list">ナイトツアー内での旅人の飲食店は別途自己負担でお願いします。</span>
									</div>
								</div>
							</div>
							<div class="comp-booking-button">
								<button><span>プランを予約する</span></button>
							</div>
						</div>
					</div><!-- detail_fix_section -->
				</div>
			</div><!-- section_inner -->
		</section>
  <?php endwhile; endif; ?>
	<section id="plans" class="section-plans">
		<div class="section_inner">
			<div class="comp-section-title margin button">
				<div class="title_wrap">
					<p class="upper_txt">新しい体験、続々更新中</p>
					<h2 class="title">その他のプランを探す</h2>
				</div>
				<div class="comp-link-button">
					<a href="#aaaa"><span>体験一覧を見る</span></a>
				</div>
			</div><!-- comp-section-title -->
			<div class="comp-plan-list">
				<div class="plan_item">
					<div class="img_wrap">
						<a href="#aaaa" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan01_sp.jpg);">
							<img class="img_pc" src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan01.jpg">
							<!--<img class="img_sp" src="<?php echo get_template_directory_uri();?>/assets/img/plan/plan01_sp.jpg"> -->
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
						<a href="#aaaa" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan02_sp.jpg);">
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
						<a href="#aaaa" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan03_sp.jpg);">
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
						<a href="#aaaa" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan04_sp.jpg);">
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
						<a href="#aaaa" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan05_sp.jpg);">
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
						<a href="#aaaa" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/img/plan/plan06_sp.jpg);">
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
		</div><!-- section_inner -->
	</section>
</article>
<div id="fixedCartButton" class="fixed_cart_button">
	<div class="comp-booking-button">
		<button><span>プランを予約する</span></button>
	</div>
</div>
<?php get_template_part("parts/hummenu");?>
<?php get_template_part("parts/footer");?>
</body>
</html>
