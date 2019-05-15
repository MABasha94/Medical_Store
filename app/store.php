<?php

namespace App;

//use Activity;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $guarded = [];

//    protected static function boot()
//    {
//        static::updating(function ($store) {
//            Activity::log("{$store->bprice} just updated to {$store->getOriginal('bprice')}");
//        });
//    }
}
