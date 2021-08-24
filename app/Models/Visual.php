<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visual extends Model
{
    use HasFactory;
    protected $fillable=['id','title','brief_details','link','status'];

    public function getStatusAttribute()
    {
        if(isset($this->attributes['status'])){
            return ($this->attributes['status']) ? 'published' : 'not published';
        }

    }
    public function getThumbnailAttribute(){
        $link=$this->attributes['link'];
        $id=substr($link,stripos($link,'?v=')+3);

        if (strpos($id,'&'))
        $id=substr($id,0,strpos($id,'&',0));


        return 'https://img.youtube.com/vi/'.$id.'/1.jpg';
    }
    public function getRealStatusAttribute(){
        if(isset($this->attributes['status'])){
            return $this->attributes['status'];
        }
    }
}
