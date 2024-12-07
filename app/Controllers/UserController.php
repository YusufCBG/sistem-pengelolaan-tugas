<?php
namespace App\Controllers;
use App\Models\UserModel;
class UserController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $data['users'] = $this->userModel->findAll();
        return view('users/index', $data);
    }
    public function create()
    {
        return view('users/create');
    }
    public function store()
    {
        $this->userModel->save($this->request->getPost());
        return redirect()->to('/users');
    }
    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('users/edit', $data);
    }
    public function update($id)
    {
        $this->userModel->update($id, $this->request->getPost());
        return redirect()->to('/users');
    }
    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/users');
    }
}
