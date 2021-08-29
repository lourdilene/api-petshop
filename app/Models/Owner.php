<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Owner extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','telephone'];

    public function pets(){
        return $this->hasMany(Pets::class);
    }
}
?>


