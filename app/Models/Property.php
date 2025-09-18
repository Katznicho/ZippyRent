<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Property extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'price',
        'location',
        'bedrooms',
        'bathrooms',
        'area',
        'images',
        'video_url',
        'video_path',
        'is_featured',
        'is_available',
        'views',
        'user_id',
    ];

    protected $casts = [
        'images' => 'array',
        'price' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_available' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getFormattedPriceAttribute(): string
    {
        return 'UGX ' . number_format($this->price, 0);
    }

    public function getMainImageAttribute(): ?string
    {
        return $this->images ? $this->images[0] : null;
    }

    /**
     * Increment the view count for this property
     */
    public function incrementViews(): void
    {
        $this->increment('views');
    }

    /**
     * Get the video URL (either uploaded video or external URL)
     */
    public function getVideoUrlAttribute(): ?string
    {
        if ($this->video_path) {
            return Storage::url($this->video_path);
        }
        
        return $this->attributes['video_url'] ?? null;
    }
}
