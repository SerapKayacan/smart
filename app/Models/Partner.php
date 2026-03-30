<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Partner extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'sort_order',
        'is_active',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_MAX, 800, 600)
            ->nonQueued();
            
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_MAX, 400, 300)
            ->nonQueued();
    }
}
