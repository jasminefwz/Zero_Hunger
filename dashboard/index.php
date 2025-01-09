<?php
    include('config.php');
    include('function.php');

    $tampilkankasus = tampilkanKasus();
    $tampilkebutuhan = kebutuhan();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard Admin Zero</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php">Admin Zero Hunger</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="../index.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <!-- <li><a href="shortcodes.html"><i class="icon-code"></i><span>Form</span> </a> </li> -->
        <li><a href="../index.php"><i class="icon-list-alt"></i><span>Home</span></a></li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
          <!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Table Kasus Kelaparan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <td class="td-actions"><a href="createkasus.php" class="btn btn-small btn-success"><i class="btn-icon">Create</i></a></td>
                  </tr>
                  <tr>
                    <th>Tahun </th>
                    <th>Jumlah Kasus </th>
                    <th>Tingkat Kelaparan </th>
                    <th>Kalangan </th>
                    <th>Keberhasilan </th>
                    <th class="td-actions"> Action </th>
                    <!-- <th class="td-actions"> Update / Delete </th> -->
                  </tr>
                </thead>
                <tbody>
                <?php
                    foreach($tampilkankasus as $kasus){
                ?>
                  <tr>
                    <td> <?=$kasus['tahun']?></td>
                    <td> <?=$kasus['jumlah_kasus']?></td>
                    <td> <?=$kasus['tingkat_kelaparan']?></td>
                    <td> <?=$kasus['kalangan']?> </td>
                    <td> <?=$kasus['tingkat_keberhasilan']?> </td>
                    <td class="td-actions">
                      <a href="updatekasus.php?id_kasus=<?=$kasus['id_kasus']?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok">Update</i></a>
                      <a href="deletekasus.php?id=<?=$kasus['id_kasus']?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove">Delete</i></a>
                    </td>
                    <!-- <td class="td-actions"><a href="shortcodes.html" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a>
                      <a href="shortcodes.html" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a> -->
                    </td>
                  </tr>                
                </tbody>
                <?php
                    }
                  ?>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 


          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Table Kebutuhan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <td class="td-actions"><a href="createkebutuhan.php" class="btn btn-small btn-success"><i class="btn-icon">Create</i></a></td>
                  </tr>
                  <tr>
                    <th>Sandang </th>
                    <th>Pangan </th>
                    <th>Fasilitas </th>
                    <th class="td-actions"> Action </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    foreach($tampilkebutuhan as $kebutuhan){
                ?>
                  <tr>
                    <td><?=$kebutuhan['sandang']?></td>
                    <td><?=$kebutuhan['pangan']?></td>
                    <td><?=$kebutuhan['fasilitas']?></td>
                    <td class="td-actions">
                      <a href="updatekebutuhan.php?id_kebutuhan=<?=$kebutuhan['id_kebutuhan']?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok">Update</i></a>
                      <a href="deletekebutuhan.php?id=<?=$kebutuhan['id_kebutuhan']?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove">Delete</i></a>
                    </td>
                  </tr>                
                </tbody>
                <?php
                    }
                  ?>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 

<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        &copy; Copyright <strong><span>Zero Hunger</span></strong>. All Rights Reserved
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
</body>
</html>
