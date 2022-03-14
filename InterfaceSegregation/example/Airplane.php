<?php

class Airplane implements VehicleInterface {
    public function drive() : string 
    {
        throw new Exception('Not implemented method');
    }

    public function fly() : string 
    {
        return 'Flying an airplane';
    }
}