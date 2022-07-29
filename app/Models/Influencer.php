<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Influencer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function getAvatarAttribute()
    {

        return Storage::url($this->poster);
    }
}
