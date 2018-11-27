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
   
   <?php
    $ongs = get_field('ongs');
    foreach($ongs as $ong){
        $ong_name = $ong->post_title;
        $ong_link = get_field('lien_don', $ong->ID);
        $ong_thumb = get_the_post_thumbnail( $ong->ID, 'ong_thumb', array('class' => "ong-logo") );
        
        
        
    }
  ?>
     <div class="associated-ongs">
        <a href="<?php echo $ong_link; ?>">
          <?php echo $ong_thumb; ?>
          <p><?php echo $ong_name; ?><p>
        </a>
    </div>
    
</main>
<?php get_footer() ?>