<?php
global $wp_rewrite;
$wp_rewrite->flush_rules();

add_image_size('fullscreen', 2000, 9999);

add_filter('redirect_canonical','kaiza_disable_redirect_canonical');

// * 自動補完リダイレクト無効化
function kaiza_disable_redirect_canonical( $redirect_url ) {
  if (is_single()){
    $redirect_url = false;
    return $redirect_url;
  }
}

add_theme_support('post-thumbnails');

// * 投稿の本文入力欄を消去
add_action( 'init' , 'my_remove_post_editor_support' );
function my_remove_post_editor_support() {
 remove_post_type_support( 'post', 'editor' );
 remove_post_type_support( 'page', 'editor' );
 remove_post_type_support( 'product', 'editor' );
}

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
   'product',  // カスタム投稿名
   array(
     'labels' => array(
       'name' => __( 'プラン' ), // 管理画面の左メニューに表示されるテキスト
       'singular_name' => __( 'products' ),
       'rewrite' => array('slug' => 'product-post'),
       'rewrite' => array( 'with_front' => false ),
     ),
     'public' => true,  // 投稿タイプをパブリックにするか否か
     'menu_position' => 5,  // 管理画面上でどこに配置するか ※「5」で「投稿」の下に配置
     'has_archive' => true,  // アーカイブを有効にするか否か
     'supports' => array(
       'title',
       'author',
       'custom-fields',
       'thumbnail'
     )
   )
 );
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
     'menu_position' => 6,  // 管理画面上でどこに配置するか ※「5」で「投稿」の下に配置
     'has_archive' => true,  // アーカイブを有効にするか否か
     'supports' => array(
       'title',
       'author',
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
     'menu_position' => 7,  // 管理画面上でどこに配置するか ※「5」で「投稿」の下に配置
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

function call_back($buffer) {
    $buffer = str_replace("https://res.cloudinary.com/meguribito/image/upload/","https://res.cloudinary.com/meguribito/image/upload/c_fit,f_auto,q_auto/",$buffer); //HTML出力で置き換える処理
    return $buffer;
}

function buf_start() { ob_start("call_back"); }
function buf_end() { ob_end_flush(); }

// 通常投稿に親子関係を付ける
function registered_post_hierarchical( $post_type, $post_type_object ) {
 if ( $post_type == 'product' ) {
   $post_type_object->hierarchical = true;
   add_post_type_support( 'product', 'page-attributes' );
 }
}
add_action( 'registered_post_type', 'registered_post_hierarchical', 10, 2 );

function remove_menus() {
  remove_menu_page( 'edit.php' );
  if ( current_user_can( 'administrator' ) ) {
   // 管理者の場合
 } elseif ( current_user_can( 'editor' ) ) {
   // 編集者の場合
 } elseif ( current_user_can( 'author' ) ) {
   remove_menu_page( 'admin.php?page=jetpack' );
   remove_menu_page( 'edit.php?post_type=news' );
   remove_menu_page( 'edit.php?post_type=wc_booking' );
   remove_menu_page( 'upload.php' );
   remove_menu_page( 'profile.php' );
   remove_menu_page( 'edit-comments.php' );
   remove_menu_page( 'users.php' );
   remove_menu_page( 'tools.php' );
 } elseif ( current_user_can( 'contributor' ) ) {
   // 寄稿者の場合
 } elseif ( current_user_can( 'subscriber' ) ) {
   // 購読者の場合
 }
}

add_action( 'admin_menu', 'remove_menus', 999 );

//チェックアウト画面のPOSTデータを購入完了画面に持ち越す
function form_post() {
  $url = $_SERVER['REQUEST_URI']
  if(isset($_POST) && strstr($url,'checkout')){
    $form_post = $_POST;
    print_r($form_post);
  }
}

add_shortcode('sc_form_post', 'form_post');

?>
