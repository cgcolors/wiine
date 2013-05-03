<?php
/**
 * Template Name: Front Page Template
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
            <h1><?php _e('Nous sélectionnons les meilleurs vins du moment, vous les recevez chez vous tous les mois.','wiineme'); ?></h1>
            <h2><?php _e('De novice à amateur de vins en un an. Devenez incollable!','wiineme'); ?></h2>
            <p>Rappelez vous de tous vos vins, apprenez vraiment à boire, nous vous accompagnons avec une communauté et une experience autour de chaque bouteille que vous ouvrirez.</p>
            <ul class="ctas">
                <li><a href="#" title="Abonnements de vin en suisse">Découvrir les <strong>abonnements</strong></a></li>
                <li><a href="#" title="Cours de dégustaion de vin en suisse">Découvrir les <strong>cours de dégustation</strong></a></li>
            </ul>
        </div>
        <div class="rightCol">
            <img src="/devbeta/wp-content/themes/wiinemev2/css/wiinemeBottle-small.png" alt="Bouteille de vin Wiine.me Suisse"/>
            <div class="absolutedescr descr1"><strong>30%</strong>Wine at home every month</div>
            <div class="absolutedescr descr2"><strong>30%</strong>Wine book to remember</div>
            <div class="absolutedescr descr3"><strong>30%</strong>Play and learn with your own words</div>
            <div class="absolutedescr descr4"><strong>10%</strong>Magic !</div>
        </div>
    </div>
</div>
    <div class="woodyTableVisual"></div>
    <div class="patternBlue hrMixin">
        <div class="wrapper">
            <div class="midCol">
                <h2>Abonnement de vin</h2>
                <p>Votre vin, sélectionné par des experts, livrés chez vous tous les mois</p>
                <div class="wrapBottles">
                    <div class="bottleVitrine twoBottles">
                        <img src="<?php bloginfo(template_url); ?>/css/twobottles.png" alt="Abonnement de vin en Suisse"/>
                        <strong>39<sup>CHF</sup></strong>
                        <span>/mois</span>
                    </div>
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
            <hr/>
            <div class="midCol lastCol">
                <h2>Cours de dégustation</h2>
                <p>Apprennez à déguster le vin. Disponible dans toutes les grandes villes de Suisse.</p>
                <img src="<?php bloginfo(template_url); ?>/css/cours-degustation.png" alt="Cours de dégustation de vin en suisse"/>
                <div class="ctasHP">
                    <a href="#" title="Participer à des cours de vin en suisse">Participer</a>
                    <a href="#" title="Offrir des cours de vin en suisse">Offrir</a>
                </div>
            </div>
        </div>
    </div>
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
    <div class="wood">
        <div class="wrapper">
            <iframe src="http://player.vimeo.com/video/32824772?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="1040" height="624" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
    </div>
    <div class="wrapper">
        <div class="colGaucheBottom">
            <h2>La cliente du mois</h2>
            <blockquote>
                <p>“Wiine.me m’a permis de me faire aimer le vin rouge. Je n’ai jamais y pris aussi gout! c’est tout simplement fantastique. Je recommande wiine.me à toutes mes amies.”</p>
            </blockquote>
            <div class="author">
                Laura<span>25 ans, Genêve</span>
            </div>
            <a href="#" class="subcta">Voir plus de témoignages</a>
        </div>
        <div class="colDroiteBottom">
            <h2>Les dernières astuces</h2>
            <a href="#" class="subcta">Toutes nos astuces</a>
            <div class="astuce">
                <p>Consommer le chateaubriad 2009 a temperature ambiante favorisera le charme de la chataigne que vous retrouverez en...</p>
                <div class="author">
                    Laura<span>Sommelier</span>
                </div>
            </div>
            <div class="astuce">
                <p>Consommer le chateaubriad 2009 a temperature ambiante favorisera le charme de la chataigne que vous retrouverez en...</p>
                <div class="author">
                    Laura<span>Sommelier</span>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>