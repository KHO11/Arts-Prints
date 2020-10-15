<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<span class="company">OUR COMPANY</span>
			<br><br>
			<hr class="lineCompany" style="width:15%">

			<ul class ="one" style="list-style-type:none">
				<li>ABOUT US</li>
				<li>PRESS</li>
				<li>REVIEWS</li>
				<li>DISCOUNT</li>
			</ul>


			<span class="shop">SHOP</span>
			<br><br>
			<hr class="lineShop" style="width:15%">
			
			<ul class="two" style="list-style-type:none">
				<li>WALL ART</li>
				<li>ART PRINTS & FRAMED<br> PRINTS</li>
				<li>FRAMES</li>
				<li>SALE</li>
			</ul>

			<span class="contact">CONTACT</span>
			<br><br>
			<hr class="lineContact" style="width:15%">

			<ul class="three" style="list-style-type:none">
				<li>CONTACT US</li>
				<li>FAQ</li>
				<li>RETURNS POLICY</li>
				<li>RETURNS</li>
				<li>TERMS OF USE</li>
			</ul>

			<span class="sellers">SELLERS</span>
			<br><br>
			<hr class="lineSellers" style="width:15%">

			<ul class="four" style="list-style-type:none">
				<li>SELL YOUR ART</li>
				<li>MEMBERSHIP PLAN</li>
				<li>MOBILE APP</li>
			</ul>

			<span class="newsletter">NEWS LETTER</span>
			<br><br>


			<input type="search" id="woocommerce-product-search-field-0" 
			class="search-field" placeholder="Email address" value="" name="s">

			<div class="greyBox">
			</div>

			<span class="facebook">FACEBOOK TWITTER INSTAGRAM PINTEREST</span>

			<span class="copyrights">COPYRIGHTS 2020 ARTS & PINTS ONLINE.COM - ALL RIGHTS RESERVED</span>

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
