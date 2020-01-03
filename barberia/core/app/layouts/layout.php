<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Dani Entraigas Barbers</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.min.css">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/jquery-confirm/jquery-confirm.min.js" type="text/javascript"></script>
<?php if(isset($_GET["view"]) && $_GET["view"]=="home"):?>
<link href='assets/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='assets/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='assets/fullcalendar/moment.min.js'></script>
<script src='assets/fullcalendar/fullcalendar.min.js'></script>

<?php endif; ?>

</head>

<body>
<?php if(isset($_COOKIE["user_id"])):?>
  <div class="wrapper">

      <div class="sidebar" data-color="blue" style="width: 212px;">
      <div class="logo">
        <a href="./?view=home" class="simple-text">
          Dani Entraigas Barbers
        </a>
      </div>

        <div class="sidebar-wrapper" style="width: 213px;">
              <ul class="nav">
                  <li class="">
                      	<a href="./?view=home">
                          <i class="fa fa-home"></i>
                          <p>Agenda</p>
                      </a>
                  </li>
                  <!--<li>
                      <a href="./?view=newreservation">
                          <i class="fa fa-calendar"></i>
                          <p>Turnos</p>
                      </a>
                  </li>-->
                  <li>
                      <a href="./?view=pacients">
                          <i class="fa fa-male"></i>
                          <p>Clientes</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=categories">
                          <i class="fa fa-th-list"></i>
                          <p>Servicios</p>
                      </a>
                  </li>
                  <!--
                  <li>
                      <a href="./?view=medics">
                          <i class="fa fa-users"></i>
                          <p>Barberos</p>
                      </a>
                  </li>

                  <li>
                      <a href="./?view=categories">
                          <i class="fa fa-th-list"></i>
                          <p>Servicios</p>
                      </a>
                  </li>
                  -->

                  <li>
                      <a href="./?view=users">
                          <i class="fa fa-users"></i>
                          <p>Usuarios</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=reports">
                          <i class="fa fa-area-chart"></i>
                          <p> Ganancias</p>
                      </a>
                  </li>
                  <li>
                      <a href="./?view=vacaciones">
                          <i class="fa fa-road"></i>
                          <p>Vacaciones</p>
                      </a>
                  </li>

              </ul>
        </div>
      </div>

      <div class="main-panel">
      <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
              <span class="sr-only">Toggle navigation</span>

            </button>

          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="logout.php">Salir</a></li>
                </ul>
              </li>
            </ul>
<!--
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group  is-empty">
                <input type="text" class="form-control" placeholder="Search">
                <span class="material-input"></span>
              </div>
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="fa fa-search"></i><div class="ripple-container"></div>
              </button>
            </form>
            -->
          </div>
        </div>
      </nav>

      <div class="content">
      <div class="container-fluid">
<?php 
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
  View::load("login");

?>
</div>
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <nav class="pull-left">
            <ul>
              <!--<li>
                <a href="./?view=changelog" >
                  Log de cambios
                </a>
              </li>-->
              <li>
                <a href="#" target="_blank">
                  PerroSoft
                </a>
              </li>
        <!--
              <li>
                <a href="#">
                  Company
                </a>
              </li>
              <li>
                <a href="#">
                  Portfolio
                </a>
              </li>
              <li>
                <a href="#">
                   Blog
                </a>
              </li>
          -->
            </ul>
          </nav>
          <p class="copyright pull-right">
            <a href="#" target="_blank">PerroSoft</a> &copy; 2019
          </p>
        </div>
      </footer>
    </div>
  </div>
<?php else:?>
  <?php 
  View::load("login");

?>

<?php endif;?>
</body>

  <!--   Core JS Files   -->
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/material.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="assets/js/bootstrap-notify.js"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- Material Dashboard javascript methods -->
  <script src="assets/js/material-dashboard.js"></script>

  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){

      // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

      });
  </script>

</html>
