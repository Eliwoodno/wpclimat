<?php
          $args =  array(
            'cat' => get_queried_object()->term_id,
            'post_per_page' => 3,
            'paged' => $pagination
          );
          $the_query = new WP_Query( $args );
          if($the_query-> have_posts())
          {
            while($the_query-> have_posts())
            {
              $the_query-> the_post();
      ?>
      <div class="featured-article">
          <a href="<?php the_permalink() ?>">
            <div class="article-thumbnail-wrapper">
              <?php the_post_thumbnail( 'article-preview_thumb', array(
              'class' => "article-thumbnail",'alt' => get_the_title() ) ); ?>
            </div>    
            <div class="articles-content-preview">    
              <h4><?php the_title() ?></h4>
              <p><?php the_field('accroche') ?></p>
            </div>
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