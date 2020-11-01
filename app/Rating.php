<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['user_id','umkm_id','comment', 'star'];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
