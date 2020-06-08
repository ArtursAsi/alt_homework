<?php

namespace App\Models;

class User
{
    private string $email;
    private int $amount;
    private ?int $id;


    public function __construct(string $email, int $amount, ?int $id)
    {
        $this->email = $email;
        $this->amount = $amount;
        $this->id = $id;

    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function getAmount(): int
    {
        return $this->amount;
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }


}