<?php
include 'includes/header.php';
include 'Classes/Project.php';
include 'Classes/ProjectDetails.php';
?>
    <div class="container-fluid page_container">
        <div class="container col-sm-3 desktop_version">
            <img src="images/logoaventus.png" alt="logo">
            <ul class="nav nav-tabs nav-stacked">
                <li><a data-toggle="tab" href="#menu1" class="nav_link">Webapplicaties</a></li>
                <li><a data-toggle="tab" href="#menu2">Desktopapplicaties</a></li>
                <li><a data-toggle="tab" href="#menu3" class="nav_link">Games</a></li>
            </ul>
        </div>
        <div class="col-sm-9 content_container">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Kies een type applicatie om projecten te bekijken.</h3>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Webapplicaties</h3>
                    <?php
                    $project = new Project();
                    $result = $project->getProjects("web");
                    while($row=mysqli_fetch_array($result)) {
                        $project_id = $row['project_id'];
                        ?>
                        <div class="custom_card col-xs-12 col-sm-4">
                            <div class="card_img">
                                <img src="<?php echo $row['project_thumbnail'] ?>" alt="project_thumbnail"
                                     style="width: 100%; height: 100%;">
                            </div>
                            <h4 class="card_title"><?php echo $row['project_name'] . ", gemaakt door " . $row['student_name'] ?></h4>
                            <div class="card_text">
                                <p><?php echo $row['project_description'] ?></p>
                            </div>
                            <button type="button" class="btn btn-info btn-lg card_btn btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['project_id'] ?>">Ga naar project</button>
                        </div>

                        <div class="modal fade" id="myModal<?php echo $row['project_id'] ?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><?php echo $row['project_name'] . ", gemaakt door " . $row['student_name'] ?></h4>
                                    </div>
                                    <div class="modal-body project_details">
                                        <div class="img_container col-xs-12 col-sm-6">

                                            <h2>Carousel Example</h2>
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                                <div class="carousel-inner">

                                                    <?php
                                                    $project2 = new ProjectDetails();
                                                    $result2 = $project2->getProjectDetails($project_id);
                                                    $i = 0;
                                                    while($row2=mysqli_fetch_array($result2)) {
                                                        $i++;
                                                        ?>
                                                        <div class="item<?php if($i == 1) { echo " active"; } ?>">
                                                            <img src="<?php echo $row2['image'] ?>" alt="project_images" style="width:100%;">
                                                        </div>

                                                        <?php
                                                    } ?>



                                                    <!-- Left and right controls -->
                                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>




                                        </div>
                                        <div class="text_container col-xs-12 col-sm-6">
                                            <?php echo $row['project_description'] ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?php echo $row['download_link'] ?>" class="btn btn-success visit_website">Bezoek website</a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php

                    }
                    ?>

                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Desktopapplicaties</h3>
                    <?php
                    $project = new Project();
                    $result = $project->getProjects("desktop");
                    while($row=mysqli_fetch_array($result)) {
                        $project_id = $row['project_id'];
                        ?>
                        <div class="custom_card col-xs-12 col-sm-4">
                            <div class="card_img">
                                <img src="<?php echo $row['project_thumbnail'] ?>" alt="project_thumbnail"
                                     style="width: 100%; height: 100%;">
                            </div>
                            <h4 class="card_title"><?php echo $row['project_name'] . ", gemaakt door " . $row['student_name'] ?></h4>
                            <div class="card_text">
                                <p><?php echo $row['project_description'] ?></p>
                            </div>
                            <button type="button" class="btn btn-info btn-lg card_btn btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['project_id'] ?>">Ga naar project</button>
                        </div>

                        <div class="modal fade" id="myModal<?php echo $row['project_id'] ?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><?php echo $row['project_name'] . ", gemaakt door " . $row['student_name'] ?></h4>
                                    </div>
                                    <div class="modal-body project_details">
                                        <div class="img_container col-xs-12 col-sm-6">

                                            <h2>Carousel Example</h2>
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                                <div class="carousel-inner">

                                                    <?php
                                                    $project2 = new ProjectDetails();
                                                    $result2 = $project2->getProjectDetails($project_id);
                                                    $i = 0;
                                                    while($row2=mysqli_fetch_array($result2)) {
                                                        $i++;
                                                        ?>
                                                        <div class="item<?php if($i == 1) { echo " active"; } ?>">
                                                            <img src="<?php echo $row2['image'] ?>" alt="project_images" style="width:100%;">
                                                        </div>

                                                        <?php
                                                    } ?>



                                                    <!-- Left and right controls -->
                                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>




                                        </div>
                                        <div class="text_container col-xs-12 col-sm-6">
                                            <?php echo $row['project_description'] ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="" class="btn btn-success visit_website" download>Download applicatie</a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php

                    }
                    ?>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Games</h3>
                    <?php
                    $project = new Project();
                    $result = $project->getProjects("game");
                    while($row=mysqli_fetch_array($result)) {
                        $project_id = $row['project_id'];
                        ?>
                    <div class="custom_card col-xs-12 col-sm-4">
                        <div class="card_img">
                            <img src="<?php echo $row['project_thumbnail'] ?>" alt="project_thumbnail"
                                 style="width: 100%; height: 100%;">
                        </div>
                        <h4 class="card_title"><?php echo $row['project_name'] . ", gemaakt door " . $row['student_name'] ?></h4>
                        <div class="card_text">
                            <p><?php echo $row['project_description'] ?></p>
                        </div>
                        <button type="button" class="btn btn-info btn-lg card_btn btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['project_id'] ?>">Ga naar project</button>
                    </div>

                    <div class="modal fade" id="myModal<?php echo $row['project_id'] ?>" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><?php echo $row['project_name'] . ", gemaakt door " . $row['student_name'] ?></h4>
                                </div>
                                <div class="modal-body project_details">
                                    <div class="img_container col-xs-12 col-sm-6">

                                        <h2>Carousel Example</h2>
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                            <div class="carousel-inner">

                                                <?php
                                                $project2 = new ProjectDetails();
                                                $result2 = $project2->getProjectDetails($project_id);
                                                $i = 0;
                                                while($row2=mysqli_fetch_array($result2)) {
                                                    $i++;
                                                    ?>
                                                    <div class="item<?php if($i == 1) { echo " active"; } ?>">
                                                        <img src="<?php echo $row2['image'] ?>" alt="project_images" style="width:100%;">
                                                    </div>

                                                    <?php
                                                } ?>



                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>




                                    </div>
                                    <div class="text_container col-xs-12 col-sm-6">
                                        <?php echo $row['project_description'] ?>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="" class="btn btn-success visit_website" download>Download applicatie>Bezoek website</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
include 'includes/footer.php';