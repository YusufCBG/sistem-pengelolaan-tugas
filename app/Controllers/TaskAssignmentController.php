<?php

namespace App\Controllers;

use App\Models\TaskAssignmentModel;
use CodeIgniter\Controller;

class TaskAssignmentController extends BaseController
{
    protected $taskAssignmentModel;
    public function __construct()
    {
        $this->taskAssignmentModel = new TaskAssignmentModel();
    }
    public function index()
    {
        $data['task_assignments'] = $this->taskAssignmentModel->findAll();
        return view('task_assignments/index', $data);
    }

    // Menampilkan form untuk membuat penugasan tugas baru
    public function create()
    {
        return view('task_assignments/create');
    }
    public function store()
    {
        $this->taskAssignmentModel->save([
            'task_id'    => $this->request->getPost('task_id'),
            'user_id'    => $this->request->getPost('user_id'),
            'assigned_at'=> date('Y-m-d H:i:s'),
        ]);
        return redirect()->to('/task_assignments');
    }

    // Menampilkan form untuk mengedit penugasan tugas yang ada
    public function edit($id)
    {
        $data['task_assignment'] = $this->taskAssignmentModel->find($id);
        return view('task_assignments/edit', $data);
    }
    public function update($id)
    {
        $this->taskAssignmentModel->update($id, [
            'task_id'    => $this->request->getPost('task_id'),
            'user_id'    => $this->request->getPost('user_id'),
            'assigned_at'=> $this->request->getPost('assigned_at'),
        ]);
        return redirect()->to('/task_assignments');
    }

    // Menghapus penugasan tugas
    public function delete($id)
    {
        $this->taskAssignmentModel->delete($id);
        return redirect()->to('/task_assignments');
    }
}
