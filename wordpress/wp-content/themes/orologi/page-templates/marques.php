<?php
/*
Template Name: Marques
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div role="main">

<?php do_action( 'foundationpress_before_content' ); ?>


<section>
   <div class="row ">


     <?php
       $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 12, 'orderby' =>'date','order' => 'DESC' );
       $loop = new WP_Query( $args );
       while ( $loop->have_posts() ) : $loop->the_post(); global $product;
       $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
       $url = $thumb['0'];
     ?>



       <div class="large-3 small-6 columns visu_tow" style="background:url(<?php echo $url ?>) no-repeat center">
         <div class="petit_visu">

             <div class="detail">
               <p><?php the_title(); ?></p>
               <!--<a href="#1" class="expanded button btndetail2">Voir les montres</a>-->
               <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
             </div>


         </div>
       </div>
     <?php endwhile; ?>
     <?php wp_reset_query(); ?>
</div>
</section>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
