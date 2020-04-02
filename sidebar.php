<aside class="sidebar-wrap">
    <div class="sidebar-inner">
        <?php
        if (is_active_sidebar('blog-sidebar-widgets')) {
            dynamic_sidebar('blog-sidebar-widgets');
        }
        ?>
    </div>
    <!-- /.sidebar-inner -->
</aside>
<!-- /.sidebar-wrap -->