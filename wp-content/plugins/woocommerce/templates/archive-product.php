<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header test2">
<div class="mainInfo">
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">
  <span style="font-size:12px;margin-right:25px">Sort By:</span> 
  <span style="color:#5D5D5D;margin-right:25px">Recommended 
  <img class="downArrow" src="<?php echo get_template_directory_uri(); ?>/downArrow.png"></span></button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#about">About</a>
  </div>
</div>

<div class="dropdown2">
  <button onclick="myFunction2()" class="dropbtn2">Category</button><span>|</span>
  <div id="myDropdown2" class="dropdown-content2">
    <input type="text" placeholder="Search.." id="myInput2" onkeyup="filterFunction2()">
    <a href="#about">About</a>
  </div>
</div>

<div class="dropdown3">
  <button onclick="myFunction3()" class="dropbtn3">Style</button><span>|</span>
  <div id="myDropdown3" class="dropdown-content3">
    <input type="text" placeholder="Search.." id="myInput3" onkeyup="filterFunction3()">
    <a href="#about">About</a>
  </div>
</div>

<div class="dropdown4">
  <button onclick="myFunction4()" class="dropbtn4">Colour</button><span>|</span>
  <div id="myDropdown4" class="dropdown-content4">
    <input type="text" placeholder="Search.." id="myInput4" onkeyup="filterFunction4()">
    <a href="#about">About</a>
  </div>
</div>

<div class="dropdown5">
  <button onclick="myFunction5()" class="dropbtn5">Collection</button><span>|</span>
  <div id="myDropdown5" class="dropdown-content5">
    <input type="text" placeholder="Search.." id="myInput5" onkeyup="filterFunction5()">
    <a href="#about">About</a>
  </div>
</div>

<div class="dropdown6">
  <button onclick="myFunction6()" class="dropbtn6">Size</button><span>|</span>
  <div id="myDropdown6" class="dropdown-content6">
    <input type="text" placeholder="Search.." id="myInput6" onkeyup="filterFunction6()">
    <a href="#about">About</a>
  </div>
</div>

<div class="dropdown7">
  <button onclick="myFunction7()" class="dropbtn7">Medium</button><span>|</span>
  <div id="myDropdown7" class="dropdown-content7">
    <input type="text" placeholder="Search.." id="myInput7" onkeyup="filterFunction7()">
    <a href="#about">About</a>
  </div>
</div>

<div class="dropdown8">
  <button onclick="myFunction8()" class="dropbtn8">Price</button>
  <div id="myDropdown8" class="dropdown-content8">
    <input type="text" placeholder="Search.." id="myInput8" onkeyup="filterFunction8()">
    <a href="#about">About</a>
  </div>
</div>

<div class="small-description">
	<p class="par1">Perfect for every room our range of wall art options </p>
	<p class="par2">were made right to fit any budget or space.</p>
</div>

</div>

<div class="buttonColour">
<button class="newPrints">See all new prints</button>
</div>



<script>
	function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
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


function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show2");
}

function filterFunction2() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown2");
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

function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show3");
}

function filterFunction3() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown3");
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

function myFunction4() {
  document.getElementById("myDropdown4").classList.toggle("show4");
}

function filterFunction4() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown4");
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

function myFunction5() {
  document.getElementById("myDropdown5").classList.toggle("show5");
}

function filterFunction5() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput5");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown5");
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

function myFunction6() {
  document.getElementById("myDropdown6").classList.toggle("show6");
}

function filterFunction6() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput6");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown6");
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

function myFunction7() {
  document.getElementById("myDropdown7").classList.toggle("show7");
}

function filterFunction7() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput7");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown7");
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

function myFunction8() {
  document.getElementById("myDropdown8").classList.toggle("show8");
}

function filterFunction8() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput8");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown8");
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
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
