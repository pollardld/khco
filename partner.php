<?php
/*
Template Name: Partner
*/
get_header(); ?>

 <main>
   
    <div class="page-content">
    
    	<div class="container">			
    		<?php while ( have_posts() ) : the_post(); ?>
    		<?php the_content(); ?>
    		<?php endwhile; ?>
    	</div>
    
    </div>
    
</main>

<?php get_footer(); ?>