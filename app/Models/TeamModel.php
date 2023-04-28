<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'team';
    protected $primaryKey       = 'member_id';
    protected $allowedFields    = ['firstname','lastname','profession','phone','picture'];

    
    public function getMembers($id){
        if($id === null){
            return $this->findAll();
        }
        return  $this->where(['member_id' => $id])->first();
    }
    
}
