<?php

/**
 * Practicing the basics by going through phpenthusiast's articles:
 * https://phpenthusiast.com/object-oriented-php-tutorials
 * @author shawnbaptista
 **/

class Car {
  // Company name
  public $comp;
  // Color of vehicle
  // Default is 'rusty' because if you don't set a color, you deserve to have a rusty bucket
  public $color = 'rusty';
  // Does the car have power windows?
  public $hasPowerWindows = true;

  // Creating more variables for settings values of describing the car
  public $tank;
  public $model;

  public function getModel()
  {
    return "Car model: " . $this->model . ".\n";
  }

  // Add gallons of fuel to the tank when we fill it.
  public function fill($float)
  {
    $this->tank += $float;

    return $this;
  }

  public function honk()
  {
    return "'Beep boop -- move over', says the " .
      $this->color .
      " " .
      $this->comp .
      ".\n";
  }

  public function drive($float)
  {
    $miles = $float;
    $gallons = $miles/50;
    $this->tank -= ($gallons);

    return $this;
  }
}

// Instantiate new Cars
$mazda = new Car ();
$bmw = new Car ();

// Set the values
$mazda->color = 'blue';
$bmw->color = 'white';
$mazda->comp = 'Mazda';
$bmw->comp = 'BMW';

echo "Color: " . $bmw->color . "\n";

// Set the model of the Mazda and honk at someone
$mazda->model = "CX-5";
echo $mazda->getModel();
echo $mazda->honk();

// Drive the Mazda around for a set amount of miles, as set by the 'drive' variable
$drive = 15;
echo "You drive for " . $drive . " miles.\n";
$tank = $mazda->fill(10)->drive($drive)->tank;
echo "Current gallons until empty: " . $tank;
echo "\n\n";
