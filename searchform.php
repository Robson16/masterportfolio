<?php
/**
 * Template for displaying search forms
 * 
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s"><?php _e( 'Search', 'masterportfolio' ) ?></label>
    <br>
    <input
        type="search" 
        id="s" 
        name="s"
        placeholder="<?php _e( 'Search for', 'masterportfolio' ) ?>" 
        value="<?php echo get_search_query(); ?>" 
        aria-label="<?php _e( 'Search term input', 'masterportfolio' ) ?>" 
    />
    <button type="submit">
        <?php _e( 'Go', 'masterportfolio' ) ?>&nbsp;<i class="fas fa-search"></i>
    </button>
</form>