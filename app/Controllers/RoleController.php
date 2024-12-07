<?php

namespace App\Controllers;

use App\Models\RoleModel;

class RoleController extends BaseController
{
    protected $roleModel;

    public function __construct()
    {
        $this->roleModel = new RoleModel();
    }

    public function index()
    {
        $data['roles'] = $this->roleModel->findAll();
        return view('roles/index', $data);
    }

    public function create()
    {
        return view('roles/create');
    }

    public function store()
    {
        $this->roleModel->save($this->request->getPost());
        return redirect()->to('/roles');
    }

    public function edit($id)
    {
        $data['role'] = $this->roleModel->find($id);
        return view('roles/edit', $data);
    }

    public function update($id)
    {
        $this->roleModel->update($id, $this->request->getPost());
        return redirect()->to('/roles');
    }

    public function delete($id)
    {
        $this->roleModel->delete($id);
        return redirect()->to('/roles');
    }
}
