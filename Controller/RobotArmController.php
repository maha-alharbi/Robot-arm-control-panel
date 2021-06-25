
<?php

include "../Model/RobotArmModel.php";

$RobotArmModel = "";
$RobotArmModel=new RobotArmModel();

if(isset($_POST['action'])){
    if($_POST['action']=="save"){
        if(isset($_POST)){
            $RobotArmModel->save($_POST['range1'],$_POST['range2'],$_POST['range3'],$_POST['range4'],$_POST['range5'],$_POST['range6']);
            $msg="Data Saved Successfully!";
            header("Location:../View/index.php?Message=".$msg);
           
        }else{
            header("Location: ../View/index.php");
            }
    }
}

if(isset($_GET['action'])){
    if($_GET['action']=="on"){
        $RobotArmModel->on();
        $msg="The Robot Arm is On now!";
        header("Location:../View/index.php?Message=".$msg);

    }
    elseif($_GET['action']=="off"){
        $RobotArmModel->off();
        $msg="The Robot Arm is Off now!";
        header("Location:../View/index.php?Message=".$msg);
    }
}

    ?>