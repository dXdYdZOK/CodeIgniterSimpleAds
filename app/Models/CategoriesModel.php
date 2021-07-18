<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $table      = 'categories';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['parent_id', 'name'];

    protected $useTimestamps = false;
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    protected $validationRules    = [
		'parent_id'     => 'required|integer|is_not_unique[categories.id,id,{parent_id}]',
        'name'     => 'required|max_length[255]'];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}