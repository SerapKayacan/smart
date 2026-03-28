<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Reference extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'name',
        'location',
        'category',
        'description',
        'sort_order',
        'is_active',
    ];

    public static function categories(): array
    {
        return [
            'security' => 'Güvenlik',
            'cleaning' => 'Temizlik',
        ];
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_MAX, 800, 600);

        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_MAX, 400, 300);
    }
}
