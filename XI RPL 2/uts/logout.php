<?php
session_start();
if ($_SESSION['login']) {
    unset($_SESSION);
    session_destroy();

    echo "<script>alert('Anda Berhasil Logout.'); window.location.href='login.php'</script>";
}
?>