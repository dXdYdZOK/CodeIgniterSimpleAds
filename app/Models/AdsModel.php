<?php

namespace App\Models;

use CodeIgniter\Model;

class AdsModel extends Model
{
    protected $table      = 'ads';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['category_id', 'title', 'text'];

    protected $useTimestamps = false;
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    protected $validationRules    = [
		'category_id'     => 'required|integer|is_not_unique[categories.id,id,{category_id}]',
        'title'     => 'required|max_length[255]',
        'text' => 'required|max_length[65535]'];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}