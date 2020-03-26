<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Attachment extends Model
{
    protected $table='fileattachment';

    protected $fillable=['Article_id','Article_text','filename','bytes','mime',];

    protected $hidden=['user_id'];


    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function file()
    {
        return $this->belongsTo('App\User','user_id');
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
