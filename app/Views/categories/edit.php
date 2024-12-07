<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
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
        .form-label {
            color: #0d47a1; /* Dark Blue for Label */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Edit Kategori</h1>
    <form action="/categories/update/<?= $category['id'] ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $category['name'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="/categories" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
