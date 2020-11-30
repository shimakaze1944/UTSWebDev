<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bean extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'bean_name',
        'bean_type',
        'origin',

    ];

    public function notes() {
        return $this->hasMany(note::class, 'bean_id', 'id');
    }
}
