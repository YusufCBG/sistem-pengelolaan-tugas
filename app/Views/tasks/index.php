<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>
    <link href="<?= base_url('sb-admin-2/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('sb-admin-2/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <style>
        /* Blue Theme Custom Styles */
        body {
            background-color: #e3f2fd; /* Light Blue Background */
            color: #212121; /* Dark Text for Readability */
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #1565c0; /* Medium Blue */
            border-bottom: 4px solid #0d47a1; /* Darker Blue Accent */
        }
        .navbar a {
            color: #fff; /* White Text for Links */
        }
        .container-fluid {
            background-color: #f1f8ff; /* Soft Blue Background for Content */
            padding: 30px;
        }
        .btn-primary {
            background-color: #0d47a1; /* Dark Blue Button */
            border-color: #0d47a1; /* Matching Border */
            color: #fff; /* White Text */
        }
        .btn-primary:hover {
            background-color: #1565c0; /* Lighter Blue */
            color: #fff;
        }
        .btn-secondary {
            background-color: #f1f8ff; /* Light Blue Button */
            border-color: #0d47a1; /* Darker Blue Border */
            color: #0d47a1; /* Dark Blue Text */
        }
        .btn-secondary:hover {
            background-color: #1565c0;
            color: #fff;
        }
        .card {
            background-color: #ffffff; /* White Background for Cards */
            border: 2px solid #0d47a1; /* Dark Blue Border */
        }
        .card-header {
            background-color: #1565c0; /* Medium Blue */
            color: #fff; /* White Text */
        }
        table th, table td {
            color: #212121; /* Dark Text */
        }
        table thead {
            background-color: #1565c0; /* Medium Blue for Table Header */
            color: #fff; /* White Text */
        }
        table tbody tr:nth-child(even) {
            background-color: #e3f2fd; /* Light Blue for Rows */
        }
        table tbody tr:hover {
            background-color: #bbdefb; /* Hover Effect */
        }
    </style>
</head>
<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Navbar content here -->
                </nav>
                <!-- Main Content -->
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Daftar Tugas</h2>
                        <a href="/tasks/create" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Tugas
                        </a>
                    </div>
                    <!-- Success Message -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- Tasks Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-light">Daftar Tugas</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tasks as $task): ?>
                                        <tr>
                                            <td><?= $task['id']; ?></td>
                                            <td><?= $task['title']; ?></td>
                                            <td><?= $task['category_name']; ?></td>
                                            <td><?= $task['status_name']; ?></td>
                                            <td>
                                                <a href="/tasks/edit/<?= $task['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="/task/delete/<?= $task['id'] ?>" method="post" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick=>Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <a href="/dashboard" class="btn btn-secondary">Kembali Ke Dasbor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="<?= base_url('sb-admin-2/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
