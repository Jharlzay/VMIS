<?php

namespace App\Contracts\Vehicle;

interface VehicleInterface {

    public function getAllVehicles();

    public function create(array $data);
}
