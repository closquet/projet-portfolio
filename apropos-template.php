<?php
/*
 * Template Name: À propos
 */
?>

<?php get_header(); ?>
    <section aria-labelledby="project-cta__title" class="wrap bloc about">
        <h2 id="project-cta__title" role="heading" aria-level="2" class="page-title project-cta__title">
			<?= __('Qui suis-je', 'fr') . '&nbsp;?' ?>
        </h2>
        <div class="about__content">
            <div>
                <img class="about__content_avatar" width="400" height="225" src="<?php ec_asset( 'images/deco/eric-closquet.jpg' ); ?>" alt="Photo de Éric Closquet">
            </div>
            <div class="about__content__text">
                <p>
                    Salut moi c'est Éric Closquet, je suis né en 1985 (<?= calcule_age('1985-05-15')?>&nbsp;ans) à Seraing en Belgique.
                </p>
                <p>
                    Je fais actuellement (2017) un bachelier en web design et développement à la <b><abbr title="Haute école de la province de Liège">HEPL</abbr></b>.
                </p>
                <p>
                    Vous pouvez me contacter  via <a class="link" href="mailto:closquet.eric@live.be">closquet.eric@live.be</a> ou au <a class="link" href="tel:+32498405783">+32&nbsp;(0)&nbsp;49&nbsp;40&nbsp;57&nbsp;83 </a>
                </p>
            </div>
        </div>

    </section>
<?php get_footer(); ?>