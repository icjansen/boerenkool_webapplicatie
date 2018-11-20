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
                                            <?php
                                            $project2 = new ProjectDetails();
                                            $result2 = $project2->getProjectDetails($project_id);
                                            while($row2=mysqli_fetch_array($result2)) {
                                                ?>
                                                <img src="<?php echo $row2['image'] ?>" alt="slides" class="project_images">
                                            <?php } ?>
                                        </div>
                                        <div class="text_container col-xs-12 col-sm-6">
                                            ergewgfrehgrefgrt
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
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
                            <a class="card_btn btn btn-primary" href="#">Ga naar project</a>
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
                            <a class="card_btn btn btn-primary" href="#">Ga naar project</a>
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