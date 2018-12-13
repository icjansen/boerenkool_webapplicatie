<!-- Hier word er een conntctie gemaakt met een online database.-->

<?php
session_start();
define('DB_HOST', '185.104.29.16');
define('DB_NAME', 'basbieckmann_boerenkool');
define('DB_USER', 'basbieckmann_boerenkool');
define('DB_PASS', 'metworst');
include_once 'classes/Database.php';
include 'classes/Project.php';
include 'classes/ProjectDetails.php';
