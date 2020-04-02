<footer class="footer bg-color-four">

    <div class="container py-5">
        <div class="row flex-column flex-sm-row">
            <?php if (is_active_sidebar('footer-column-one')) : ?> 
                <div class="col">
                    <?php dynamic_sidebar('footer-column-one'); ?>
                </div>
                <!-- /.col -->
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-column-two')) : ?> 
                <div class="col">
                    <?php dynamic_sidebar('footer-column-two'); ?>
                </div>
                <!-- /.col -->
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-column-three')) : ?> 
                <div class="col">
                    <?php dynamic_sidebar('footer-column-three'); ?>
                </div>
                <!-- /.col -->
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-column-four')) : ?> 
                <div class="col">
                    <?php dynamic_sidebar('footer-column-four'); ?>
                </div>
                <!-- /.col -->
            <?php endif; ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="bg-color-five">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center font-weight-light py-3 m-0">&copy; Robson H. Rodrigues 2019 Todos os direitos reservados</p>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

</footer>

<?php wp_footer(); ?>

<script>
    WebFont.load({
        google: {
            families: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', 'Gochi+Hand']
        }
    });
</script>

</body>

</html>