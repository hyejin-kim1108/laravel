<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fileable=['filename','bytes','mime'];
    protected $hidden = [
        'id', 'Article_id', 'create_at', 'update_at'
    ];


    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
