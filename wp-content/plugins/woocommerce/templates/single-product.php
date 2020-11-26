
<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


get_header( 'shop' ); ?>
<div class="properList">
<ul class="singleList">
	<li>SHOP</li>
	<li>/</li>
	<li>NEW PRINTS</li>
	<li>/</li>
	<li>WALL ART</li>
	<li>/</li>
	<li>BEST SELLERS</li>
	<li>/</li>
	<li style="color:#3B3B3B">ERIN ISAACS</li>
</ul>
</div>

<div class="erinText">
<span class="erin">
Erin Isaacs</span>
</div>

<div class="productTitle">
<span class="singlePrint">Abstract print</span>
</div>

<span class="reviewsSection"><img src="<?php echo get_template_directory_uri(); ?>/reviewsPic.png"></span>

<label class="printPrice">£100.00</label>

<img class="bigWave" src="<?php echo get_template_directory_uri(); ?>/bigWWave.png">

<p class="productInfo">Our range of framed prints are eye catching, 
<br><span class="secondInfo"> hassle free gifts that are perfect for livening</span>
<br><span class="thirdInfo"> up a space with minimal effort.</span>
</p>

<div class="optionsList">

<div class="dropdown9">
  <button onclick="myFunction9()" class="dropbtn9" style="background:transparent">
  <div style="color:#06022A">FRAME  <img class="downArrow1" src="<?php echo get_template_directory_uri(); ?>/downArrow.png"></div>
  <div style=""></div></button>
  <div id="myDropdown9" class="dropdown-content9">
    <input type="text" placeholder="Search.." id="myInput9" onkeyup="filterFunction9()">
    <a href="#about">About</a>
  </div>
</div>

<div class="dropdown10">
  <button onclick="myFunction10()" class="dropbtn10" style="background:transparent">
  <span style="color:#06022A">SIZE</span>
  <img class="downArrow2" src="<?php echo get_template_directory_uri(); ?>/downArrow.png" 
  style="">
  <div style=""></div></button>
  <div id="myDropdown10" class="dropdown-content10">
    <input type="text" placeholder="Search.." id="myInput10" onkeyup="filterFunction10()">
    <a href="#about">About</a>
  </div>
</div>


<div class="dropdown11">
  <button onclick="myFunction11()" class="dropbtn11" style="background:transparent">
  <span style="color:#06022A">QUANTITY</span>
  <img class="downArrow3" src="<?php echo get_template_directory_uri(); ?>/downArrow.png">
  <div style=""></div></button>
  <div id="myDropdown11" class="dropdown-content11">
  <div class="quantity">
				<label class="screen-reader-text" for="quantity_5fbfbdf8536b2">ABSTRACT PRINT quantity</label>
		<input type="number" id="quantity_5fbfbdf8536b2" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
			</div>
  </div>
</div>

</div>

<div class="horizontalLines">
  <hr class="line1">
  <hr class="line2">
  <hr class="line3">
</div>

<div class="buttonCircle">
<div class="buttonStuff">
  <button class="addKart"><img class="kart2" src="http://localhost/TestWordPress/wordpress/wp-content/themes/storefront/kart.png">ADD TO CART</button>
</div>
<div class="heartOval">
<span class="singleOval"><img src="<?php echo get_template_directory_uri(); ?>/greyOval.png"></span>

<img class="singleBlueHeart" src="<?php echo get_template_directory_uri(); ?>/blueHeart.png">
</div>

</div>

<div class="smallSection">
  <h10>About the artist.</h10>

  <div class="personInfo">
    <img class="blackFace" src="<?php echo get_template_directory_uri(); ?>/blackFace.png">
    <p class="personPar">Joined on Mar 20 2014.
    <br>original art by Kay Khadija
    <br>IG @sabrenakhadija</p>
  </div>

  <div class="imagesSection">
    <img class="arrowLeft" src="<?php echo get_template_directory_uri(); ?>/arrowLeft.png">
    <img class="elephant" src="<?php echo get_template_directory_uri(); ?>/elephant.png">
    <img src="<?php echo get_template_directory_uri(); ?>/womanFaces.png">
    <img src="<?php echo get_template_directory_uri(); ?>/colourElephants.png">
    <img src="<?php echo get_template_directory_uri(); ?>/can.png">
    <img class="arrowRight" src="<?php echo get_template_directory_uri(); ?>/arrowRight.png">
  </div>

  <button>SEE MORE</button>
</div>

<div class="otherPrints">
  <h11>You might like.</h11>

  <div class="showPrints">
    <div>
      <a href="http://localhost/TestWordPress/wordpress/product/abstract-print-5/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="228" height="228" src="http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi.png 228w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi-150x150.png 150w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi-24x24.png 24w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi-36x36.png 36w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi-48x48.png 48w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi-100x100.png 100w" sizes="(max-width: 228px) 100vw, 228px"><h2 class="woocommerce-loop-product__title">ABSTRACT PRINT</h2>
	    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>100.00</bdi></span></span>
      </a>
    </div>
    <div>
      <a href="http://localhost/TestWordPress/wordpress/product/abstract-print-6/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="228" height="228" src="http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi2.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi2.png 228w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi2-150x150.png 150w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi2-24x24.png 24w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi2-36x36.png 36w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi2-48x48.png 48w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi2-100x100.png 100w" sizes="(max-width: 228px) 100vw, 228px"><h2 class="woocommerce-loop-product__title">ABSTRACT PRINT</h2>
	    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>100.00</bdi></span></span>
      </a>
    </div>
    <div class="lucreciaSection">
      <a href="http://localhost/TestWordPress/wordpress/product/abstract-print-7/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="193" height="262" src="http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/lucrecia.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/lucrecia.png 193w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/lucrecia-18x24.png 18w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/lucrecia-27x36.png 27w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/lucrecia-35x48.png 35w" sizes="(max-width: 193px) 100vw, 193px"><h2 class="woocommerce-loop-product__title">ABSTRACT PRINT</h2>
	    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>100.00</bdi></span></span>
      </a>
    </div>
    <div class="lastpicture">
      <a href="http://localhost/TestWordPress/wordpress/product/abstract-print-8/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="256" height="187" src="http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi01.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi01.png 256w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi01-24x18.png 24w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi01-36x26.png 36w, http://localhost/TestWordPress/wordpress/wp-content/uploads/2020/10/bmi01-48x35.png 48w" sizes="(max-width: 256px) 100vw, 256px"><h2 class="woocommerce-loop-product__title">ABSTRACT PRINT</h2>
	    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>100.00</bdi></span></span>
      </a>
    </div>
  </div>
</div>



<script>
	function myFunction9() {
  		document.getElementById("myDropdown9").classList.toggle("show9");
}

function filterFunction9() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput9");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown9");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}



function myFunction10() {
  		document.getElementById("myDropdown10").classList.toggle("show10");
}

function filterFunction10() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput10");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown10");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}




function myFunction11() {
  		document.getElementById("myDropdown11").classList.toggle("show11");
}

function filterFunction11() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput11");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown11");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
