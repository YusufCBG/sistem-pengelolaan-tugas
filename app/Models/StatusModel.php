<?php
namespace App\Models;
use CodeIgniter\Model;
class StatusModel extends Model
{
    protected $table = 'statuses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'created_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
}
