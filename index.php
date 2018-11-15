<?php
include 'includes/header.php';
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
                    $sql = "SELECT * FROM project WHERE type = 'web'";
                    $result=$conn->query($sql);
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
                <div id="menu2" class="tab-pane fade">
                    <h3>Desktopapplicaties</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Games</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam.</p>
                </div>
            </div>
        </div>
    </div>

<?php
include 'includes/footer.php';