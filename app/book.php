<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function author()
    {
        return $this->belongsTo(authors::class, 'author_id');
    }
}
