<?php get_header(); ?>

<main>
	<div class="wrapper-section">
		<div class="rmbt-full-width rmbt-blog-full-width">
			<section class="rmbt-container rmbt-blog">
				<div class="rmbt-blog__row">

					<header class="page-header ">
					</header>
					<div class="rmbt-blog__col">
						<?php
						// if ( have_posts() ) {
						// 	while ( have_posts() ) :
						// 		the_post();
						
						// 		get_template_part( 'template-parts/components/card_news_strings', null, [		// here your card template
						// 			'title' => get_the_title(),
						// 			'text' => get_the_excerpt(),
						// 			'tag-img' => get_the_post_thumbnail(),
						// 			'link_read_more_href' => get_the_permalink(),
						// 		] );
						
						// 	endwhile;
						// } else {
						// 	//   get_template_part('partials/notfound');
						// }
						?>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>


<?php get_template_part( 'template-parts/components/pagination' ); ?>



<?php get_footer();