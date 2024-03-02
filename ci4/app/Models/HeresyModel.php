<?php

namespace App\Models;

use CodeIgniter\Model;

class HeresyModel extends Model
{
    protected $table = 'heresy';
	
	protected $allowedFields = ['name', 'email', 'alias', 'title', 'caption', 'image'];

    public function getImages()
    {
        return $this->orderBy('id', 'desc')->findAll();
    }
}