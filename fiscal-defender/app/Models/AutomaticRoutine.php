<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutomaticRoutine extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpj_id', 
        'document', 
        'hour'
    ];

    public function company() {
        return $this->hasMany(Company::class);
    }
}
