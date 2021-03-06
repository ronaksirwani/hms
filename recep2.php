<?php
$user = 'root';
$password = ' ';
$database = 'hms6';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
        $password, $database);
if ($mysqli->connect_error) {
  die('Connect Error (' .
  $mysqli->connect_errno . ') '.
  $mysqli->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reception</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-4.5.3-dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4.5.3-dist\css\try2.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist\css\themify-icons\themify-icons.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist\css\font-awesome-4.7.0\css\font-awesome.min.css">
  <script src="bootstrap-4.5.3-dist\js\jquery.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="bootstrap-4.5.3-dist\js\bootstrap.min.js"></script>
</head>
<body>
  
  <div class="sidebar">
   
    <a href="#uname" align="center">
      <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
      <br>
      <span>Username</span>
    </a>
   
    <a href="#home">
      <i class="fa fa-home fa-2x" aria-hidden="true"></i>
      <br>
      <span>Home</span>
    </a>
   
    <a href="#dashboard">
      <i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>
      <br>
      <span>Dashboard</span>
    </a>
   
    <a href="#ba">
      <i class="fa fa-book fa-2x" aria-hidden="true"></i>
      <br>
      <span>Book Appointment</span>
    </a>
   
    <a href="#logout">
      <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
      <br>
      <span>Logout</span>
    </a>
</div>

<div class="container" id="content">
  
  <h2>Welcome, Receptionist</h2>
  
  <div class="row" id="dc">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12" id="single-card">
      <div class="card-body text-center bg-primary text-white" id="ta">
        <div class="cc"> 
          <h5>Today's Appointments:</h5>
          <?php
          $sql = "SELECT count(*) FROM appointment WHERE DATE(apt_date)=CURDATE()";
          $result = $mysqli->query($sql);
          $rows=$result->fetch_assoc();
          ?>
        
          <h4><?php echo $rows['count(*)']; ?></h4>
        </div>
        <div class="text-right" id="cf">
          <a href="#appts" class="text-white">View all</a>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-6 col-12" id="single-card">
      <div class="card-body text-center bg-info text-white" id="tp">
        <div class="cc">
          <h5>Total Patients:</h5>
          <?php
          $sql = "SELECT count(*) FROM patient";
          $result = $mysqli->query($sql);
          $rows=$result->fetch_assoc();
          ?>
          <h4><?php echo $rows['count(*)']; ?></h4>  
        </div>
        <div class="text-right" id="cf">
          <a href="#" class="text-white">View all</a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-12" id="single-card">
      <div class="card-body text-center bg-info text-white">
        <div class="cc">
          <h5>Total Doctors:</h5>
          <?php
          $sql = "SELECT count(*) FROM doctor";
          $result = $mysqli->query($sql);
          $rows=$result->fetch_assoc();
          ?>
          <h4><?php echo $rows['count(*)']; ?></h4>  
        </div>
        <div class="text-right" id="cf">
          <a href="#doctors" class="text-white">View all</a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-12" id="single-card">
      <div class="card-body text-center bg-secondary text-white">
        <div class="cc">
          <h5>Manage Doctors:</h5>
          <?php
          $sql = "SELECT count(*) FROM doctor";
          $result = $mysqli->query($sql);
          $rows=$result->fetch_assoc();
          ?>
          <h4><?php echo $rows['count(*)']; ?></h4>  
        </div>
        <div class="text-right" id="cf">
          <a href="#md" class="text-white">View all</a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-12" id="single-card">
      <div class="card-body text-center bg-primary text-white">
        <div class="cc">
          <h5>All Appointments:</h5>
          <?php
          $sql = "SELECT count(*) FROM appointment";
          $result = $mysqli->query($sql);
          $rows=$result->fetch_assoc();
          $mysqli->close();
          ?>
          <h4><?php echo $rows['count(*)']; ?></h4>  
        </div>
        <div class="text-right" id="cf">
          <a href="#aa" class="text-white">View all</a>
        </div>
      </div>
    </div>
  </div>

</div>
</body>
</html>