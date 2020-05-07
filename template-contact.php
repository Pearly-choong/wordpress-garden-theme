<?php
/*
Template Name: Contact form
*/
?>

<?php get_header('secondary'); ?>


<div class="container">
      <h1> <?php the_title(); ?>   </h1>
      <div class="row">

        <div class="col">
          Contact form goes here

        </div>

        <div class="col">
              <?php get_template_part('includes/section','content'); ?>
        </div>

      </div>



</div>

<?php get_footer('secondary'); ?>