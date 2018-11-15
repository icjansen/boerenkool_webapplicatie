<?php
include 'includes/header.php';
?>
    <div class="container-fluid desktop_version">
        <div class="container col-sm-3">
            <h2>Dynamic Tabs</h2>
            <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

            <ul class="nav nav-tabs nav-stacked">
                <li class="active"><a data-toggle="tab" href="#menu1">Webapplicaties</a></li>
                <li><a data-toggle="tab" href="#menu2">Desktopapplicaties</a></li>
                <li><a data-toggle="tab" href="#menu3">Games</a></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Webapplicaties</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Desktopapplicaties</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        </div>
    </div>

<?php
include 'includes/footer.php';