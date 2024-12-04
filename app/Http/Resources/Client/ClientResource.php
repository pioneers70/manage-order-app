<?php

namespace App\Http\Resources\Client;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'passport_number' => $this->passport_number,
            'passport_series' => $this->passport_series,
            'passport_issued' => $this->passport_issued,
            'address_registration' => $this->address_registration,
            'note' => $this->note,
        ];
    }
}
