<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $appends = ['ImageUrl'];
    public $timestamps = false;
    protected $fillable = [
        'title', 'description', 'photo_url', 'live_url', '	credential'
    ];
    public function getImageUrlAttribute()
    {
        if ($this->photo_url == NULL) {
            return null;
        } else {
            return asset('/' . $this->photo_url);
        }
    }
}
