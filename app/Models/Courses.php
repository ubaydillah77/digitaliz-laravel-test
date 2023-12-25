<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
            -> orWhere('description', 'like', '%' . request('search') . '%');
            
        }
    }

    public function materials()
    {
        return $this->hasMany(Materials::class, 'course_id');
    }
}
