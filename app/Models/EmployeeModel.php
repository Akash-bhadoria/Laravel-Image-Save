<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    protected $guarded = [];
    protected $table = 'employees';

    public function CompanyModel()
    {
        return $this->belongsTo(CompanieModel::class, 'id');
    }
}
