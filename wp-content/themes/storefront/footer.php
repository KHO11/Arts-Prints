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

	<footer id="colophon" class="site-footer" role="contentinfo" style="height:452px;width:100%">
		<div class="col-full">
			<div class="bottomLists" style="display:inline-block;margin-top:-50px;margin-left:30px">
			<span class="company">OUR COMPANY</span>
			<span class="shop" >SHOP</span>
			<span class="contact" >CONTACT</span>
			<span class="sellers" >SELLERS</span>
			<span class="newsletter" >NEWS LETTER</span>
			</div>

			<div class="bottomLines">
				<hr class="lineCompany" style="width:155px">
				<hr class="lineShop" style="width:155px">
				<hr class="lineContact" style="width:155px">
				<hr class="lineSellers" style="width:155px">
				<input type="search" id="woocommerce-product-search-field-0" 
				class="search-field" placeholder="Email address" value="" name="s">
				<div class="greyBox">
				</div>
			</div>

			<div class="bottomLists2">
			<ul class ="one" style="list-style-type:none">
				<li><a href="">ABOUT US</a></li>
				<li><a href="">PRESS</a></li>
				<li><a href="">REVIEWS</a></li>
				<li><a href="">DISCOUNT</a></li>
			</ul>
			<ul class="two" style="list-style-type:none">
				<li><a href="">WALL ART</a></li>
				<li><a href="">ART PRINTS & FRAMED<br> PRINTS</a></li>
				<li><a href="">FRAMES</a></li>
				<li><a href="">SALE</a></li>
			</ul>
			<ul class="three" style="list-style-type:none">
				<li><a href="">CONTACT US</a></li>
				<li><a href="">FAQ</a></li>
				<li><a href="">RETURNS POLICY</a></li>
				<li><a href="">RETURNS</a></li>
				<li><a href="">TERMS OF USE</a></li>
			</ul>
			<ul class="four" style="list-style-type:none">
				<li><a href="">SELL YOUR ART</a></li>
				<li><a href="">MEMBERSHIP PLAN</a></li>
				<li><a href="">MOBILE APP</a></li>
			</ul>


			<label class="facebook">FACEBOOK TWITTER INSTAGRAM PINTEREST</label>

			<span class="copyrights">COPYRIGHTS 2020 ARTS & PINTS ONLINE.COM - ALL RIGHTS RESERVED</span>
			</div>
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
