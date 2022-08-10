<?php
class Student{
    // attributes
    public $name;
    public $contact;
    public $address;
    public $email;
    public $dob;

    // methods
    //here $this keyword is use to indicate that
    //the defined attributes belongs to Student Class
    public function getStudentDetails(){
        $this->name ="DAV";
        $this->contact = "+977-9813601698";
        $this->address = "Lalitpur";
        $this->email = "davcollege@edu.com.np";
        $this->dob = "2001-01-31";

        $data = [
            'name' => $this->name,
            'contact' => $this->contact,
            'address'=> $this->address,
            'email' => $this->email,
            'dob' => $this->dob
        ];
        return $data;
    }
}

//creating object of Student class
$std = new Student();
$std->getStudentDetails();
//print_r($std->getStudentDetails());//debugging ra value check garna lai matra ho print_r vanne use gareko
echo $std->name;
echo "<br>";
echo $std->contact;
echo "<br>";
//assigning values to attributes via object
$std->name="Melisha";
$std->contact="+977-981301698";
echo $std->name;
echo "<br>";
echo $std->contact;
?>