<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model // we don't have to do much, a ton of functionallty is available trough Model
{
    //php artisan make:model  Post -m
    //Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
}
