<?php
/**
 * Title: Content Page Content
 * Slug: the-free-blogger/content-page-content
 * Categories: the-free-blogger
 * Description: Content Page Content
 * Keywords: Content Page Content
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":148,"height":148,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . "/assets/images/portrait.png");?>" alt="" style="width:148px;height:148px" width="148" height="148"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"20px","bottom":"10px","right":"0px","left":"0px"}},"typography":{"fontSize":"40px"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-top:20px;margin-right:0px;margin-bottom:10px;margin-left:0px;font-size:40px"><?php echo esc_html_x( 'Jane Smith', 'the-free-blogger' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><?php echo esc_html_x( 'When everything seems to be going against you, remember that the <br>airplane takes off against the wind, not with it.', 'the-free-blogger' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
<div class="wp-block-columns" style="margin-top:40px"><!-- wp:column {"style":{"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}},"border":{"width":"1px"}},"borderColor":"contrast"} -->
<div class="wp-block-column has-border-color has-contrast-border-color" style="border-width:1px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><!-- wp:image {"width":50,"height":50,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . "/assets/images/email.png");?>" alt="" style="width:50px;height:50px" width="50" height="50"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"15px"}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:15px"><?php echo esc_html_x( 'Jane@example.com', 'the-free-blogger' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}},"border":{"width":"1px"}},"borderColor":"contrast"} -->
<div class="wp-block-column has-border-color has-contrast-border-color" style="border-width:1px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><!-- wp:image {"width":50,"height":50,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . "/assets/images/twitter.png");?>" alt="" style="width:50px;height:50px" width="50" height="50"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"15px"}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:15px"><?php echo esc_html_x( '@Janesmith ', 'the-free-blogger' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}},"border":{"width":"1px"}},"borderColor":"contrast"} -->
<div class="wp-block-column has-border-color has-contrast-border-color" style="border-width:1px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><!-- wp:image {"width":50,"height":50,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . "/assets/images/instagram.png");?>" alt="" style="width:50px;height:50px" width="50" height="50"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"15px"}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:15px"><?php echo esc_html_x( '@wsphotos', 'the-free-blogger' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:50px;padding-bottom:40px"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'My Courses', 'the-free-blogger' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"right":{"color":"var:preset|color|contrast","width":"1px"},"bottom":{"color":"var:preset|color|contrast","width":"2px"},"left":{"color":"var:preset|color|contrast","width":"1px"}},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"},"margin":{"bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-right-color:var(--wp--preset--color--contrast);border-right-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;border-left-color:var(--wp--preset--color--contrast);border-left-width:1px;margin-bottom:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="#"><?php echo esc_html_x( 'Introduction to Digital Art ', 'the-free-blogger' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"right":{"color":"var:preset|color|contrast","width":"1px"},"bottom":{"color":"var:preset|color|contrast","width":"2px"},"left":{"color":"var:preset|color|contrast","width":"1px"}},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"},"margin":{"bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-right-color:var(--wp--preset--color--contrast);border-right-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;border-left-color:var(--wp--preset--color--contrast);border-left-width:1px;margin-bottom:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="#"><?php echo esc_html_x( 'Mastering the Art of Cooking', 'the-free-blogger' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"right":{"color":"var:preset|color|contrast","width":"1px"},"bottom":{"color":"var:preset|color|contrast","width":"2px"},"left":{"color":"var:preset|color|contrast","width":"1px"}},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"},"margin":{"bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-right-color:var(--wp--preset--color--contrast);border-right-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;border-left-color:var(--wp--preset--color--contrast);border-left-width:1px;margin-bottom:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Creative Writing Workshop', 'the-free-blogger' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"right":{"color":"var:preset|color|contrast","width":"1px"},"bottom":{"color":"var:preset|color|contrast","width":"2px"},"left":{"color":"var:preset|color|contrast","width":"1px"}},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"},"margin":{"bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-right-color:var(--wp--preset--color--contrast);border-right-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;border-left-color:var(--wp--preset--color--contrast);border-left-width:1px;margin-bottom:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Photography Essentials', 'the-free-blogger' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"right":{"color":"var:preset|color|contrast","width":"1px"},"bottom":{"color":"var:preset|color|contrast","width":"2px"},"left":{"color":"var:preset|color|contrast","width":"1px"}},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"},"margin":{"bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-right-color:var(--wp--preset--color--contrast);border-right-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;border-left-color:var(--wp--preset--color--contrast);border-left-width:1px;margin-bottom:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Financial Planning 101', 'the-free-blogger' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->