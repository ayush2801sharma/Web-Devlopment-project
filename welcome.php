<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<?php  
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;
// Connect to the Database 
$servername = "127.0.0.1";
$username = "root";
$password = "tnt123";
$database = "notes";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['snoEdit'])){
           // Update the record
       
                  $sno = $_POST["snoEdit"];
                  $region = $_POST["regionEdit"];
                  $location = $_POST["locationEdit"];
                  $customername = $_POST["customernameEdit"];
                  $contactperson = $_POST["contactpersonEdit"];
                  $mobile = $_POST["mobileEdit"];
                  $emailid = $_POST["emailidEdit"];
                  $dispatchdetail = $_POST["dispatchdetailEdit"];
                  $projecttype = $_POST["projecttypeEdit"];
                  $linenumber = $_POST["linenumberEdit"];
                  $plant = $_POST["plantEdit"];
                  $productplatform = $_POST["productplatformEdit"];
                  $equipmentlinewise = $_POST["equipmentlinewiseEdit"];
                  $serialnumber = $_POST["serialnumberEdit"];
                  $numberofequipment = $_POST["numberofequipmentEdit"];
                  $thirdparty = $_POST["thirdpartyEdit"];
                  $planstartdate = $_POST["planstartdateEdit"];
                  $planenddate = $_POST["planenddateEdit"];
                  $numberoftempativesdays = $_POST["numberoftempativesdaysEdit"];
                  $salestechclearancesdate = $_POST["salestechclearancesdateEdit"];
                  $printer = $_POST["printerEdit"];
                  $controller = $_POST["controllerEdit"];
                  $motherboardtype = $_POST["motherboardtypeEdit"];
                  $halcontype = $_POST["halcontypeEdit"];
                  $hdd = $_POST["hddEdit"];
                  $ram = $_POST["ramEdit"];
                  $cameramodule = $_POST["cameramoduleEdit"];
                  $partitionsize = $_POST["partitionsizeEdit"];
                  $platformorosdetails = $_POST["platformorosdetailsEdit"];
                  $ipaddress = $_POST["ipaddressEdit"];
                  $serverversioni = $_POST["serverversioniEdit"];
                  $oldclientversion = $_POST["oldclientversionEdit"];
                  $reportversioni = $_POST["reportversioniEdit"];
                  $dbversioni = $_POST["dbversioniEdit"];
                  $plcversioni = $_POST["plcversioniEdit"];
                  $m360versioni = $_POST["m360versioniEdit"];
                  $osversioni = $_POST["osversioniEdit"];
                  $serverversiond = $_POST["serverversiondEdit"];
                  $newclientversion = $_POST["newclientversionEdit"];
                  $reportversiond = $_POST["reportversiondEdit"];
                  $dbversiond = $_POST["dbversiondEdit"];
                  $plcversiond = $_POST["plcversiondEdit"];
                  $m360versiond = $_POST["m360versiondEdit"];
                  $comments = $_POST["commentsEdit"];
                  $actionplan = $_POST["actionplanEdit"];
                

  // Sql query to be executed
  $sql = "UPDATE `notes` SET `region` ='$region', `location` ='$location',`customername` ='$customername',`contactperson` ='$contactperson',`mobile` ='$mobile',`emailid` ='$emailid',`dispatchdetail` ='$dispatchdetail',`projecttype` ='$projecttype',`linenumber` ='$linenumber',`plant` ='$plant',`productplatform` ='$productplatform',`equipmentlinewise` ='$equipmentlinewise',`serialnumber` ='$serialnumber',`numberofequipment` ='$numberofequipment',`thirdparty` ='$thirdparty',`planstartdate` ='$planstartdate',`planenddate` ='$planenddate',`numberoftempativesdays` ='$numberoftempativesdays',`salestechclearancesdate` ='$salestechclearancesdate',`printer` ='$printer',`controller` ='$controller',`motherboardtype` ='$motherboard',`halcontype` ='$halcontype',`hdd` ='$hdd',`ram` ='$ram',`cameramodule` ='$cameramodule',`partitionsize` ='$partitionsize',`platformorosdetails` ='$platformorosdetails',`ipaddress` ='$ipaddress',`serverversioni` ='$serverversioni',`oldclientversion` ='$oldclientversion',`reportversioni` ='$reportversioni',`dbversioni` ='$dbversioni',`plcversioni` ='$plcversioni',`m360versioni` ='$m360versioni',`osversioni` ='$osversioni',`serverversiond` ='$serverversiond',`newclientversion` ='$newclientversion',`reportversiond` ='$reportversiond',`m360versiond` ='$m360versiond',`comments` ='$comments',`actionplan` ='$actionplan' WHERE `notes`.`sno` = $sno";    
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
else{
    $region = $_POST["region"];
    $location = $_POST["location"];
    $customername = $_POST["customername"];
    $contactperson = $_POST["contactperson"];
    $mobile = $_POST["mobile"];
    $emailid = $_POST["emailid"];
    $dispatchdetail = $_POST["dispatchdetail"];
    $projecttype = $_POST["projecttype"];
    $linenumber = $_POST["linenumber"];
    $plant = $_POST["plant"];
    $productplatform = $_POST["productplatform"];
    $equipmentlinewise = $_POST["equipmentlinewise"];
    $serialnumber = $_POST["serialnumber"];
    $numberofequipment = $_POST["numberofequipment"];
    $thirdparty = $_POST["thirdparty"];
    $planstartdate = $_POST["planstartdate"];
    $planenddate = $_POST["planenddate"];
    $numberoftempativesdays = $_POST["numberoftempativesdays"];
    $salestechclearancesdate = $_POST["salestechclearancesdate"];
    $printer = $_POST["printer"];
    $controller = $_POST["controller"];
    $motherboardtype = $_POST["motherboardtype"];
    $halcontype = $_POST["halcontype"];
    $hdd = $_POST["hdd"];
    $ram = $_POST["ram"];
    $cameramodule = $_POST["cameramodule"];
    $partitionsize = $_POST["partitionsize"];
    $platformorosdetails = $_POST["platformorosdetails"];
    $ipaddress = $_POST["ipaddress"];
    $serverversioni = $_POST["serverversioni"];
    $oldclientversion = $_POST["oldclientversion"];
    $reportversioni = $_POST["reportversioni"];
    $dbversioni = $_POST["dbversioni"];
    $plcversioni = $_POST["plcversioni"];
    $m360versioni = $_POST["m360versioni"];
    $osversioni = $_POST["osversioni"];
    $serverversiond = $_POST["serverversiond"];
    $newclientversion = $_POST["newclientversion"];
    $reportversiond = $_POST["reportversiond"];
    $dbversiond = $_POST["dbversiond"];
    $plcversiond = $_POST["plcversiond"];
    $m360versiond = $_POST["m360versiond"];
    $comments = $_POST["comments"];
    $actionplan = $_POST["actionplan"];
   

  // Sql query to be executed
  $sql = "INSERT INTO `notes` (`region`, `location`,`customername`,`contactperson`,`mobile`,`emailid`,`dispatchdetail`,`projecttype`,`linenumber`,`plant`,`productplatform`,`equipmentlinewise`,`serialnumber`,`numberofequipment`,`thirdparty`,`planstartdate`,`planenddate`,`numberoftempativesdays`,`salestechclearancesdate`,`printer`,`controller`,`motherboardtype`,`halcontype`,`hdd`,`ram`,`cameramodule`,`partitionsize`,`platformorosdetails`,`ipaddress`,`serverversioni`,`oldclientversion`,`reportversioni`,`dbversioni`,`plcversioni`,`m360versioni`,`osversioni`,`serverversiond`,`newclientversion`,`reportversiond`,`m360versiond`,`comments`,`actionplan`) VALUES ('$region', '$location','$customername','$contactperson','$mobile','$emailid','$dispatchdetail','$projecttype','$linenumber','$plant','$productplatform','$equipmentlinewise','$serialnumber','$numberofequipment','$thirdparty','$planstartdate','$planenddate','$numberoftempativesdays','$salestechclearancesdate','$printer','$controller','$motherboardtype','$halcontype','$hdd','$ram','$cameramodule','$partitionsize','$platformorosdetails','$ipaddress','$serverversioni','$oldclientversion','$reportversioni','$dbversioni','$plcversioni','$m360versioni','$osversioni','$serverversiond','$newclientversion','$reportversiond','$m360versiond','$comments','$actionplan')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>



<!DOCTYPE html>
<html>
<head>
<title>A.C.G</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


</head>
<body>




 <!-- Edit Modal -->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden
    ="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
     <!-- Edit action  --> 
     <form action="       " method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            





            <h4>Customer Details</h4>
    <div class="col-md-6">
      <label for="region" class="form-label">Region</label>
      <input type="text" class="form-control" id="regionEdit" name="regionEdit" placeholder="Eg. East coast ,West coast, etc" >
    </div>
    
    <div class="col-md-6">
      <label for="location" class="form-label">Location</label>
      <input type="text" class="form-control" id="locationEdit" name="locationEdit" placeholder="Eg. New York City, Los Angelos etc" >
    </div>
    <div class="col-12">
      <label for="customername" class="form-label">Customer Name</label>
      <input type="text" class="form-control" id="customernameEdit" name="customernameEdit" placeholder="Eg. XYZ LTD">
    </div>
    <div class="col-12">
      <label for="contactperson" class="form-label">Contact Person</label>
      <input type="text" class="form-control" id="contactpersonEdit" name="contactpersonEdit">
    </div>
    <div class="col-md-6">
      <label for="mobile" class="form-label">Mobile</label>
      <input type="text" class="form-control" id="mobileEdit" name="mobileEdit">
    </div>
    <div class="col-md-6">
      <label for="emailid" class="form-label">Email I.D</label>
      <input type="email" class="form-control" id="emailidEdit" name="emailidEdit">
    </div>
    <div class="col-md-2">
      <label for="dispatchdetail" class="form-label">Dispatch Detail</label>
      <input type="text" class="form-control" id="dispatchdetailEdit" name="dispatchdetailEdit">
    </div>

    <h4>Project Type</h4>
    <div class="col-md-6">
      <label for="projecttype" class="form-label">Project Type</label>
      <input type="text" class="form-control" id="projecttypeEdit" name="projecttypeEdit" >
    </div>
    <h4>Line & Locations</h4>
    <div class="col-md-6">
      <label for="linenumber" class="form-label">Line Number</label>
      <input type="text" class="form-control" id="linenumberEdit" name="linenumberEdit" >
    </div>
    <div class="col-md-6">
      <label for="plant" class="form-label">Plant</label>
      <input type="text" class="form-control" id="plantEdit" name="plantEdit" placeholder="Eg. Unit 1" >
    </div>
    <h4>Hardware Scope</h4>
    <div class="col-md-4">
      <label for="productplatform" class="form-label">Product Platform</label>
      <input type="text" class="form-control" id="productplatformEdit" name="productplatformEdit" placeholder="Eg. Labview" >
    </div>

    <div class="col-md-2">
      <label for="equipmentlinewise" class="form-label">Equipments LINE WISE</label>
      <input type="text" class="form-control" id="equipmentlinewiseEdit" name="equipmentlinewiseEdit" placeholder="Eg. CPIRXL, BIS etc">
    </div>
    <div class="col-md-6">
      <label for="serialnumber" class="form-label">Serial Number</label>
      <input type="text" class="form-control" id="serialnumberEdit" name="serialnumberEdit"  >
    </div>
    <div class="col-md-4">
      <label for="numberofequipment" class="form-label">Number Of Equipment</label>
      <input type="text" class="form-control" id="numberofequipmentEdit" name="numberofequipmentEdit"  >
    </div>
    <div class="col-md-2">
      <label for="thirdparty" class="form-label">3rd Party</label>
      <input type="text" class="form-control" id="thirdpartyEdit" name="thirdpartyEdit">
    </div>
    <h4>Tentative Start & End Dates</h4>
    <div class="col-md-6">
      <label for="planstartdate" class="form-label">Plan Start Date</label>
      <input type="text" class="form-control" id="planstartdateEdit" name="planstartdateEdit"  >
    </div>
    <div class="col-md-4">
      <label for="planenddate" class="form-label">Plan End Date</label>
      <input type="text" class="form-control" id="planenddateEdit" name="planenddateEdit"  >
    </div>
    <div class="col-md-2">
      <label for="numberoftempativesdays" class="form-label">No. of Tentatives Days </label>
      <input type="text" class="form-control" id="numberoftempativesdaysEdit" name="numberoftempativesdaysEdit" >
    </div>

    <div class="col-md-6">
      <label for="salestechclearancesdate" class="form-label">Sales-Tech Clearances Date</label>
      <input type="text" class="form-control" id="salestechclearancesEdit" name="salestechclearancesEdit"  >
    </div>
    <h4>System Peripheral Details</h4>
    <div class="col-md-4">
      <label for="printer" class="form-label">Printer</label>
      <input type="text" class="form-control" id="printerEdit" name="printerEdit"  >
    </div>
    <div class="col-md-2">
      <label for="controller" class="form-label">Controller</label>
      <input type="text" class="form-control" id="controllerEdit" name="controllerEdit" >
    </div>

    <div class="col-md-6">
      <label for="motherboardtype" class="form-label">Motherboard Type</label>
      <input type="text" class="form-control" id="motherboardtypeEdit" name="motherboardtypeEdit"  >
    </div>
    <div class="col-md-4">
      <label for="halcontype" class="form-label">Halcon Type</label>
      <input type="text" class="form-control" id="halcontypeEdit" name="halcontypeEdit"  >
    </div>
    <div class="col-md-2">
      <label for="hdd" class="form-label">HDD</label>
      <input type="text" class="form-control" id="hddEdit" name="hddEdit" >
    </div>

    <div class="col-md-6">
      <label for="ram" class="form-label">R.A.M</label>
      <input type="text" class="form-control" id="ramEdit" name="ramEdit"  >
    </div>
    <div class="col-md-4">
      <label for="cameramodule" class="form-label">Camera Module</label>
      <input type="text" class="form-control" id="cameramoduleEdit" name="cameramoduleEdit"  >
    </div>
    <h4>System Details</h4>
    <div class="col-md-2">
      <label for="partitionsize" class="form-label">Partition Size C: & D:</label>
      <input type="text" class="form-control" id="partitionsizeEdit" name="partitionsizeEdit">
    </div>

    <div class="col-md-6">
      <label for="platformorosdetails" class="form-label">Platform/O.S Details</label>
      <input type="text" class="form-control" id="platformorosdetailsEdit" name="platformorosdetailsEdit" >
    </div>
    <div class="col-md-4">
      <label for="ipaddress" class="form-label">IP Address</label>
      <input type="text" class="form-control" id="ipaddressEdit" name="ipaddressEdit" >
    </div>
    <h4>Software Version : Installation </h4>
    <div class="col-md-2">
      <label for="serverversioni" class="form-label">Server Version</label>
      <input type="text" class="form-control" id="serverversioniEdit" name="serverversioniEdit" >
    </div>

    <div class="col-md-6">
      <label for="oldclientverion" class="form-label">Old Client Version</label>
      <input type="text" class="form-control" id="oldclientversionEdit" name="oldclientversionEdit"  >
    </div>
    <div class="col-md-4">
      <label for="reportversioni" class="form-label">Report Version</label>
      <input type="text" class="form-control" id="reportversioniEdit" name="reportversioniEdit"  >
    </div>
    <div class="col-md-2">
      <label for="dbversioni" class="form-label">DB Version</label>
      <input type="text" class="form-control" id="dbversioniEdit" name="dbversioniEdit">
    </div>

    <div class="col-md-6">
      <label for="plcversioni" class="form-label">PLC Version</label>
      <input type="text" class="form-control" id="plcversioniEdit" name="plcversioniEdit" >
    </div>
    <div class="col-md-4">
      <label for="m360versioni" class="form-label">360 Version</label>
      <input type="text" class="form-control" id="m360versioniEdit" name="m360versioniEdit" >
    </div>
    <div class="col-md-2">
      <label for="osversioni" class="form-label">OS Version</label>
      <input type="text" class="form-control" id="osversioniEdit" name="osversioniEdit">
    </div>
    <h4>New Version : Deployment</h4>

    <div class="col-md-6">
      <label for="serverversiond" class="form-label">Server Version</label>
      <input type="text" class="form-control" id="serverversiondEdit" name="serverversiondEdit" >
    </div>
    <div class="col-md-4">
      <label for="newclientversion" class="form-label">New Client Version</label>
      <input type="text" class="form-control" id="newclientversionEdit" name="newclientversionEdit">
    </div>
    <div class="col-md-2">
      <label for="reportversiond" class="form-label">Report Version</label>
      <input type="text" class="form-control" id="reportversiondEdit" name="reportversiondEdit">
    </div>

    <div class="col-md-6">
      <label for="dbversiond" class="form-label">DB Version</label>
      <input type="text" class="form-control" id="dbversiondEdit" name="dbversiondEdit" >
    </div>
    <div class="col-md-4">
      <label for="plcversiond" class="form-label">PLC Version</label>
      <input type="text" class="form-control" id="plcversiondEdit" name="plcversiondEdit" >
    </div>
    <div class="col-md-2">
      <label for="m360versiond" class="form-label">360 Version</label>
      <input type="text" class="form-control" id="m360versiondEdit" name="m360versiondEdit">
    </div>

    <div class="col-md-6">
      <label for="comments" class="form-label">Comments</label>
      <input type="text" class="form-control" id="commentsEdit" name="commentsEdit" >
    </div>
    <div class="col-md-6">
      <label for="actionplan" class="form-label">Action Plan</label>
      <input type="text" class="form-control" id="actionplanEdit" name="actionplanEdit" >
    </div>








          </div>

          

          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>











      </div>
    </div>
  </div>




  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong> Success! </strong> Your form has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>x</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your form has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>x</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your form has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>x</span>
    </button>
  </div>";
  }
  ?>


  
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Project Registration Form</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Create Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display.php">Projects</a>
      </li>

      
     
    </ul>
    <div class="position-absolute top-0 end-0">
        <ul class="navbar-nav ml">
            <li class="nav-item active">
                <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
            </li>
        </ul>
    </div>

  </div>
</nav>
<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>

<div class="container mt-4">
  <form class="row g-3">
    <h4>Customer Details</h4>
    <div class="col-md-6">
      <label for="region" class="form-label">Region</label>
      <input type="text" class="form-control" id="region" name="region" placeholder="Eg. East coast ,West coast, etc" >
    </div>
    
    <div class="col-md-6">
      <label for="location" class="form-label">Location</label>
      <input type="text" class="form-control" id="location" name="location" placeholder="Eg. New York City, Los Angelos etc" >
    </div>
    <div class="col-12">
      <label for="customername" class="form-label">Customer Name</label>
      <input type="text" class="form-control" id="customername" name="customername" placeholder="Eg. XYZ LTD">
    </div>
    <div class="col-12">
      <label for="contactperson" class="form-label">Contact Person</label>
      <input type="text" class="form-control" id="contactperson" name="contactperson">
    </div>
    <div class="col-md-6">
      <label for="mobile" class="form-label">Mobile</label>
      <input type="text" class="form-control" id="mobile" name="mobile">
    </div>
    <div class="col-md-6">
      <label for="emailid" class="form-label">Email I.D</label>
      <input type="email" class="form-control" id="emailid" name="emailid">
    </div>
    <div class="col-md-2">
      <label for="dispatchdetail" class="form-label">Dispatch Detail</label>
      <input type="text" class="form-control" id="dispatchdetail" name="dispatchdetail">
    </div>

    <h4>Project Type</h4>
    <div class="col-md-6">
      <label for="projecttype" class="form-label">Project Type</label>
      <input type="text" class="form-control" id="projecttype" name="projecttype" >
    </div>
    <h4>Line & Locations</h4>
    <div class="col-md-6">
      <label for="linenumber" class="form-label">Line Number</label>
      <input type="text" class="form-control" id="linenumber" name="linenumber" >
    </div>
    <div class="col-md-6">
      <label for="plant" class="form-label">Plant</label>
      <input type="text" class="form-control" id="plant" name="plant" placeholder="Eg. Unit 1" >
    </div>
    <h4>Hardware Scope</h4>
    <div class="col-md-4">
      <label for="productplatform" class="form-label">Product Platform</label>
      <input type="text" class="form-control" id="productplatform" name="productplatform" placeholder="Eg. Labview" >
    </div>

    <div class="col-md-2">
      <label for="equipmentlinewise" class="form-label">Equipments LINE WISE</label>
      <input type="text" class="form-control" id="equipmentlinewise" name="equipmentlinewise" placeholder="Eg. CPIRXL, BIS etc">
    </div>
    <div class="col-md-6">
      <label for="serialnumber" class="form-label">Serial Number</label>
      <input type="text" class="form-control" id="serialnumber" name="serialnumber"  >
    </div>
    <div class="col-md-4">
      <label for="numberofequipment" class="form-label">Number Of Equipment</label>
      <input type="text" class="form-control" id="numberofequipment" name="numberofequipment"  >
    </div>
    <div class="col-md-2">
      <label for="thirdparty" class="form-label">3rd Party</label>
      <input type="text" class="form-control" id="thirdparty" name="thirdparty">
    </div>
    <h4>Tentative Start & End Dates</h4>
    <div class="col-md-6">
      <label for="planstartdate" class="form-label">Plan Start Date</label>
      <input type="text" class="form-control" id="planstartdate" name="planstartdate"  >
    </div>
    <div class="col-md-4">
      <label for="planenddate" class="form-label">Plan End Date</label>
      <input type="text" class="form-control" id="planenddate" name="planenddate"  >
    </div>
    <div class="col-md-2">
      <label for="numberoftempativesdays" class="form-label">No. of Tentatives Days </label>
      <input type="text" class="form-control" id="numberoftempativesdays" name="numberoftempativesdays" >
    </div>

    <div class="col-md-6">
      <label for="salestechclearancesdate" class="form-label">Sales-Tech Clearances Date</label>
      <input type="text" class="form-control" id="salestechclearancesdate" name="salestechclearancesdate"  >
    </div>
    <h4>System Peripheral Details</h4>
    <div class="col-md-4">
      <label for="printer" class="form-label">Printer</label>
      <input type="text" class="form-control" id="printer" name="printer"  >
    </div>
    <div class="col-md-2">
      <label for="controller" class="form-label">Controller</label>
      <input type="text" class="form-control" id="controller" name="controller" >
    </div>

    <div class="col-md-6">
      <label for="motherboardtype" class="form-label">Motherboard Type</label>
      <input type="text" class="form-control" id="motherboardtype" name="motherboardtype"  >
    </div>
    <div class="col-md-4">
      <label for="halcontype" class="form-label">Halcon Type</label>
      <input type="text" class="form-control" id="halcontype" name="halcontype"  >
    </div>
    <div class="col-md-2">
      <label for="hdd" class="form-label">HDD</label>
      <input type="text" class="form-control" id="hdd" name="hdd" >
    </div>

    <div class="col-md-6">
      <label for="ram" class="form-label">R.A.M</label>
      <input type="text" class="form-control" id="ram" name="ram"  >
    </div>
    <div class="col-md-4">
      <label for="cameramodule" class="form-label">Camera Module</label>
      <input type="text" class="form-control" id="cameramodule" name="cameramodule"  >
    </div>
    <h4>System Details</h4>
    <div class="col-md-2">
      <label for="partitionsize" class="form-label">Partition Size C: & D:</label>
      <input type="text" class="form-control" id="partitionsize" name="partitionsize">
    </div>

    <div class="col-md-6">
      <label for="platformorosdetails" class="form-label">Platform/O.S Details</label>
      <input type="text" class="form-control" id="platformorosdetails" name="platformorosdetails" >
    </div>
    <div class="col-md-4">
      <label for="ipaddress" class="form-label">IP Address</label>
      <input type="text" class="form-control" id="ipaddress" name="ipaddress" >
    </div>
    <h4>Software Version : Installation </h4>
    <div class="col-md-2">
      <label for="serverversioni" class="form-label">Server Version</label>
      <input type="text" class="form-control" id="serverversioni" name="serverversioni" >
    </div>

    <div class="col-md-6">
      <label for="oldclientverion" class="form-label">Old Client Version</label>
      <input type="text" class="form-control" id="oldclientverion" name="oldclientverion"  >
    </div>
    <div class="col-md-4">
      <label for="reportversioni" class="form-label">Report Version</label>
      <input type="text" class="form-control" id="reportversioni" name="reportversioni"  >
    </div>
    <div class="col-md-2">
      <label for="dbversioni" class="form-label">DB Version</label>
      <input type="text" class="form-control" id="dbversioni" name="dbversioni">
    </div>

    <div class="col-md-6">
      <label for="plcversioni" class="form-label">PLC Version</label>
      <input type="text" class="form-control" id="plcversioni" name="plcversioni" >
    </div>
    <div class="col-md-4">
      <label for="m360versioni" class="form-label">360 Version</label>
      <input type="text" class="form-control" id="m360versioni" name="m360versioni" >
    </div>
    <div class="col-md-2">
      <label for="osversioni" class="form-label">OS Version</label>
      <input type="text" class="form-control" id="osversioni" name="osversioni">
    </div>
    <h4>New Version : Deployment</h4>

    <div class="col-md-6">
      <label for="serverversiond" class="form-label">Server Version</label>
      <input type="text" class="form-control" id="serverversiond" name="serverversiond" >
    </div>
    <div class="col-md-4">
      <label for="newclientversion" class="form-label">New Client Version</label>
      <input type="text" class="form-control" id="newclientversion" name="newclientversion">
    </div>
    <div class="col-md-2">
      <label for="reportversiond" class="form-label">Report Version</label>
      <input type="text" class="form-control" id="reportversiond" name="reportversiond">
    </div>

    <div class="col-md-6">
      <label for="dbversiond" class="form-label">DB Version</label>
      <input type="text" class="form-control" id="dbversiond" name="dbversiond" >
    </div>
    <div class="col-md-4">
      <label for="plcversiond" class="form-label">PLC Version</label>
      <input type="text" class="form-control" id="plcversiond" name="plcversiond" >
    </div>
    <div class="col-md-2">
      <label for="m360versiond" class="form-label">360 Version</label>
      <input type="text" class="form-control" id="m360versiond" name="m360versiond">
    </div>

    <div class="col-md-6">
      <label for="comments" class="form-label">Comments</label>
      <input type="text" class="form-control" id="comments" name="comments" >
    </div>
    <div class="col-md-6">
      <label for="actionplan" class="form-label">Action Plan</label>
      <input type="text" class="form-control" id="actionplan" name="actionplan" >
    </div>






    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>



  </form>
</div>




<div class="container my-4">


<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Region</th>
      <th scope="col">Location</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Contact Persion</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Dispatch Detail</th>
      <th scope="col">Project Type</th>
      <th scope="col">Line Number</th>
      <th scope="col">Plant</th>
      <th scope="col">Product Platform</th>
      <th scope="col">Equipment Line Wise</th>
      <th scope="col">Serial Number</th>
      <th scope="col">Number of Equipment</th>
      <th scope="col">Third Party</th>
      <th scope="col">Plan Start Date</th>
      <th scope="col">Plan End Date</th>
      <th scope="col">Number of Tentative days</th>
      <th scope="col">Sales-Tech Clearance date</th>
      <th scope="col">Printer</th>
      <th scope="col">Controller</th>
      <th scope="col">Mother Board Type</th>
      <th scope="col">Halcon Type</th>
      <th scope="col">H.D.D</th>
      <th scope="col">R.A.M</th>
      <th scope="col">Camera Module</th>
      <th scope="col">Partition Size</th>
      <th scope="col">Platform/OS details</th>
      <th scope="col">IP address</th>
      <th scope="col">Server Version:Intallation</th>
      <th scope="col">Old Client Version</th>
      <th scope="col">Report Version:Installation</th>
      <th scope="col">DB version:Installation</th>
      <th scope="col">PLC version:Installation</th>
      <th scope="col">360 Version:Installation</th>
      <th scope="col">OS version:Installation</th>
      <th scope="col">Server Version:Deployment</th>
      <th scope="col">New Client Version</th>
      <th scope="col">Report Version:Deployment</th>
      <th scope="col">PLC Version:Deployment</th>
      <th scope="col">360 Version:Deployment</th>
      <th scope="col">Comments</th>
      <th scope="col">Actions Plan</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    -----------------
    <?php 
      $sql = "SELECT * FROM `notes`";
      $result = mysqli_query($conn, $sql);
      $sno = 0;
      while($row = mysqli_fetch_assoc($result)){
        $sno = $sno + 1;
        echo "<tr>
        <th scope='row'>". $sno . "</th>
        <td>". $row['title'] . "</td>
        <td>". $row['description'] . "</td>
        <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>  </td>
      </tr>";
    } 
      ?>


  </tbody>
</table>
</div>
<hr>






 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/crud/index.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</body>
</html>