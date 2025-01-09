<?php
include("function.php");

$data = null; // Inisialisasi variabel $data dengan nilai null

if(isset($_GET['id_kasus'])){
    $id = ($_GET['id_kasus']);
    $eksekusi = readQuery('kasus', 'id_kasus', $id);
    $data = mysqli_fetch_assoc($eksekusi);
    $tampilkasus = tampilkankasus();
}

if(isset($_POST['btn-edit-kasus'])) {
    // jalankan query tambah record baru
    $UpdateSucceed = updateKasus($_POST);
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

// Fetch data for $kalangan
$kalanganQuery = mysqli_query($conn, "SELECT * FROM kalangan");
$kalangan = mysqli_fetch_all($kalanganQuery, MYSQLI_ASSOC);

// Fetch data for $berhasil
$berhasilQuery = mysqli_query($conn, "SELECT * FROM keberhasilan");
$berhasil = mysqli_fetch_all($berhasilQuery, MYSQLI_ASSOC);
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

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a
                class="brand" href="index.php">Update Kasus Zero Hunger</a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="icon-user"></i> Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../index.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar-inner -->
</div>

<main id="main">
    <!-- ======= Form Add Section ======= -->
    <section id="add-menu" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <br>
                <h4>Update <span>Kasus</span></h4><br>
            </div>
            <div class="gradient-custom-1 h-100">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                        <form action="#" method="POST" id="form-add" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id" value="<?= $data['id_kasus'] ?>">

                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="text" class="form-control" id="tahun" name="tahun"
                                    value="<?= $data['tahun'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_kasus" class="form-label">Jumlah Kasus</label>
                                <input type="text" class="form-control" id="jumlah_kasus" name="jumlah_kasus"
                                    value="<?= $data['jumlah_kasus'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="tingkat_kelaparan" class="form-label">Tingkat Kelaparan</label>
                                <input type="text" class="form-control" id="tingkat_kelaparan"
                                    name="tingkat_kelaparan" value="<?= $data['tingkat_kelaparan'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="kalangan">Kalangan Terdampak</label>
                                <select class="form-select" aria-label="Category" id="kalangan" name="kalangan"
                                    required>
                                    <?php
                                    foreach ($kalangan as $listkalangan) {
                                        $selected = ($listkalangan['id_kalangan'] == $data['id_kalangan']) ? 'selected' : '';
                                        echo "<option value='" . $listkalangan['id_kalangan'] . "' $selected>" . $listkalangan['kalangan'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="keberhasilan">Keberhasilan Mencegah Kasus</label>
                                <select class="form-select" aria-label="Category" id="keberhasilan" name="keberhasilan"
                                    required>
                                    <?php
                                    foreach ($berhasil as $listberhasil) {
                                        $selected = ($listberhasil['id_keberhasilan'] == $data['id_keberhasilan']) ? 'selected' : '';
                                        echo "<option value='" . $listberhasil['id_keberhasilan'] . "' $selected>" . $listberhasil['tingkat_keberhasilan'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <a href="index.php"><button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Batal</button></a>
                            <button type="submit" class="btn btn-info text-white" name="btn-edit-kasus"
                                id="btn-edit-kas" form="form-add">Update</button>
                        </form>
                        <?php
                        if (isset($_POST['btn-edit-kasus'])) {
                            echo "<script>
                            $(document).ready(function(){
                                $('#form-add').submit(function(){
                                    $('#btn-edit-kas').attr('disabled','disabled');
                                    return true;
                                });
                            });
                            </script>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

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

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.appear.js"></script>

<script src="js/script.js"></script>

</body>

</html>
