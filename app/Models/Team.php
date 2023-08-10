<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','image','city', 'user_id'];

    public function scopeFilter($query, array $filters){

        if(isset($filters['search'])){
            $query->where('name', 'like', '%' . request('search') . '%');
        }
    }

    //Relationship to User
   public function user(){
        return $this->belongsTo(User::class, 'user_id');
   }



}
