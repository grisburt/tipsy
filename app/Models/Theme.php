<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'color'];

    public function recipe(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }
}
