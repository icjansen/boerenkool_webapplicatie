<?php
include 'Classes/Database.php';
$db = Database::getInstance();
$conn = $db->getConnection();

$sql = "SELECT * FROM project WHERE project_name = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($project_id, $project_name, $project_description, $project_year, $student_name, $download_link, $course,$project_thumbnail, $type);
$stmt->fetch();
$stmt->close();

echo $project_name;
//echo "test";
//
////$name=$_GET['search_tag'];
//
//$sql = "SELECT * FROM project";
//$result=$conn->query($sql);
//
//
//while($row=mysqli_fetch_array($result)){
//    echo $row['project_name'];
//}