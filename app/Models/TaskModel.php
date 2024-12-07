<?php
namespace App\Models;
use CodeIgniter\Model;
class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'category_id', 'status_id', 'created_by', 'created_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    public function getTasksWithCategory()
    {
        return $this->select('tasks.*, categories.name AS category_name,statuses.name AS status_name')
                    ->join('categories', 'categories.id = tasks.category_id', 'left')
                    ->join('statuses', 'statuses.id = tasks.status_id', 'left')
                    ->findAll();
    }
}