<!doctype html>
<html>
<head>
  <?php
    /*Template Name: サービス紹介ページ */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header underpage">
    <?php get_template_part("parts/header");?>
  </header>
  <article id="service" class="page-service">
    <?php if(have_posts()):while(have_posts()): the_post();?>
      <section class="section-lead">
  			<div class="img_wrap"></div>
  			<div class="section_inner">
  				<div class="comp-section-title center">
  					<div class="title_wrap">
  						<p class="upper_txt">メグリビトについて</p>
  						<h1 class="title">だれかの日常を<span class="indent">、</span>あなたの旅先に<span class="indent">。</span></h1>
  					</div>
  				</div>
  				<div class="lead_txt">
  					<p><span>朝の新鮮な空気に誘われ、早起きして外に出てみる。</span><span>地産野菜の直売所で、地元ならではの食べ方を教わる。</span><span>地元の人に引っ張られて、お祭りに飛び入り参加する。</span></p>
  					<p><span>そんな偶発的な出会い、自然に生まれる会話こそ、メグリビトが大切にしている旅の魅力。</span><span>その土地を知りつくす人が案内する旅は何気ない日常にある、ありのままの魅力を教えてくれます。</span></p>
  					<p>旅をするほどに、そこに暮らす人々とのつながりが深まり帰りたくなる場所が増えていきます。</p>
  				</div>
  			</div><!-- section_inner -->
  		</section>
  		<section class="section-concept">
  			<div class="section_inner">
  				<div class="comp-section-title margin">
  					<div class="title_wrap">
  						<p class="upper_txt">メグリビトのコンセプト</p>
  						<h2 class="title">メグリビトが提供する新しい形の旅</span></h2>
  					</div>
  				</div>
  				<div class="comp-service-concept">
  					<div class="concept_item">
  						<div class="img_wrap">
  							<img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_img01.jpg">
  						</div>
  						<div class="txt_wrap">
  							<div class="title_wrap">
  								<span class="mini_ttl">深く色濃い体験</span>
  								<h3 class="concept_ttl">地域の日常の中に、心動かされる体験がある。</h3>
  							</div>
  							<div class="description">
  								<p>地元の人にとっては当たり前の日常が、旅人にとっては非日常的で魅力的な旅のプランになります。その場所、その季節でしか出会えない体験を通じて、地域の魅力をありのままに感じられます。</p>
  							</div>
  						</div>
  					</div><!-- concept_item -->
  					<div class="concept_item">
  						<div class="img_wrap">
  							<img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_img02.jpg">
  						</div>
  						<div class="txt_wrap">
  							<div class="title_wrap">
  								<span class="mini_ttl">地元民によるガイド</span>
  								<h3 class="concept_ttl">地元に根ざす人に導かれ、普段出会いない人や場所へ。</h3>
  							</div>
  							<div class="description">
  								<p>メグリビトの旅は、地域を深く知り、地域のネットワークを持つ地元民とつながることからスタート。旅行者だけではなかなか触れられない体験、参加できないコミュニティへ、カギビトのガイドでお連れします。</p>
  							</div>
  						</div>
  					</div><!-- concept_item -->
  					<div class="concept_item">
  						<div class="img_wrap">
  							<img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_img03.jpg">
  						</div>
  						<div class="txt_wrap">
  							<div class="title_wrap">
  								<span class="mini_ttl">人をつなぐ“余白”</span>
  								<h3 class="concept_ttl">偶然の出会い、何気ない会話が、人と人の関係を深めていく。</h3>
  							</div>
  							<div class="description">
  								<p>メグリビトが大切にしているのは、体験の合間にある 余白 の時間。カギビトやその土地の人があなたに合わせて地域の魅力をご紹介。偶発的な出会いや会話を生み、人と人の関係を自然に深めていきます。</p>
  							</div>
  						</div>
  					</div><!-- concept_item -->
  				</div><!-- comp-service-concept -->
  			</div><!-- section_inner -->
  		</section>
  		<section class="section-character">
  			<div class="section_inner">
  				<div class="comp-section-title margin center">
  					<div class="title_wrap">
  						<p class="upper_txt">登場するユーザー</p>
  						<h2 class="title">旅と体験を”巡る人”</span></h2>
  					</div>
  				</div>
  				<div class="comp-character-wrap">
  					<div id="characterSlider" class="slick-slider">
  						<div class="item_box slick-slide">
  							<div class="img_wrap">
  								<img src="<?php echo get_template_directory_uri();?>/assets/img/service/character_tabibito.jpg">
  							</div>
  							<div class="txt_wrap">
  								<div class="title_wrap">
  									<h3 class="name">タビビト</h3>
  									<span class="name_added">(旅人・TABIBITO)</span>
  								</div>
  								<div class="description">
  									<p>いわゆるユーザー。その地域に根ざす人同士の繋がりに興味を持ち、地域ならではの「体験」や「人」に会いに行く旅行客。単なるパッケージツアーではなく、人を介在して地域のディープな世界に飛び込んで見たい人。</p>
  								</div>
  							</div>
  						</div><!-- item_box -->
  						<div class="item_box slick-slide">
  							<div class="img_wrap">
  								<img src="<?php echo get_template_directory_uri();?>/assets/img/service/character_kagibito.jpg">
  							</div>
  							<div class="txt_wrap">
  								<div class="title_wrap">
  									<h3 class="name">カギビト</h3>
  									<span class="name_added">(鍵人・KAGIBITO)</span>
  								</div>
  								<div class="description">
  									<p>ゲストハウスのオーナーや旅館の女将、コワーキングスペースの管理人など、地域に根ざした空間を運営している人。地元民やローカルコミュニティにタビビトを連れて行ってくれる。</p>
  								</div>
  							</div>
  						</div><!-- item_box -->
  						<div class="item_box slick-slide">
  							<div class="img_wrap">
  								<img src="<?php echo get_template_directory_uri();?>/assets/img/service/character_jimotobito.jpg">
  							</div>
  							<div class="txt_wrap">
  								<div class="title_wrap">
  									<h3 class="name">ジモトビト</h3>
  									<span class="name_added"> (地元人・JIMOTOBITO)</span>
  								</div>
  								<div class="description">
  									<p>タビビトを受け入れ、地域ならではの体験を提供してくれる地元民。その街で、自分の仕事場や自分の好きなものを紹介してくれます。</p>
  								</div>
  							</div>
  						</div><!-- item_box -->
  					</div><!-- slick-slider -->
  				</div>
  			</div><!-- section_inner -->
  		</section>
  		<section class="section-message">
  			<div class="section_inner">
  				<div class="comp-section-title margin">
  					<div class="title_wrap">
  						<p class="upper_txt">メッセージ</p>
  						<h2 class="title">メグリビトが目指す<span>循環モデル</span></h2>
  					</div>
  				</div>
  			</div><!-- section_inner -->
  			<div class="comp-circulation-model">
  				<div class="simply-scroll simply-scroll-container">
  					<div class="simply-scroll-clip">
  						<div class="simply-scroll-list">
  							<ul>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle01.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">01</span>
  										<h3 class="ttl">地域に来てくれる旅行客を増やす</h3>
  									</div>
  								</li>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle02.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">02</span>
  										<h3 class="ttl">旅行客と地元の人との接点を増やす</h3>
  									</div>
  								</li>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle03.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">03</span>
  										<h3 class="ttl">地域と人との心的なつながりを増やす</h3>
  									</div>
  								</li>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle04.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">04</span>
  										<h3 class="ttl">災害などの非常時に助け合う</h3>
  									</div>
  								</li>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle05.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">05</span>
  										<h3 class="ttl">すばやく復興して輝きを取り戻す</h3>
  									</div>
  								</li>
  							</ul>
  							<ul>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle01.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">01</span>
  										<h3 class="ttl">地域に来てくれる旅行客を増やす</h3>
  									</div>
  								</li>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle02.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">02</span>
  										<h3 class="ttl">旅行客と地元の人との接点を増やす</h3>
  									</div>
  								</li>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle03.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">03</span>
  										<h3 class="ttl">地域と人との心的なつながりを増やす</h3>
  									</div>
  								</li>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle04.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">04</span>
  										<h3 class="ttl">災害などの非常時に助け合う</h3>
  									</div>
  								</li>
  								<li>
  									<div class="img_wrap">
  										<img src="<?php echo get_template_directory_uri();?>/assets/img/service/circle05.jpg">
  									</div>
  									<div class="txt_wrap">
  										<span class="num">05</span>
  										<h3 class="ttl">すばやく復興して輝きを取り戻す</h3>
  									</div>
  								</li>
  							</ul>
  						</div>
  					</div>
  				</div>
  			</div><!-- comp-circulation-model -->
  			<div class="flex_txt_wrap section_inner">
  				<div class="txt_section">
  					<p>巡り合う「感動」が、思い巡らせる「安心」に変わる社会。これが、MEGURIBITOの目指す世界です。 旅を通じた心に残る体験やコミュニティの先には、巡り会う人と分かち合う「感動」が待っています。そして、その「感動」は顔の見える関係を築き、お互いに思いを巡らせ、気づかい合える「安心」に変わります。</p>
  					<p>これまで愛媛県八幡浜市において、地域活性化に取り組んできた私たち。地域内外の人が出会い、ご縁が生まれ、仲間が広がる経験を何度もしました。旅をきっかけに定住した人もいます。</p>
  					<p>旅が持つワクワク感や、地域に愛着を持つ人との出会いは、ときに人生を変えるほどのチカラを生むのです。そして、人と人のつながりは、災害時に助け合える土壌を築くことにもなります。</p>
  				</div>
  				<div class="txt_section">
  					<p>愛媛県も被害にあった⻄日本豪雨の際、日頃から地域内外のネットワークを築けていた地域ほど復興が早かったと聞きます。</p>
  					<p>今の時代、情報はいくらでも手に入り、いろいろな地域へスピーディーに行くことができます。しかし、旅をする人と地域に根付く人が出会い、深い関係を築くことは容易ではありません。</p>
  					<p>だからこそ、旅のチカラをもっと活かしたい。<br>旅人が巡った地域に愛着を持ち、地域の関係人口が増え、地域内外に開かれた信頼のネットワークが広がっていく。旅をする人も、迎える地域の人も心から楽しみながら、そんな社会を実現できると信じています。</p>
  				</div>
  			</div><!-- flex_txt_wrap -->
  		</section>
    <?php endwhile; endif; ?>
	</article>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
