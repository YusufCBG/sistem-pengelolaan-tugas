<?php
namespace App\Models;
use CodeIgniter\Model;
class TaskAssignmentModel extends Model
{
    protected $table = 'task_assignments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['task_id', 'user_id', 'assigned_at'];
    protected $useTimestamps = false;
    protected $createdField  = 'assigned_at';
}
