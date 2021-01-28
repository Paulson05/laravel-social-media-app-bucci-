<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $fillable = [
            'body'
    ];

    public function user()
    {
       return $this->belongsTo('App\Models\Users',  'user_id');
    }
}
