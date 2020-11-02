<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    /**
     * Allowed Fillable Items
     * Allowed Roles Are
     * 1- ADMIN
     * 2- VIEW
     * 3- EDIT
     * 4- DELETE
     * 5- BROWSE
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'roles', 'key'
    ];

    protected $casts = [
        'roles' => 'array',
    ];
}
