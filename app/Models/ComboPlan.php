<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComboPlan extends Model
{
    use HasFactory;

    protected $fillable = [
                            'name',
                            'price',
                            'related_plans'
                        ];

    public function plans(){
        return $this->hasMany(Plan::class, 'id','related_plans');
    }
}
