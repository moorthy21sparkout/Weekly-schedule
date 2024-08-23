<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'from_date',
        'to_date',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
