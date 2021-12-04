<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    use HasFactory;

    /** @var array PHONE_TYPES */
    const PHONE_TYPES = [
        'mobile',
        'home',
        'work',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string $fillable
     */
    protected $fillable = [
        'number',
        'phone_type',
    ];
}
