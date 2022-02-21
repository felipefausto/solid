<?php

class Square implements IShape
{
    private float $length;

    public function __construct(float $length)
    {
        $this->length = $length;
    }

    public function area() : float
    {
        return pow($this->length, 2);
    }
}