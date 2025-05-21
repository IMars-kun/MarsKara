<?php

use App\Models\picture;

function get_picture(){
    $data = picture::all();
    return $data;
}