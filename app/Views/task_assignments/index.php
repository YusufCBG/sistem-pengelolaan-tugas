<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Penugasan</title>
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
        .btn-secondary {
            background-color: #f1f8ff; /* Soft Blue */
            border-color: #0d47a1;
            color: #0d47a1; /* Dark Blue Text */
        }
        .btn-secondary:hover {
            background-color: #1565c0;
            color: #fff;
        }
        .btn-warning {
            background-color: #ffa726; /* Orange Button */
            border-color: #fb8c00;
            color: #fff;
        }
        .btn-warning:hover {
            background-color: #fb8c00;
        }
        .btn-danger {
            background-color: #d32f2f; /* Red Button */
            border-color: #c62828;
        }
        .btn-danger:hover {
            background-color: #c62828;
        }
        table thead {
            background-color: #0d47a1; /* Dark Blue Header */
            color: #fff;
        }
        table tbody tr:nth-child(even) {
            background-color: #bbdefb; /* Light Blue Alternate Rows */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Lihat Penugasan </h1>
    <a href="/task_assignments/create" class="btn btn-primary mb-3">Tambah Penugasan Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Tugas</th>
                <th>ID penguna</th>
                <th>Ditugaskan Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($task_assignments)): ?>
                <?php foreach ($task_assignments as $assignment): ?>
                    <tr>
                        <td><?= $assignment['id'] ?></td>
                        <td><?= $assignment['task_id'] ?></td>
                        <td><?= $assignment['user_id'] ?></td>
                        <td><?= $assignment['assigned_at'] ?></td>
                        <td>
                            <a href="/task_assignments/edit/<?= $assignment['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/task_assignments/delete/<?= $assignment['id'] ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick=>Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Tidak ada tugas yang ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="/dashboard" class="btn btn-secondary">Kembali</a>
</div>
</body>
</html>
