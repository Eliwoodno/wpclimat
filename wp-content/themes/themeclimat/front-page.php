<?php get_header();?>

<main class="front-page">
  <div>
    <h1>LE R&#201CHAUFFEMENT CLIMATIQUE, ÇA TOUCHE D&#201J&#192 L'HUMAIN!</h1>
    <div class="map-container"></div>
    <p>Sélectionnez un point sur la carte<p>
  </div> 
  <div>
    <h3>DERNIERS ARTICLES</h3>   
    <div>
    <!-- INSERT BOUCLE WORDPRESS APPELANT ARTICLES DU PLUS AU 
    MOINS RECENT -->
      <div>
          <img class="article-thumbnail" src="<?php /*CALL ARTICLE THUMBNAIL HERE*/ echo IMAGES_URL . '/placeholder.png' ?>">
          <h4>CALL ARTICLE TITLE HERE</h4>
          <p>Call preview of article here. Lorem ipsum dolor sit, amet consectetur alea jacata est audis aman et confedere sum...</p>
      </div> 
      <div>
          <img class="article-thumbnail" src="<?php echo IMAGES_URL . '/placeholder.png' ?>">
          <h4>CALL ARTICLE TITLE HERE</h4>
          <p>Call preview of article here. Lorem ipsum dolor sit, amet consectetur alea jacata est audis aman et confedere sum...</p>
      </div> 
      <div>
          <img class="article-thumbnail" src="<?php echo IMAGES_URL . '/placeholder.png' ?>">
          <h4>CALL ARTICLE TITLE HERE</h4>
          <p>Call preview of article here. Lorem ipsum dolor sit, amet consectetur alea jacata est audis aman et confedere sum...</p>
      </div> 
        
    </div> 
  </div>    
  <div>
    <h3>ASSOCIATIONS PARTENAIRES</h3>
    <div>
      <?php
        $args =  array(
          'post_type' => 'ong',
          'posts_per_page' => 5
        );
        $the_query = new WP_Query( $args );
        if($the_query-> have_posts())
        {
          while($the_query-> have_posts())
          {
            $the_query-> the_post();
      ?>
      <div>
        <a href="<?php the_field('lien_don') ?>">
          <?php the_post_thumbnail( 'ong-thumb', array(
            'class' => "ong-logo",'alt' => get_the_title() ) ); ?>
          <p><?php the_title() ?><p>
        </a>
      </div>
      <?php
          }

        }
        else{
          echo __( "No ONGs :'(", 'themeclimat' );
        }
        wp_reset_postdata();
      ?>
    </div>    
         
  </div>       
</main>

<?php get_footer();?>