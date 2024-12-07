<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: #343a40;
            font-weight: bold;
        }
        .no-data {
            color: #6c757d;
            font-style: italic;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Status</h1>
    <a href="/statuses/create" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Status Baru
    </a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($statuses)): ?>
                    <?php foreach ($statuses as $status): ?>
                        <tr>
                            <td><?= $status['id'] ?></td>
                            <td><?= $status['name'] ?></td>
                            <td>
                                <a href="/statuses/edit/<?= $status['id'] ?>" 
                                   class="btn btn-warning btn-sm" 
                                   aria-label="Edit Status <?= $status['name'] ?>">
                                   <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="/statuses/delete/<?= $status['id'] ?>" 
                                      method="post" 
                                      class="d-inline">
                                    <?= csrf_field() ?>
                                    <button type="submit" 
                                            class="btn btn-danger btn-sm" 
                                            aria-label="Delete Status <?= $status['name'] ?>">
                                        <i class="bi bi-trash" onclick="return confirm('Are you sure you want to delete this status?')"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center no-data">Tidak ada status yang ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <a href="/dashboard" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
