<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'location',
    ];

    public function getName(){
        if($this->first_name && $this->last_name){
            return "{$this->first_name} {$this->last_name}";
        }

        if($this->first_name){
            return $this->first_name;
        }

        return null;
    }

    public function getNameOrUsename(){
        return $this->getName() ?: $this->username;
    }
     
    public function getFirstNameOrUsename(){
        return $this->first_name ?: $this->username;
    }

    public function getAvatarUrl(){
        return "https://www.gravatar.com/avatar/{{md5(this->email)}}?d=mm&s=40

        ";
    }
}
