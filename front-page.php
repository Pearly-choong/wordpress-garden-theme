<?php get_header('secondary'); ?>

<div class="container row">
    <div class="col-lg-9">
        <h1 class="title"><?php the_title(); ?></h1>
        <?php get_template_part('includes/section','content'); ?>
    </div>
    <div class="col-lg-3 widget">
      <?php if(is_active_sidebar('page-sidebar')) :?>
        <?php dynamic_sidebar('page-sidebar'); ?>
      <?php endif; ?>
    </div>
</div>


<?php get_footer('secondary'); ?>