<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */

?>
	<p>content-single</p>
	<div class="storefront_single_post_top">
		<?php do_action( 'storefront_single_post_top' );?>
	</div>
	<div class="storefront_single_post">
		<?php do_action( 'storefront_single_post' );?>
	</div>
	<div class="storefront_single_post">
		<?php do_action( 'storefront_single_post' );?>
	</div>
	<div class="storefront_single_post_bottom">
		<?php do_action( 'storefront_single_post_bottom' );?>
	</div>
	<form class="cart" action="<?php the_permalink();?>" method="post" enctype="multipart/form-data">
		<div class="quantity">
			<input type="number" id="quantity_60795153ca8a2" class="input-text qty text" step="1" min="1" max="4" name="quantity" value="1" title="数" size="4" placeholder="" inputmode="numeric">
		</div>
		<button type="submit" name="add-to-cart" value="14" class="single_add_to_cart_button button alt">お買い物カゴに追加</button>
	</form>
