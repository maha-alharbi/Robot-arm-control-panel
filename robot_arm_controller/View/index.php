<!DOCTYPE html>

<html>





<head>
<title>Robot Arm Control Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="style.css" rel="stylesheet">

<script src="script.js"></script>


</head>

<body id="bng">

  




<center>

<?php

if(isset($_GET['Message'])){
  echo "
<center>
<div class='col-md-6' style='margin-top:0.5%; '>

<div class='alert alert-success d-flex align-items-center alert-dismissible fade show' role='alert'>
  <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>

  <div>
  ".$_GET['Message']."
  <button type='button' class='btn-close pull-right' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>
  
</div>
</div>

</center>
  ";
  unset($_GET['Message']);
}


?>

<form id="degreeForm" name="degreeForm" method="POST" action="../Controller/RobotArmController.php" onreset="resetDeg()">

<div class="col-md-6" style="margin-top: 1%;">
<div class="card text-white bg-dark" id="cardstyle">
<div class="card-body">
<div class="container-fluid ">
    
        
            <div class="col-md-9" style="padding-bottom: 5%; text-align:center">
             <span id="topTitle">Robot Arm Control Panel</span>
            </div>
      
  

   
    <div class="row">
        <div class="col-md-6"> 
            <label for="customRange2" class="form-label">Motor 1</label>
            <input type="range" class="form-range" min="0" max="180" id="range1"  name="range1" value="0" oninput="sliderChange(this.value,this.id)">
        </div>
    
        <div class="col-sm-3"></div>
  
    
        <div class="col-sm-2 "> 
        <label for="customRange2" class="form-label">Degree Value</label>
         <p id="value1" name="degValue1"> 0 &deg</p>
        </div>
   
    </div>


<div class="row">
    <div class="col-md-6"> 
        <label for="customRange2" class="form-label">Motor 2</label>
        <input type="range" class="form-range" min="0" max="180" id="range2"  name="range2" value="0"  oninput="sliderChange(this.value,this.id)">
    </div>
    <div class="col-sm-3"></div>
    <div class="col-sm-2" style="float:right;"> 
    <label for="customRange2" class="form-label"></label>
     <p id="value2" name="degValue2"> 0 &deg</p>
    </div>
</div>

<div class="row">
    <div class="col-md-6"> 
        <label for="customRange2" class="form-label">Motor 3</label>
        <input type="range" class="form-range" min="0" max="180" id="range3"  name="range3" value="0"  oninput="sliderChange(this.value,this.id)">
    </div>
    <div class="col-sm-3"></div>
    <div class="col-sm-2"> 
    <label for="customRange2" class="form-label"></label>
     <p id="value3" name="degValue3"> 0 &deg</p>
    </div>
</div>

<div class="row">
    <div class="col-md-6"> 
        <label for="customRange2" class="form-label">Motor 4</label>
        <input type="range" class="form-range" min="0" max="180" id="range4"   name="range4" value="0"  oninput="sliderChange(this.value,this.id)">
    </div>
    <div class="col-sm-3"></div>
    <div class="col-sm-2"> 
    <label for="customRange2" class="form-label"></label>
     <p id="value4" name="degValue4"> 0 &deg</p>
    </div>
</div>

<div class="row">
    <div class="col-md-6"> 
        <label for="customRange2" class="form-label">Motor 5</label>
        <input type="range" class="form-range" min="0" max="180" id="range5"  name="range5" value="0"  oninput="sliderChange(this.value,this.id)">
    </div>
    <div class="col-sm-3"></div>
    <div class="col-sm-2"> 
    <label for="customRange2" class="form-label"></label>
     <p id="value5" name="degValue5"> 0 &deg</p>
    </div>
</div>

<div class="row">
    <div class="col-md-6"> 
        <label for="customRange2" class="form-label">Motor 6</label>
        <input type="range" class="form-range" min="0" max="180" id="range6"  name="range6" value="0"  oninput="sliderChange(this.value,this.id)">
    </div>
    <div class="col-sm-3"></div>
    <div class="col-sm-2"> 
    <label for="customRange2" class="form-label"></label>
     <p id="value6" name="degValue6"> 0 &deg</p>
    </div>
</div>

<div class="container">
<div class="row justify-content-center" style="padding-top: 5%;">

    <div class="col-sm-2"> 
        <input type="hidden" name="action" value="save">
        <button class="btn btn-outline-primary" type="submit" name="save">Save</button>
    </div>

    <div class="col-sm-2"> 
        <button  class="btn btn-outline-warning" type="reset" name="reset" id="reset">Reset</button>
    </div>
   
    <div class="col-sm-2"> 
        <a href="../Controller/RobotArmController.php?action=on"> <button class="btn btn-success" style="width:7em; " type="button" name="run">Run</button> </a>
    </div>
</div>
</div>


<div class="col-sm-6" style="padding-top: 5%;">
<h6 style="text-align:center;"> &#169 By Maha Alharbi</h6>

</div>

</div>
</div>
</div>
</div>
</form>
</center>


</body>

</html>