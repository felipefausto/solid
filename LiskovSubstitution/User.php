<?php

class User
{
    private string $plan;

    public function __construct(string $plan)
    {
        $this->plan = $plan;
    }

    public function getPlan() : string
    {
        return $this->plan;
    }
}