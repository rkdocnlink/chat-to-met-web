<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactList extends Model
{
    use HasFactory;
    public function getContactDetails(){
        return $this->hasOne(User::class,'id','user_id_2');
    }

    public function getContactRequest(){
        return $this->hasOne(User::class,'id','user_id_1');
    }
}
