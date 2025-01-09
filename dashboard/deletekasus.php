<?php
    include('function.php');

    $id = $_GET['id'];
    if ($id > 0) {
        $DeleteSucceed = deleteKasus($id);  
        if ($DeleteSucceed > 0) {
        echo "
        <script>
        alert('Delete Success !');
        document.location.href = 'index.php';
        </script>";
        } else {
        echo "
        <script>
        alert('Delete Failed !');
        document.location.href = 'index.php';
        </script>";
        }
    }
?>