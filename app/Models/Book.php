<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    //memberikan akses yang bisa di lihat
    protected $visible = ['title', 'author_id', 'amount', 'cover'];
    //memberikan akses yang bisa di isi
    protected $fillable = ['title', 'author_id', 'amount', 'cover'];
    //mencatat waktu pembutan
    public $timestamps = true;

    public function author()
    {
        return $this->belongsTo('App\Models\Author', 'author_id');
    }
}
