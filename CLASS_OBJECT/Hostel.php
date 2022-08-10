<?php
class Hostel{
      // attributes
        public $title;
        public $capacity;
        public $address;
        public $contact;
        public $description;

      //constructor
      //__constructor() ->function is used as constructor in php
      //double underscore before construct() method name
      public function __construct(){
        $this->title = "Lalitpur Girls Hostel";
        $this->capacity = 200;
        $this->address = "Lalitpur";
        $this->contact = "01-12-2001";
        $this->description = "Best Hostel you will find";
      }

      //method
      public function getHostelDetails(){
          return "Title : ".$this->title."
          Description : ".$this->description;
      }
}
$hos = new Hostel();
echo $hos->title;
echo "<br>";
echo $hos->getHostelDetails();
// naming convention
// class name : Pascal Case eg: AddressOfNepal, Address
// variable/attributes: snake case or lowercase
// eg: num_of_student, name
// function/method name: camel case
//eg: showDetails(), getAddress()
?>