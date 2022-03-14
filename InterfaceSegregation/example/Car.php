<?php

class Car implements VehicleInterface {
    public function drive() : string 
    {
        return 'Driving a car';
    }

    public function fly () : string 
    {
        throw new Exception('Not implemented method');
    }
}