<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['comment', 'star'];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
