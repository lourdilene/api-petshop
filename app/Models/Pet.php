<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Pet extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','age','breed'];

    public function owner()
    {
        return $this->belognsTo(Owner::class);
    }

    public function classification()
    {
        return $this->belognsTo(Classification::class);
    }
}
?>


