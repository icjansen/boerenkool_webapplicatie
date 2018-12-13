<?php
/** Hier word er in de database een tabel aangemaakt onder de naam project.
   In deze tabel worden de projecten van medestudenten opgeslagen, zodat deze getoond kunnen worden op de website.
 */

class Project
{
    public function __construct(){

    }

    public function getProjects($type){
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql = "SELECT * FROM project WHERE type = '$type' ORDER BY project_year DESC";
        $result = $conn->query($sql);
        return $result;
    }

//    public function getAllProjects($study){
//        $db = Database::getInstance();
//        $conn = $db->getConnection();
//        $sql = "SELECT * FROM project WHERE study='$study'";
//        $result = $conn->query($sql);
//        return $result;
//    }


/** Hieronder staat een search functie door in de database zoekt naar het onderwerp waarop gezocht wordt in de searchbar.*/

    public function getSearchedProject($keyword){
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $string = "{$keyword}%";
        $sql="SELECT * FROM project WHERE 
          project_name LIKE ? OR 
          student_name LIKE ? OR 
          project_year LIKE ? OR 
          course_name LIKE ? OR
          type LIKE ? OR 
          study LIKE ?
          ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $string, $string, $string, $string, $string, $string);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }

//    public function getProjectDetails($project_id){
//        $db = Database::getInstance();
//        $conn = $db->getConnection();
//        $sql = "SELECT * FROM project WHERE type = '$project_id'";
//        $result = $conn->query($sql);
//        return $result;
//    }
}