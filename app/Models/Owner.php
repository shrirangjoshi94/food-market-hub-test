<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Owner extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string $fillable
     */
    protected $fillable = [
        'user_id',
        'main_owner',
    ];
}
