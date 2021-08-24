<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $fillable=['id','title','text','url','status'];
    public function scopePublish($query)
    {
        return $query->where('status', '=',1);
    }
    public function getPathImageAttribute()
    {
        if (is_null($this->attributes['url'])) {
            x:return asset('assets/placeholder.png');
        }

        if (stripos($this->attributes['url'], 'http') === 0) {
            return $this->attributes['url'];
        }
//        if (!Storage::disk('uploads')->exists(asset('assets/admin/img/' . $this->attributes['url'])))
//            goto x;

        return asset('assets/admin/img/' . $this->attributes['url']);
    }
    public function getStatusAttribute()
    {
        if(isset($this->attributes['status'])){
            return ($this->attributes['status']) ? 'published' : 'not published';
        }

    }
    public function getDateAttribute(){
        return  \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    }

    public function getRealStatusAttribute(){
        if(isset($this->attributes['status'])){
            return $this->attributes['status'];
        }
        return $this->status;
    }
}
