<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkms';

    protected $fillable = ['user_id','name', 'location', 'country','description', 'protocol', 'gov_protocol','image','umkm_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
