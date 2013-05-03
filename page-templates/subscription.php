<?php
/**
 * Template Name: Subscription template
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
    <div class="patternBlue hrMixin marginNeg subscriptionPage">
        <div class="wrapper">
            <div class="midCol">
                <h2>Deux bouteilles par mois</h2>
                <p>Votre vin, sélectionné par des experts, livrés chez vous tous les mois</p>
                <div class="wrapBottles">
                    <div class="bottleVitrine twoBottles">
                        <img src="<?php bloginfo(template_url); ?>/css/twobottles.png" alt="Abonnement de vin en Suisse"/>
                        <strong>39<sup>CHF</sup></strong>
                        <span>/mois</span>
                    </div>
                </div>
                <div class="ctasHP">
                    <a href="#" title="S'abonner à du vin tout les mois en suisse">S'abonner</a>
                    <a href="#" title="Offrir du vin tout les mois en suisse">Offrir</a>
                </div>
            </div>
            <hr/>
            <div class="midCol lastCol">
                <h2>Trois bouteilles par mois</h2>
                <p>Votre vin, sélectionné par des experts, livrés chez vous tous les mois</p>
                <div class="wrapBottles ">
                    <div class="bottleVitrine threeBottles">
                        <img src="<?php bloginfo(template_url); ?>/css/threebottles.png" alt="Abonnement de vin en Suisse"/>
                        <strong>59<sup>CHF</sup></strong>
                        <span>/mois</span>
                    </div>
                </div>
                <div class="ctasHP">
                    <a href="#" title="S'abonner à du vin tout les mois en suisse">S'abonner</a>
                    <a href="#" title="Offrir du vin tout les mois en suisse">Offrir</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper" id="threesteps">
        <ul>
            <li class="quartCol decouvrezBloc">
                <h3>Découvrez de nouveaux vins</h3>
                <p>Chaque mois, ils explorent,dégustent et sélectionnent des vins fantastiques parmis les meilleurs caves d'Europe et les rendent disponible sur notre site Internet</p>
            </li>
            <li class="quartCol souvenezBloc">
                <h3>Souvenez-vous de vos vins</h3>
                <p>Chaque mois, ils explorent,dégustent et sélectionnent des vins fantastiques parmis les meilleurs caves d'Europe et les rendent disponible sur notre site Internet</p>
            </li>
            <li class="quartCol souvenezBloc">
                <h3>Souvenez-vous de vos vins</h3>
                <p>Chaque mois, ils explorent,dégustent et sélectionnent des vins fantastiques parmis les meilleurs caves d'Europe et les rendent disponible sur notre site Internet</p>
            </li>
            <li class="quartCol lastCol notezBloc">
                <h3>Notez, partagez & gagnez!</h3>
                <p>Chaque mois, ils explorent,dégustent et sélectionnent des vins fantastiques parmis les meilleurs caves d'Europe et les rendent disponible sur notre site Internet</p>
            </li>
        </ul>
    </div>
<div class="wrapper">
    <div id="content" role="main">
        <h1 class="entry-title">Nos spécialistes</h1>
        <div class="clear"></div>
        <div class="ourSpecialists">
                <?php
                $type = 'specialiste';
                $args=array(
                  'post_type' => $type,
                  'post_status' => 'publish',
                  'caller_get_posts'=> 1);
                
                $my_query = null;
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="specialist">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium');} ?></a>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="titleTopWiine"><?php the_title(); ?></a>
               <?php echo do_shortcode('[types field="statut"]'); ?>
                </div>
                    <?php                  endwhile;                }     wp_reset_query();  // Restore global post data stomped by the_post().?>
            
            <div class="clear"></div>
        </div>
        <hr class="clear"></hr>
        <h1 class="entry-title">Nos vins</h1>
        <ul id="listVins">
            <li>
                <ul class="monthVin wotm wood">
                    <li class="headwl">
                        <h2>Le vin du mois</h2>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../wp-content/themes/wiinemev2/css/bottles.png"/>
                            <span class="titleVin">Mouton Rotschild</span>
                            <span class="locationVin">Bordeaux-Médoc</span>
                            <span class="locationVin">1890</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../wp-content/themes/wiinemev2/css/bottles.png"/>
                            <span class="titleVin">Mouton Rotschild</span>
                            <span class="locationVin">Bordeaux-Médoc</span>
                            <span class="locationVin">1890</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../wp-content/themes/wiinemev2/css/bottles.png"/>
                            <span class="titleVin">Mouton Rotschild</span>
                            <span class="locationVin">Bordeaux-Médoc</span>
                            <span class="locationVin">1890</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="monthVin">
                    <li class="headwl">
                        <h2>Avril 2013</h2>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../wp-content/themes/wiinemev2/css/bottles.png"/>
                            <span class="titleVin">Mouton Rotschild</span>
                            <span class="locationVin">Bordeaux-Médoc</span>
                            <span class="locationVin">1890</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../wp-content/themes/wiinemev2/css/bottles.png"/>
                            <span class="titleVin">Mouton Rotschild</span>
                            <span class="locationVin">Bordeaux-Médoc</span>
                            <span class="locationVin">1890</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../wp-content/themes/wiinemev2/css/bottles.png"/>
                            <span class="titleVin">Mouton Rotschild</span>
                            <span class="locationVin">Bordeaux-Médoc</span>
                            <span class="locationVin">1890</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="monthVin">
                    <li class="headwl">
                        <h2>Mars 2013</h2>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../wp-content/themes/wiinemev2/css/bottles.png"/>
                            <span class="titleVin">Mouton Rotschild</span>
                            <span class="locationVin">Bordeaux-Médoc</span>
                            <span class="locationVin">1890</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../wp-content/themes/wiinemev2/css/bottles.png"/>
                            <span class="titleVin">Mouton Rotschild</span>
                            <span class="locationVin">Bordeaux-Médoc</span>
                            <span class="locationVin">1890</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../wp-content/themes/wiinemev2/css/bottles.png"/>
                            <span class="titleVin">Mouton Rotschild</span>
                            <span class="locationVin">Bordeaux-Médoc</span>
                            <span class="locationVin">1890</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="patternBlue hrMixin subscriptionPage">
        <div class="wrapper">
            <div class="midCol">
                <h2>Deux bouteilles par mois</h2>
                <p>Votre vin, sélectionné par des experts, livrés chez vous tous les mois</p>
                <div class="wrapBottles">
                    <div class="bottleVitrine twoBottles">
                        <img src="<?php bloginfo(template_url); ?>/css/twobottles.png" alt="Abonnement de vin en Suisse"/>
                        <strong>39<sup>CHF</sup></strong>
                        <span>/mois</span>
                    </div>
                </div>
                <div class="ctasHP">
                    <a href="#" title="S'abonner à du vin tout les mois en suisse">S'abonner</a>
                    <a href="#" title="Offrir du vin tout les mois en suisse">Offrir</a>
                </div>
            </div>
            <hr/>
            <div class="midCol lastCol">
                <h2>Trois bouteilles par mois</h2>
                <p>Votre vin, sélectionné par des experts, livrés chez vous tous les mois</p>
                <div class="wrapBottles ">
                    <div class="bottleVitrine threeBottles">
                        <img src="<?php bloginfo(template_url); ?>/css/threebottles.png" alt="Abonnement de vin en Suisse"/>
                        <strong>59<sup>CHF</sup></strong>
                        <span>/mois</span>
                    </div>
                </div>
                <div class="ctasHP">
                    <a href="#" title="S'abonner à du vin tout les mois en suisse">S'abonner</a>
                    <a href="#" title="Offrir du vin tout les mois en suisse">Offrir</a>
                </div>
            </div>
        </div>
    </div>
    
<?php get_footer(); ?>