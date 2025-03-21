<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Oeuvredart()
{
    return $this->hasMany(Oeuvresdart::class);
}
}
