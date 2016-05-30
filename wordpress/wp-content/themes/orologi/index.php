<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="page" role="main">
   <div class="row bloc">
     <div class="small-12 large-4 columns">
       <div class="bloc-center zoom">
         <a href="http://localhost/www.orologi.fr/wordpress/index.php/marque/">
         <img src="<?= _URL_IMAGES; ?>/_bloc/bloc1.jpg" alt=""/>
         <div class="in">
           <h2>marques<hr></h2>
         </div>
         </a>
       </div>
     </div>
     <div class="small-12 large-4 columns">
       <div class="bloc-center zoom">
         <a href="http://localhost/www.orologi.fr/wordpress/index.php/nouveautes/">
         <img src="<?= _URL_IMAGES; ?>/_bloc/bloc2.jpg" alt=""/>
         <div class="in">
           <h2>nouveautés<hr></h2>
         </div>
       </a>
       </div>
     </div>
     <div class="small-12 large-4 columns">
       <div class="bloc-center zoom">
         <a href="http://localhost/www.orologi.fr/wordpress/index.php/type-de-montre/">
         <img src="<?= _URL_IMAGES; ?>/_bloc/bloc3.jpg" alt=""/>
         <div class="in">
           <h2>montres<hr></h2>
         </div>
       </a>
       </div>
     </div>
   </div>
 </div>
	 <article class="gris">
		<section class="widow">
	   <div class="row">
	     <div class="small-12 large-12 columns">
	       <h1>Nouveautés</h1>

	     </div>
	   </div>
	   <div class="row">
       <!-- debut loop -->
    <?php
      $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
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
              <div class="etoile">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p><?php the_title(); ?></p>
              <p><i class="fa fa-check" aria-hidden="true" style="margin-right:10px"></i>Excellent état</p>
              <p><i class="fa fa-check" aria-hidden="true" style="margin-right:10px"></i>Disponible</p>
              <!--<a href="#1" class="expanded button btndetail">Voir plus</a>-->
              <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
            </div>

        </div>
      </div>

       <?php endwhile; ?>
       <?php wp_reset_query(); ?>

	     <!--<div class="small-12 columns owl-carousel visuel" id="owl-carousel1">
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	       <div class="item"><img src="<?= _URL_IMAGES; ?>/_montre/pour_slide.jpg" alt=""/></div>
	     </div>-->
	   </div>
	 </section>

   <section class="widow">
     <div class="row">
       <div class="small-12 large-12 columns">
         <h1>Recommandation</h1>
         <hr>
       </div>
     </div>
       <div class="row ">

         <div class="small-12 large-8 columns visuel owl-carousel " id="owl-carousel">
           <div class="item" data-hash="1">
             <div class="large-6 small-6 columns visu_one">
               <div class="visu">
                 <img src="<?= _URL_IMAGES; ?>/_montre/visu.jpg" alt=""/>
               </div>
             </div>
             <div class="large-6 small-6 columns texte">
               <h2>Apple Watch jaune n°1</h2>
               <ul>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
               </ul>
               <a href="#" class="button large-12 small-12 hvr-reveal">En savoir plus</a>
               <a href="#" class="button large-12 small-12 hvr-reveal">Ajouter au panier</a>
             </div>
           </div>
           <div class="item" data-hash="2">
             <div class="large-6 small-6 columns visu_one">
               <div class="visu">
                 <img src="<?= _URL_IMAGES; ?>/_montre/visu.jpg" alt=""/>
               </div>
             </div>
             <div class="large-6 small-6 columns texte">
               <h2>Apple Watch jaune n°2</h2>
               <ul>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
               </ul>
               <a href="#" class="button large-12 small-12">En savoir plus</a>
               <a href="#" class="button large-12 small-12">Ajouter au panier</a>
             </div>
           </div>
           <div class="item" data-hash="3">
             <div class="large-6 small-6 columns visu_one">
               <div class="visu">
                 <img src="<?= _URL_IMAGES; ?>/_montre/visu.jpg" alt=""/>
               </div>
             </div>
             <div class="large-6 small-6 columns texte">
               <h2>Apple Watch jaune n°2</h2>
               <ul>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
               </ul>
               <a href="#" class="button large-12 small-12">En savoir plus</a>
               <a href="#" class="button large-12 small-12">Ajouter au panier</a>
             </div>
           </div>
           <div class="item" data-hash="4">
             <div class="large-6 small-6 columns visu_one">
               <div class="visu">
                 <img src="<?= _URL_IMAGES; ?>/_montre/visu.jpg" alt=""/>
               </div>
             </div>
             <div class="large-6 small-6 columns texte">
               <h2>Apple Watch jaune n°2</h2>
               <ul>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
               </ul>
               <a href="#" class="button large-12 small-12">En savoir plus</a>
               <a href="#" class="button large-12 small-12">Ajouter au panier</a>
             </div>
           </div>
         </div>

       <div class="small-12 large-4 columns">
         <div class="row">
           <div class=" large-6 small-6 columns visu_tow">
             <div class="petit_visu">

               <a href="#1">
                 <div class="detail">
                   <div class="etoile">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                   </div>
                   <p>Excellent état</p>
                   <p>Disponible</p>
                   <a href="#1" class="expanded button btndetail">Voir plus</a>
                 </div>
               </a>
               <img src="<?= _URL_IMAGES; ?>/_montre/petit_visu.jpg" alt=""/>
             </div>
           </div>
           <div class=" large-6 small-6 columns visu_tow">
             <div class="petit_visu">

               <a href="#2">
                 <div class="detail">
                   <div class="etoile">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                   </div>
                   <p>Excellent état</p>
                   <p>Disponible</p>
                   <a href="#2" class="expanded button btndetail">Voir plus</a>
                 </div>
               </a>
               <img src="<?= _URL_IMAGES; ?>/_montre/petit_visu.jpg" alt=""/>
             </div>
           </div>
           <div class=" large-6 small-6 columns visu_tow">
             <div class="petit_visu">

               <a href="#3">
                 <div class="detail">
                   <div class="etoile">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                   </div>
                   <p>Excellent état</p>
                   <p>Disponible</p>
                   <a href="#3" class="expanded button btndetail">Voir plus</a>
                 </div>
               </a>
               <img src="<?= _URL_IMAGES; ?>/_montre/petit_visu.jpg" alt=""/>
             </div>
           </div>
           <div class=" large-6 small-6 columns visu_tow">
             <div class="petit_visu">

               <a href="#4">
                 <div class="detail">
                   <div class="etoile">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                   </div>
                   <p>Excellent état</p>
                   <p>Disponible</p>
                   <a href="#4" class="expanded button btndetail">Voir plus</a>
                 </div>
               </a>
               <img src="<?= _URL_IMAGES; ?>/_montre/petit_visu.jpg" alt=""/>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
 </article>

  <div class="marques">
    <div id="page-full-width" role="main">
      <div class="row">
        <div class="small-3 large-3 columns nom-marque">
          <img src="<?= _URL_IMAGES; ?>/_marque/rollex.jpg" alt=""/>
        </div>
        <div class="small-3 large-3 columns nom-marque">
          <img src="<?= _URL_IMAGES; ?>/_marque/rollex.jpg" alt=""/>
        </div>
        <div class="small-3 large-3 columns nom-marque">
          <img src="<?= _URL_IMAGES; ?>/_marque/rollex.jpg" alt=""/>
        </div>
        <div class="small-3 large-3 columns nom-marque">
          <img src="<?= _URL_IMAGES; ?>/_marque/rollex.jpg" alt=""/>
        </div>
      </div>

      <div class="row">
        <div class="large-4 large-offset-4 columns">
          <a href="#" class="large-12 small-12 hvr-reveal2">En voir plus</a>
        </div>
      </div>
    </div>
  </div>






 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>

 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>







<?php get_footer();
