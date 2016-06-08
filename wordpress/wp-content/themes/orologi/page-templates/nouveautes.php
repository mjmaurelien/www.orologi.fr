<?php
/*
Template Name: Nouveautés
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div role="main">

<?php do_action( 'foundationpress_before_content' ); ?>


<section class="widow">
  <header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>
   <div class="row">
     <!-- debut loop -->
  <?php
    $args = array( 'post_type' => 'product', 'stock' => 1,  'product_cat' => 'nouveautés ', 'posts_per_page' => 16, 'orderby' =>'date','order' => 'DESC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product;
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
    $url = $thumb['0'];
  ?>

    <!-- STYLE ARTICLE -->
    <div class="large-3 small-6 columns visu_tow">
      <div class="petit_visu">
          <div class="full" style="background-image:url(<?php echo $url ?>)"></div>
          <div class="detail">
            <p><?php the_title(); ?></p>
            <p>Excellent état</p>
            <p>Disponible</p>
            <!--<a href="#1" class="expanded button btndetail">Voir plus</a>-->
            <a href="<?php the_permalink() ?>" class="button large-12 small-12 hvr-reveal">En savoir plus</a>
          <!--  <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>-->
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
