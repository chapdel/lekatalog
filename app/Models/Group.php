<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Group extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function influencers()
    {
        return $this->hasMany(Influencer::class);
    }

    public function getAvatarAttribute()
    {

        return url(Storage::url($this->poster));
    }
}
