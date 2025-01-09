<?php
    include('config.php');

    function readKebutuhan(){
        global $conn;

        $query = "SELECT * FROM kebutuhan";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    // function readKebutuhan($kategori)
    // {
    //     global $conn;
    
    //     $query = "SELECT $kategori FROM kebutuhan";
    //     $eksekusi = mysqli_query($conn, $query);
    
    //     return $eksekusi;
    // }
    

    function readKasus(){
        global $conn;
        
        $query = "SELECT * FROM kasus JOIN keberhasilan ON kasus.id_keberhasilan = keberhasilan.id_keberhasilan WHERE kasus.id_kalangan = 4";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readKasusAnak(){
        global $conn;
        
        $query = "SELECT * FROM kasus JOIN kalangan ON kasus.id_kalangan = kalangan.id_kalangan WHERE kasus.id_kalangan = 1";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readKasusRemaja(){
        global $conn;
        
        $query = "SELECT * FROM kasus JOIN kalangan ON kasus.id_kalangan = kalangan.id_kalangan WHERE kasus.id_kalangan = 2";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readKasusDewasa(){
        global $conn;
        
        $query = "SELECT * FROM kasus JOIN kalangan ON kasus.id_kalangan = kalangan.id_kalangan WHERE kasus.id_kalangan = 3";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readKasusKeseluruhan(){
        global $conn;
        
        $query = "SELECT * FROM kasus JOIN kalangan ON kasus.id_kalangan = kalangan.id_kalangan WHERE kasus.id_kalangan = 4";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readMasyarakatA(){
        global $conn;

        $query = "SELECT * FROM masyarakat WHERE id_kalangan = 1";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readMasyarakatR(){
        global $conn;

        $query = "SELECT * FROM masyarakat WHERE id_kalangan = 2";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readMasyarakatD(){
        global $conn;

        $query = "SELECT * FROM masyarakat WHERE id_kalangan = 3";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readMasyarakatK(){
        global $conn;

        $query = "SELECT * FROM masyarakat WHERE id_kalangan = 4";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readJumKasusB(){
        global $conn;

        $query = "SELECT MAX(jumlah_kasus)
                    FROM kasus
                    WHERE id_kalangan = 4";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function readJumKasusS(){
        global $conn;

        $query = "SELECT MIN(jumlah_kasus)
                    FROM kasus
                    WHERE id_kalangan = 4";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }

    function cekLogin(){
        global $conn;
        
        $username = $_GET['user'];
        $password = $_GET['pass'];
    
        $query = "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'";
    
        $result = $conn->query($query);
    
        if ($result->num_rows == 1) {
            // Login berhasil, arahkan pengguna ke halaman selanjutnya
            header("Location: dashboard/index.html");
        } else {
            // Login gagal, tampilkan pesan kesalahan
            echo "Username atau password salah.";
        }
    
        $conn->close();
    }
    
?> 
