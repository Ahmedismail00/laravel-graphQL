<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * @var array<int,string>
     */
    protected $fillable = [
        'title', 'content','category_id'
    ];

    /**
     * @var array<string,string>
     */
    protected $casts = [];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Helper Methods
}
