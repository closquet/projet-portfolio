<?php
/*
 * Template Name: Mes projets
 */?>

<?php get_header(); ?>
    <section aria-labelledby="project-cta__title" class="wrap bloc project-cta">
        <h2 id="project-cta__title" role="heading" aria-level="2" class="page-title project-cta__title">
			<?= __('Mes projets', 'fr') ?>
        </h2>
        <div class="project-cta__container">
	
	        <?php
	        $projets = new WP_Query();
	        $projets->query([
		        'post_type' => 'post'
	        ]);
	        ?>
			<?php if( $projets->have_posts() ): while( $projets->have_posts() ): $projets->the_post(); ?>
                <article aria-labelledby="project-cta__article__title" class="project-cta__article">
                    <a class="link project-cta__article__link" href="<?= get_permalink() ?>">
                        <h3 id="project-cta__article__title" role="heading" aria-level="3" class="page-title project-cta__article__title">
							<?php the_title(); ?>
                        </h3>
						<?php the_post_thumbnail('my_thumbnail', ['class' => 'project-cta__article__thumbnail']); ?>
                    </a>
                </article>
			<?php endwhile; else: ?>
                <p><?= __('Il n\'y a pas encore de projets', 'fr') ?></p>
			<?php endif; ?>
            
        </div>
        

    </section>
<?php get_footer(); ?>