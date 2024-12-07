<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Blue Theme Styles */
        body {
            background-color: #e3f2fd; /* Light Blue Background */
            font-family: 'Arial', sans-serif;
            color: #212121; /* Dark Text */
        }
        h1 {
            color: #0d47a1; /* Dark Blue Heading */
            font-weight: bold;
        }
        .btn-primary {
            background-color: #0d47a1; /* Dark Blue Button */
            border-color: #0d47a1;
        }
        .btn-primary:hover {
            background-color: #1565c0; /* Lighter Blue */
        }
        .btn-warning {
            background-color: #ffc107; /* Amber */
            border-color: #ffc107;
            color: #212121; /* Dark Text */
        }
        .btn-warning:hover {
            background-color: #ffca28; /* Lighter Amber */
        }
        .btn-danger {
            background-color: #d32f2f; /* Red */
            border-color: #d32f2f;
        }
        .btn-danger:hover {
            background-color: #e53935; /* Lighter Red */
        }
        .btn-secondary {
            background-color: #f1f8ff; /* Soft Blue */
            border-color: #0d47a1;
            color: #0d47a1; /* Dark Blue Text */
        }
        .btn-secondary:hover {
            background-color: #1565c0;
            color: #fff;
        }
        table thead {
            background-color: #0d47a1; /* Dark Blue for Table Header */
            color: #fff;
        }
        table tbody tr:nth-child(even) {
            background-color: #bbdefb; /* Light Blue Row */
        }
        table tbody tr:hover {
            background-color: #90caf9; /* Blue Hover */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Kategori</h1>
    <a href="/categories/create" class="btn btn-primary mb-3">Tambah Kategori Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($categories)): ?>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <td><?= $category['name'] ?></td>
                        <td>
                            <a href="/categories/edit/<?= $category['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/categories/delete/<?= $category['id'] ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick=>Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">Tidak ada kategori ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="/dashboard" class="btn btn-secondary">Kembali</a>
</div>
</body>
</html>
