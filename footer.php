<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div class="clear"></div>
	<footer class="patternBlue" id="colophon" role="contentinfo">
        <div class="wrapper">
            <div class="footGauche">
                <?php wp_nav_menu( array( 'theme_location' => 'footmenu', 'menu_class' => 'foot-menu' ) ); ?>
            </div>
            <div class="footMid">
                <h4>Newsletter</h4>
                <p>Entrez votre adresse email ci-dessous pour profiter de réductions et de deals exclusifs! </p>
                <input type="text" placeholder="votre adresse email ici.."/>
                <input type="submit" value="ok"/>
            </div>
            <div class="footDroite">
                <div class="insideGauche">
                    <h4>Retrouvez nous</h4>
                    <a href="#" title="Facebook" class="facebook"></a>
                    <a href="#" title="Pinterest" class="pinterest"></a>
                    <a href="#" title="Twitter" class="twitter"></a>
                </div>
                <div class="insideDroite">
                    <p>Tout droits réservés. Wiine.me 2013.</p>
                    <p class="swiss">Fièrement créé en Suisse.</p> 
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>