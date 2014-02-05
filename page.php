<?php get_header(); ?>
    <main>
    	
		<?php if ( the_post_thumbnail('featured-img') ) :
            
            the_post_thumbnail('featured-img');

        endif; ?>
		
		<h2><?php echo get_post_meta($post->ID, 'header-title', true); ?></h2>
       
        <div class="page-content">
        
        	<div class="container">			
        		<?php while ( have_posts() ) : the_post(); ?>
        		<?php the_content(); ?>
        		<?php endwhile; ?>
        	</div>
        
        </div>
        
    </main>
    
<?php get_footer(); ?>