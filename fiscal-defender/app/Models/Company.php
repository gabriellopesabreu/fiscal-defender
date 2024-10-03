<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpj',
        'name', 
        'uf',
        'status',
        'certificate',
        'main'
    ];

    public function certificate() {
        return $this->belongsTo(Certificate::class);
    }

    public function automaticRoutine() {
        return $this->belongsTo(AutomaticRoutine::class);
    }
}
