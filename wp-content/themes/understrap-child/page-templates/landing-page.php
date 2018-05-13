<?php
/* Template Name: Landing Page */

//Retrieves header
get_header();
?>

    <!-- First Section -->
    <div class="container-fluid">
        <div class="row lp-row-1 align-items-center"
             style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/temp-1-comp.jpg);">
            <div class="col-6 offset-3 text-center">
            <h1 class="main-text animated zoomInDown short-wait">Leaning Eagle</h1>
            <h1 class="secondary-text animated zoomInUp short-wait"> Coffee Bar</h1>
            </div>
        </div>
        <div class="row lp-row-2 animated slideInUp med-wait">
            <div class="col-12 col-md-6 col-lg-3 blur center-all" id="cell-1" style="background-image: url(<?php echo get_template_directory_uri() . '/img/chca.jpg' ?>">
                <h4>Where?</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 blur center-all" id="cell-2" style="background-image: url(<?php echo get_template_directory_uri() . '/img/drinks.jpg' ?>">
                <h4>Drinks</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 blur center-all" id="cell-3" style="background-image: url(<?php echo get_template_directory_uri() . '/img/food.jpg' ?>">
                <h4>Food</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 blur center-all" id="cell-4" style="background-image: url(<?php echo get_template_directory_uri() . '/img/chca.jpg' ?>">
                <h4>Test4</h4>
            </div>
        </div>
    </div>


<?php
//Retrieves footer
get_footer();
?>