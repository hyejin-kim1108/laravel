<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function Attachments()
    {
        return $this->hasMany(Attachment::class);
    }
}
