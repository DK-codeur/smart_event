<?php 

namespace App\Models\Traits;

trait SlugRoute{
   public function getRouteKeyName() {
      return 'slug';
   }
}