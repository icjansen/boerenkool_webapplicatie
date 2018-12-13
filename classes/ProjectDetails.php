<?php
/**
 Hier word er een nieuwe tabel aangemaakt in de database.
 */

class ProjectDetails
{
    public function __construct(){

    }

    public function getProjectDetails($project_id){
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql = "SELECT * FROM project_details WHERE project_id = '$project_id'";
        $result = $conn->query($sql);
        return $result;
    }
}