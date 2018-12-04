<?php
/**
 * Created by PhpStorm.
 * User: Iris
 * Date: 20-11-2018
 * Time: 11:59
 */

class Project
{
    public function __construct(){

    }

    public function getProjects($type){
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql = "SELECT * FROM project WHERE type = '$type' ORDER BY project_year";
        $result = $conn->query($sql);
        return $result;
    }

    public function getAllProjects($course){
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql = "SELECT * FROM project WHERE course='$course'";
        $result = $conn->query($sql);
        return $result;
    }

    public function getSearchedProject($keyword){
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $string = "{$keyword}%";
        $sql="SELECT * FROM project WHERE 
          project_name LIKE ? OR 
          student_name LIKE ? OR 
          project_year LIKE ? OR 
          course LIKE ? OR 
          type LIKE ?
          ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $string, $string, $string, $string, $string);
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