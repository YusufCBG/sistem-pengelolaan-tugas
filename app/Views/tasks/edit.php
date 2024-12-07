<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Blue Theme Styles */
        body {
            background-color: #e3f2fd; /* Light Blue Background */
            font-family: 'Arial', sans-serif;
            color: #212121; /* Dark Text */
        }
        .btn-success {
            background-color: #0d47a1; /* Dark Blue Button */
            border-color: #0d47a1;
            color: #fff;
        }
        .btn-success:hover {
            background-color: #1565c0; /* Lighter Blue */
            color: #fff;
        }
        .btn-secondary {
            background-color: #f1f8ff; /* Soft Blue Button */
            border-color: #0d47a1;
            color: #0d47a1; /* Dark Blue Text */
        }
        .btn-secondary:hover {
            background-color: #1565c0;
            color: #fff;
        }
        .container {
            background-color: #ffffff; /* White Background for Form */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle Shadow */
            padding: 30px;
        }
        .form-label {
            font-weight: bold;
            color: #0d47a1; /* Dark Blue Label */
        }
        .form-control, .form-select {
            border: 1px solid #0d47a1; /* Blue Border */
        }
        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 5px rgba(13, 71, 161, 0.5); /* Blue Glow */
            border-color: #1565c0; /* Lighter Blue */
        }
        .card {
            background-color: #f8f9fa; /* Light Gray Background for Cards */
            border: 1px solid #0d47a1; /* Blue Border */
        }
        .card-header {
            background-color: #0d47a1; /* Dark Blue Header */
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body id="page-top">
    <div class="container mt-5">
        <h1 class="text-primary mb-4">Edit Tugas</h1>
        <!-- Form Edit Tugas -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0">Form Edit Tugas</h6>
            </div>
            <div class="card-body">
                <form action="<?= base_url('tasks/update/' . $task['id']); ?>" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?= esc($task['title']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" required><?= esc($task['description']); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select name="category_id" id="category_id" class="form-select" required>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['id'] ?>" <?= $category['id'] == $task['category_id'] ? 'selected' : '' ?>>
                                    <?= $category['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status_id" class="form-label">Status</label>
                        <select name="status_id" id="status_id" class="form-select" required>
                            <?php foreach ($statuses as $status): ?>
                                <option value="<?= $status['id'] ?>" <?= $status['id'] == $task['status_id'] ? 'selected' : '' ?>>
                                    <?= $status['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('/'); ?>" class="btn btn-secondary ml-2">Kembali ke Dashboard</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
