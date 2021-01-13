<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title><?php echo TITLE ?></title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="../css/custom.css"> 
</head>
<body>
  <!-- Top Navbar -->
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow "><a class="navbar-brand col-sm-3 col-md-2 mr-0 text-right" href="dashboard.php">Implore <i class="fas fa-tools"></i> (Admin)</a></nav>

  <!-- Start Container -->
 <div class="container-fluid" style="margin-top:40px;">
  <div class="row"> <!-- Start Row -->
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none"> <!-- Start Side Bar 1st Column -->
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item"><a class="nav-link <?php if(PAGE == 'dashboard'){echo 'active';} ?>" href="dashboard.php"><i class="fas fa-tv"></i></i>Dashboard</a></li>
      <li class="nav-item"><a class="nav-link <?php if(PAGE == 'work'){echo 'active';} ?>" href="work.php"><i class="fas fa-tasks"></i></i>Work Order</a></li>
      <li class="nav-item"><a class="nav-link <?php if(PAGE == 'request'){echo 'active';} ?>" href="request.php"><i class="fas fa-align-center"></i>Requests</a></li>
      
      <li class="nav-item"><a class="nav-link <?php if(PAGE == 'technician'){echo 'active';} ?>" href="technician.php"><i class="fab fa-teamspeak"></i>Servicer</a></li>
      <li class="nav-item"><a class="nav-link <?php if(PAGE == 'requesters'){echo 'active';} ?>" href="requester.php"><i class="fas fa-users"></i>Users</a></li>
      
      <li class="nav-item"><a class="nav-link <?php if(PAGE == 'workreport'){echo 'active';} ?>" href="workreport.php"><i class="fas fa-chart-line"></i>Work Report</a></li>
      <li class="nav-item"><a class="nav-link <?php if(PAGE == 'changepass'){echo 'active';} ?>" href="changepass.php"><i class="fas fa-key"></i>Change Password</a></li>
      <li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
     </ul>
    </div>
   </nav> <!-- End Side Bar 1st Column -->