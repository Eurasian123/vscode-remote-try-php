<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestsModel extends Model
{
    protected $table = 'feedbackers';
	
	protected $allowedFields = ['name', 'email', 'gender', 'website', 'comment'];

    public function guestList()
    {
        return $this->findAll();
    }
}