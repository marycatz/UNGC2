<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';

    protected $fillable = ['company_name', 'company_ssm', 'company_ssm_file_name','company_ssm_file_path','company_state','company_industry'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
