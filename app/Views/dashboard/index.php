<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Blue Theme Custom Styles */
        body {
            background-color: #e1f5fe; /* Light Blue Background */
            font-family: 'Roboto', sans-serif; /* Clean and modern font */
            color: #0d47a1; /* Dark Blue Text */
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #0d47a1; /* Dark Blue Header */
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10;
            height: 60px; /* Fixed height for header */
            padding: 10px 20px;
        }
        .sidebar {
            background-color: #1565c0; /* Medium Blue Sidebar */
            color: #fff;
            position: fixed;
            top: 60px; /* Adjusted to be below the fixed header */
            left: 0;
            bottom: 0;
            width: 220px;
            padding-top: 20px;
            z-index: 5;
        }
        .sidebar .nav-link {
            color: #fff; /* White Links */
        }
        .sidebar .nav-link.active {
            color: #0d47a1; /* Dark Blue for Active Link */
            background-color: #bbdefb; /* Light Blue Background */
        }
        .content {
            margin-left: 220px; /* Space for Sidebar */
            margin-top: 60px; /* Space for Header */
            padding: 30px;
        }
        .card {
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for cards */
            background-color: #ffffff; /* White background for cards */
            border: none;
        }
        .card-title {
            font-size: 1.2rem;
            color: #1565c0; /* Medium Blue Title Text */
        }
        .card-body {
            padding: 20px;
        }
        .bg-primary {
            background-color: #1565c0 !important; /* Medium Blue for Welcome Banner */
        }
        .btn-secondary {
            background-color: #0d47a1; /* Dark Blue Button */
            border-color: #0d47a1; /* Dark Blue Border */
            color: #fff;
        }
        .btn-secondary:hover {
            background-color: #1565c0;
            color: #fff;
        }
        .header-text {
            font-weight: 600;
            font-size: 2rem;
        }
        .display-5 {
            color: #0d47a1; /* Dark Blue Stats */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="p-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h4 m-0">Manajemen Tugas</h1>
            <a href="/logout" class="btn btn-secondary">LogOut</a>
        </div>
    </header>

    <!-- Sidebar -->
    <nav class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="#" class="nav-link active">
                    <i class="material-icons">home</i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="/tasks" class="nav-link">
                    <i class="material-icons">check_circle</i> Kelola Tugas
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="/categories" class="nav-link">
                    <i class="material-icons">folder</i> Kelola Kategori
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="/task_assignments" class="nav-link">
                    <i class="material-icons">assignment</i> Lihat Penugasan
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="comments" class="nav-link">
                    <i class="material-icons">comment</i> Komentar
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="/statuses" class="nav-link">
                    <i class="material-icons">insert_drive_file</i> Status
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <!-- Welcome Section -->
        <div class="bg-primary text-white p-4 rounded mb-4">
            <h2 class="header-text">Selamat Datang Di Dasbor Manajemen Tugas!</h2>
            <p>kelola, dan selesaikan tugas Anda dengan mudah.</p>
        </div>

        <!-- Stats Cards -->
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Tugas</h5>
                        <p class="display-5">5</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Tugas Selesai</h5>
                        <p class="display-5">8</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Dalam Progres</h5>
                        <p class="display-5">5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
