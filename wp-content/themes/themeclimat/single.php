<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <?php the_title(); ?>
 <?php the_post_thumbnail();?>
 <?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>

 <?php
  $ongs = get_field('ongs');
  foreach($ongs as $ong){
      $ong_name = $ong->post_title;
      $ong_link = get_field('lien_don', $ong->ID);
      $ong_thumb = get_the_post_thumbnail( $ong->ID, 'ong_thumb' );
      echo $ong_name;
      echo $ong_thumb;
      echo $ong_link;
  }
?>

<?php get_footer() ?>