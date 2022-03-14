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

        foreach($this->shapes as $shape) {
            if ($shape instanceof Square) {
                $area[] = pow($shape->length, 2);
            }

            if ($shape instanceof Rectangle) {
                $area[] = $shape->width * $shape->height;
            }
        }

        return array_sum($area);
    }
}