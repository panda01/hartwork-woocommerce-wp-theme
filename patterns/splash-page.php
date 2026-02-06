<?php
/**
 * Title: Splash Page
 * Slug: kiosko/splash-page
 * Categories: featured
 * Block Types: core/post-content
 * Description: Full splash/landing page for the Hartwork storefront.
 */

$logo_url    = esc_url( get_template_directory_uri() . '/assets/mockups/logo.png' );
$hero_url    = esc_url( get_template_directory_uri() . '/assets/images/hero-products.jpg' );
$heart_url   = esc_url( get_template_directory_uri() . '/assets/images/heart-icon.png' );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained"},"className":"splash-header"} -->
<div class="wp-block-group splash-header has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">
<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"className":"splash-header-email"} -->
<p class="splash-header-email" style="font-size:0.75rem"><a href="mailto:info@hartwork.life" style="text-decoration:none;color:inherit">info@hartwork.life</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":160,"sizeSlug":"full","className":"splash-logo"} -->
<figure class="wp-block-image size-full is-resized splash-logo"><img src="<?php echo $logo_url; ?>" alt="Hartwork" style="width:160px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"small"} /-->

<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true,"style":{"typography":{"fontSize":"12px"}}} /-->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.15","fontSize":"2.75rem"}},"fontFamily":"dm-serif-text"} -->
<h1 class="wp-block-heading has-text-align-center has-dm-serif-text-font-family" style="font-size:2.75rem;font-style:normal;font-weight:400;line-height:1.15">Spread Love. Do the Hart Work.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40)">Uplifting apparel to help you live with love and lead with heart.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:button {"className":"is-style-outline splash-notify-btn","style":{"border":{"radius":"0px","width":"1px"},"typography":{"fontSize":"0.938rem"},"spacing":{"padding":{"top":"0.6em","bottom":"0.6em","left":"1.5em","right":"1.5em"}}}} -->
<div class="wp-block-button is-style-outline splash-notify-btn" style="font-size:0.938rem"><a class="wp-block-button__link wp-element-button" href="#splash-signup" style="border-width:1px;border-radius:0px;padding-top:0.6em;padding-right:1.5em;padding-bottom:0.6em;padding-left:1.5em">Notify Me &gt;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:image {"align":"wide","sizeSlug":"full","className":"splash-hero-image"} -->
<figure class="wp-block-image alignwide size-full splash-hero-image"><img src="<?php echo $hero_url; ?>" alt="Hartwork apparel collection featuring hoodies and t-shirts"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"color":{"background":"#fbf5f4"}},"layout":{"type":"constrained","contentSize":"620px"},"className":"splash-bottom-section"} -->
<div class="wp-block-group splash-bottom-section has-background" id="splash-signup" style="background-color:#fbf5f4;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"splash-divider"} -->
<div class="wp-block-group splash-divider">
<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"200px"}},"backgroundColor":"tertiary","className":"splash-sep"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background splash-sep"/>
<!-- /wp:separator -->

<!-- wp:image {"width":32,"height":32,"sizeSlug":"full","className":"splash-heart-icon"} -->
<figure class="wp-block-image size-full is-resized splash-heart-icon"><img src="<?php echo $heart_url; ?>" /></figure>
<!-- /wp:image -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"200px"}},"backgroundColor":"tertiary","className":"splash-sep"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background splash-sep"/>
<!-- /wp:separator -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase","fontSize":"0.85rem","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40);font-size:0.85rem;font-style:normal;font-weight:300;letter-spacing:0.2em;text-transform:uppercase">Open your hart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do the hart work.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"1.75rem"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontFamily":"dm-serif-text"} -->
<h2 class="wp-block-heading has-text-align-center has-dm-serif-text-font-family" style="margin-top:var(--wp--preset--spacing--40);font-size:1.75rem;font-style:normal;font-weight:400">Be the First to Know</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontSize":"0.938rem"}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);font-size:0.938rem">Join the Hartwork community and get early access<br>when this hoodie drops.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="splash-email-form" action="#" method="post">
	<div class="splash-email-form-inner">
		<input type="email" name="email" placeholder="Enter your email address" required />
		<button type="submit">Spread the Love</button>
	</div>
</form>
<!-- /wp:html -->

</div>
<!-- /wp:group -->
