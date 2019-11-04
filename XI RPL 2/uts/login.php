<?php 
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin") {
        $_SESSION['login'] = $username;

        echo "<script>alert('Anda Berhasil Login'); window.location.href='home.php'</script>";
    }else{
        echo "<script>alert('Username Atau Password Salah'); window.location.href='login.php'</script>";
    }
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <h2></h2>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login Form</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ingat Password</label>
                             </div>
                            <div class="form-group">
                                <button class="btn btn-primary" name="login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>
