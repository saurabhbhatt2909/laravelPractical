<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\PlanFactory;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
                            'name',
                            'price'
                        ];

    public function plans(){
        return $this->belongsToMany(Plan::class);
    }
}
