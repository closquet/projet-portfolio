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
        <div class="about__content vcard" itemscope itemtype="http://schema.org/Person">
            <meta itemprop="gender" content="m" aria-hidden="true">
            <img itemprop="image" class="about__content_avatar" width="400" height="225" src="<?php ec_asset( 'images/deco/eric-closquet.jpg' ); ?>" alt="Photo de Éric Closquet">
            <div class="about__content__text">
                <p>
                    Salut moi c'est <span class="n"><span itemprop="givenName" class="given-name">Éric</span> <span itemprop="familyName" class="family-name">Closquet</span></span>, je suis né en <time class="bday" itemprop="birthDate" datetime="1985">1985</time> (<?= calcule_age('1985-05-15')?>&nbsp;ans) à <span itemprop="birthPlace">Seraing en <span itemprop="nationality">Belgique</span></span>.
                </p>
                <p>
                    Je fais actuellement (2017) un bachelier en <span class="category" itemprop="jobTitle">web design et développement</span> à la <b><abbr title="Haute école de la province de Liège">HEPL</abbr></b>.
                </p>
                <p>
                    Vous pouvez me contacter  via <a itemprop="email" class="link" href="mailto:closquet.eric@live.be">closquet.eric@live.be</a> ou au <a class="link" href="tel:+32498405783">+32&nbsp;(0)&nbsp;498&nbsp;40&nbsp;57&nbsp;83 </a>
                </p>
            </div>
        </div>

    </section>
<?php get_footer(); ?>