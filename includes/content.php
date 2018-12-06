<?php

/** In deze file word aangegeven wat er allemaal uit de database word gehaald bij elke course die je aanklikt*/

while($row=mysqli_fetch_array($result)) {
                        $project_id = $row['project_id'];
                        ?>
                        <div class="custom_card col-xs-12 col-sm-6">
                            <div class="card_img text-center">

                            <!-- Hier word er een Thumbnail weergeven om de kijker een indruk te geven van het project. -->

                                  <img src="<?php echo $row['project_thumbnail'] ?>" alt="project_thumbnail"
                                     style="max-width: 100%; max-height: 100%;">
                            </div>
                            <h4 class="card_title"><?php echo $row['project_name'] . ", gemaakt door " . $row['student_name'] ?></h4>
                            <div class="card_text">
                                <p><?php echo $row['project_description'] ?></p>
                            </div>
                            <button type="button" class="btn btn-info btn-lg card_btn btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['project_id'] ?>">Ga naar project</button>
                        </div>

                        <div class="modal fade" id="myModal<?php echo $row['project_id'] ?>" role="dialog">
                            <div class="modal-dialog modal-lg">,
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        <!-- Hier wordt uit de database opgehaald welke student dit project gemaakt heeft, in welk jaar het gemaakt is en van welke opleiding hij/zij komt -->

                                        <h4 class="modal-title"><?php echo $row['project_name'] . ", gemaakt door " . $row['student_name'] ?></h4>
                                        <h4 class="modal-title">Opleiding: <?php echo $row['course'] ?>, leerjaar: <?php echo $row['project_year'] ?></h4>
                                    </div>
                                    <div class="modal-body project_details">
                                        <div class="row">
                                            <div class="img_container col-xs-12 col-sm-6">
                                                <div id="myCarousel<?php echo $row['project_id'] ?>" class="carousel slide" data-ride="carousel">

                                                    <div class="carousel-inner">

                                                        <1-- Hier word het verzochte project uit de database opgeroepen. -->

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

                                                         <!-- Hier word van de aangevraagde project een slideshow weergeven met plaatjes voor verduidelijking van het onderwerp. -->

                                                        <!-- Left and right controls -->
                                                        <a class="left carousel-control" href="#myCarousel<?php echo $row['project_id'] ?>" data-slide="prev">
                                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="right carousel-control" href="#myCarousel<?php echo $row['project_id'] ?>" data-slide="next">
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
                                    </div>

                                    <!-- Hier word verteld dat als er een webapplicatie geopend moet worden dan word dat gedaan in een nieuw tabblad
                                        Een Desktopapplicatie of een game moet gedownload worden om weergeven te kunnen worden -->

                                    <div class="modal-footer">
                                        <a href="<?php echo $row['download_link'] ?>" class="btn btn-success visit_website"
                                            <?php if( $row['type'] == "web"){
                                                echo 'target="_blank"';
                                            }else{
                                                echo 'download';
                                            }?>
                                        ><?php if( $row['type'] == "desktop" || $row['type'] == "game"){
                                                echo 'Download applicatie';
                                            }else{
                                            echo 'Bezoek website';
                                            }?></a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php

                    }
                    ?>