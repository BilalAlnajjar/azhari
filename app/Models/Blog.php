<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class Blog extends Model
{
    use HasFactory;

    protected $fillable=['id','title','brief_details','details','status','main_image','created_at'];

    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublish($query)
    {
        return $query->where('status', '=',1);
    }
    public function getCreatedAtAttribute(){
        Carbon::setlocale("ar");
        return  \Carbon\Carbon::createFromTimeStamp(strtotime($this->attributes['created_at']))->diffForHumans();
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function getDateAttribute(){
        return  \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    }
    public function getStatusAttribute()
    {
       if(isset($this->attributes['status'])){
        return ($this->attributes['status']) ? 'published' : 'not published';
        }

    }
    public function getRealStatusAttribute(){
        if(isset($this->attributes['status'])){
            return $this->attributes['status'];
        }
    }
    public function getImageAttribute()
    {
        if (is_null($this->attributes['main_image'])) {
            x:return asset('assets/placeholder.png');
        }

        if (stripos($this->attributes['main_image'], 'http') === 0) {
            return $this->attributes['main_image'];
        }
//        if (!Storage::disk('uploads')->exists(asset('assets/admin/img/' . $this->attributes['main_image'])))
//            goto x;

        return asset('assets/admin/img/' . $this->attributes['main_image']);
    }



}
