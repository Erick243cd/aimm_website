<?php

namespace App\Models;

use CodeIgniter\Model;

class CoordonneeModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'coordonnees';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'address', 'phone', 'pcaName', 'email', 'created_at'];
}
