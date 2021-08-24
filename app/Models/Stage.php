<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $fillable=['id','name','image','main_stage'];
    public function subjects(){
        return $this->belongsToMany(Subject::class,'stage_subject',);
    }
    public function getPathImageAttribute()
    {
        if ($this->image){
            if (is_null($this->attributes['image'])) {
                x:return asset('assets/placeholder.png');
            }

            if (stripos($this->attributes['image'], 'http') === 0) {
                return $this->attributes['image'];
            }
//        if (!Storage::disk('uploads')->exists(asset('assets/admin/img/' . $this->attributes['main_image'])))
//            goto x;

            return asset('assets/admin/img/' . $this->attributes['image']);
        }
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
}
