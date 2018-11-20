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

    public function getProjects(){
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql = "SELECT * FROM project WHERE type = 'web'";
    }
}