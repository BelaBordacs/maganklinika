<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navigationRole extends Model
{
    /** @use HasFactory<\Database\Factories\NavigationRoleFactory> */
    use HasFactory;

    protected $primaryKey = 'navigationRole_id';

    protected $fillable = [
        'ranking',
        'parent',
        'role_id',
        'nav_id'
    ];
}
