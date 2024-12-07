<?php

namespace App\Models;

use CodeIgniter\Model;


class CommentModel extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $autoincreament = True;
    protected $allowedFields = ['task_id', 'user_id', 'comment', 'created_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getCommentsWithDetails()
{
    return $this->select('comments.*, tasks.title as task_title, users_yoi.name as user_name,users_yoi.id as user_ID')
                ->join('tasks', 'tasks.id = comments.task_id')
                ->join('users_yoi', 'users_yoi.id = comments.user_id')
                ->findAll();
}

}
