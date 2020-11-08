<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'your_email',
        'your_name',
        'your_message'
    ];
}
