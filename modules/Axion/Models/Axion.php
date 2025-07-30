<?php

namespace Modules\Axion\Models;

use Velto\Core\Model\Model;
use Modules\Auth\Models\User;

class Axion extends Model
{
    protected string $table = 'axions';
    protected array $fillable = [];

    protected array $searchable = [];

}