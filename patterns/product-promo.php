<?php
/**
 * Title: Product Promo — Open Your Hart
 * Slug: kiosko/product-promo
 * Categories: woocommerce
 * Description: Promotional section encouraging users to shop more styles.
 */

declare( strict_types = 1 );

?>

<!-- wp:group {"style":{"color":{"background":"#fbf5f4"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1100px"},"className":"product-promo-section"} -->
<div class="wp-block-group product-promo-section has-background" style="background-color:#fbf5f4;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}},"verticalAlignment":"center"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">

<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:woocommerce/related-products {"align":"wide"} -->
<div class="wp-block-woocommerce-related-products alignwide"><!-- wp:query {"queryId":10,"query":{"perPage":2,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:woocommerce/product-image {"imageSizing":"cropped","isDescendentOfQueryLoop":true} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:woocommerce/related-products -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.6rem","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}},"fontFamily":"dm-serif-text"} -->
<h2 class="wp-block-heading has-dm-serif-text-font-family" style="font-size:1.6rem;font-style:normal;font-weight:400;line-height:1.3">Open Your Hart.<br>Do the Hart Work.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p style="font-size:0.875rem;margin-top:var(--wp--preset--spacing--40)">Every piece is created to inspire connection, compassion, and courage.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","textDecoration":"underline"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p style="font-size:0.875rem;margin-top:var(--wp--preset--spacing--40);text-decoration:underline"><a href="/shop">Shop More Styles</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->
