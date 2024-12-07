<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Komentar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: #343a40;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Edit Komentar</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo base_url('comments/update/'.$comment['id']); ?>" method="POST" class="p-4 border rounded bg-white shadow-sm">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="task_id" class="form-label">Tugas</label>
            <select name="task_id" id="task_id" class="form-control" required>
                <option value="">Pilih Tugas</option>
                <?php foreach ($tasks as $task): ?>
                    <option value="<?php echo $task['id']; ?>" <?php echo ($comment['task_id'] == $task['id']) ? 'selected' : ''; ?>>
                        <?php echo $task['title']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Komentar</label>
            <textarea name="comment" id="comment" class="form-control" rows="4" required><?php echo $comment['comment']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui Komentar</button>
        <a href="<?php echo base_url('comments'); ?>" class="btn btn-secondary">Kembali ke Komentar</a>
    </form>
</div>

</body>
</html>
