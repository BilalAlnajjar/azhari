<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=['id','name','plane','image'];
    protected $appends=[
        'pdf'
    ];
    public function stages(){
        return $this->belongsToMany(Stage::class,'stage_subject','subject_id','stage_id');
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
        if (Storage::disk('uploads')->exists(asset('assets/admin/img/' . $this->attributes['image'])))
            goto x;

            return asset('assets/admin/img/' . $this->attributes['image']);
        }
         goto x;
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
    public function getPdfAttribute()
    {
        if ($this->plane){
            if (is_null($this->attributes['plane'])) {
                x:return asset('assets/placeholder.png');
            }

            if (stripos($this->attributes['plane'], 'http') === 0) {
                return $this->attributes['plane'];
            }
//        if (!Storage::disk('uploads')->exists(asset('assets/admin/img/' . $this->attributes['main_image'])))
//            goto x;

            return asset('assets/admin/img/' . $this->attributes['plane']);
        }
    }
}
