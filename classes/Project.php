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

    public function getAllProjects(){
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql="SELECT * FROM project";
        $result = $conn->query($sql);
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