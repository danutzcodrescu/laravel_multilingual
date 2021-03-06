<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model {
    
    protected $fillable=['lang', 'body'];
    
    public function pages() {
        return $this->belongsTo(Page::class);
    }
}
