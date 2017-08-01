<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $guarded = ['id'];

    public function rhs(){
        return $this->belongsTo('App\Models\Node', 'rhs_id');
    }

    public function lhs(){
        return $this->belongsTo('App\Models\Node', 'lhs_id');
    }

    public function relation(){
        return $this->belongsTo('App\Models\Relation');
    }
}
