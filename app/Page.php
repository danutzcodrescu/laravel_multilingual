<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function translations() {
        return $this->hasMany(Translation::class);
    }
}
