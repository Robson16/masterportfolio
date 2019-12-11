<aside class="sidebar-wrap">
    <div class="sidebar-inner">

        <div class="mb-5">
            <?php get_search_form(); ?>
        </div>

        <div class="mb-5">
            <?php
            if (is_active_sidebar('blog-sidebar-widgets')) {
                dynamic_sidebar('blog-sidebar-widgets');
            }
            ?>
        </div>

    </div>
    <!-- /.sidebar-inner -->
</aside>
<!-- /.sidebar-wrap -->