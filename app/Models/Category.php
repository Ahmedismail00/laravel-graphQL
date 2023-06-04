<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * @var array<int,string>
     */
	protected $fillable = ['title'];

    /**
     * @var array<string,string>
     */
    protected $casts = [];

    // Relationships
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    // Helper Methods
}
