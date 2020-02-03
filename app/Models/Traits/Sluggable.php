<?php

namespace App\Models\Traits;

trait Sluggable {
    protected static function bootSluggable() {
        // parent::boot(); => comment because is call in other file which already use it. also the name is'nt boot but boot<Sluggable>

        static::creating(function($event) {
            $event->slug = str_slug($event->title);
        });
    } 
}