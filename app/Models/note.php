<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'bean_id',
        'body_level',
        'cupping_note',
        'acidity_level',
        'aftertaste',
    ];

    public function bean() {
        return $this->belongsTo(bean::class, 'bean_id', 'id');
    }
}
