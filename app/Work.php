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
            if (strpos($this->photo_url, "default") !== false||strpos($this->photo_url, "http") !== false) {
                return $this->photo_url;
            } else {
                return asset('/storage/' . $this->photo_url);
            }
        }
    }
}
