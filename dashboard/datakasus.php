<?php
    include('function.php');
    
    if (isset($_POST['btn-add'])) {
        // jalankan query tambah record baru
        $tampilkankasus = $_POST['kasus'];
        $CreateSucceed = createKasus($_POST, $_FILES, $tampilkankasus);
        if ($CreateSucceed > 0) {
            // jika penambahan sukses, tampilkan alert
            echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "
            <script>
            alert('Gagal menambahkan Data !');
            document.location.href = 'index.php';
            </script>
            ";
        }
    }
?>