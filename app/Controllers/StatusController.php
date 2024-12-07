<?php

namespace App\Controllers;

use App\Models\StatusModel;

class StatusController extends BaseController
{
    protected $statusModel;
    public function __construct()
    {
        $this->statusModel = new StatusModel();
    }
    public function index()
    {
        $data['statuses'] = $this->statusModel->findAll();
        return view('statuses/index', $data);
    }

    public function create()
    {
        return view('statuses/create');
    }
    public function store()
    {
        $this->statusModel->save($this->request->getPost());
        return redirect()->to('/statuses');
    }

    public function edit($id)
    {
        $data['status'] = $this->statusModel->find($id);
        return view('statuses/edit', $data);
    }
    public function update($id)
    {
        $this->statusModel->update($id, $this->request->getPost());
        return redirect()->to('/statuses');
    }

    public function delete($id)
    {
        $this->statusModel->delete($id);
        return redirect()->to('/statuses');
    }
}
