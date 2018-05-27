<?php
/* Template Name: Menu */

//Retrieves header
get_header();
?>

<!-- Stylized Container -->
<div class="container menu-container rounded">
    <div class="row head">
        <div class="col text-center">
            <h1>DRINKS</h1>
            <div class="hline"></div>
            <p>Our espresso-based drinks are made from scratch yadayadayada</p>
        </div>
    </div>
    <div class="row">
        <?php echo do_shortcode("[post_grid id='45']"); ?>
    </div>
</div>


<?php
//Retrieves footer
get_footer();
?>
