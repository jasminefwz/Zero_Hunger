<?php
    include("function.php");

    $data = null; // Inisialisasi variabel $data dengan nilai null

    if(isset($_GET['id_kebutuhan'])){
        $id = ($_GET['id_kebutuhan']);
        $eksekusi = readQuery('kebutuhan', 'id_kebutuhan', $id);
        $data = mysqli_fetch_assoc($eksekusi);
        $tampilkebutuhan = kebutuhan();
    }
  
    if(isset($_POST['btn-edit-kebutuhan'])) {
        // jalankan query tambah record baru
        $UpdateSucceed = updateKebutuhan($_POST);
        if($UpdateSucceed > 0){
            // jika penambahan sukses, tampilkan alert
            echo "
            <script>
                alert('Data Berhasil di update');
                document.location.href = 'index.php';
            </script>";
        } 
        else{
            echo "
            <script>
            alert('Tidak Ada Data yang diperbarui !');
            document.location.href = 'index.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ZERO HUNGER</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.php">Update Kebutuhan Zero Hunger</a>
        <div class="nav-collapse">
            <ul class="nav pull-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i> Admin <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-search pull-right">
                <input type="text" class="search-query" placeholder="Search">
            </form>
        </div>
    </div>
  </div>
</div>

<main id="main">
    <section id="add-menu" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <br>
                <h4>Update <span>Kebutuhan</span></h4><br>
            </div>
            <div class="gradient-custom-1 h-100">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                        <form action="#" method="POST" id="form-add" enctype="multipart/form-data">
                            <?php if ($data !== null): ?>
                            <input type="hidden" name="id" id="id" value="<?=$data['id_kebutuhan']?>">
                            <div class="mb-3">
                                <label for="sandang" class="form-label">Sandang</label>
                                <input type="text" class="form-control" id="sandang" name="sandang" value="<?=$data['sandang']?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="pangan" class="form-label">Pangan</label>
                                <input type="text" class="form-control" id="pangan" name="pangan" value="<?=$data['pangan']?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="fasilitas" class="form-label">Fasilitas</label>
                                <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="<?=$data['fasilitas']?>" required>
                            </div>
                            <?php endif; ?>
                            <a href="index.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button></a>
                            <button type="submit" class="btn btn-info text-white" name="btn-edit-kebutuhan" id="btn-edit-kebutuhan" form="form-add">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="footer">
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                &copy; Copyright 
                <strong><span>Zero Hunger</span></strong>. All Rights Reserved
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
<script src="js/base.js"></script>
</body>
</html>
