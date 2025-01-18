<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navigation extends Model
{
    /** @use HasFactory<\Database\Factories\NavigationFactory> */
    use HasFactory;

    protected $primaryKey = 'navigation_id';

    protected $fillable = [
        'name',
        'URL',
        'componentName'
    ];
}
