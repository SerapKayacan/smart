<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceCategory extends Model
{
    use HasFactory, SoftDeletes;

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




}
