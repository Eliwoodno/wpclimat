<?php get_header() ?>
<main class="single-page">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <div class="thumbnail">
     <?php the_post_thumbnail();?>
   </div>
   <h2 class="title">
     <?php the_title(); ?>
   </h2>
   <div class="content">
     <?php the_content(); ?>
   </div>

  <?php endwhile; ?>
  <?php endif; ?>
  
  <div class="associated-ongs">
  <h3>Ces associations agissent pour cette cause.</h3>  
   <?php
    $ongs = get_field('ongs');
    foreach($ongs as $ong): ?>
        <div>
          <a href="<?php echo get_field('lien_don', $ong->ID); ?>">
            <?php echo get_the_post_thumbnail( $ong->ID, 'ong_thumb', array('class' => "ong-logo") ); ?>
          <p><?php echo $ong->post_title; ?><p>
        </a>
        </div>
        
     <?php  endforeach; ?>   
   </div> 

     
    
</main>
<?php get_footer() ?>