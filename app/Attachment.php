<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Attachment extends Model
{
    protected $table='fileattachment';

    protected $fillable=['filename','bytes','mime',];

    protected $hidden=['user_id','Article_id'];


    public function article()
    {
        return $this->belongsTo(Article::class);
    }


    /*public function getBytesAttribute($value)
    {
        return format_filesize($value);
    }*/

    /*public function getUrlAttribute()
    {
        return url('files/'.$this->filename);
    }*/
}
