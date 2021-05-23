<!doctype html>
<html>
<head>
  <?php
    /*Template Name: 私たちについてページ */
    get_template_part("parts/head");
  ?>
</head>
<body>
  <header class="comp-header <?php echo SCF::get('headertype', $post->ID);?>">
  <?php get_template_part("parts/header");?>
  </header>
  <?php if(have_posts()):while(have_posts()): the_post();?>
    <article id="about" class="page-about">
      <section class="section-main">
        <div class="img_wrap"></div>
        <div class="section_inner">
    <div class="comp-section-title margin center">
      <div class="title_wrap">
        <p class="upper_txt">メグリビトを作っている組織と人</p>
        <h1 class="title">運営団体について</h1>
      </div>
    </div>
  </div><!-- section_inner -->
</section>
<section class="section-org">
  <div class="section_inner">
    <div class="flex_wrap">
      <div class="txt_wrap">
        <div class="org_name">
          <span class="small">特定非営利活動法人</span>
          <h2 class="name"><span>八幡浜元気プロジェクト</span></h2>
        </div>
        <div class="description">
          <p>私たちは、「八幡浜を元気にすること」を目的に掲げたまちづくりＮＰＯです。私たちが事業・活動を行うだけでなく、</p>
          <div class="comp-number-list">
            <div class="list_item">
              <span class="num">01</span>
              <h3 class="content">様々な主体に地域活動へ参加してもらうこと</h3>
            </div>
            <div class="list_item">
              <span class="num">02</span>
              <h3 class="content">新たな地域活動を起こしてもらうこと</h3>
            </div>
            <div class="list_item">
              <span class="num">03</span>
              <h3 class="content">地域活動を発展的に持続してもらうこと</h3>
            </div>
          </div><!-- comp-number-list -->
          <p>を目指しながら、他地域でも応用できるシクミやプラットフォームづくりを行っています。</p>
          <p>※本サービスは、えひめ伴走型支援助成事業（公益財団法人 共生地域創造財団）の助成を受けて制作しています。</p>
        </div>
        <div class="comp-link-button right sp_wide">
          <a target="_blank" href="https://re-ygp.com"><span>詳細を見る</span></a>
        </div>
      </div>
      <div class="img_wrap">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/about/org.jpg">
      </div>
    </div>
  </div><!-- section_inner -->
</section>
<section class="section-member">
  <div class="section_inner">
    <div class="comp-section-title margin">
      <div class="title_wrap">
        <p class="upper_txt">メグリビトを作っている人々</p>
        <h1 class="title">プロジェクトメンバー</h1>
        <p class="description">
          <span>メンバー紹介・プロダクトに対する想い。</span>
        </p>
      </div>
    </div>
    <div class="comp-project-member">
      <?php
        $repeat_group = SCF::get( 'member' );
        foreach ( $repeat_group as $fields ) {
          $member_img = wp_get_attachment_image_src($fields['member_img'],'thumbnail');
          $member_role = $fields['member_role'];
          $member_name = $fields['member_name'];
          $member_comment = $fields['member_comment'];
        ?>
        <div class="member_item">
          <span class="icon" style="background-image: url(<?php echo $member_img[0];?>)"></span>
          <div class="txt_wrap">
            <div class="name_wrap">
              <span class="position"><?php echo $member_role;?></span>
              <h3 class="name"><?php echo $member_name;?></h3>
            </div>
            <div class="message">
              <p><?php echo $member_comment;?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div><!-- comp-project-member -->
  </div><!-- section_inner -->
</section>
    </article>
  <?php endwhile; endif;?>
  <?php get_template_part("parts/hummenu");?>
  <?php get_template_part("parts/footer");?>
</body>
</html>
