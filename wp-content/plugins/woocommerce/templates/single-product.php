
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

<span class="erin">
Erin Isaacs</span>

<span class="singlePrint">Abstract print</span>

<span class="reviewsSection"><img src="<?php echo get_template_directory_uri(); ?>/reviewsPic.png"></span>

<label class="printPrice">£100.00</label>

<img class="bigWave" src="<?php echo get_template_directory_uri(); ?>/bigWWave.png">

<p class="productInfo">Our range of framed prints are eye catching, 
<br> hassle free gifts that are perfect for livening
<br> up a space with minimal effort.
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
    <input type="text" placeholder="Search.." id="myInput11" onkeyup="filterFunction11()">
    <a href="#about">About</a>
  </div>
</div>

</div>

<div class="horizontalLines">
  <hr class="line1">
  <hr class="line2">
  <hr class="line3">
</div>

<div class="buttonStuff">
  <button class="addKart"><img class="kart2" src="http://localhost/TestWordPress/wordpress/wp-content/themes/storefront/kart.png">ADD TO CART</button>
</div>
<div class="heartOval">
<span class="singleOval"><img src="<?php echo get_template_directory_uri(); ?>/greyOval.png"></span>

<img class="singleBlueHeart" src="<?php echo get_template_directory_uri(); ?>/blueHeart.png">
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
      <img src="<?php echo get_template_directory_uri(); ?>/bmi.png">
      <label class="heading1">ABSTRACT PRINT <img class="heart1" src="<?php echo get_template_directory_uri(); ?>/blueHeart.png"></label>
      <label class="price1">£100.00</label>
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/bmi2.png">
      <label class="heading2">ABSTRACT PRINT <img class="heart2" src="<?php echo get_template_directory_uri(); ?>/blueHeart.png"></label>
      <label class="price2">£100.00</label>
    </div>
    <div class="lucreciaSection">
      <img class="lucrecia" src="<?php echo get_template_directory_uri(); ?>/lucrecia.png">
      <label class="heading3">ABSTRACT PRINT <img class="heart3" src="<?php echo get_template_directory_uri(); ?>/blueHeart.png"></label>
      <label class="price3">£100.00</label>
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/bmi01.png">
      <label class="heading4">ABSTRACT PRINT <img class="heart4" src="<?php echo get_template_directory_uri(); ?>/blueHeart.png"></label>
      <label class="price4">£100.00</label>
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
