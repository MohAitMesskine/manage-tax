<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory;

    //Spatie Logs Activity
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logAttributesToIgnore = ['updated_at'];
    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;

    //Spatie MediaLibrary
    use InteractsWithMedia;
    public function registerMediaCollections(): void
    {
        $this
        ->addMediaCollection('products')
        ->singleFile()
        ->acceptsMimeTypes(
            [
                'image/jpeg',
                'image/gif',
                'image/png',
                'image/svg+xml',
                'image/webp'
            ]
        )->registerMediaConversions(function (Media $media) {
            $this
                ->addMediaConversion('thumb')
                ->format(Manipulations::FORMAT_WEBP)
                ->width(100)
                ->height(100);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class ,'category_id' ,'id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class ,'unit_id' ,'id');
    }

}
