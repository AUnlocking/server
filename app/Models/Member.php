<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable
{
    use Notifiable;

    protected $table = 'gsm_members';
    protected $primaryKey = 'ID';

    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'Password',
        'Mobile',
        'MemberGroupID',
        'Status'
    ];

    protected $hidden = [
        'Password',
        'Token'
    ];

    // Laravel espera 'password' por defecto, así que lo mapeamos
    public function getAuthPassword()
    {
        return $this->Password;
    }
}
