<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Komentar</title>
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
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Tambah Komentar</h1>
    
    <form action="<?php echo base_url('comments/store'); ?>" method="POST" class="p-4 border rounded bg-white shadow-sm">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="task_id" class="form-label">Tugas</label>
            <select name="task_id" id="task_id" class="form-control" required>
                <option value="">Pilih Tugas</option>
                <?php foreach ($tasks as $task): ?>
                    <option value="<?php echo $task['id']; ?>"><?php echo $task['title']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Pengguna</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">Pilih Pengguna</option>
                <?php foreach ($users as $user): ?>
                    <option value="<?php echo $user['id']; ?>"><?php echo $user['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Komentar</label>
            <textarea name="comment" id="comment" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Komentar</button>
        <a href="<?php echo base_url('comments'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>

</body>
</html>
