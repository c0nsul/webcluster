<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iso2',
        'iso3',
        'name',
    ];

    public function cluster(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Cluster');
    }
}
