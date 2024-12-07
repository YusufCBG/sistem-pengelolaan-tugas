<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Status</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: #343a40;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Edit Status</h1>
    <div class="card shadow p-4">
        <form action="/statuses/update/<?= $status['id'] ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Status</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $status['name'] ?>" placeholder="Enter status name" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="/statuses" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-circle"></i> Perbarui
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Include Bootstrap Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
