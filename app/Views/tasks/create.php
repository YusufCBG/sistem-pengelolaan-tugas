<!-- File: app/Views/tasks/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Blue Theme Styles */
        body {
            background-color: #e3f2fd; /* Light Blue Background */
            font-family: 'Arial', sans-serif;
            color: #212121; /* Dark Text */
        }
        .btn-primary {
            background-color: #0d47a1; /* Dark Blue Button */
            border-color: #0d47a1;
            color: #fff;
        }
        .btn-primary:hover {
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
        .alert {
            background-color: #ffebee; /* Light Red for Alerts */
            color: #b71c1c; /* Dark Red Text */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Buat Tugas</h2>
            <a href="/tasks" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali ke Daftar Tugas
            </a>
        </div>
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="/tasks/store" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Judul Tugas</label>
                <input type="text" name="title" id="title" class="form-control" value="<?= old('title'); ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" rows="4" required><?= old('description'); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Kategori</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id']; ?>" <?= old('category_id') == $category['id'] ? 'selected' : ''; ?>>
                            <?= $category['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="status_id" class="form-label">Status</label>
                <select name="status_id" id="status_id" class="form-select" required>
                    <option value="" disabled selected>Pilih Status</option>
                    <?php foreach ($statuses as $status): ?>
                        <option value="<?= $status['id']; ?>" <?= old('status_id') == $status['id'] ? 'selected' : ''; ?>>
                            <?= $status['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Buat Tugas
            </button>
        </form>
    </div>
</body>
</html>
