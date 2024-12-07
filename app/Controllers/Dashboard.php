<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\StatusModel;
use App\Models\TaskAssignmentModel;
use App\Models\TaskModel;
use App\Models\UserModel;
use App\Models\RoleModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $commentModel = new CommentModel();
        $statusModel = new StatusModel();
        $taskAssignmentModel = new TaskAssignmentModel();
        $taskModel = new TaskModel();
        $userModel = new UserModel();
        $roleModel = new RoleModel();

        // Ambil data dari model-model yang digunakan
        $categories = $categoryModel->findAll();
        $comments = $commentModel->findAll();
        $statuses = $statusModel->findAll();
        $tasks = $taskModel->countAllResults();
        $users = $userModel->findAll();
        $roles = $roleModel->findAll();

        // Kirim data ke view
        return view('dashboard/index', [
            'categories' => $categories,
            'comments' => $comments,
            'statuses' => $statuses,
            'tasks' => $tasks,
            'users' => $users,
            'roles' => $roles
        ]);
    }
}
