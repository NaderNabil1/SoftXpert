<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'title',
        'description',
        'manager',
        'user',
        'file',
        'status',
    ];

    public function Manager(){
        return $this->belongsTo(User::class, 'manager');
    }
    public function User(){
        return $this->belongsTo(User::class, 'user');
    }
}