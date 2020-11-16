<?php
require 'head.php';
?>
<div class="container-fluid ">
    <div class="row">
    <div class="wrapper col-md-2 bg-light">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <strong>SRS</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active nav-item py-1">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class=" nav-link dropdown-toggle">
                    <i class="fa fa-home"></i>
                    Home
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li class="nav-item py-1">
                        <a class="nav-link" href="#">Home 1</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link" href="#">Home 2</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link" href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item py-1">
                <a class="nav-link" href="#">
                    <i class="fa fa-briefcase"></i>
                    About
                </a>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link py-1">
                    <i class="fa fa-copy"></i>
                    Pages
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li class="nav-item py-1">
                        <a class="nav-link" href="#">Page 1</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link" href="#">Page 2</a>
                    </li>
                    <li class="nav-item py-1">
                        <a class="nav-link" href="#">Page 3</a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <!-- <div id="content col-md-6">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
        </nav>
    </div> -->
</div>
</div>
</div>
<script>
    /*jQuery(document).ready(function() {
        alert("js is working");
    });*/
</script>
<script>
    $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
</script>
