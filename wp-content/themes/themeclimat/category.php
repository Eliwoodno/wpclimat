<?php get_header() ?>
<h1><?php echo(get_queried_object()->name) ?></h1>

<?php var_dump(get_queried_object()) ?>

<div>
      <?php
          $args =  array(
            'cat' => get_queried_object()->term_id,
            'posts_per_page' => 3
          );
          $the_query = new WP_Query( $args );
          if($the_query-> have_posts())
          {
            while($the_query-> have_posts())
            {
              $the_query-> the_post();
      ?>
      <div>
          <?php the_post_thumbnail( 'article-preview_thumb', array(
            'class' => "article-thumbnail",'alt' => get_the_title() ) ); ?>
          <h4><?php the_title() ?></h4>
          <p><?php the_field('accroche') ?></p>
      </div>
      <?php
          }

        }
        else{
          echo __( "No articles :'(", 'themeclimat' );
        }
        wp_reset_postdata();
      ?>
</div> 

<?php get_footer() ?>