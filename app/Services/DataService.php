<?php

namespace App\Services;

class DataService
{
    public static function prepareData()
    {
        return [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '+1234567890',
            'address' => '123 Main St, Anytown, USA',
            'birthdate' => '1990-05-15',
            'gender' => 'Male',
        ];
    }
}
