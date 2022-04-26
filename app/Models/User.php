<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasRoles;



    //Spatie Logs Activity
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logAttributesToIgnore = ['password', 'remember_token', 'updated_at'];
    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;

    //Spatie MediaLibrary
    use InteractsWithMedia;
    public function registerMediaCollections(): void
    {
        $this
        ->addMediaCollection('avatars')
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


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function get_roles()
    {
        $roles = [];
        foreach ($this->getRoleNames() as $key => $role) {
            $roles[$key] = $role;
        }

        return $roles;
    }}
