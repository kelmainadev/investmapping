<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $table = 'inquiries';

    public function clients(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
