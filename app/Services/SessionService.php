<?php

namespace App\Services;

use App\Models\User;

class SessionService{

    public function create(String $email, String $password){

        $credentials = array(
            'email' => $email,
            'password' => $password
        );

        $token = auth('api')->attempt($credentials);
        if (!$token) {
            throw new Exception('Credentials are invalid');
        }

        return $token;

    }
}
