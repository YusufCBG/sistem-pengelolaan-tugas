<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
    <link href="<?= base_url('sb-admin-2/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('sb-admin-2/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body id="page-top">

    <div class="container mt-5">
        <h1 class="text-primary mb-4">Tambah Pengguna</h1>

        <!-- Form Tambah Pengguna -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Pengguna</h6>
            </div>
            <div class="card-body">
                <form action="/users/store" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="role_id" class="form-label">Role</label>
                        <select name="role_id" id="role_id" class="form-control" required>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/users" class="btn btn-secondary ml-2">Kembali</a>
                </form>
            </div>
        </div>

    </div>

    <!-- JavaScript dan Dependencies -->
    <script src="<?= base_url('sb-admin-2/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>
