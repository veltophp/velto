<?php

namespace Modules\Auth\Models;

use Velto\Core\Model\Model;

class User extends Model
{
    protected string $table = 'users';
    protected array $fillable = [
        'name',
        'email',
        'password',
        'role',
        'email_verified'
    ];
}