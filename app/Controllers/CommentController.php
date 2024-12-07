<?php

namespace App\Controllers;

use App\Models\CommentModel;
use App\Models\TaskModel;
use App\Models\UsersModel;
use CodeIgniter\Controller;

class CommentController extends Controller
{
    protected $commentModel;
    protected $taskModel;
    protected $userModel;
    public function __construct()
    {
        $this->commentModel = new CommentModel();
        $this->taskModel = new TaskModel();      
        $this->userModel = new UsersModel();     
    }
    public function index()
    {
        $data['comments'] = $this->commentModel->getCommentsWithDetails(); 
        return view('comments/index', $data);
    }

    // Menampilkan form untuk membuat komentar
    public function create()
    {
        $data['tasks'] = $this->taskModel->findAll();  
        $data['users'] = $this->userModel->findAll();  
        return view('comments/create', $data); 
    }
public function store()
{
    $taskId = $this->request->getPost('task_id');
    $userId = $this->request->getPost('user_id'); 
    $comment = $this->request->getPost('comment');
    if (!$this->taskModel->find($taskId)) {
        return redirect()->back()->with('error', 'Task ID tidak valid.');
    }
    if (!$this->userModel->find($userId)) {
        return redirect()->back()->with('error', 'User ID tidak valid.');
    }
    $this->commentModel->save([
        'task_id' => $taskId,
        'user_id' => $userId, 
        'comment' => $comment,
    ]);
    return redirect()->to('/comments')->with('success', 'Komentar berhasil ditambahkan.');
}


    // Menampilkan form untuk mengedit komentar
    public function edit($id)
    {
        $data['comment'] = $this->commentModel->find($id);
        if (!$data['comment']) {
            return redirect()->to('/comments')->with('error', 'Komentar tidak ditemukan.');
        }
        $data['tasks'] = $this->taskModel->findAll();
        return view('comments/edit', $data); // Tampilkan form edit komentar
    }
    public function update($id)
    {
        $taskId = $this->request->getPost('task_id');
        $comment = $this->request->getPost('comment');
        if (!$this->taskModel->find($taskId)) {
            return redirect()->back()->with('error', 'Task ID tidak valid.');
        }
        $this->commentModel->update($id, [
            'task_id' => $taskId,
            'comment' => $comment,
        ]);
        return redirect()->to('/comments')->with('success', 'Komentar berhasil diperbarui.');
    }

    // Menghapus komentar
    public function delete($id)
    {
        $this->commentModel->delete($id);
        return redirect()->to('/comments')->with('success', 'Komentar berhasil dihapus.');
    }
}
