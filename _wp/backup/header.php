<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<?php
if ( is_home() || is_front_page() ) {
	$site_title = 'Meguribito(メグリビト) | その時間を結ぶ「人」に巡り会えるサービス';
	$site_permalink = home_url( '/' );
	$thumnail = get_template_directory_uri().'/assets/img/ogp/ogp.jpg';
	$description = "メグリビトは、普段出会うことのできない地域の体験やコミュニティに、拠点やそこに根ざす人を通じて出会うことのできるサービスです。パッケージ化されたツアーではなく、もっとその地域ならではの場所・人・体験に触れながら旅をする。そして日本全国に帰りたい場所が増えていく体験を提供します。";
}else if( is_404()){
	$site_title = 'ページがみつかりませんでした。';
	$site_permalink = get_the_permalink();
	$thumnail = get_template_directory_uri().'/assets/img/ogp/ogp.jpg';
	$description = "メグリビトは、普段出会うことのできない地域の体験やコミュニティに、拠点やそこに根ざす人を通じて出会うことのできるサービスです。パッケージ化されたツアーではなく、もっとその地域ならではの場所・人・体験に触れながら旅をする。そして日本全国に帰りたい場所が増えていく体験を提供します。";
} else if( is_category() || is_archive() ){
	$page_title = single_cat_title("", false).' | Meguribito(メグリビト)';
	$site_title = single_cat_title("", false).' | Meguribito(メグリビト)';
	$thumnail = get_template_directory_uri().'/assets/img/ogp/ogp.jpg';
	$site_permalink = get_the_permalink();
	$description = single_cat_title("", false).'に関する作品一覧';
} else if( is_single() || is_page() ) {
	$site_title = SCF::get('post_title', $post->ID).' | Meguribito(メグリビト)';
	$site_permalink = get_the_permalink($post->ID);
	$thumnail = get_the_post_thumbnail_url( $post->ID, 'large' );
	$description = SCF::get( 'post_desc', $post->ID );
}else{
	$page_title = 'Meguribito(メグリビト) | その時間を結ぶ「人」に巡り会えるサービス';
	$site_title = 'Meguribito(メグリビト) | その時間を結ぶ「人」に巡り会えるサービス';
	$site_permalink = get_the_permalink();
	$description = "メグリビトは、普段出会うことのできない地域の体験やコミュニティに、拠点やそこに根ざす人を通じて出会うことのできるサービスです。パッケージ化されたツアーではなく、もっとその地域ならではの場所・人・体験に触れながら旅をする。そして日本全国に帰りたい場所が増えていく体験を提供します。";
	$thumbnail_id = get_post_thumbnail_id($post->ID);
	$site_image_attach = wp_get_attachment_image_src( $thumbnail_id, 'large' );
	if (!empty($site_image_attach)) {
		$site_image = $site_image_attach[0];
	}
}

	if (empty($description)) {
		$description = "メグリビトは、普段出会うことのできない地域の体験やコミュニティに、拠点やそこに根ざす人を通じて出会うことのできるサービスです。パッケージ化されたツアーではなく、もっとその地域ならではの場所・人・体験に触れながら旅をする。そして日本全国に帰りたい場所が増えていく体験を提供します。";
	}
	$site_image = "";

?>
<title><?php echo $site_title; ?></title>
<meta property="og:title" content="<?php echo $site_title; ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?php echo $site_permalink; ?>">
<meta property="og:image" content="<?php echo $thumnail; ?>">
<meta name="description" content="<?php echo $description; ?>">
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="article">
<meta property="og:title" content="<?php echo $site_title; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:site_name" content="Meguribito">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="<?php echo $description; ?>">
<meta name="twitter:title" content="<?php echo $site_title; ?>">
<meta name="twitter:image" content="<?php echo $thumnail; ?>">
<link href="<?php echo get_template_directory_uri();?>/assets/img/icon/icon.png" rel="apple-touch-icon" sizes="180x180">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/icon/icon.png">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css?<?php echo date('Ymd-Hi');?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/slick/slick.css">
	<script type="text/javascript" src="https://webfont.fontplus.jp/accessor/script/fontplus.js?QQ69TeiJCsk%3D&box=dFsrremOrPA%3D&aa=1&ab=2" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/layout.js?<?php echo date('Ymd-Hi');?>"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' );
		?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
