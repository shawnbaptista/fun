<?php

/**
 * Constructors and magic constants
 **/

class Car {
   // The $model property has a default value of "N/A"
   private $model = "N/A";

   // We do not have to assign a value to the $model property
       // since it already has a default value.
       // Otherwise, a warning would appear saying "Missing argument"
   // A constructor method.
   public function __construct($model = null)
   {
     // Only if the model value is passed will it be assigned
     if($model)
     {
       $this->model = $model;
     }
   }

   public function getCarModel()
   {
     return "The " . __CLASS__ . " model is: " . $this->model;
   }
}

$car1 = new Car();

echo $car1->getCarModel();
echo "\n";

$car2 = new Car("BMW");

echo $car2->getCarModel();
echo "\n";

if ($car1 != '')
{
  echo "\$car1 has value on line" . __LINE__ . " of [" . __FILE__ . "]\n";
  var_dump($car1);
}
