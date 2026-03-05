<?php
/**
 * Title: Default footer
 * Slug: kiosko/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */

declare( strict_types = 1 );

$heart_url = esc_url( get_template_directory_uri() . '/assets/images/heart-icon.png' );
$logo_url  = esc_url( get_template_directory_uri() . '/assets/mockups/logo.png' );
?>

<!-- wp:group {"style":{"color":{"background":"#fbf5f4"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"600px"},"className":"footer-signup"} -->
<div class="wp-block-group footer-signup has-background" style="background-color:#fbf5f4;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:0px;padding-left:var(--wp--preset--spacing--50)">

<!-- wp:image {"width":160,"sizeSlug":"full","align":"center","className":"splash-logo footer-logo"} -->
<figure class="wp-block-image aligncenter size-full is-resized splash-logo footer-logo"><img src="<?php echo $logo_url; ?>" alt="Hartwork" style="width:160px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"1.6rem"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontFamily":"dm-serif-text"} -->
<h2 class="wp-block-heading has-text-align-center has-dm-serif-text-font-family" style="margin-top:var(--wp--preset--spacing--40);font-size:1.6rem;font-style:normal;font-weight:400">Spread Love. Stay connected.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);font-size:0.875rem">Stay connected with Hartwork to get all the latest updates.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<?php echo do_shortcode( '[mailpoet_form id="1"]' ); ?>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#fbf5f4"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"900px"},"className":"footer-nav-bar"} -->
<div class="wp-block-group footer-nav-bar has-background" style="background-color:#fbf5f4;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"footer-nav-row"} -->
<div class="wp-block-group footer-nav-row">

<!-- wp:image {"width":40,"height":40,"sizeSlug":"full","className":"footer-heart-icon"} -->
<figure class="wp-block-image size-full is-resized footer-heart-icon"><img src="<?php echo $heart_url; ?>" alt="Hartwork heart logo" width="40" height="40"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.813rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"className":"footer-links"} -->
<p class="footer-links" style="font-size:0.813rem"><a href="/help">Help</a>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;&nbsp;<a href="/about-us">About Us</a>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;&nbsp;<a href="/contact">Contact</a>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;&nbsp;<a href="/faq">FAQ</a>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;&nbsp;<a href="/returns">Returns</a></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#3b3b3b","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only footer-social-icons"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only footer-social-icons">
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
</ul>
<!-- /wp:social-links -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#fbf5f4"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"},"className":"footer-copyright"} -->
<div class="wp-block-group footer-copyright has-background" style="background-color:#fbf5f4;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"tertiary"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--40)"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<p class="has-text-align-center" style="font-size:0.75rem">© <?php echo date( 'Y' ); ?> Hartwork. All Rights Reserved | <a href="/privacy-policy">Privacy Policy</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
