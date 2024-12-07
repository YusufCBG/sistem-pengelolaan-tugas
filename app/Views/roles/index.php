<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Role</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('sb-admin-2/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body id="page-top">

    <div class="container mt-5">
        <h1 class="text-primary mb-4">Daftar Role</h1>

        <!-- Tombol untuk menambah Role -->
        <a href="<?= base_url('roles/create'); ?>" class="btn btn-primary mb-3">Tambah Role</a>

        <!-- Tabel Daftar Role -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($roles) && is_array($roles)): ?>
                            <?php foreach ($roles as $role): ?>
                                <tr>
                                    <td><?= esc($role['name']); ?></td>
                                    <td>
                                    <a href="<?= base_url('roles/edit/' . $role['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('roles/delete/' . $role['id']); ?>" class="btn btn-danger btn-sm" onclick=>Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="2">No roles found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tombol Kembali ke Dashboard -->
        <div class="d-flex justify-content-end mt-3">
            <a href="/dashboard" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>

    <!-- JavaScript dan Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
