<?php
/**
 * Title: Hidden No Results Content
 * Slug: the-free-blogger/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'the-free-blogger' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'the-free-blogger' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'the-free-blogger' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'the-free-blogger' ); ?>","buttonUseIcon":true} /-->
