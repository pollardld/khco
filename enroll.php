<?php
/*
Template Name: Enroll
*/
get_header(); ?>

<main>
	<div class="page-content map-page">

		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
		    <?php the_content(); ?>
		    <?php endwhile; ?>
		</div>

	</div>

	<div class="map-wrapper">

	    <div class="map events-map">

	    	<article class="map-legend" id="map-legend">

	    	</article>

	        <div id="map"></div>
	    
	    </div>

	</div>

</main>

<?php get_footer(); ?>