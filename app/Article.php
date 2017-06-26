<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    // dates
    protected $dates = ['published_at'];

    // setFieldNameattribute
    // mutators
    public function setPublishedAtAttribute($date)
    {
        // set date to the current time when publishing
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
        //set date to 00 midnight
//        $this->attributes['published_at'] = Carbon::parse($date);
    }

    // scopes to manipulate quries
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags ()
    {
        return $this->belongsToMany('App\Tag');
    }



}
