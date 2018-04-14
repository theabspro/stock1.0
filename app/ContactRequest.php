<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model{
    
    protected $fillable = [
        'name',
        'subject',
        'email',
        'message',
    ];

}
