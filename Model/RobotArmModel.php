
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</head>
<body>

<?php

include "DB.php";

class RobotArmModel{
    var $db;
    var $dbConn;

    public function __construct() {
        $this->db=new DB();
        $this->dbConn=$this->db->getDB();
    }

    public function save($range1,$range2,$range3,$range4,$range5,$range6){
        try{
          
        $sql = "INSERT INTO robot_arm(motor1, motor2, motor3, motor4, motor5, motor6) VALUES('".$range1."', ".$range2.",'".$range3."','".$range4."','".$range5."',".$range6.")";
		$query = $this->dbConn->prepare($sql);
        $query->execute();
        return true;
     
    } catch(PDOException $e) {
		return $e->getMessage();
	}

    }

    public function display(){
        try{
          
            $sql = "SELECT * FROM robot_arm WHERE id=(SELECT max(id) FROM robot_arm)";
            $query = $this->dbConn->prepare($sql);
            $query->execute();
          
            foreach ($query as $row){
                $status=($row['status']==1)?$status='On' : $status='Off';
                echo "
                  <div class='container'>
                  <div class='col-md-6' style='margin-top:5%;'>
                  <h3>Robot Arm Details:</h3>
                   <table class='table table-bordered table-striped table-hover'>
                   <th>Motor No.</th>
                   <th>Degree Value</th>
                     <tr>
                         <td> motor1 </td>
                         <td>".$row['motor1']."</td>
                    </tr>

                    <tr>
                         <td> motor2 </td>
                         <td>".$row['motor2']."</td>
                    </tr>

                    <tr>
                         <td> motor3 </td>
                         <td>".$row['motor3']."</td>
                    </tr>

                    <tr>
                         <td> motor4 </td>
                         <td>".$row['motor4']."</td>
                    </tr>

                    <tr>
                         <td> motor5 </td>
                         <td>".$row['motor5']."</td>
                    </tr>

                    <tr>
                         <td> motor6 </td>
                         <td>".$row['motor6']."</td>
                    </tr>
                    
                    <tr style='background-color:#BDC7C9;'>
                    <td><b>Robot Status</b> </td>
                    <td><b>".$status."</b></td>
                    </tr>

                </table>
                </div>
                </div>
                ";
            }
            
           

            return true;
         
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    public function on(){
        try{
          
        $sql = "UPDATE robot_arm SET status=1 WHERE id=(SELECT max(id) FROM robot_arm)";
		$query = $this->dbConn->prepare($sql);
        $query->execute();
        return true;
     
    } catch(PDOException $e) {
		return $e->getMessage();
	}

    }

    public function off(){
        try{
          
        $sql = "UPDATE robot_arm SET status=0 WHERE id=(SELECT max(id) FROM robot_arm)";
		$query = $this->dbConn->prepare($sql);
        $query->execute();
        return true;
     
    } catch(PDOException $e) {
		return $e->getMessage();
	}

    }


}

    ?>

</body>

</html>