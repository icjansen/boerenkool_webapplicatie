<?php
include 'Classes/Database.php';
include 'Classes/Project.php';
include 'Classes/ProjectDetails.php';

$db = Database::getInstance();
$conn = $db->getConnection();

//$sql = "SELECT * FROM project WHERE project_name = ?";
//
//$stmt = $conn->prepare($sql);
//$stmt->bind_param("s", $_GET['q']);
//$stmt->execute();
//$stmt->store_result();
//$stmt->bind_result($project_id, $project_name, $project_description, $project_year, $student_name, $download_link, $course,$project_thumbnail, $type);
//$stmt->fetch();
//$stmt->close();
?>
<?php
$project = new Project();
$keyword = mysqli_real_escape_string($conn, $_GET['q']);
$result = $project->getSearchedProject($keyword);
include 'includes/content.php';