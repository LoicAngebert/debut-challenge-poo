<?php

class Car {
    public $numberOfWheels = 4;
    public $currentSpeed = 0;
    public $color;
    public $numberOfSeats;
    public $energyType;
    public $currentFuelLevel;

    public function __construct($color, $numberOfSeats, $energyType) {
        $this->color = $color;
        $this->numberOfSeats = $numberOfSeats;
        $this->energyType = $energyType;
        $this->currentFuelLevel = 100;
    }

    public function start() {
        echo "The car has started.\n";
    }

    public function accelerate($speed) {
        $this->currentSpeed += $speed;
        echo "The car is now going at $this->currentSpeed km/h.\n";
    }

    public function brake() {
        $this->currentSpeed = 0;
        echo "The car has come to a stop.\n";
    }

    public function getNumberOfWheels() {
        return $this->numberOfWheels;
    }

    public function getCurrentSpeed() {
        return $this->currentSpeed;
    }

    public function getColor() {
        return $this->color;
    }

    public function getNumberOfSeats() {
        return $this->numberOfSeats;
    }

    public function getEnergyType() {
        return $this->energyType;
    }

    public function getCurrentFuelLevel() {
        return $this->currentFuelLevel;
    }
}
























?>