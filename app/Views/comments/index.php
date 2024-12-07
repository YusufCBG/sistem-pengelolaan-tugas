<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e3f2fd; /* Light Blue Background */
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: #0d47a1; /* Dark Blue Heading */
            font-weight: bold;
        }
        .btn-primary {
            background-color: #0d47a1;
            border-color: #0d47a1;
        }
        .btn-primary:hover {
            background-color: #1565c0;
        }
        .alert-success {
            color: #0d6efd;
            background-color: #e8f5fe;
            border-color: #cbe6f6;
        }
        .alert-danger {
            color: #d32f2f;
            background-color: #fdecea;
            border-color: #f9d4d3;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Komentar</h1>

    <!-- Flash Messages -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <!-- Comments Table -->
    <table class="table table-striped">
        <thead class="table-primary">
            <tr>
                <th>Tugas</th>
                <th>Pengguna</th>
                <th>Komentar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($comments)): ?>
                <?php foreach ($comments as $comment): ?>
                    <tr>
                        <td><?php echo $comment['task_title']; ?></td>
                        <td><?php echo $comment['user_name']; ?></td>
                        <td><?php echo $comment['comment']; ?></td>
                        <td>
                            <a href="<?php echo base_url('comments/edit/'.$comment['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo base_url('comments/delete/'.$comment['id']); ?>" 
                            class="btn btn-danger btn-sm" onclick=>Hapus</a>
                                
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">Tidak ada komentar tersedia.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="<?php echo base_url('comments/create'); ?>" class="btn btn-primary">Tambah Komentar</a>
    <a href="/dashboard" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>
