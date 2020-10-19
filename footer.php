<footer id="footer">
    <div class="container">
        <div class="footer-widgets">
            <?php if (is_active_sidebar('footer-column-one')) : ?> 
                <div>
                    <?php dynamic_sidebar('footer-column-one'); ?>
                </div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-column-two')) : ?> 
                <div>
                    <?php dynamic_sidebar('footer-column-two'); ?>
                </div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-column-three')) : ?> 
                <div>
                    <?php dynamic_sidebar('footer-column-three'); ?>
                </div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-column-four')) : ?> 
                <div >
                    <?php dynamic_sidebar('footer-column-four'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- /.container -->

    <div class="footer-copyright">
        <div class="container">
            <p>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name') . ' - ' . __( 'All rights reserved.', 'masterportfolio' ); ?></p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>