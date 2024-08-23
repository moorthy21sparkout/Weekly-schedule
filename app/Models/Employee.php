<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_id',
        'employee_id',
        'employee_name',
    ];

    public function team()
    {
        return $this->belongsToMany(Team::class);
    }
}
