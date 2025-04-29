<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TOKO TRIJAYA</title>

    <!-- SBAdmin2 Styles -->
    <link href="<?= base_url('SBAdmin2/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('SBAdmin2/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(90deg, #4e73df 0%, #1cc88a 100%);
        }
    </style>
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">
                        <!-- Login Form -->
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Login Toko Trijaya</h1>
                        </div>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <form class="user" method="POST" action="/login">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-user"
                                    placeholder="Masukkan Username..." required>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control form-control-user"
                                        placeholder="Masukkan Password..." required>
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0">
                                            <a href="#" id="togglePassword" class="text-gray-600"><i class="fas fa-eye"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Login
                            </button>
                        </form>

                        <hr>
                        <div class="text-center">
                            <small>Hak akses hanya untuk pengguna terdaftar.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SBAdmin2 Scripts -->
    <script src="<?= base_url('SBAdmin2/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('SBAdmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('SBAdmin2/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('SBAdmin2/js/sb-admin-2.min.js') ?>"></script>
    <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        e.preventDefault();
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        this.querySelector('i').classList.toggle('fa-eye');
        this.querySelector('i').classList.toggle('fa-eye-slash');
    });
    </script>
<?= view('layouts/footer') ?>

</body>
</html>