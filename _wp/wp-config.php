<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'nokkun1230_wp1' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'nokkun1230_wp1' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'q2mbg3eh8p' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql8011.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AqthF[)..S*>?}6*}X+RAn@>Sl2%dlXfl~siU:|t}-TwN*]upj%~wywdU6Ozp5|:' );
define( 'SECURE_AUTH_KEY',  'Gc_{s;h`CZ}_N4~N;NV;6|jOufbz^12BHy=m.eB4^d{A5lIjUs-1|*#3h%bS/#K8' );
define( 'LOGGED_IN_KEY',    '2t_@s51X`>5g*:uJ,zmD!MY>>Q5#H0z5m}:iV$_ja8tdC>!aof&ZnXc;1zXG/f/B' );
define( 'NONCE_KEY',        '6I{)ExS(9mw`MH?w^g$J#v>-m.,ux1bdrY`[;W[SHHcY/6tB.jf2Kn(_^e+T;A0`' );
define( 'AUTH_SALT',        'RhYi}eT% -A9 v6v>;n6_ROXV{&7G[VF_Z!.DRJ#O>D]`4.O{H49a`f|^Y1G[ufT' );
define( 'SECURE_AUTH_SALT', 'vqHU~nV-)ka^:qISf!p# r~NWfgv^w3G>ws_KE<m42Pp/;j??7E-V<|}5OOpn5zr' );
define( 'LOGGED_IN_SALT',   ',5,PtF@N3l+04%ldBguIts~$9v:GJLzUG mATci%9}Y5M,+Zq@_CK3Z<%3MFhV(*' );
define( 'NONCE_SALT',       '[$5NCu?_q/GPMpF.p]tQ@k30^>5LM; z>V1h~r^&m}A-4y@Fz%}9ouy;G!.Q&R/|' );
define( 'WP_CACHE_KEY_SALT',':xR5urmZY%.UzQ*VOT3%urm*9uAnB1c=cUvBL9w q#d] !fo}G4.qI:hznMGqY(u' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
