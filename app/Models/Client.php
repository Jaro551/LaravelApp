<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /** 
    * @var string
    */
    protected $table = "clients";

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
