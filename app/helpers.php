<?php

use Illuminate\Support\Facades\Session;

if(!function_exists('flash')) {
    function flash($msg, $type) {
        Session::flash('notification.msg', $msg);
        Session::flash('notification.type', $type);
    }
}