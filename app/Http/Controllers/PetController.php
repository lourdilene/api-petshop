<?php

namespace App\http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Pet;

class PetController extends BaseController
{
    public function __construct()
    {
        $this->classe = Pet::class;
    }
}
