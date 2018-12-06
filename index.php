<?php
include 'includes/header.php';
include 'Classes/Project.php';
include 'Classes/ProjectDetails.php';
?>

    <div class="container-fluid page_container">
        <div class="container col-sm-3 desktop_version">
            <img src="images/logoaventus.png" alt="logo">

           <?php include 'includes/search.php'; ?>

            <!-- Hier word weergeven wat er in de navbar staat op het beginscherm -->


            <ul class="nav nav-tabs nav-stacked">
                <li class="tab-toggle"><a data-toggle="tab" href="#menu1" class="nav_link">Webapplicaties</a></li>
                <li class="tab-toggle"><a data-toggle="tab" href="#menu2">Desktopapplicaties</a></li>
                <li class="tab-toggle"><a data-toggle="tab" href="#menu3" class="nav_link">Games</a></li>
            </ul>
        </div>
        <div class="col-sm-9 content_container">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Kies in de navigatiebalk een type applicatie om te sorteren.</h3>
                </div>
                <div id="menu1" class="tab-pane fade">

                    <!-- Hier worden de webapplicaties weergeven -->


                    <h3>Webapplicaties</h3>
                    <?php
                    $project = new Project();
                    $result = $project->getProjects("web");
                    include 'includes/content.php';
                    ?>
                </div>

                <!-- Hier worden de desktop applicaties weergeven -->

                <div id="menu2" class="tab-pane fade">
                    <h3>Desktopapplicaties</h3>
                    <?php
                    $project = new Project();
                    $result = $project->getProjects("desktop");
                    include 'includes/content.php';
                    ?>
                </div>

                <!-- Hier worden de games weergeven -->

                <div id="menu3" class="tab-pane fade">
                    <h3>Games</h3>
                    <?php
                    $project = new Project();
                    $result = $project->getProjects("game");
                    include 'includes/content.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
include 'includes/footer.php';