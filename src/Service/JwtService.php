<?php
// src/Service/JwtService.php

namespace App\Service;

use Firebase\JWT\JWT;

class JwtService
{
    private string $jwtSecret;

    public function __construct(string $jwtSecret)
    {
        $this->jwtSecret = $jwtSecret;
    }

    public function generateToken(int $userId): string
    {
        $payload = [
            'id' => $userId,
            'exp' => time() + 3600, // token ważny przez godzinę
        ];

        return JWT::encode($payload, $this->jwtSecret, 'HS256');
    }
}
