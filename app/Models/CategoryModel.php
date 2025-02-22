<?php
namespace App\Models;
use CodeIgniter\Model;
class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'created_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
}
