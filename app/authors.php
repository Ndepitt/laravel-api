<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class authors extends Model
{
    public function books()
    {
        return $this->hasMany(book::class, 'author_id');
    }
}
