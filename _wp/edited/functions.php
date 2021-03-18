<?php

	global $wp_rewrite;
	$wp_rewrite->flush_rules();
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version'    => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/wordpress-shims.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce            = require 'inc/woocommerce/class-storefront-woocommerce.php';
	$storefront->woocommerce_customizer = require 'inc/woocommerce/class-storefront-woocommerce-customizer.php';

	require 'inc/woocommerce/class-storefront-woocommerce-adjacent-products.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
	require 'inc/woocommerce/storefront-woocommerce-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';
	require 'inc/nux/class-storefront-nux-starter-content.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

 // * 固定ページのみ自動整形機能を無効化
 function disable_page_wpautop() {
   remove_filter( 'the_content', 'wpautop' );
 }
 add_action( 'wp', 'disable_page_wpautop' );
 add_filter( 'wpcf7_validate_email', 'wpcf7_main_validation_filter', 11, 2 );
 add_filter( 'wpcf7_validate_email*', 'wpcf7_main_validation_filter', 11, 2 );

 //カスタム投稿タイプの追加
 add_action( 'init', 'create_post_type' );
 function create_post_type() {
   $customPostSupports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
     'title',  // 記事タイトル,
     'editor',  // 記事本文
     'custom-fields' ,//カスタムフィールド
     'thumbnail',  // アイキャッチ画像*/
   ];
   //カスタム投稿タイプ１（ここから）
   register_post_type(
     'kagibito',  // カスタム投稿名
     array(
       'labels' => array(
         'name' => __( 'カギビト' ), // 管理画面の左メニューに表示されるテキスト
         'singular_name' => __( 'kagibito' ),
         'rewrite' => array('slug' => 'kagibito-post'),
         'rewrite' => array( 'with_front' => false ),
       ),
       'public' => true,  // 投稿タイプをパブリックにするか否か
       'menu_position' => 5,  // 管理画面上でどこに配置するか ※「5」で「投稿」の下に配置
       'has_archive' => true,  // アーカイブを有効にするか否か
       'supports' => array(
         'title',
         'custom-fields',
         'thumbnail'
       )
     )
   );
   register_post_type(
     'news',  // カスタム投稿名
     array(
       'labels' => array(
         'name' => __( 'お知らせ' ), // 管理画面の左メニューに表示されるテキスト
         'singular_name' => __( 'news' ),
         'rewrite' => array('slug' => 'news-post'),
         'rewrite' => array( 'with_front' => false ),
       ),
       'public' => true,  // 投稿タイプをパブリックにするか否か
       'menu_position' => 6,  // 管理画面上でどこに配置するか ※「5」で「投稿」の下に配置
       'has_archive' => true,  // アーカイブを有効にするか否か
       'supports' => $customPostSupports  // 投稿画面でどのmoduleを使うか的な設定
     )
   );
   register_taxonomy(
     'newscat', //タグ名（任意）
     'news', //カスタム投稿名
     array(
       'hierarchical' => true, //タグタイプの指定（階層をもつかどうか？）
       //ダッシュボードに表示させる名前
       'label' => 'お知らせのカテゴリ',
       'public' => true,
       'show_ui' => true,
       'rewrite' => true,
     )
   );
   register_taxonomy(
     'kagibito-place', //タグ名（任意）
     'kagibito', //カスタム投稿名
     array(
       'hierarchical' => true, //タグタイプの指定（階層をもつかどうか？）
       //ダッシュボードに表示させる名前
       'label' => 'カギビトの活動地域',
       'public' => true,
       'show_ui' => true,
       'rewrite' => true,
     )
   );
 }


?>
