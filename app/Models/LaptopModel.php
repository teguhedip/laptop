<?php

namespace App\Models;

use CodeIgniter\Model;

class LaptopModel extends Model
{
    protected $table      = 'laptop';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['brand', 'type', 'status'];
}
