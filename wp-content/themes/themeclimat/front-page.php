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
      <?php
          $args =  array(
            'posts_per_page' => 4
          );
          $the_query = new WP_Query( $args );
          if($the_query-> have_posts())
          {
            while($the_query-> have_posts())
            {
              $the_query-> the_post();
      ?>
      <div>
        <a href="<?php the_permalink() ?>">
          <?php the_post_thumbnail( 'article-preview_thumb', array(
            'class' => "article-thumbnail",'alt' => get_the_title() ) ); ?>
          <h4><?php the_title() ?></h4>
          <p><?php the_field('accroche') ?></p>
        </a>
      </div>
      <?php
          }

        }
        else{
          echo __( "No articles :'(", 'themeclimat' );
        }
        wp_reset_postdata();

      ?>
      <div class="style:order2; visibilty:none;"></div>
      
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
          <?php the_post_thumbnail( 'ong_thumb', array(
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