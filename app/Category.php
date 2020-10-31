<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function umkms()
    {
        return $this->hasMany(Umkm::class);
    }
}
