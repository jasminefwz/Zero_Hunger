<?php
    include('config.php');

    function tampilkankasus(){
        global $conn;

        $query = "SELECT * FROM kasus
                    INNER JOIN kalangan ON kasus.id_kalangan = kalangan.id_kalangan
                    INNER JOIN keberhasilan ON kasus.id_keberhasilan = keberhasilan.id_keberhasilan";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readKeberhasilan(){
        global $conn;

        $query = "SELECT * FROM keberhasilan order by tingkat_keberhasilan asc";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readKalangan(){
        global $conn;

        $query = "SELECT * FROM kalangan";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function kebutuhan(){
        global $conn;

        $query = "SELECT * FROM kebutuhan";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readQuery($table, $id, $find){
        global $conn;

        $query = "SELECT * FROM ".$table." WHERE ".$id."=".$find;
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function createKebutuhan($data){
        global $conn;

        $sandang = $data['sandang'];
        $pangan = $data['pangan'];
        $fasilitas = $data['fasilitas'];

        $query = "INSERT INTO kebutuhan VALUES('', '$sandang', '$pangan', '$fasilitas')";
        $eksekusi = mysqli_query($conn, $query);
        $succeed = mysqli_affected_rows($conn);

        return $succeed;
    }

    function updateKebutuhan($data){
        global $conn;

        $id = $data['id'];
        $sandang = $data['sandang'];
        $pangan = $data['pangan'];
        $fasilitas = $data['fasilitas'];

        $query = "UPDATE kebutuhan SET sandang = '$sandang', pangan = '$pangan', fasilitas = '$fasilitas' WHERE id_kebutuhan = $id";
        $eksekusi = mysqli_query($conn, $query);
        $succeed = mysqli_affected_rows($conn);

        return $succeed;
    }

    function deleteKebutuhan($id){
        global $conn;
    
        $query = "DELETE FROM kebutuhan WHERE id_kebutuhan = $id";
        $eksekusi = mysqli_query($conn, $query);
    
        if ($eksekusi) {
            $succeed = mysqli_affected_rows($conn);
            return $succeed;
        } else {
            echo "Error: " . mysqli_error($conn); // Menampilkan pesan error jika terjadi kesalahan pada query
            return -1; // Mengembalikan nilai -1 untuk menunjukkan bahwa terjadi kesalahan
        }
    }

    function createKasus($data){
        global $conn;

        $tahun = $data['tahun'];
        $jumkasus = $data['jumlah_kasus'];
        $tlapar = $data['tingkat_kelaparan'];
        $kalangan = $data['kalangan'];
        $berhasil = $data['keberhasilan'];

        $query = "INSERT INTO kasus VALUES('', '$tahun', '$jumkasus', $tlapar, '$kalangan', '$berhasil')";
        $eksekusi = mysqli_query($conn, $query);

        $succeed = mysqli_affected_rows($conn);
        if ($succeed > 0) {
            $query = "SELECT id_kasus from kasus WHERE jumlah_kasus LIKE '$jumkasus'";
            $eksekusi = mysqli_query($conn, $query);
            while($data = mysqli_fetch_assoc($eksekusi)){
                $id = $data['id_kasus'];
            }
        }

        return $succeed;
    }

    
    function updateKasus($data){
        global $conn;
    
        $id = $data['id'];
        $tahun = $data['tahun'];
        $jumkasus = $data['jumlah_kasus'];
        $tlapar = $data['tingkat_kelaparan'];
        $kalangan = $data['kalangan'];
        $berhasil = $data['keberhasilan'];
    
        $query = "UPDATE kasus SET tahun = '$tahun', jumlah_kasus = '$jumkasus', tingkat_kelaparan = '$tlapar', id_kalangan = '$kalangan', id_keberhasilan = '$berhasil' WHERE id_kasus = $id";

        $eksekusi = mysqli_query($conn, $query);
    
        $succeed = false; // Inisialisasi variabel succeed
    
        if ($eksekusi) {
            $succeed = true; // Query berhasil dieksekusi
        }
    
        return $succeed;
    }
    
    function deleteKasus($id){
        global $conn;

        $query = "DELETE FROM kasus WHERE id_kasus = $id";
        $eksekusi = mysqli_query($conn, $query);
        $succeed = mysqli_affected_rows($conn);

        if ($eksekusi) {
            $succeed = mysqli_affected_rows($conn);
            return $succeed;
        } else {
            echo "Error: " . mysqli_error($conn); // Menampilkan pesan error jika terjadi kesalahan pada query
            return -1; // Mengembalikan nilai -1 untuk menunjukkan bahwa terjadi kesalahan
        }
    }

    // function login($username, $password) {
    //     // Koneksi ke database
    //     $conn = mysqli_connect("nama_host", "nama_pengguna", "kata_sandi", "nama_database");
    
    //     // Mengecek koneksi
    //     if (mysqli_connect_errno()) {
    //         echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    //         exit();
    //     }
    
    //     // Menghindari serangan SQL Injection dengan melakukan escapting pada nilai input
    //     $username = mysqli_real_escape_string($conn, $username);
    //     $password = mysqli_real_escape_string($conn, $password);
    
    //     // Membuat query untuk memeriksa kredensial pengguna
    //     $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    //     $result = mysqli_query($conn, $query);
    
    //     // Memeriksa apakah query menghasilkan baris yang sesuai
    //     if (mysqli_num_rows($result) == 1) {
    //         // Login berhasil
    //         return true;
    //     } else {
    //         // Login gagal
    //         return false;
    //     }
    
    //     // Menutup koneksi database
    //     mysqli_close($conn);
    // }
    
?>