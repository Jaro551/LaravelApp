<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /** 
    * @var string
    */
    protected $table = "products";

    /** 
    * @var bool
    */
    public $timestamps = false;

    /** 
    * @var array
    */
    protected $fillable = [
        'name',
        'description',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
