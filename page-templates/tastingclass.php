<?php
/**
 * Template Name: Tasting class
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div id="homepageCover">
    <div class="wrapper">
        <div class="leftCol">
            <h1><?php _e('Cours de dégustation de vin en Suisse.','wiineme'); ?></h1>
            <p>Apprennez à déguster le vin. Disponible dans toutes les grandes villes de Suisse.</p>
            <div class="ctasHP">
                    <a href="#" title="S'abonner à des cours de vin en Suisse">Participer</a>
                    <a href="#" title="Offrir des cours de vin en Suisse">Offrir</a>
                </div>
        </div>
    </div>
</div>
    <div class="wrapper">
		<div id="content" role="main">
            <article class="hentry">
                <div class="entry-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; // end of the loop. ?>
                    <ul class="listCity">
                        <li>
                            <a href="#" title="Cours de dégustation de vin à Geneve">
                                <img src="<?php bloginfo(template_url); ?>/css/lausanne.png" alt="Cours de dégustation de vin à Geneve"/>
                                <span class="cityInfos"><h4>Genève</h4><em>Du 12 au 24 mai</em></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Cours de dégustation de vin à Geneve">
                                <img src="<?php bloginfo(template_url); ?>/css/lausanne.png" alt="Cours de dégustation de vin à Geneve"/>
                                <span class="cityInfos"><h4>Genève</h4><em>Du 12 au 24 mai</em></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Cours de dégustation de vin à Geneve">
                                <img src="<?php bloginfo(template_url); ?>/css/lausanne.png" alt="Cours de dégustation de vin à Geneve"/>
                                <span class="cityInfos"><h4>Genève</h4><em>Du 12 au 24 mai</em></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Cours de dégustation de vin à Geneve">
                                <img src="<?php bloginfo(template_url); ?>/css/lausanne.png" alt="Cours de dégustation de vin à Geneve"/>
                                <span class="cityInfos"><h4>Genève</h4><em>Du 12 au 24 mai</em></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Cours de dégustation de vin à Geneve">
                                <img src="<?php bloginfo(template_url); ?>/css/lausanne.png" alt="Cours de dégustation de vin à Geneve"/>
                                <span class="cityInfos"><h4>Genève</h4><em>Du 12 au 24 mai</em></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Cours de dégustation de vin à Geneve">
                                <img src="<?php bloginfo(template_url); ?>/css/lausanne.png" alt="Cours de dégustation de vin à Geneve"/>
                                <span class="cityInfos"><h4>Genève</h4><em>Du 12 au 24 mai</em></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Cours de dégustation de vin à Geneve">
                                <img src="<?php bloginfo(template_url); ?>/css/lausanne.png" alt="Cours de dégustation de vin à Geneve"/>
                                <span class="cityInfos"><h4>Genève</h4><em>Du 12 au 24 mai</em></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Cours de dégustation de vin à Geneve">
                                <img src="<?php bloginfo(template_url); ?>/css/lausanne.png" alt="Cours de dégustation de vin à Geneve"/>
                                <span class="cityInfos"><h4>Genève</h4><em>Du 12 au 24 mai</em></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </article>
		</div><!-- #content -->
	</div><!-- #primary -->
    <div class="wrapper" id="threesteps">
        <ul>
            <li class="thirdCol decouvrezBloc">
                <h3>Découvrez de nouveaux vins</h3>
                <p>Chaque mois, ils explorent,dégustent et sélectionnent des vins fantastiques parmis les meilleurs caves d'Europe et les rendent disponible sur notre site Internet</p>
            </li>
            <li class="thirdCol souvenezBloc">
                <h3>Souvenez-vous de vos vins</h3>
                <p>Chaque mois, ils explorent,dégustent et sélectionnent des vins fantastiques parmis les meilleurs caves d'Europe et les rendent disponible sur notre site Internet</p>
            </li>
            <li class="thirdCol lastCol notezBloc">
                <h3>Notez, partagez & gagnez!</h3>
                <p>Chaque mois, ils explorent,dégustent et sélectionnent des vins fantastiques parmis les meilleurs caves d'Europe et les rendent disponible sur notre site Internet</p>
            </li>
        </ul>
    </div>
<?php get_footer(); ?>