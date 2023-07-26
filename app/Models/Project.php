<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'difficulty',

        'type_id'
    ];

    public function type() {

        return $this -> belongsTo(Type :: class);
    }

    public function technologies(){
        return $this->belongsToMany('App\Models\Technology');
    }
}
