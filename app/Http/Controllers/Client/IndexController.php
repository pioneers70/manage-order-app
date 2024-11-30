<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

class IndexController extends Controller
{
    public function __invoke(): Collection
    {
        return Client::all();
    }
}
