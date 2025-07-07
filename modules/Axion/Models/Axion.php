<?php

namespace Modules\Axion\Models;

use Velto\Core\Model\Model;
use Modules\Auth\Models\User;

class Axion extends Model
{
    protected string $table = 'axions';
    protected array $fillable = [
        'name',
        'description',
        'image',
        'user_id'
    ];

    protected array $searchable = [
        'name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}