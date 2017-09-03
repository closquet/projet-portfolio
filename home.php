<?php //setlocale(LC_ALL, 'fr_BE.utf8'); ?>
<?php get_header(); ?>

        <section aria-labelledby="project-cta__title" class="wrap bloc project-cta">
            <h2 id="project-cta__title" role="heading" aria-level="2" class="page-title project-cta__title">
                <?= __('Mes derniers projets', 'fr') ?>
            </h2>
            <div class="project-cta__container">
	            
	            <?php if( have_posts() ): for($i=1; $i<=3; $i++): the_post(); ?>
                    <article aria-labelledby="project-cta__article__title" class="project-cta__article">
                        <a class="link project-cta__article__link" href="<?= get_permalink() ?>">
                            <h3 id="project-cta__article__title" role="heading" aria-level="3" class="page-title project-cta__article__title">
		                        <?php the_title(); ?>
                            </h3>
	                        <?php the_post_thumbnail('my_thumbnail', ['class' => 'project-cta__article__thumbnail']); ?>
                        </a>
                    </article>
	            <?php endfor; else: ?>
                    <p><?= __('Il n\'y a pas encore de projets', 'fr') ?></p>
	            <?php endif; ?>
            </div>
            <div class="center">
                <a class="btn dark-btn project-cta__btn" href="/projets">
		            <?= __('Tous les  projets', 'fr'); ?>
                </a>
            </div>
            
        </section>

<?php get_footer(); ?>