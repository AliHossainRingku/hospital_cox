<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    protected $fillable = ['news_title', 'news_description', 'news_link', 'publication_status'];

}
