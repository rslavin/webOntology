<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $fillable = ['name', 'is_root'];

    public function relationships(){
        return $this->hasMany('App\Models\Relationship', 'rhs_id');
    }
}
