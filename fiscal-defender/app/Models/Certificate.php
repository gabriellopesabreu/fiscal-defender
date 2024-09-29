<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = ['cnpj_id','due_date'];

    public function company() {
        return $this->hasMany(Company::class);
    }
}
