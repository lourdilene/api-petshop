<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Classification extends Model
{
    public $timestamps = false;
    protected $fillable = ['description'];

    public function pets(){
        return $this->hasMany(Pets::class);
    }
}
?>
