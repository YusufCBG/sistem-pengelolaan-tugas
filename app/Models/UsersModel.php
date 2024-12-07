<?php
namespace App\Models;
use CodeIgniter\Model;
class UsersModel extends Model
{
    protected $table = 'users_yoi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'role_id'];
}