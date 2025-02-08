<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 300px;
            margin: auto;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: var(--bs-success);
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }

        .card-title {
            margin-bottom: 0;
            color: white; 
        }

        .logo {
            max-width: 50px; 
            margin-bottom: 10px; 
        }

        .form {
            margin-top: 20px;
        }

        .btn-login {
            width: 100%;
            margin-top: 10px;
        }
    </style>
    <title>LOGIN</title>
</head>
<body>

    <!-- Button trigger modal -->
    <div class="card">
        <div class="card-header">
            <img src="../img/logo.png" alt="Logo" class="logo">
            <h5 class="card-title">Halaman Login MAN 1 Bukittinggi</h5>
        </div>
        <div class="card-body">
            <form method="post" action="cek_login.php" class="form">

                <div class="mb-3">
                    <label for="username" class="form-label">Username :</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="mb-3">
                    <label for="pw" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="pw" name="pw"><br>
                    <input type="checkbox" id="lihatpw"> <label for="lihatpw">Show Password</label>
                </div>

                <input type="submit" value="LOGIN" class="btn btn-success btn-login">
                <br>

            </form>
        </div>
    </div>

    <script src="../asset/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/jquery.min.js"></script>
    <script src="../asset/js/script.js"></script>
</body>
</html>
