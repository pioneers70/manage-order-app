<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\Client\ClientResource;
use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

class ShowController extends Controller
{
    public function __invoke(Client $client): ClientResource
    {
        return new ClientResource($client);
    }
}
