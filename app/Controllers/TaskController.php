<?php
namespace App\Controllers;
use App\Models\TaskModel;
use App\Models\CategoryModel;
use App\Models\StatusModel;
class TaskController extends BaseController
{
    protected $taskModel;
    protected $categoryModel;
    protected $statusModel;
    public function __construct()
    {
        $this->taskModel = new TaskModel();
        $this->categoryModel = new CategoryModel();
        $this->statusModel = new StatusModel();
    }
    public function index()
    {
        $data['tasks'] = $this->taskModel->getTasksWithCategory();
        return view('tasks/index', $data);
    }
    public function create()
    {
        // Mengambil data kategori dan status untuk ditampilkan di form
        $data['categories'] = $this->categoryModel->findAll();
        $data['statuses'] = $this->statusModel->findAll();
        return view('tasks/create', $data);
    }
    public function store()
    {
        $validationRules = [
            'title'       => 'required|max_length[255]',
            'description' => 'required',
            'category_id' => 'required|is_not_unique[categories.id]',
            'status_id'   => 'required|is_not_unique[statuses.id]',
        ];
        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form dan simpan ke database
        $taskData = [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'category_id' => $this->request->getPost('category_id'),
            'status_id'   => $this->request->getPost('status_id'),
        ];

        // Simpan data ke database
        $this->taskModel->save($taskData);

        // Set pesan sukses
        session()->setFlashdata('success', 'Tugas berhasil ditambahkan.');

        // Redirect ke halaman tugas
        return redirect()->to('/tasks');
    }

    public function edit($id)
    {
        $data['task'] = $this->taskModel->find($id);
        if (!$data['task']) {
            session()->setFlashdata('error', 'Tugas tidak ditemukan.');
            return redirect()->to('/tasks');
        }
        $data['categories'] = $this->categoryModel->findAll();
        $data['statuses'] = $this->statusModel->findAll();
        return view('tasks/edit', $data);
    }
    public function update($id)
    {
        $validationRules = [
            'title'       => 'required|max_length[255]',
            'description' => 'required',
            'category_id' => 'required|is_not_unique[categories.id]',
            'status_id'   => 'required|is_not_unique[statuses.id]',
        ];
        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $taskData = [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'category_id' => $this->request->getPost('category_id'),
            'status_id'   => $this->request->getPost('status_id'),
        ];
        $this->taskModel->update($id, $taskData);
        session()->setFlashdata('success', 'Tugas berhasil diperbarui.');
        return redirect()->to('/tasks');
    }

    public function delete($id)
{
    if ($this->taskModel->delete($id)) {
        return redirect()->to('/tasks')->with('message', 'Task deleted successfully');
    } else {
        return redirect()->to('/tasks')->with('error', 'Failed to delete task');
    }
}
}
