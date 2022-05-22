<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'newses';


    protected $guarded = [];

    public function author(){
        return $this->belongsTo(Author::class);
    }

}
