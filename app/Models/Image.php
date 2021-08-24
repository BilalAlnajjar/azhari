<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function imageable()

    {
        return $this->morphTo();
    }

    public function getPathImageAttribute()
    {
        if (is_null($this->attributes['url'])) {
            x:return asset('assets/placeholder.png');
        }

        if (stripos($this->attributes['url'], 'http') === 0) {
            return $this->attributes['url'];
        }
//        if (!Storage::disk('uploads')->exists(asset('assets/admin/img/' . $this->attributes['main_image'])))
//            goto x;

        return asset('assets/admin/img/' . $this->attributes['url']);
    }

}
