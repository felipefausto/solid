<?php

class BasicCoffeeMachine implements ICoffeeMachine
{
    public function brewCoffee(string $selection) : string
    {
        return match ($selection) {
            'ESPRESSO' => $this->brewEspresso(),
            default    => throw new Exception('Selection not supported'),
        };
    }

    protected function brewEspresso() : string
    {
        return 'Brew a espresso coffee';
    }
}