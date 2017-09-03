

<?php get_header(); ?>
		<article class="wrap bloc single">
            
			<?php if( have_posts() ): while( have_posts() ): the_post();?>
                <h2 id="project-cta__title" role="heading" aria-level="2" class="page-title project-cta__title">
					<?php the_title(); ?>
                </h2>
                <div class="single__content">
                    <div class="single__content__thumbnail-container">
	                    <?php the_post_thumbnail('my_thumbnail', ['class' => 'single__content__thumbnail']); ?>
                        <div class="single__content__online-links">
                            <a class="single__content__online-link dark-btn btn" href="<?php the_field('github'); ?>">Voir le projet sur Github</a>
                            <a class="single__content__online-link dark-btn btn" href="<?php the_field('online'); ?>">Visiter le site en ligne</a>
                        </div>
                    </div>
                    <div class="single__content__text">
	                    <?php the_content(); ?>
                    </div>
                    
                    
                </div>
			<?php endwhile; else: ?>
				<p class="content__empty">Il n'y a pas d'articles à afficher.</p>
			<?php endif;?>
		</article>
<?php get_footer(); ?>