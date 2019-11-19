<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Todo
 * @package App\Models
 */
class Todo extends Model
{

    protected $table = 'todo';

    protected $fillable = [
        'title',
        'completed'
    ];

    protected $casts = [
        'completed' => 'bool'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
