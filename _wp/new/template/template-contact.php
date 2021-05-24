<!doctype html>
<html>
<head>
  <?php
    /*Template Name: お問い合わせページ */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header <?php echo SCF::get('headertype', $post->ID);?>">
  <?php get_template_part("parts/header");?>
  </header>
  <?php if(have_posts()):while(have_posts()): the_post();?>
    <article id="contact" class="page-contact">
  		<section class="section-lead comp-underpage-lead">
  			<div class="section_inner">
  				<div class="txt_wrap" style="text-align: center;">
  					<h1 class="page_ttl">お問い合わせ</h1>
  					<p class="description"><span>プラン掲載やライター・カメラマンの</span>応募はこちらから。</p>
  				</div>
  			</div><!-- section_inner -->
  		</section>
  		<section class="section-contact">
  			<div class="section_inner">
  				<div id="formWrap" class="comp-form-wrap">
  					<div class="form_item">
  						<div class="form_ttl">
  							<span class="content">お問い合わせの目的</span>
  							<span class="required">[必須]</span>
  						</div>
  						<div class="form_input">
  							<select name="category">
  								<option value="" selected="">項目を選択してください</option>
  								<option value="プラン掲載について">プラン掲載について</option>
  								<option value="ライター・カメラマン募集について">ライター・カメラマン募集について</option>
  								<option value="取材などについて">取材などについて</option>
  								<option value="その他">その他</option>
  							</select>
  						</div>
  					</div><!-- form_item -->
  					<div class="form_item">
  						<div class="form_ttl">
  							<span class="content">お名前</span>
  							<span class="required">[必須]</span>
  						</div>
  						<div class="form_input">
  							<input type="text" name="username" placeholder="">
  						</div>
  					</div><!-- form_item -->
  					<div class="form_item">
  						<div class="form_ttl">
  							<span class="content">所属・会社名</span>
  							<span class="required">[任意]</span>
  						</div>
  						<div class="form_input">
  							<input type="text" name="companyname" placeholder="">
  						</div>
  					</div><!-- form_item -->
  					<div class="form_item">
  						<div class="form_ttl">
  							<span class="content">メールアドレス</span>
  							<span class="required">[必須]</span>
  						</div>
  						<div class="form_input">
  							<input type="email" name="usermail">
  						</div>
  					</div><!-- form_item -->
  					<div class="form_item">
  						<div class="form_ttl">
  							<span class="content">お問い合わせ内容</span>
  							<span class="required">[必須]</span>
  						</div>
  						<div class="form_input">
  							<textarea name="content"></textarea>
  						</div>
  					</div><!-- form_item -->
  					<div class="submit_wrap">
  						<div class="privacy_wrap">
  							<label>
                  <div>
  								<input type="checkbox" name="agreement" value="プライバシーポリシーに同意する">
  								<div class="agreement">
  									<span class="wrap">
  											<a href="<?php echo esc_url(home_url('/'));?>privacy">プライバシーポリシー</a><span>に同意する</span>
  									</span>
  								</div>
                </div>
  							</label>
  						</div><!-- privacy_wrap -->
              <div id="ajaxLoader" class="ajax_loader">
                <span class="loading"></span>
              </div>
              <div id="statusMessage" class="status_message hidden"></div>
  						<div id="submitButton" class="submit_button disabled">
  							<input type="button" value="全ての項目を入力ください" disabled="disabled">
  						</div>
  					</div>
  				</div><!-- comp-form-wrap -->
  			</div><!-- section_inner -->
  		</section>
      <div class="comp-text-set" style="opacity:0; height:0px;">
    		<p>全ての項目を入力してください・※項目を選択してください。・※氏名を入力してください。・※メールアドレスをご入力ください。・※メールアドレスの形式をご確認ください・※お問い合わせ内容を入力してください。・※プライバシーポリシーに同意ください。</p>
    	</div>
  	</article>
  <?php endwhile; endif;?>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
