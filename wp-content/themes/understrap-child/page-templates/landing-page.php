<?php
/* Template Name: Landing Page */

//Retrieves header
get_header();
?>

    <!-- Loader Element -->
    <div id="loader"></div>

    <div class="container-fluid" id="content" style="display: none;">

        <!-- First Section -->
        <div class="row lp-row-1 align-items-center"
             style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/temp-1-comp.jpg);">
            <div class="col-6 offset-3 text-center">
                <h1 class="main-text animated zoomInDown short-wait">Leaning Eagle</h1>
                <h1 class="secondary-text animated zoomInUp short-wait"> Coffee Bar</h1>
            </div>
        </div>

        <!--- Second Section -->
        <div class="row lp-row-2 animated slideInUp short-wait">
            <div class="col-12 col-md-6 col-lg-3 center-all" id="cell-1"
                 style="background-image: url(<?php echo get_template_directory_uri() . '/img/chca.jpg' ?>">
                <a data-toggle="modal" data-target="#front-modal"><h1>Where?</h1></a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 blur center-all" id="cell-2"
                 style="background-image: url(<?php echo get_template_directory_uri() . '/img/drinks.jpg' ?>">
                <a href="#"><h1>Drinks</h1></a>
            </div>
            <div class="col-12 col-md-6 col-lg-3 blur center-all" id="cell-3"
                 style="background-image: url(<?php echo get_template_directory_uri() . '/img/food.jpg' ?>">
                <a href="#"><h1>Food</h1></a>
            </div>
            <div class="col-12 col-md-6 col-lg-3 blur center-all" id="cell-4"
                 style="background-image: url(<?php echo get_template_directory_uri() . '/img/students.jpg' ?>">
                <a href="#"><h1>Students</h1></a>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade animated pulse" tabindex="-1" role="dialog" id="front-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Where?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="map"></div>
                        <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY4JRUZlVSe_C_cBF3H3F9qA-aCEXG29Q&callback=initMap"></script>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title">Contact Us</h5>
                    </div>
                    <div class="modal-body">
                        <form action="submission.php" method="post">
                            <div class="form-group row">
                                <div class="col-5">
                                    <input name="fname" type="text" class="form-control" placeholder="first name">
                                </div>
                                <div class="col-7">
                                    <input name="lname" type="text" class="form-control" placeholder="last name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <input name="email" type="text" class="form-control" placeholder="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <textarea name="message" class="form-control" placeholder="leave us a message" row="5"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
//Retrieves footer
get_footer();
?>