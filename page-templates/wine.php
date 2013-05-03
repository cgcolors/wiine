<?php
/**
 * Template Name: Wine detail
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
    <div class="wrapper">
		<div id="content" role="main">
            <article class="hentry">
                <div class="header-wine">
                    <div class="relativeInfos">
                        <img src="../wp-content/themes/wiinemev2/css/roseProvence.png"/>
                        <h1>Mouton Rotschild<br/>Côtes de Provence</h1>
                        <ul class="metadatas-wine">
                            <li class="wine-year">1998</li>
                            <li class="wine-type">Rosé</li>
                            <li class="wine-location">Aix-En-Provence, Abeille</li>
                        </ul>                        
                        <div class="clear"></div>
                        <ul class="ctas-wine">
                            <li><a href="#" title="Note this wine">Note this wine</a></li>
                            <li><a href="#" title="Re-order more of this">Order more</a></li>
                            <li><a href="#" title="Undertake our quizz and win points!">Take the challenge</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="iframeResponsive">
                        <iframe width="1045" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=mouton+rotschild&amp;aq=&amp;sll=46.75984,1.738281&amp;sspn=9.8769,26.784668&amp;ie=UTF8&amp;hq=mouton+rotschild&amp;hnear=&amp;t=m&amp;ll=45.966425,-4.064941&amp;spn=4.581909,22.939453&amp;z=6&amp;output=embed&iwloc=near"></iframe>
                    </div>
                </div>
                <div class="woodyTableVisual"></div>
                <ul>
                    <li class="thirdGrid wineEye">
                        <h2>Eye</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nulla lectus, eget luctus lorem. Cras dictum leo ac risus tempus sit amet gravida felis eleifend. In id pharetra tortor. Sed ornare tellus vestibulum mauris convallis id lobortis dui dapibus. </p>
                    </li>
                    <li class="thirdGrid wineEye">
                        <h2>Nose</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nulla lectus, eget luctus lorem. Cras dictum leo ac risus tempus sit amet gravida felis eleifend. In id pharetra tortor. Sed ornare tellus vestibulum mauris convallis id lobortis dui dapibus. </p>
                    </li>
                    <li class="thirdGrid wineEye">
                        <h2>Mouth</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nulla lectus, eget luctus lorem. Cras dictum leo ac risus tempus sit amet gravida felis eleifend. In id pharetra tortor. Sed ornare tellus vestibulum mauris convallis id lobortis dui dapibus. </p>
                    </li>
                    <li class="thirdGrid wineEye">
                        <h2>Food pairing</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nulla lectus, eget luctus lorem. Cras dictum leo ac risus tempus sit amet gravida felis eleifend. In id pharetra tortor. Sed ornare tellus vestibulum mauris convallis id lobortis dui dapibus. </p>
                    </li>
                    <li class="thirdGrid wineEye">
                        <h2>Age</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nulla lectus, eget luctus lorem. Cras dictum leo ac risus tempus sit amet gravida felis eleifend. In id pharetra tortor. Sed ornare tellus vestibulum mauris convallis id lobortis dui dapibus. </p>
                    </li>
                    <li class="thirdGrid wineEye">
                        <h2>Story</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nulla lectus, eget luctus lorem. Cras dictum leo ac risus tempus sit amet gravida felis eleifend. In id pharetra tortor. Sed ornare tellus vestibulum mauris convallis id lobortis dui dapibus. </p>
                    </li>
                </ul>
                <?php comments_template(); ?> 
            </article>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>