<?php

function getCoffeeMachine(User $user) : ICoffeeMachine
{
    return match ($user->getPlan()) {
            'PREMIUM' => new PremiumCoffeeMachine(),
            default   => new BasicCoffeeMachine(),
        };
}

function prepareCoffee(User $user, string $selection) : string
{
    $coffeeMachine = getCoffeeMachine($user);
    return $coffeeMachine->brewCoffee($selection);
}
