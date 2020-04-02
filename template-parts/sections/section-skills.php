<?php
/**
 * Template-part for Skills Section
 */
?>

<?php $skills_list = get_theme_mod('setting_skills_list'); ?>
<?php if ($skills_list): ?>
    <?php $skills_bg = get_theme_mod('setting_skills_background'); ?>
    <style>
        #skills {
            color: #FFF;
            background-color: <?php echo $skills_bg['background-color']; ?>;
            background-image: linear-gradient(<?php echo $skills_bg['background-color']; ?>, <?php echo $skills_bg['background-color']; ?>), url(<?php echo $skills_bg['background-image']; ?>); 
            background-repeat: <?php echo $skills_bg['background-repeat']; ?>;
            background-position: <?php echo $skills_bg['background-position']; ?>;
            background-size: <?php echo $skills_bg['background-size']; ?>;
            background-attachment:<?php echo $skills_bg['background-attachment']; ?>;
        }
    </style>
    <section id="skills">
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-12">
                    <hgroup class="text-center mb-4">
                        <h3 class="title title-cursive"><?php echo get_theme_mod('setting_skills_title', 'Skills'); ?></h3>
                        <hr class="sm-line">
                        <h4 class="sub-title"><?php echo get_theme_mod('setting_skills_subtitle', 'What am i best!'); ?></h4>
                    </hgroup>
                </div>
                <!-- /.col -->
                <div class="col-sm-12">
                    <?php foreach ($skills_list as $skill): ?>
                        <div>
                            <h5 class="my-3"><?php echo $skill['skill_name']; ?></h5>
                            <div class="progress progress-square">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="<?php echo $skill['skill_level']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill['skill_level'] . '%'; ?>;"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<?php endif; ?>