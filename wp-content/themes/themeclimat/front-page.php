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
      <div>
        <img class="ong-logo" src="<?php echo IMAGES_URL . '/placeholder.png' ?>">
        <p>ONG 1<p>
      </div>
      <div>
        <img class="ong-logo" src="<?php echo IMAGES_URL . '/placeholder.png' ?>">
        <p>ONG 2<p>
      </div>
      <div>
        <img class="ong-logo" src="<?php echo IMAGES_URL . '/placeholder.png' ?>">
        <p>ONG 3<p>
      </div>
      <div>
        <img class="ong-logo" src="<?php echo IMAGES_URL . '/placeholder.png' ?>">
        <p>ONG 4<p>
      </div>
      <div>
        <img class="ong-logo" src="<?php echo IMAGES_URL . '/placeholder.png' ?>">
        <p>ONG 5<p>
      </div>
    </div>    
         
  </div>       
</main>

<?php get_footer();?>