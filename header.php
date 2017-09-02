<?php $currenturl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>
<html lang="fr-BE" class="no-js">
    <head>
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <title><?= wp_get_document_title(); ?></title>
        <link rel="stylesheet" href="<?php ec_asset('css/styles.css');?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Portfolio de Éric Closquet">
        <meta name="author" content="Eric Closquet">
        <meta name="keywords" content="eric-closquet.be, eric closquet, Belgique, web developer, web designer, hepl, inpres, haute école de la province de Liège">
        <link rel="shortcut icon" href="favicon.ico">
	    <?php wp_head(); ?>
    </head>

    <body <?php //body_class(); ?>>
        <header role="banner" class="<?= $_SERVER['REQUEST_URI'] == '/' ? 'home' : 'not-home' ?>">
            <div class="top-bar-container">
                <div class="wrap banner__top-bar">
                    <h1 role="heading" aria-level="1" class="site-title">
                        <a class="site-title__link" href="/">Eric Closquet</a>
                    </h1>
                    <nav aria-labelledby="main-nav__title" role="navigation" class="main-nav">
                        <h2 id="main-nav__title" role="heading" aria-level="2" class="visually-hidden">Menu Principal</h2>
                        <ul class="main-nav__links-list">
				            <?php foreach (ec_get_nav_items('header') as $item): ?>
                                <li class="main-nav__item<?= $item->children ? ' main-nav__item--parent' : '' ?>">
                                    <a href="<?php echo $item->link;?>" class="main-nav__link<?php echo ($currenturl == $item->link . '/') ? ' main-nav__link--current-page' : '' ;?>"><?php echo $item->label;?></a>
						            <?php if($item->children):?>
                                        <ul class="main-nav__sub-links-list">
								            <?php foreach($item->children as $sub):?>
                                                <li class="main-nav__item main-nav__sub-links-list__item">
                                                    <a href="<?php echo $sub->link;?>" class="main-nav__link<?php echo ($currenturl == $sub->link) ? ' main-nav__link--current-page' : '' ;?>"><?php echo $sub->label;?></a>
                                                </li>
								            <?php endforeach;?>
                                        </ul>
						            <?php endif;?>
                                </li>
				            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
	            <?php if ($_SERVER['REQUEST_URI'] != '/'):?>
                    <div class="arian ">
                        <div class="wrap">
				            <?php ec_fildarian(); ?>
                        </div>
                    </div>
	            <?php endif; ?>
            </div>
            <?php if ($_SERVER['REQUEST_URI'] == '/'):?>
                <div class="wrap">
                    <p class="slogan">
                        <span class="slogan__parts slogan__part1">Vous souhaitez exister sur le web?</span>
                        <span class="slogan__parts slogan__part2">Créons ensemble un site web qui correspond à vos besoins</span>
                    </p>
                    <a class="dons-btn" href="/dons">Me contacter</a>
                </div><!--wrap banner-wrap-->
                <span id="down-target"></span>
            <?php endif;?>
        </header>
        <main role="main" id="main" class="content">
            
        


    
    