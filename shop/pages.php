<?php
/*
Template Name: info
*/
get_header(); 
?>
<main>
    <section class="about">
<div class="custom-page-content">
    <div class="content">
        <h3><?php the_title();?></h3>
          <span><?php the_content();?></span>
          <div class="container">
  <a href="#" class="headline-btn">Заказать</a>
</div>
        </div>
        <div class="picture">        
        <?php the_post_thumbnail(array(483,550));?>
    </div>
    <?php

    wp_reset_postdata();
    ?>
</div>
</section>
</main>
<?php get_footer(); ?>
