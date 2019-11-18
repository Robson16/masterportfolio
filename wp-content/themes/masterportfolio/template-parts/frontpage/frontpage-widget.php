<section class="bg-light">
    <div class="container py-2 py-lg-5">
        <div class="row flex-column flex-sm-row">

            <?php if (is_active_sidebar('frontpage-widget-one')) : ?> 
                <div class="col my-3">
                    <div class="h-100 bg-white p-3">
                        <?php dynamic_sidebar('frontpage-widget-one'); ?>
                    </div>
                </div>
                <!-- /.col -->
            <?php endif; ?>

            <?php if (is_active_sidebar('frontpage-widget-two')) : ?> 
                <div class="col my-3">
                    <div class="h-100 bg-white p-3">
                        <?php dynamic_sidebar('frontpage-widget-two'); ?>
                    </div>
                </div>
                <!-- /.col -->
            <?php endif; ?>

            <?php if (is_active_sidebar('frontpage-widget-three')) : ?> 
                <div class="col my-3">
                    <div class="h-100 bg-white p-3">
                        <?php dynamic_sidebar('frontpage-widget-three'); ?>
                    </div>
                </div>
                <!-- /.col -->
            <?php endif; ?>

            <?php if (is_active_sidebar('frontpage-widget-four')) : ?> 
                <div class="col my-3">
                    <div class="h-100 bg-white p-3">
                        <?php dynamic_sidebar('frontpage-widget-four'); ?>
                    </div>
                </div>
                <!-- /.col -->
            <?php endif; ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>