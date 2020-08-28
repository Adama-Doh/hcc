<!DOCTYPE html>
<html lang="en">
<head>
<title>Healthline Call Center</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <!-- <h1><a href="dashboard.html">Healthline Call Center</a></h1> -->
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">

  <ul class="nav">
   
    <li class=""><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Welcome User</span></a></li>
    <li class=""><a title="" href="login.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!-- <div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="dashboard.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <!-- <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li> -->
    <!-- <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li> -->
    <li><a href="tables.php"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <!-- <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li> -->
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
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="dashboard.php"> <i class="icon-dashboard"></i></span> My Dashboard </a> </li>
        <li class="bg_lo"> <a href="tables.php"> <i class="icon-th"></i> Tables</a> </li>
      </ul>
    </div>
<!--End-Action boxes-->    


  <hr/>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span10">
    <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Patient History</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
              <li>
                <!-- <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div> -->
                <div class="article-post"> <span class="user-info"> By: @username / Date: 2 Aug 2012 / Time:09:27 AM </span>
                  <p><a href="#">Patient history displays here...</a> </p>
                </div>
              </li>
              <li>
                <!-- <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div> -->
                <div class="article-post"> <span class="user-info"> By: @username / Date: 2 Aug 2012 / Time:09:27 AM </span>
                  <p><a href="#">Patient history displays here ...</a> </p>
                </div>
              </li>
              <li>
                <!-- <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av4.jpg"> </div> -->
                <div class="article-post"> <span class="user-info"> By: @username / Date: 2 Aug 2012 / Time:09:27 AM </span>
                  <p><a href="#">Patient history displays here...</a> </p>
                </div>
              <li>
                <button class="btn btn-warning btn-mini">View All</button>
              </li>
            </ul>
          </div>
        </div>


      <div class="widget-box">
        <div class="widget-title">
          <h5>Patient Diagnosis</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">           
          <div class="controls">
              <textarea class="textarea_editor span6" rows="6" placeholder="Enter text ..."></textarea>
              <textarea class="textarea_editor span6" rows="6" placeholder="Enter text ..."></textarea>
            </div>
            
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="row-fluid"> -->
  <!-- <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5></h5>
      </div>
      <div class="widget-content">
        <div class="control-group">
          <form>
            <div class="controls">
              <textarea class="textarea_editor span12" rows="6" placeholder="Enter text ..."></textarea>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
   </div> -->
  </div>
    
  </div>
</div>
</div>
<!--end-main-container-part-->

<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2020 &copy; Heathline Call Center. Brought to you by <a href="#">Vodafone Foundation</a> </div>
</div>
<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
