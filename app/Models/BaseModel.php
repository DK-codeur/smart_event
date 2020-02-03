<?php

namespace App\Models;

use App\Models\Traits\Sluggable;
use App\Models\Traits\SlugRoute;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use SlugRoute;
    use Sluggable;
    
    protected $guarded = [];

    // public function getRouteKeyName() {
    //     return 'slug';
    // }

    protected static function boot() {
        parent::boot();

        // static::creating(function($event) {
        //     $event->slug = str_slug($event->title);
        // }); comment because it declare in App\Models\Traits\Sluggable

        static::deleting(function($event) {
            // dd('deleting product');
        });
    } 

  
}

