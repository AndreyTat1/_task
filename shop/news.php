<?php
/*
Template Name: news
*/
get_header(); 
?>
<main>
    <section class="about">
<div class="custom-page-content">
<div class="picture" style="margin:0px;">        
        <?php the_post_thumbnail(array(483,550));?>
    </div>
    <div class="content">
        <h3><?php the_title();?></h3>
          <span><?php the_content();?></span>
        </div>
    <?php
    wp_reset_postdata();
    ?>
</div>
</section>
</main>
<?php get_footer(); ?>
