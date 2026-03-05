<?php
/**
 * Title: Checkout Header Content
 * Slug: kiosko/checkout-header-content
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Simplified checkout header with logo only.
 */

$logo_url = esc_url( get_template_directory_uri() . '/assets/mockups/logo.png' );
$home_url = esc_url( home_url( '/' ) );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"},"className":"splash-header"} -->
<div class="wp-block-group splash-header" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">
<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">

<!-- wp:image {"width":160,"sizeSlug":"full","className":"splash-logo"} -->
<figure class="wp-block-image size-full is-resized splash-logo"><a href="<?php echo $home_url; ?>"><img src="<?php echo $logo_url; ?>" alt="Hartwork" style="width:160px"/></a></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
