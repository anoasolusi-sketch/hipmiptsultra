<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function getCoverImageAttribute()
    {
        if ($this->thumbnail) {
            return \Illuminate\Support\Facades\Storage::url($this->thumbnail);
        }

        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $this->content, $image);
        return $image['src'] ?? null;
    }
}
