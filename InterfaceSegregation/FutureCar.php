<?php

class FutureCar implements CarInterface, AirplaneInterface {
    public function drive() : string
    {
        return 'Driving a car from the future';
    }

    public function fly() : string 
    {
        return 'Flying right from the future!';
    }
}