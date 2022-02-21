<?php

class Calculator
{
    protected array $shapes;

    public function __construct(array $shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum() : float
    {
        $area = [];

        foreach ($this->shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}