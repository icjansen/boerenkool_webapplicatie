<?php
include 'includes/header.php';
?>
    <div class="container-fluid desktop_version">
        <div class="container col-sm-3">
            <img src="images/logoaventus.png" alt="logo" >
            <ul class="nav nav-tabs nav-stacked">
                <li class="active"><a data-toggle="tab" href="#home">Webapplicaties</a></li>
                <li><a data-toggle="tab" href="#menu1">Desktopapplicaties</a></li>
                <li><a data-toggle="tab" href="#menu2">Games</a></li>
            </ul>


        </div>
        <div class="col-sm-9">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Webapplicaties</h3>
                    <div class="custom_card col-xs-12 col-sm-4">
                        <div class="card_img">
                            <img src="images/placeholder.png" alt="project_thumbnail" style="width: 100%; height: 100%;">
                        </div>
                        <h4 class="card_title">Projectnaam</h4>
                        <div class="card_text">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat.

                            </p>
                        </div>
                        <a class="card_btn btn btn-primary" href="#">Ga naar project</a>
                    </div>
                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Desktopapplicaties</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Games</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
        </div>
    </div>
    </div>

<?php
include 'includes/footer.php';