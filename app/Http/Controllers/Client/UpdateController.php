<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\UpdateRequest;
use App\Models\Client;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Client $client): Client
    {
        $data = $request->validated();
        $client->update($data);
        return $client;
    }
}
