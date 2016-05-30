<?php
/*
Template Name: Univers
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<div class="homme bloc">
  <div class="">
    <div class="bloc-center">
      <img src="<?= _URL_IMAGES; ?>/_fondunivers/fond-homme4.jpg" alt=""/>
      <div class="in">
        <a href=""><h2>Homme</h2></a>
      </div>
    </div>
  </div>
</div>
<section>
   <div class="row">

     <!-- debut loop -->
  <?php
    $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product;
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
    $url = $thumb['0'];
  ?>

    <!-- STYLE ARTICLE -->
    <div class="large-3 small-6 columns visu_tow" style="background:url(<?php echo $url ?>) no-repeat center">
      <div class="petit_visu">

          <div class="detail">
            <div class="etoile">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p><?php the_title(); ?></p>
            <p>Excellent état</p>
            <p>Disponible</p>
            <!--<a href="#1" class="expanded button btndetail">Voir plus</a>-->
            <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
          </div>


      </div>
    </div>
     <?php endwhile; ?>
     <?php wp_reset_query(); ?>
</div>
</section>

<div class="homme bloc">
 <div class="">
   <div class="bloc-center">
     <img src="<?= _URL_IMAGES; ?>/_fondunivers/fond-femme.jpg" alt=""/>
     <div class="in">
       <a href=""><h2>femme</h2></a>
     </div>
   </div>
 </div>
</div>
<section>
   <div class="row">

     <!-- debut loop -->
  <?php
    $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 12, 'orderby' =>'date','order' => 'DESC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product;
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
    $url = $thumb['0'];
  ?>

    <!-- STYLE ARTICLE -->
    <div class="large-3 small-6 columns visu_tow" style="background:url(<?php echo $url ?>) no-repeat center">
      <div class="petit_visu">

          <div class="detail">
            <div class="etoile">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p><?php the_title(); ?></p>
            <p>Excellent état</p>
            <p>Disponible</p>
            <!--<a href="#1" class="expanded button btndetail">Voir plus</a>-->
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
