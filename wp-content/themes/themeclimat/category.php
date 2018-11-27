<?php get_header() ?>
<main class="category-page">
<h1><?php echo(get_queried_object()->name) ?></h1>

  <!-- Etudes -->
  <div class="etudes-list">
      <?php
        $args = array(
            'post_type'         => 'etudes',
            'post_status'       => 'publish',
            'tax_query'         => array(
                array(
                    'taxonomy'  => 'continent_etudes',
                    'field'     => 'slug',
                    'terms'     => get_queried_object()->slug
                )
            )
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
            <div>
              <?php the_post_thumbnail( 'etude-preview_thumb', array(
              'class' => "article-thumbnail",'alt' => get_the_title() ) ); ?>
            </div>
          </a> 
            <div> 
              <a href="<?php the_permalink() ?>">   
                <h3><?php the_title() ?></h3>
              </a>  
              <p><?php the_field('accroche') ?></p>
            </div>  
          
      </div>
      <?php
          }

        }
        else{
          echo __( "No studies :'(", 'themeclimat' );
        }
        wp_reset_postdata();
      ?>
      
  </div>

  <!-- Articles -->
  <div class="article-list">
      <?php
          $args =  array(
            'cat' => get_queried_object()->term_id,
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
</main>

<?php get_footer() ?>