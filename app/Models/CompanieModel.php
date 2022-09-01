<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanieModel extends Model
{
    protected $guarded = [];
    protected $table = 'companies';

    public function employeeModel()
    {
        return $this->hasOne(employeeModel::class, 'company');
    }
}
