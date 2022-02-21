<?php

class PremiumCoffeeMachine extends BasicCoffeeMachine
{
    public function brewCoffee(string $selection) : string
    {
        return match ($selection) {
            'ESPRESSO' => $this->brewEspresso(),
            'VANILLA'  => $this->brewVanillaCoffee(),
            default    => throw new Exception('Selection not supported :('),
        };
    }

    protected function brewVanillaCoffee() : string
    {
        return 'Brew vanilla coffee..';
    }
}