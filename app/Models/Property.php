<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string $fillable
     */
    protected $fillable = [
        'address_id',
        'owners',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array $casts
     */
    protected $casts = [
        'owners' => 'array',
    ];
}
