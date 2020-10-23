
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
<ul class="singleList" style="list-style-type:none;position:absolute;right:750px;bottom:300px">
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

<span class="erin" style="position:absolute;left:830px;bottom:260px;font-size:15px;color:#1C1C1C;letter-spacing: 1.96154px;">
Erin Isaacs</span>

<span class="singlePrint" style="color:#1C1C1C;font-size:38px;line-height:49px;
left:832px;top:450px;position:absolute">Abstract print</span>

<p class="productInfo" style="position:absolute;top:600px;left:830px">Our range of framed prints are eye catching, 
<br> hassle free gifts that are perfect for livening
<br> up a space with minimal effort.
</p>

<div class="dropdown9" style="position:absolute;left:850px;top:700px">
  <button onclick="myFunction9()" class="dropbtn9">
  <span style="">FRAME</span>
  <img src="<?php echo get_template_directory_uri(); ?>/downArrow.png" 
  style="">
  <div style=""></div></button>
  <div id="myDropdown9" class="dropdown-content9">
    <input type="text" placeholder="Search.." id="myInput9" onkeyup="filterFunction9()">
    <a href="#about">About</a>
  </div>
</div>

<div class="dropdown10" style="position:absolute;left:850px;top:800px">
  <button onclick="myFunction10()" class="dropbtn10">
  <span style="">SIZE</span>
  <img src="<?php echo get_template_directory_uri(); ?>/downArrow.png" 
  style="">
  <div style=""></div></button>
  <div id="myDropdown10" class="dropdown-content10">
    <input type="text" placeholder="Search.." id="myInput10" onkeyup="filterFunction10()">
    <a href="#about">About</a>
  </div>
</div>


<div class="dropdown11" style="position:absolute;left:850px;top:900px">
  <button onclick="myFunction11()" class="dropbtn11">
  <span style="">QUANTITY</span>
  <img src="<?php echo get_template_directory_uri(); ?>/downArrow.png" 
  style="">
  <div style=""></div></button>
  <div id="myDropdown11" class="dropdown-content11">
    <input type="text" placeholder="Search.." id="myInput11" onkeyup="filterFunction11()">
    <a href="#about">About</a>
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
