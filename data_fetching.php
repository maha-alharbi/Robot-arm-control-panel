
<head>
<title>Robot Arm Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<?php
include "Model/DB.php";

class Details{
var $db;
var $dbConn;
var $test;

public function __construct() {
    $this->db=new DB();
    $this->dbConn=$this->db->getDB();
}


public function displayDetails(){
    try{
      
        $sql = "SELECT * FROM robot_arm WHERE id=(SELECT max(id) FROM robot_arm)";
        $query = $this->dbConn->prepare($sql);
        $query->execute();
      
        foreach ($query as $row){
            $status=($row['status']==1)?$status='On' : $status='Off';
            echo "
              motor1: ".$row['motor1']."<br>
              motor2: ".$row['motor2']."<br>
              motor3: ".$row['motor3']."<br>
              motor4: ".$row['motor4']."<br>
              motor5: ".$row['motor5']."<br>
              motor6: ".$row['motor6']."<br>
              <b>Robot Status:</b> <b>".$status."</b> <br>
            ";
        }
        
        return true;
     
    } catch(PDOException $e) {
        return $e->getMessage();
    }
}



}

$display = new Details();
$display->displayDetails();

?>