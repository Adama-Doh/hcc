<!DOCTYPE html>
<html lang="en">
<head>
<title>Healthline Call Center</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.php">Healthline Call Center</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    
    <!-- <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li> -->
    <li class=""><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Welcome User</span></a></li>
    <li class=""><a title="" href="login.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>


<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul>
    <li><a href="dashboard.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <!-- <li><a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li> -->
    <!-- <li><a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li> -->
    <li class="active"><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <!-- <li><a href="grid.php"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li> -->
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span></a> -->
      <!-- <ul> -->
        <!-- <li><a href="form-common.php">Basic Form</a></li> -->
        <!-- <li><a href="form-validation.html">Form with Validation</a></li> -->
        <!-- <li><a href="form-wizard.php">Form with Wizard</a></li> -->
      <!-- </ul> -->
    <!-- </li> -->
    
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Patient Records</h1>
  </div>
<!--End-breadcrumbs-->  

  <!--  -->
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Registered Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Marital Status</th>
                  <th>Nationality</th>
                  <th>Occupation</th>
                  <th>Number</th>
                  <th>Region</th>
                  <th>District</th>
                  <th>City</th>
                </tr>
              </thead>
              <tbody>
              <!-- First 10 items -->
                <tr class="gradeX">
                  <td>01</td>
                  <td>Yaw</td>
                  <td>Mensah</td>
                  <td>Male</td>
                  <td>40</td>
                  <td>Married</td>
                  <td>Ghanaian</td>
                  <td>Farmer</td>
                  <td>0208 500 400</td>
                  <td>Oti Region</td>
                  <td>N/A</td>
                  <td>N/A</td>
                </tr>
                <tr class="gradeC">
                <td>02</td>
                  <td>Kofi</td>
                  <td>Sarpong</td>
                  <td>Male</td>
                  <td>56</td>
                  <td>Married</td>
                  <td>Ghanaian</td>
                  <td>Engineer</td>
                  <td>0208 500 400</td>
                  <td>Greater Accra</td>
                  <td>N/A</td>
                  <td>N/A</td>
                </tr>
                <tr class="gradeA">
                <td>03</td>
                  <td>Kwame</td>
                  <td>Tetteh</td>
                  <td>Male</td>
                  <td>27</td>
                  <td>Single</td>
                  <td>Ghanaian</td>
                  <td>Doctor</td>
                  <td>0208 500 400</td>
                  <td>Oti Region</td>
                  <td>N/A</td>
                  <td>N/A</td>
                </tr>
                <tr class="gradeA">
                <td>04</td>
                  <td>Linda</td>
                  <td>Kartey</td>
                  <td>Female</td>
                  <td>34</td>
                  <td>Single</td>
                  <td>Ghanaian</td>
                  <td>Nurse</td>
                  <td>0208 500 400</td>
                  <td>Volta Region</td>
                  <td>N/A</td>
                  <td>N/A</td>
                </tr>               
                <tr class="gradeA">
                <td>05</td>
                  <td>Joyce</td>
                  <td>Lucas</td>
                  <td>Female</td>
                  <td>58</td>
                  <td>Separated</td>
                  <td>Ghanaian</td>
                  <td>Lawyer</td>
                  <td>0508 600 748</td>
                  <td>Oti Region</td>
                  <td>N/A</td>
                  <td>N/A</td>
                </tr>               
              <!-- First 5 items -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2020 &copy; Heathline Call Center. Brought to you by <a href="#">Vodafone Foundation</a> </div>
</div>
<!--end-Footer-part-->


<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
