<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $guarded = false;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'passport_number',
        'passport_series',
        'passport_issued',
        'address_registration',
        'note', ];

    /*    public function setPhoneAttribute($value): void
        {
            if (str_starts_with($value, '8')) {
                $value = '+7'.substr($value, 1);
            }
            $this->attributes['phone'] = $value;
        }*/
}
