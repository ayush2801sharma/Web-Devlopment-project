<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
<title>A.C.G</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
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
      <label for="inputRegion" class="form-label">Region</label>
      <input type="text" class="form-control" id="inputRegion" placeholder="Eg. East coast ,West coast, etc" >
    </div>
    
    <div class="col-md-6">
      <label for="inputLocation" class="form-label">Location</label>
      <input type="text" class="form-control" id="inputLocation" placeholder="Eg. New York City, Los Angelos etc" >
    </div>
    <div class="col-12">
      <label for="inputCustomerName" class="form-label">Customer Name</label>
      <input type="text" class="form-control" id="inputCustomerName" placeholder="Eg. XYZ LTD">
    </div>
    <div class="col-12">
      <label for="inputContactPerson" class="form-label">Contact Person</label>
      <input type="text" class="form-control" id="inputContactPerson">
    </div>
    <div class="col-md-6">
      <label for="inputMobile" class="form-label">Mobile</label>
      <input type="text" class="form-control" id="inputMobile">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email I.D</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-2">
      <label for="inputDispatchDetail" class="form-label">Dispatch Detail</label>
      <input type="text" class="form-control" id="inputDispatchDetail">
    </div>

    <h4>Project Type</h4>
    <div class="col-md-6">
      <label for="inputProjectType" class="form-label">Project Type</label>
      <input type="text" class="form-control" id="inputProjectType"  >
    </div>
    <h4>Line & Locations</h4>
    <div class="col-md-6">
      <label for="inputLineNumber" class="form-label">Line Number</label>
      <input type="text" class="form-control" id="inputLineNumber"  >
    </div>
    <div class="col-md-6">
      <label for="inputPlant" class="form-label">Plant</label>
      <input type="text" class="form-control" id="inputPlant" placeholder="Eg. Unit 1" >
    </div>
    <h4>Hardware Scope</h4>
    <div class="col-md-4">
      <label for="inputProductPlatform" class="form-label">Product Platform</label>
      <input type="text" class="form-control" id="inputProductPlatform" placeholder="Eg. Labview" >
    </div>

    <div class="col-md-2">
      <label for="inputEquipments" class="form-label">Equipments LINE WISE</label>
      <input type="text" class="form-control" id="inputEquipments" placeholder="Eg. CPIRXL, BIS etc">
    </div>
    <div class="col-md-6">
      <label for="inputSerialNumber" class="form-label">Serial Number</label>
      <input type="text" class="form-control" id="inputSerialNumber"  >
    </div>
    <div class="col-md-4">
      <label for="inputNumberOfEquipment" class="form-label">Number Of Equipment</label>
      <input type="text" class="form-control" id="inputNumberOfEquipment"  >
    </div>
    <div class="col-md-2">
      <label for="inputThirdParty" class="form-label">3rd Party</label>
      <input type="text" class="form-control" id="inputThirdParty">
    </div>
    <h4>Tentative Start & End Dates</h4>
    <div class="col-md-6">
      <label for="inputPlanStartDate" class="form-label">Plan Start Date</label>
      <input type="text" class="form-control" id="inputPlanStartDate"  >
    </div>
    <div class="col-md-4">
      <label for="inputPlanEndDate" class="form-label">Plan End Date</label>
      <input type="text" class="form-control" id="inputPlanEndDate"  >
    </div>
    <div class="col-md-2">
      <label for="inputNumberOfTentativeDays" class="form-label">No. of Tentatives Days </label>
      <input type="text" class="form-control" id="inputNumberOfTentativeDays" >
    </div>

    <div class="col-md-6">
      <label for="inputSalesTechClearances" class="form-label">Sales-Tech Clearances Date</label>
      <input type="text" class="form-control" id="inputSalesTechClearances"  >
    </div>
    <h4>System Peripheral Details</h4>
    <div class="col-md-4">
      <label for="inputPrinter" class="form-label">Printer</label>
      <input type="text" class="form-control" id="inputPrinter"  >
    </div>
    <div class="col-md-2">
      <label for="inputController" class="form-label">Controller</label>
      <input type="text" class="form-control" id="inputcontroller" >
    </div>

    <div class="col-md-6">
      <label for="inputMotherboard" class="form-label">Motherboard Type</label>
      <input type="text" class="form-control" id="inputMotherboard"  >
    </div>
    <div class="col-md-4">
      <label for="inputHalcon" class="form-label">Halcon Type</label>
      <input type="text" class="form-control" id="inputHalcon"  >
    </div>
    <div class="col-md-2">
      <label for="inputHDD" class="form-label">HDD</label>
      <input type="text" class="form-control" id="inputHDD" >
    </div>

    <div class="col-md-6">
      <label for="inputRAM" class="form-label">R.A.M</label>
      <input type="text" class="form-control" id="inputRAM"  >
    </div>
    <div class="col-md-4">
      <label for="inputCameraModule" class="form-label">Camera Module</label>
      <input type="text" class="form-control" id="inputCameraModule"  >
    </div>
    <h4>System Details</h4>
    <div class="col-md-2">
      <label for="inputPartition" class="form-label">Partition Size C: & D:</label>
      <input type="text" class="form-control" id="inputPartition">
    </div>

    <div class="col-md-6">
      <label for="inputPlatform" class="form-label">Platform/O.S Details</label>
      <input type="text" class="form-control" id="inputPlatform"  >
    </div>
    <div class="col-md-4">
      <label for="inputIPAddress" class="form-label">IP Address</label>
      <input type="text" class="form-control" id="inputIPAddress"  >
    </div>
    <h4>Software Version : Installation </h4>
    <div class="col-md-2">
      <label for="inputServerVersionI" class="form-label">Server Version</label>
      <input type="text" class="form-control" id="inputServerVersionI" >
    </div>

    <div class="col-md-6">
      <label for="inputOldClientVersionI" class="form-label">Old Client Version</label>
      <input type="text" class="form-control" id="inputOldClientVerionI"  >
    </div>
    <div class="col-md-4">
      <label for="inputReportVersionI" class="form-label">Report Version</label>
      <input type="text" class="form-control" id="inputReportVersionI"  >
    </div>
    <div class="col-md-2">
      <label for="inputDBVersionI" class="form-label">DB Version</label>
      <input type="text" class="form-control" id="inputDBVersionI">
    </div>

    <div class="col-md-6">
      <label for="inputPLCVersionI" class="form-label">PLC Version</label>
      <input type="text" class="form-control" id="inputPLCVersionI"  >
    </div>
    <div class="col-md-4">
      <label for="input360VersionI" class="form-label">360 Version</label>
      <input type="text" class="form-control" id="input360VersionI"  >
    </div>
    <div class="col-md-2">
      <label for="inputOSVersionI" class="form-label">OS Version</label>
      <input type="text" class="form-control" id="inputOSVersionI">
    </div>
    <h4>New Version : Deployment</h4>

    <div class="col-md-6">
      <label for="inputServerVersionD" class="form-label">Server Version</label>
      <input type="text" class="form-control" id="inputServerVersionD"  >
    </div>
    <div class="col-md-4">
      <label for="inputNewClientVersionD" class="form-label">New Client Version</label>
      <input type="text" class="form-control" id="inputNewClientVersionD">
    </div>
    <div class="col-md-2">
      <label for="inputReportVersionD" class="form-label">Report Version</label>
      <input type="text" class="form-control" id="inputReportVersionD">
    </div>

    <div class="col-md-6">
      <label for="inputDBVersionD" class="form-label">DB Version</label>
      <input type="text" class="form-control" id="inputDBVersionD"  >
    </div>
    <div class="col-md-4">
      <label for="inputPLCVersionD" class="form-label">PLC Version</label>
      <input type="text" class="form-control" id="inputPLCVersionD" >
    </div>
    <div class="col-md-2">
      <label for="input360VersionD" class="form-label">360 Version</label>
      <input type="text" class="form-control" id="input360VersionD" >
    </div>

    <div class="col-md-6">
      <label for="inputComment" class="form-label">Comments</label>
      <input type="text" class="form-control" id="inputComment"  >
    </div>
    <div class="col-md-6">
      <label for="inputActionPlan" class="form-label">Action Plan</label>
      <input type="text" class="form-control" id="inputActionPlan"  >
    </div>






    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>



  </form>
</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>