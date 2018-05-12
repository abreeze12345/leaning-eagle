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
            <h1 class="main-text animated zoomInDown">Leaning Eagle</h1>
            <h1 class="secondary-text animated zoomInUp"> Coffee Bar</h1>
            </div>
        </div>
        <div class="row lp-row-2">
            <div class="col-3">
                Test1
            </div>
            <div class="col-3">
                Test2
            </div>
            <div class="col-3">
                Test3
            </div>
            <div class="col-3">
                Test4
            </div>
        </div>
    </div>


<?php
//Retrieves footer
get_footer();
?>