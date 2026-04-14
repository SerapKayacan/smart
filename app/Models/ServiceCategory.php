<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ServiceCategory extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'sort_order',
        'is_active'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'service_category_tags');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_MAX, 1200, 600);

        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_MAX, 400, 300);
    }
}
