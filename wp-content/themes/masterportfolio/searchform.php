<?php
/**
 * Template for displaying search forms
 * 
 */
?>
<div class="border border-thick border-color-three p-3">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">

        <div class="form-group">
            <label for="s" class="h2 title-cursive text-uppercase text-center"><?php _e('Search', 'masterportfolio') ?></label>
            <input type="search" 
                   id="s" 
                   name="s" 
                   class="form-control rounded-0 border-top-0 border-right-0 border-left-0 border-thick border-color-three" 
                   placeholder="<?php _e('Search for', 'masterportfolio') ?>" 
                   value="<?php echo get_search_query(); ?>" 
                   aria-label="<?php _e('Search term input', 'masterportfolio') ?>" />
        </div>
        <!--/.form-group-->

        <button type="submit" class="btn btn-outline d-block mx-auto">
            <?php _e('Go', 'masterportfolio') ?>&nbsp;<i class="fas fa-search"></i>
        </button>

    </form>
</div>