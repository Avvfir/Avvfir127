<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin / Petugas - aplikasi pembayaran SPP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <h4 class="text-center">LOGIN ADMIN / PETUGAS</h4>
                <div class="card">
                    <div class="card-header">
                    <img src="img/download.png" width="150px">
                    </div>
                    <div class="card-body">
                        <form action="proses-login-petugas.php" method="post">
                            <div class="form-group mb-2">
                                <label>username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukan username Anda.." required>
                            </div>
                            <div class="card-body">
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group mb-2">
                                <label>password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan password Anda.." required>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary"> LOGIN </button>
                            </div>
                            <a href="index.php"> Login Sebagai Siswa </a>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
</div>

    
<script src="js/boostrap.bundle.min.js"></script>
</body>
</html>