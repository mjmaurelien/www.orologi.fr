<?php
/*
Template Name: Contact
*/

get_header(); ?>


 <?php get_template_part( 'template-parts/featured-image' ); ?>
 <div class="contacttext row">
   <h1>Contactez-nous</h1>
 <p>
   Entrez vos information et votre message dans le formulaire ci-dessous nous vous répondrons dans les plus brefs délais.<br/>(les champs munis d’une * sont obligatoires)
 </p>
 </div>
<div class="contact row">

  <div class="small-12 large-12 columns">
    <?php echo do_shortcode('[contact-form-7 id="84" title="Contact"]') ?>
  </div>

</div>





 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>

 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>







<?php get_footer();
