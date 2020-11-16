<?php
require '../includes/server.connect.php';
require '../assets/head.php';
session_start();

$name = $_SESSION['username'];
if (!isset($_SESSION['id'])) {
	 header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/../index.php?action=loginwasafialureoryoujusthavetologin");
}else{

     	?>


<style type="text/css">@import url("../lib/bootstrap/css/bootstrap.min.css");</style>
<style type="text/css">@import url("../lib/font-awesome/css/font-awesome.min.css");</style>
<style type="text/css">@import url("../lib/style.css");</style>
<style type="text/css">@import url("../lib/style4.css");</style>
<style>
  body {
  background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7),black), url(images/bg.jpg);
  /*background-image: url(images/bg.jpg);*/
background-size: cover;
background-attachment: fixed;
}

.has-search .form-control{
  padding-left: 2.375rem;
}

.has-search .form-control-feedback{
  position: absolute;
  z-index: 2;
  display: block;
  width: 2.375rem;
  height: 2.375rem;
  line-height: 2.375rem;
  text-align: center;
  pointer-events: none;
  color: #aaa;
}
</style>

<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/popper.min.js"></script>
<body>
<?php
require '../assets/header.php';
?>
    <div class="wrapper">
        <!-- Sidebar  -->
       <?php
       require '../assets/navaside.php';
       ?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid ">
                    <div class="row col-md-12">
                     <div class="col-md-6 row">
                        <a class="nav-link btn btn-success mx-2 mb-2" href="dashboard.php?studentData"><i class="fa fa-folder-open"></i> View students</a>
                      <a class="nav-link btn btn-primary mx-2 mb-2" href="dashboard.php?studentAdd"><i class="fa fa-user-plus"></i> Add new student</a>
                       <a class="nav-link btn btn-dark mx-2 mb-2" href="dashboard.php?addCoursePage"><i class="fa fa-plus"></i> Add new Course</a>
                       <a class="nav-link btn btn-danger mx-1 mb-2" href="dashboard.php?showCourse"><i class="fa fa-folder"></i> view course</a>
                     </div>
                       <div class="col-md-6 ml-3 row float-right form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                         <input type="text" name="search"  id="myInput" onkeyup="myFunction()" placeholder="search by Firstname or Lastname.." class="form-control col-md-10 form-rounded">
                       </div>
                  </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
           <?php
           if (isset($_GET['addCoursePage'])) {
           	require_once 'add.course.php';
           }elseif (isset($_GET['showCourse'])) {
           	require_once 'show.course.php';
           }elseif (isset($_GET['studentData'])) {
           	require_once 'student.data.php';
           }elseif (isset($_GET['studentAdd'])) {
           	require_once 'student.add.php';
           }elseif (isset($_GET['stdadded'])) {
           	require_once 'contact.data.php';
           }elseif (isset($_GET['contactsadded'])) {
           	require_once 'programstd.add.php';
           }elseif (isset($_GET['timetable'])) {
           	require_once 'timetable.php';
           }elseif (isset($_GET['timetable1'])) {
           	require_once 'timetable_tuesday.php';
           }elseif (isset($_GET['timetable2'])) {
           	require_once 'timetable_wed.php';
           }elseif (isset($_GET['timetableshow'])) {
           	require_once 'show.timetable.php';
           }elseif (isset($_GET['timetable4'])) {
           	require_once 'timetable_friday.php';
           }elseif (isset($_GET['showtt'])) {
            require_once 'show.timetable.php';
           }elseif (isset($_GET['view'])) {
            require_once 'view.php';
           }
           elseif (isset($_GET['edit'])) {
            require_once 'edit.php';
           }
           elseif (isset($_GET['edit1'])) {
            require_once 'edit1.php';
           }
           else{
            ?>

            <div class="container">
              <div class="row">
              <a href="dashboard.php?showtt" class="card col-md-3 bg-primary text-white">
                <div class="card-body text-center">
                  <i class="fa fa-calendar fa-4x" aria-hidden="true"></i>
                </div>
                <div class="text-center mb-5">
                  TimeTables
                </div>
              </a>
              <a href="dashboard.php?studentAdd" class="card col-md-3 ml-5 bg-success text-white">
                <div class="card-body text-center">
                  <i class="fa fa-user-plus fa-4x"></i>
                </div>
                <div class="text-center mb-5">
                  Add Student
                </div>
              </a>
              <a href="dashboard.php?studentData" class="card col-md-3 ml-5 bg-warning text-white">
                <div class="card-body text-center">
                  <i class="fa fa-users fa-4x"></i>
                </div>
                <div class="text-center mb-5">
                  View Students
                </div>
              </a>
              <a href="dashboard.php?showCourse" class="card col-md-3 mt-5 bg-danger text-white">
                <div class="card-body text-center">
                  <i class="fa fa-folder-open fa-4x"></i>
                </div>
                <div class="text-center mb-5">
                  View courses
                </div>
              </a>
              <a href="dashboard.php?addCoursePage" class="card col-md-3 mt-5 ml-5 bg-secondary text-white">
                <div class="card-body text-center">
                  <i class="fa fa-plus fa-4x"></i>
                </div>
                <div class="text-center mb-5">
                  Add course
                </div>
              </a>
              <a href="#" class="card col-md-3 mt-5 ml-5 bg-dark text-white">
                <div class="card-body text-center">
                  <i class="fa fa-money fa-4x"></i>
                </div>
                <div class="text-center mb-5">
                  Accounts
                </div>
              </a>


            </div>
            </div>

            <?php
           }
           ?>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });


function scourse() {
	$("#loaderIcon").show();
jQuery.ajax({
url: "course_availability.php",
data:'cshort='+$("#cshort").val(),
type: "POST",
success:function(data){
$("#course-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

function coursefullAvail() {
	$("#loaderIcon").show();
jQuery.ajax({
url: "course_availability.php",
data:'cfull='+$("#cfull").val(),
type: "POST",
success:function(data){
$("#course-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
 </script>


 <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

 <script>
function myFilters() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</body>

<?php
 }
?>


