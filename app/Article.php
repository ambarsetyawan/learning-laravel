<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

    public function scopePublished($query) {

        return $query->where('published_at', '<=', Carbon::now());

    }

    public function scopeUnpublished($query) {

        return $query->where('published_at', '>=', Carbon::now());

    }

	protected $fillable = [
        'title',
        'body',
        'published_at'
    ];


}
