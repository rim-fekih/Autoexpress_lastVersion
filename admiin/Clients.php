<?php
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
        <meta http-equiv="Refresh" content="10">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="ionicons.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="admin_dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TECHPROTN</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="logo_techprotn.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            <?php echo $_SESSION['nom'] ; ?>
          <?php echo $_SESSION['prenom'] ; ?>
          </p>
          
        </div>
      </div>
      <div style="text-align: center;"> <a href="#"><i class="fa fa-circle text-success"></i> Online</a></div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <ul class="treeview-menu">
            <li class="treeview">
          <a href="#">
             <span>
             Fonctionnalités </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="font-size: 12px;">
            
            <li> <a href="Admins.php"> Gestion administrateurs </a></li>
            <li> <a href="Clients.php"> Gestion Utilisateurs </a></li>
            <li> <a href="Service et Solution.php"> Gestion Service et Solution </a></li>
            <li> <a href="Actualites.php"> Gestion Actualités </a></li>
            <li> <a href="Partenaire.php"> Gestion Partenaires </a></li>
            <li> <a href="Reference.php"> Gestion References </a></li>
            <li> <a href="Entreprise.php"> Gestion entreprises </a></li>
            <li> <a href="Contact.php"> Gestion contacts </a></li>
            </ul>
        </li>

            

            <li class="treeview">
          <a href="#">
             <span>
             Modification </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="font-size: 12px;">
            <li> <a href="About.php"> Edition About </a></li>
            <li> <a href="Vision.php"> Edition Vision </a></li>
            <li> <a href="Mission.php">
            Edition Mission  </a></li>
            <li> <a href="Valeur.php"> Nos Valeurs </a></li>
            
          </ul>
        </li>

        <li>
          <a href="Certificat.php">
             <span>Gestion Certificats</span>
          </a>
        </li>
        <li>
          <a href="Ticket.php">
             <span>Gestion tickets</span>
          </a>
        </li>
        <li>
          <a href="Upload.php">
             <span>Gestion Upload</span>
          </a>
        </li> 
            
       </ul> 
        <li>
          <a href="logout.php">
            <i class="fa fa-lock"></i> <span>Logout</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border" style="text-align: center;">
              <h3 class="box-title" >Gestion Utilisateurs</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search ...">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <a href="AjoutClient.php"><button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-plus"></i>
                </button></a>
                <div class="btn-group">
                  <b>Ajouter Client</b>
                </div>
               
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <?php
                   include 'affClients.php';

                    ?> 
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="jquery.min.js"></script>
<script type="text/javascript">


function notif() { 
  <?php
                                                            include ('../includes/cnx1.php') ; 


                    $sql = "SELECT ticket_id FROM ost_ticket where etat=1 ";
                    $result = $conn->query($sql);
                   
                    $nbre=$result->num_rows ;

?>
  var num="<?php echo $nbre; ?>";
  if(num!='0')
  {
    alert("Vous avez "+num+" nouvelle(s) ticket(s)");
    <?php
      $sql = "update ost_ticket set etat='0' where etat='1' ";

      $conn->query($sql) ;
    ?>

  }
      setTimeout(notif, 11000);
 
 }
notif();

</script>

<!-- AdminLTE App -->
<script src="adminlte.min.js"></script>
</body>
</html>