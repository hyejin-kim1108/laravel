<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Attachment;

class Article extends Model
{
    protected $table='Article';
    protected $fillable=['user_id','Article_Title','Article_text','filename','bytes','mime'];
    protected $hidden=['Article_id','Article_Category'];
    //Article_Category 는 카테고리가 생길 때 까진 히든으로 설정ㄹ

    public function id()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
